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

Route::get('/jobs', function () {
    // $jobs = Job::all(); // lazy loading
    // $jobs = Job::with('employer')->get(); // eager loading

    $jobs = Job::with('employer')->paginate(5); // built-in FULL pagination
    // $jobs = Job::with('employer')->simplePaginate(5); // built-in SIMPLE pagination
    // $jobs = Job::with('employer')->cursorPaginate(5); // built-in CURSOR pagination

    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});
