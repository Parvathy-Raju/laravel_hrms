<?php

namespace App\Http\Controllers;

use App\Models\Employee;
//use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(5);
        return view('backend.employees.index',compact('employees'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'emp_id' => 'required',
            'name' => 'required',
            'fname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'number' => 'required',
            'email' => 'required',
            'password' => 'required',
            'laddress' => 'required',
            'paddress' => 'required',
            'dept' => 'required',
            'designation' => 'required',
            'date_join' => 'required',
            'salary' => 'required',
            'hname' => 'required',
            'acnumber' => 'required',
            'bname' => 'required',
            'ifsc' => 'required',
            'pan' => 'required',
            'branch' => 'required',
        ]);
  
        Employee::create($request->all());
       // User::create($request->all());
   
        return redirect()->route('employees.index')->with('success','Employee details created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('backend.employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('backend.employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            
            'name' => 'required',
            'fname' => 'required',
           
            'number' => 'required',
            'email' => 'required',
            
            'laddress' => 'required',
            'paddress' => 'required',
            'dept' => 'required',
            'designation' => 'required',
            
            'acnumber' => 'required',
            'bname' => 'required',
            'ifsc' => 'required',
            'pan' => 'required',
            'branch' => 'required',
        ]);
  
        $employee->update($request->all());
  
        return redirect()->route('employees.index')->with('success','Employee details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
  
        return redirect()->route('employees.index')->with('success','Employee deleted successfully');
    }
}
