<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Str;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('backend.attendance.index', compact('attendances'));
    }
    public function create()
    {
        $employees = Employee::all();
        return view('backend.attendance.create',compact('employees'));
    }
    public function store(Request $request)
    {
        $employee = Employee::findOrFail($request->emp_id);
        $employee->attendances()->create([
            'date' => $request->date,
            'slug' => Str::slug($request->slug),
            'status' => $request->status,
        ]);
        return redirect('backend/attendances')->with('message','Attendaces Created');
    }
    public function edit(int $attendance)
    {
        $employees = Employee::all();
        $attendance = Attendance::findOrFail($attendance);
        return view('backend.attendance.edit', compact('employees','attendance'));
    }

    public function update(Request $request, $attendance_id)
    {
        $attendance = Employee::findOrFail($request->emp_id)
                        ->attendances()->where('id',$attendance_id)->first();
        $attendance->date = $request->date;
        $attendance->slug = Str::slug($request->slug);
        $attendance->status = $request->status;
        
        $attendance->update();
        return redirect('backend/attendances')->with('message','Attendance Details Updated');
    }
}
