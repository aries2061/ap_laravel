<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $data = Post::orderBy('id','desc')->get();
        return view('home',compact('data'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
