<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;

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
            $customer = Customer::where('id', '=', $request->id)->where('password', '=', $request->password)->first();
            if (!$customer)
            {
                return back()
                ->withErrors(['Incorrect Id or Password']);
            }
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
        $customer = new Customer();
        $customer->id = $request->id;
        $customer->uname = $request->uname;
        $customer->password = $request->password;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->dob = $request->dob;
        $customer->contact = $request->contact;

        $customer->save();
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