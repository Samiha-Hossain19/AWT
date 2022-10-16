<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cutomer;

class CustomerController extends Controller
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

            return redirect('/contact');
        }
    public function reg()
    {
        return view('registration');
    }
    public function regValidate(Request $request)
    {
            $request->validate(
            [
                
                'id'=>'required',
                'uname'=>'required',
                'password'=>'required',
                'cpassword'=>'required_with:cpassword|same:cpassword',
                'gender'=>'required',
                'email'=>'required|email',
                'dob'=>'required',
                'contact'=>'required',
                
            ]);
            return redirect('/login');
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