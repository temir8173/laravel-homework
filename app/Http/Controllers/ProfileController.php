<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class ProfileController extends Controller
{
    public function index($id)
    {
        $company = Companies::find($id);
        //var_dump($company);die;
        /*foreach ($companies as $flight) {
            echo $flight->employees;
        } die;*/
        return view('profile.index', compact('company'));
    }
}
