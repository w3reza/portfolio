<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class protfolioController extends Controller
{
    public function index(){
        return view('frontend.pages.home');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function projects(){
        return view('frontend.pages.projects');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
}
