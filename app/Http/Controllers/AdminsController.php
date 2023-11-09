<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Session;

class AdminsController extends Controller
{
    public function index()
    {
        return view('frontend/user');
    }
    public function login()
    {
        return view('login');
    }
    public function submit_login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $checkAdmin=Employee::where(['name'=>$request->name,'password'=>$request->password])->count();
        if($checkAdmin>0){

            session(['userLogin',true]);

            // $data=$request->input();
            // $request->session()->put('user',$data['name']);
            $employee = new Employee;
            Session::put('name',$employee->name);
            return redirect('frontend/user');
           
            // session_start();
            // session()->$request->name;
        }
        else{
            return redirect('user/login')->with('msg','Ivalid Username/Password');
        }
    }

    //Profile

    // public function profile(Employee $employee)
    // {
    //     return view('frontend/profile',compact('employee'));
    // }
    // public function userProfile(Request $request){
      
    //         if (Employee::where(['name'=>$request->name,'password'=>$request->password])) {
    //             /** get session */
    //             $employee= new Employee;
    //             return view('frontend.profile',compact('employee'));
    //            Session::put('name',$employee->name);
               
    //         }
    //     }



    public function logout()
    {
        session()->forget('userLogin');
        return redirect('user/login');
    }
}
