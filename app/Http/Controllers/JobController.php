<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        // $jobs = Job::all(); // lazy loading
        // $jobs = Job::with('employer')->get(); // eager loading

        // $jobs = Job::with('employer')->simplePaginate(5); // built-in SIMPLE pagination
        // $jobs = Job::with('employer')->cursorPaginate(5); // built-in CURSOR pagination (same as simple, better performance, uri is not human friendly)

        $jobs = Job::with('employer')->latest()->paginate(5); // built-in FULL pagination
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function show(Job $job) // wildcard and parameter name need to match
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }

    public function create()
    {
        // "." can replaces "/" (they both can be used)
        return view('jobs.create');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // authorize (On hold...)

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        // $job->title = request('title');
        // $job->salary = request('salary');
        // $job->save();

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        // authorize (On hold...)

        $job->delete();
        return redirect('/jobs');
    }
}
