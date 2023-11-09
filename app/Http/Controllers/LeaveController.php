<?php

namespace App\Http\Controllers;

use App\Mail\UserRejectMail;
use App\Mail\UserApproveMail;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaves = Leave::latest()->paginate(5);
        return view('backend.leaves.leave',compact('leaves'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.leave');
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
            'date' => 'required',
            'type' => 'required',
            'reason' => 'required',
            'num_leave' => 'required',
        ]);
  
        Leave::create($request->all());
   
        return redirect('frontend/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave $leave)
    {
        
        $leave->delete();
  
        return redirect('backend/leave')->with('success','Leave closed successfully');
    }
    public function approve($email)
    {
        Mail::to($email)->send(new UserApproveMail());
        return redirect('backend/leave')->with('success','Your Leave is Approved, successfully Send a Mail');
    }
    public function reject($email)
    {
        Mail::to($email)->send(new UserRejectMail());
        return redirect('backend/leave')->with('success','Your Leave is Rejected, successfully Send a Mail');
    }
}
