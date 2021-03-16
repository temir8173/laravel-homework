<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Companies;

class SiteController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $companies = Companies::with('employees')->get();
        //var_dump($companies);die;
        /*foreach ($companies as $flight) {
            echo $flight->employees;
        } die;*/
        return view('site.index', compact('companies'));
    }
}