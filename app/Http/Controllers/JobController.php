<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = DB::table('jobs')->paginate(15);

        return view('jobs.index', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
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
            'title' => 'required|min:1|max:255',
            'dept' => 'required|min:1|max:255',
            'city' => 'required|min:1|max:255',
            'dat' => 'required',
            'expdat' => 'required|after:today',
            'source' => 'required|min:1|max:255',
            'picture' => 'required|mimes:jpg,jpeg,png|max:5048'
        ]);

        $imgname =  "jobs-" . time() . "." . $request->picture->extension();
        $request->picture->move(public_path('jobss'), $imgname);

        $job = Job::create([
            'title' => $request->input('title'),
            'city' => $request->input('city'),
            'dat' => $request->input('dat'),
            'expdat' => $request->input('expdat'),
            'dept' => $request->input('title'),
            'source' => $request->input('source'),
            'imgpath' => $imgname
        ]);

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view("jobs.show", ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        // dd($job->id);
        $request->validate([
            'title' => 'required|min:1|max:255',
            'dept' => 'required|min:1|max:255',
            'city' => 'required|min:1|max:255',
            'dat' => 'required',
            'expdat' => 'required|after:today',
            'source' => 'required|min:1|max:255',
            'picture' => 'required|mimes:jpg,jpeg,png|max:5048'
        ]);

        if (File::exists("jobss/" . $job->imgpath)) {
            File::delete("jobss/" . $job->imgpath);
        }

        $imgname =  "jobs-" . time() . "." . $request->picture->extension();
        $request->picture->move(public_path('jobss'), $imgname);

        $jobs = Job::where('id', $job->id)->update([
            'title' => $request->input('title'),
            'city' => $request->input('city'),
            'dat' => $request->input('dat'),
            'expdat' => $request->input('expdat'),
            'dept' => $request->input('title'),
            'source' => $request->input('source'),
            'imgpath' => $imgname
        ]);

        return redirect('/jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();
        if (File::exists("jobss/" . $job->imgpath)) {
            File::delete("jobss/" . $job->imgpath);
        }
        return redirect('/jobs');
    }
}
