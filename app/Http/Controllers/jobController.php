<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class jobController extends Controller 
{

    public function postJobDesc(Request $request) 
    {
        $this->validate($request, [
            'email' => 'required|email|max:255|unique:users'
            // 'jTitle' => 'required|min:10',
            // 'jDetails' => 'required',
            // 'skillSet' => 'required'
        ]);
        
        $data = array(
            'email' => $request->email,
            'jTitle' => $request->jTitle
        );
        Mail::send('emails.send', $data, function($message) use ($data) {
            $message->from('sdfdsf@gmail.com');
            $message->to($data['email']);
        });
        return view('pages.home');
        
        // $data => array()    
    }

    public function searchJob() 
    {
        return view('jobSearch');
    }
}