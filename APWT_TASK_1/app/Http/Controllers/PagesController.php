<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        public function index(){
            return view('index');
        }
        public function service(){
        return view('service');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function ourteam(){
        return view('ourteam');
    }
}