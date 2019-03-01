<?php

namespace App\Http\Controllers;
use App\JobPortal;
class PagesController extends Controller {

    // This method retrieves the table data as specified by the model object.
    public function getHome() 
    {
        $table = JobPortal::orderBy('id', 'asc')->paginate(5);
        return view('pages.home', compact('table'));
    }

    // Redirects to the page called jobpost of view directory.
    public function getJobPortal() 
    {
        return view('pages.jobPost');
    }

    //Redirects to the page as specified by view method.
    public function searchJob() 
    {
        return view('pages.jobSearch');
    }
}