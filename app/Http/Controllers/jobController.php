<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Mail;
use App\JobPortal;
use View;


class JobController extends Controller 
{

    public function postJobDesc(Request $request) 
    {
        // $email = $request->email;
        // $user = str_before($email, '@');
        // $uID = str_limit($enc, 10);
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $pin = mt_rand(1000000, 9999999)
        . mt_rand(1000000, 9999999)
        . $characters[rand(0, strlen($characters) - 1)];

        $string = str_shuffle($pin);
        $new = new JobPortal;

        $this->validate($request, [
            'email' => 'required|email|max:255|unique:users',
            'jTitle' => 'required|min:2',
            'jDetails' => 'required',
            'skillSet' => 'required' 
        ],
        [
            'skillSet.required' => 'Skill set must be included.'

        ]);

        $new->email = $request->email;
        $new->jTitle = $request->jTitle;
        $new->jDetails = $request->jDetails;
        $new->skillSet = $request->skillSet;
        $new->uID = $string;
        $new->save(); 

        
        $data = array(
            'email' => $request->email,
            'jTitle' => $request->jTitle,
            'uID' => $string
        );
        Mail::send('emails.send', $data, function($message) use ($data) {
            // $message->from('sdfdsf@gmail.com');
            $message->to($data['email']);
        });

        return redirect()->route('home');
        
        // $data => array()    
    }

    public function auth($id, Request $request)
    {
        if($request->edit == "edit"){
            $table = JobPortal::findorFail($id);
            return view('pages.auth.edit', compact('table'));
        }
        else {
            $table = JobPortal::findorFail($id);
            return view('pages.auth.delete', compact('table'));
        }
    }

    public function edit($id, Request $request) 
    {
        $table = JobPortal::find($id);

        if($table->uID == $request->id) {
            return view('pages.edit', compact('table'));
        }
        else {
            return redirect()->route('pages.home');
        }
        
    }

    public function update(Request $request, $id) 
    {
            $table = JobPortal::find($id);
            $table->jTitle = $request->jTitle;
            $table->jDetails = $request->jDetails;
            $table->skillSet = $request->skillSet;
            $table->save();
            return redirect()->route('home');
        

    }

    
    public function destroy(Request $request, $id)
    {
        $table = JobPortal::findorFail($id);
        if($table->uID == $request->id) {
            $table = JobPortal::findorFail($id)->delete();
            return redirect()->route('home')->with("success", "Job deleted");
        }
        else {
            return redirect()->route('home')->with("error", "Invalid unique ID");
        }
       
        
    }


    public function search(Request $request)
    { 
        $search = $request->search;
        $results = JobPortal::where('email', $request->search)->orWhere('jTitle', 'LIKE', '%' . $request->search . '%')->orWhere('jDetails', 'LIKE', '%' . $request->search . '%')->get();
        // return view('pages.home', compact('results'));
        if (count($results) > 0) {
            return view('pages.jobSearch', compact('results'));
        }
        else {
            return redirect()->route('home');
        }
    }
}