<?php

use App\Http\Controllers\JobController;
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

// inline controller
Route::get('/', function () {
    return view('welcome');
});

// short controller (no function use at all)
Route::view('/contact', 'contact');

// class controller
Route::get('/jobs', [JobController::class, 'index']);

// grouped controller
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    // wildcards routes should be declared lastly (method dependent), to not override non-wildcard routes
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});

/*
"Route::resource" registers all the default names which are:
1. index
2. store
3. create
4. show
5. update
6. destroy
7. edit
*/
//  Route::resource('jobs', JobController::class, [
//      'only' => ['index'],
//      'except' => ['edit'],
//  ]);
