<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //action
    public function index(Request $request){
        return view('home');
    }
}
