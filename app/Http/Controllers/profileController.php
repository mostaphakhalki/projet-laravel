<?php

namespace App\Http\Controllers;

use App\Models\Profile;  // Correct model import
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class profileController extends Controller
{
    //
    public function index()
    {
        // Retrieve all profile data using the correct Profile model
        $profileData = Profile::paginate(10);

        // Pass data to the view
        return view('profile.profiles', compact('profileData'));
    }


    public function show(Request $request )
    {
       
        $id = $request -> id;
        $profile = Profile::findOrFail($id);
        // dd($profile);
        return view('profile.detail-profile',compact('profile'));
    }

}
