<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home.home');
    }

    public function blog(){
        return view('frontend.blog.index');
    }

    public function singleBlog(){
        return view('frontend.blog.blog-details');
    }

    public function about(){
        return view('frontend.about.index');
    }

    public function contact(){
        return view('frontend.contact.index');
    }
}
