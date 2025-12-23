<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $category = Category::all();
        return view("home.category", compact('category'));
    }
     public function about(){
        return view("home.about");
    }
       public function contact(){
        return view("home.contact");
    }
}
