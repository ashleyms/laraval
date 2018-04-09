<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Home
    public function index(){
        return view('index');
    }

    //About
    public function about(){
        return view('about');
    }

    //Portfolio
    public function portfolio(){
        return view('portfolio');
    }

    //Graphics
    public function graphics(){
        return view('graphics');
    }

    //Contact
    public function contact(){
        return view('contact');
    }

}
