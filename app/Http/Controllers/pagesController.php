<?php

namespace App\Http\Controllers;

class pagesController extends Controller {

    public function getHome() {
        return view('home');
    }

    public function getJobPortal() {
        return view('dashboard.jobPost');
    }
}