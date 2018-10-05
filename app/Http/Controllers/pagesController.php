<?php

namespace App\Http\Controllers;

class pagesController extends Controller {

    public function getHome() {
        return view('pages.home');
    }

    public function getJobPortal() {
        return view('pages.jobPost');
    }
}