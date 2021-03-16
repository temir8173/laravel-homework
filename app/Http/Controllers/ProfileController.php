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
    public function updateImage(Request $request)
    {

    	$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);

        $company = Companies::find($request->input('id'));
        $company->logo = $imageName;
        $company->save();
        
   
        return back()
            ->with('success','Картинка успешно загружена');
    }
    public function updateInfo(Request $request)
    {	

        $company = Companies::find($request->input('id'));
        $company->description = $request->input('description');
        $company->save();
        
   
        return back();
    }
}
