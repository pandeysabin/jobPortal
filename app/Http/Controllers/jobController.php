<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class jobController extends Controller {

    public function postJobDesc(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'jTitle' => 'required|min:10'
        ]); 
        if(Auth::attempt(['email' => $request['email'], 'jTitle' => $request['jTitle']])) {
            return redirect()->route('confirm');
        }
        else {
            return "Please enter the data.";
        }
        
    }

    public function searchJob() {
        return view('jobSearch');
    }
}