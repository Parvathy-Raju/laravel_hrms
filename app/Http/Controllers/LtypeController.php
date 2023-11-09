<?php

namespace App\Http\Controllers;

use App\Models\Ltype;
use Illuminate\Http\Request;

class LtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ltypes = Ltype::latest()->paginate(5);
        return view('backend.ltypes.index',compact('ltypes'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ltypes.create');
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
            'ltype' => 'required',
            'num_leaves' => 'required',
        ]);
  
        Ltype::create($request->all());
   
        return redirect()->route('ltypes.index')->with('success','leave details created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ltype $ltype)
    {
        return view('backend.ltypes.show',compact('ltype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ltype $ltype)
    {
        return view('backend.ltypes.edit',compact('ltype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ltype $ltype)
    {
        $request->validate([
            
            'ltype' => 'required',
            'num_leaves' => 'required',
        ]);
  
        $ltype->update($request->all());
  
        return redirect()->route('ltypes.index')->with('success','Leave details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ltype $ltype)
    {
        $ltype->delete();
  
        return redirect()->route('ltypes.index')->with('success','Leave Type deleted successfully');
    }
}
