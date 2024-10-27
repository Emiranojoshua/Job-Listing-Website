<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

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
}
