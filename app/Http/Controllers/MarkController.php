<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marks = Mark::latest()->paginate(5);
        return view('backend.marks.index',compact('marks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.marks.create');
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
            'status' => 'required',
        ]);
  
        Mark::create($request->all());
   
        return redirect()->route('marks.index')->with('success','Details created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mark $mark)
    {
        return view('backend.marks.show',compact('mark'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mark $mark)
    {
        return view('backend.marks.edit',compact('mark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mark $mark)
    {
        $request->validate([
            
            'emp_id' => 'required',
            'name' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);
  
        $mark->update($request->all());
  
        return redirect()->route('marks.index')->with('success','Attendance Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mark $mark)
    {
        
        $mark->delete();
  
        return redirect()->route('marks.index')->with('success','Attendance deleted successfully');
    }
}
