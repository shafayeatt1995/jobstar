<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::latest()->get();
        return view('employer.test.index',compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request $request)
    {
        $test = new Test();
        $test->name = $request->name;
        $test->email = $request->email;
        $test->password = $request->password;
        $test->save();
        return ['success'=>true,'message'=>'Inserted Successfully'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return array
     */
    public function update(Request $request, Test $test)
    {
        $test->name = $request->name;
        $test->email = $request->email;
        $test->password = $request->password;
        $test->save();
        return ['success'=>true,'message'=>'Updated Successfully'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return array
     */
    public function destroy(Test $test)
    {
        $test->delete();
        return ['success'=>true,'message'=>'Delete Successfully'];
    }
}
