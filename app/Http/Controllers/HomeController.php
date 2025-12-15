<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home.index");
    }

    public function blog(){
        return view("home.blog");
    }

     public function category(){
        return view("home.category");
    }
     public function about(){
        return view("home.about");
    }
       public function contact(){
        return view("home.contact");
    }
}
