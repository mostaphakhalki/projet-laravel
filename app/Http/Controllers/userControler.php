<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControler extends Controller
{
    //
    public function index()
    {
        // Sample static data
        $responseData = [
            ['id' => 1, 'nom' => 'Doe', 'prenom' => 'John', 'tele' => '123-456-7890'],
            ['id' => 2, 'nom' => 'Smith', 'prenom' => 'Jane', 'tele' => '098-765-4321'],
            ['id' => 3, 'nom' => 'Brown', 'prenom' => 'Bob', 'tele' => '555-555-5555'],
            // Add more users as needed
        ];

        // Pass data to the view
        return view('home', compact('responseData'));
    }
}



