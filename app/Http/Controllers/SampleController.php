<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SampleController extends Controller
{
   
    function index(){
        return view('login');
    }
    function validate_login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $credencials = $request->only('name', 'password');
        if(Auth::attempt($credencials)){
            return redirect('backend/admin');
        }
       return redirect('login')->with('success','Login details are not valid');

    }
    function admin(){
        if(Auth::check()){
            return view('backend/admin');
        }
        return redirect('login')->with('success','You are not allowed to access');
    }
   
    function logout(){
        Session::flush();

        Auth::logout();

        return redirect('user/login');
    }
}
