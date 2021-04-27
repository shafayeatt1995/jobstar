<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobtype;
use Illuminate\Http\Request;

class JobtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobtypes = Jobtype::latest()->get();
        return view('admin.jobtype.index',compact('jobtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);

        $jobtype = new Jobtype();
        $jobtype->name = $request->name;
        $jobtype->slug = str_slug($request->name);
        $jobtype->save();
        return redirect()->route('admin.jobtype.index')->with('success','Job Type Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jobtype  $jobtype
     * @return \Illuminate\Http\Response
     */
    public function show(Jobtype $jobtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jobtype  $jobtype
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobtype $jobtype)
    {
        return view('admin.jobtype.update',compact('jobtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jobtype  $jobtype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobtype $jobtype)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);

        $jobtype->name = $request->name;
        $jobtype->slug = str_slug($request->name);
        $jobtype->save();
        return redirect()->route('admin.jobtype.index')->with('success','Job Type Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jobtype  $jobtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobtype $jobtype)
    {
        $jobtype->delete();
        return redirect()->back()->with('success','Job Type Delete Successfully');
    }
}
