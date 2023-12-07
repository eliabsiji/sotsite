<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        return view('about');
    }

    public function team1(){

        return view('team1-details');
    }

    public function team2(){

        return view('team2-details');
    }
}
