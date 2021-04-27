<?php

namespace App\Http\Controllers\Employer;

use App\Career;
use App\Category;
use App\Http\Controllers\Controller;
use App\Job;
use App\Jobtype;
use App\skill;
use App\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::latest()->get();
        return view('employer.job.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobtypes = Jobtype::all();
        $careers = Career::all();
        $categories = Category::all();
        $tags = tag::all();
        $skills = skill::all();
        return view('employer.job.create',compact('jobtypes','skills','careers','categories','tags',));
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
            'title'=>'required',
            'jobtype_id'=>'required',
            'career_id'=>'required',
            'category_id'=>'required',
            'budget'=>'required',
            'vacancy'=>'required',
            'deadline'=>'required',
            'description'=>'required',
        ]);


        $job = new Job();
        $job->user_id = Auth::user()->id;
        $job->jobtype_id = $request->jobtype_id;
        $job->career_id = $request->career_id;
        $job->category_id = $request->category_id;
        $job->title = $request->title;
        $job->budget = $request->budget;
        $job->experience = $request->experience;
        $job->vacancy = $request->vacancy;
        $job->deadline = $request->deadline;
        $job->description = $request->description;
        $job->status = false;
        $job->save();

        if ($request->has('tags')) {
            foreach ($request->tags as $data) {
                $tag = new tag();
                $tag->job_id = $job->id;
                $tag->name = $data;
                $tag->slug = str_slug($data);
                $tag->save();
            }
        }

        if ($request->has('skills')) {
            foreach ($request->skills as $data) {
                $skill = new skill();
                $skill->job_id = $job->id;
                $skill->name = $data;
                $skill->slug = str_slug($data);
                $skill->save();
            }
        }

        return redirect()->route('employer.job.index')->with('success','Job Post Successfully Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $jobtypes = Jobtype::all();
        $careers = Career::all();
        $categories = Category::all();
        $tags = tag::all();
        $skills = skill::all();
        return view('employer.job.update',compact('job','jobtypes','careers','categories','tags','skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $this->validate($request,[
            'title'=>'required',
            'jobtype_id'=>'required',
            'career_id'=>'required',
            'category_id'=>'required',
            'budget'=>'required',
            'vacancy'=>'required',
            'deadline'=>'required',
            'description'=>'required',
        ]);


        $job->user_id = Auth::user()->id;
        $job->jobtype_id = $request->jobtype_id;
        $job->career_id = $request->career_id;
        $job->category_id = $request->category_id;
        $job->title = $request->title;
        $job->budget = $request->budget;
        $job->experience = $request->experience;
        $job->vacancy = $request->vacancy;
        $job->deadline = $request->deadline;
        $job->description = $request->description;
        $job->status = false;
        $job->save();

        if ($request->has('tags')) {

            foreach($job->tags as $data) {
                $data->delete();
            }

            foreach ($request->tags as $data) {
                $tag = new tag();
                $tag->job_id = $job->id;
                $tag->name = $data;
                $tag->slug = str_slug($data);
                $tag->save();
            }
        }else{

            foreach($job->tags as $data) {
                $data->delete();
            }
        }

        if ($request->has('skills')) {

            foreach ($job->skills as $data) {
                $data->delete();
            }
            foreach ($request->skills as $data) {
                $skill = new skill();
                $skill->job_id = $job->id;
                $skill->name = $data;
                $skill->slug = str_slug($data);
                $skill->save();
            }
        }else{
            foreach ($job->skills as $data) {
                $data->delete();
            }
        }

        return redirect()->route('employer.job.index')->with('success','Job Post Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        foreach($job->tags as $data) {
            $data->delete();
        }

        foreach ($job->skills as $data) {
            $data->delete();
        }
        $job->delete();
        return redirect()->back()->with('success','Job Post Successfully Deleted');
    }
}
