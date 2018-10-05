<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\JobPortal;


class JobController extends Controller 
{

    public function postJobDesc(Request $request) 
    {
        $new = new JobPortal;
        $this->validate($request, [
            'email' => 'required|email|max:255|unique:users',
            'jTitle' => 'required|min:2',
            'jDetails' => 'required',
            'skillSet' => 'required'
        ]);

        JobPortal::create($request->all());    

        
        $data = array(
            'email' => $request->email,
            'jTitle' => $request->jTitle
        );
        Mail::send('emails.send', $data, function($message) use ($data) {
            // $message->from('sdfdsf@gmail.com');
            $message->to($data['email']);
        });

        return redirect()->route('home');
        
        // $data => array()    
    }

    public function searchJob() 
    {
        return view('pages.jobSearch');
    }
}