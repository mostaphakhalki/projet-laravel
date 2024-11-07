<?php

namespace App\Http\Controllers;

use App\Models\Profile;  // Correct model import
use GuzzleHttp\Promise\Create;
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


    public function show(int $id)
    {

        $profile = Profile::find($id);
        // dd($profile);
        return view('profile.detail-profile', compact('profile'));
    }


    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {

        // $name = $request->name;
        // $email = $request->email;
        // $bio = $request->description;
        // $password = $request->password;

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'bio' => 'required',
            'password' => 'required'

        ]);

        // ================= Create
        // Profile::create([
        //     'name' => $name,
        //     'email' => $email,
        //     'bio' => $bio,
        //     'password' => $password,
        // ]);

        // ================= Create methode 2 
                Profile::create($request -> post());

        // dd($request);
        return redirect()->route('profiles.index') -> with('success', 'Votre compte est bien créé');
    }
}
