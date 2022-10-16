<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginValidate(Request $request)
    {
            $request->validate(
            [
                'id'=>'required',
                'password'=>'required',
            ]);
        }
    public function reg()
    {
        return view('registration');
    }
    public function regValidate(Request $request)
    {
            $request->validate(
            [
                'name'=>'required',
                'id'=>'required',
                'password'=>'required',
                'cpassword'=>'required_with:cpassword|same:cpassword',
                'gender'=>'required',
                'email'=>'required|email',
                'contact'=>'required',
                'dob'=>'required',
            ]);
        }
    public function contact()
    {
        return view('contact');
    }
    public function contactValidate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'text' => 'required',
        ]);

        return redirect('/contact');
    }
}