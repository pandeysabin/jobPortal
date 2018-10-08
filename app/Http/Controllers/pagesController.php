<?php

namespace App\Http\Controllers;
use App\JobPortal;
class pagesController extends Controller {

    public function getHome() {
        $table = JobPortal::orderBy('id', 'asc')->get();
        return view('pages.home', compact('table'));
    }

    public function getJobPortal() {
        return view('pages.jobPost');
    }

    public function searchJob() 
    {
        return view('pages.jobSearch');
    }
}