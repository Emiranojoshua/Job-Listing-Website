<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\User;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobsController extends Controller
{
    //

    public function index()
    {
        $jobs = Jobs::with(['employers']);

        return view(
            'jobs.index',
            ['jobs' => $jobs->latest()->paginate(5)],
        );
    }

    public function show(Jobs $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request, Jobs $job, Auth $auth)
    {
        $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'time' => ['required'],
        ]);

        // dd($auth::user()->employer->id);

        $job::create([
            'title' => $request->title,
            'location' => $request->location,
            'time' => $request->time,
            'salary' => $request->salary,
            'due_date' => date_create('now'),
            'employers_id' => $auth::user()->employer->id,
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function edit(Jobs $job)
    {
        return view('jobs.edit')->with('job', $job);
    }

    public function update(Jobs $job, Request $request){
        $request->validate([
            'title'=> ['required'],
            'salary'=> ['required'],  
            'location'=> ['required'],
        ]);
        $job->update($request->all());
        $job->save();

        return redirect('jobs/'. $job->id);
    }

    public function destroy(Jobs $job){
        $job->delete();
        return redirect('jobs/');
    }
}
