<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home0226');
    }
 
    public function artikel(){
        return view('artikel0226');
    }

    public function contact(){
        return view('contact0226');
    }
}
