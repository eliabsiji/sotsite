<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){

        return view('gallery');
    }

    public function video(){

        return view('video');
    }
}
