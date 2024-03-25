<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SermonsController extends Controller
{
    public function index(){

        return view('sermons');
    }

}
