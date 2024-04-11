<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Index */
Route::get('/jobs', function () {
    // $jobs = Job::all(); // lazy loading
    // $jobs = Job::with('employer')->get(); // eager loading

    // $jobs = Job::with('employer')->simplePaginate(5); // built-in SIMPLE pagination
    // $jobs = Job::with('employer')->cursorPaginate(5); // built-in CURSOR pagination (same as simple, better performance, uri is not human friendly)

    $jobs = Job::with('employer')->latest()->paginate(5); // built-in FULL pagination
    return view('jobs.index', ['jobs' => $jobs]);
});

/* Create */
Route::get('/jobs/create', function () {

    // "." can replaces "/" (they both can be used)
    return view('jobs.create');
});

/* Show */
Route::post('/jobs', function () {
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
});

// wildcards routes should be declared lastly, to not override non-wildcard routes
/* Store */
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

/* Update */
Route::patch('/jobs/{id}', function ($id) {
    // authorize (On hold...)

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    $job = Job::findOrFail($id);

    // $job->title = request('title');
    // $job->salary = request('salary');
    // $job->save();

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

/* Destroy */
Route::delete('/jobs/{id}', function ($id) {
    // authorize (On hold...)

    $job = Job::findOrFail($id)->delete();
    return redirect('/jobs');
});

/* Edit */
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});
