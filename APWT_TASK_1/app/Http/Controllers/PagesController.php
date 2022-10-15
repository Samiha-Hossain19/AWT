<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        public function index(){
            $student=['Samiha Hossain','20-42435-1','APWT','CSE'];
            return view('index')->with('s',$student);
        }
        public function service(){
            $services=['Patient Appointment','Doctor Consultation','Doctor Details'];
            return view('service')->with('ser',$services);
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