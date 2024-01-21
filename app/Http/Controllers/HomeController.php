<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }

    public function faq()
    {
        return view('home.faq');
    }

    public function gallery()
    {
        return view('home.gallery');
    }

    public function about()
    {
        return view('home.about');
    }

    public function popular()
    {
        return view('home.popular');
    }
    
}