<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/jobs', function () {
//     return view('jobs.jobs');
// });

// Route::get('/jobs', function () {
//     $title = 'Avail,dhjhfdghvj';
//     $jobs = [
//         'Software Engineer',
//         'Web Developer',
//         'Data Scientist',
//     ];
//     return view('jobs.jobs',compact('title', 'jobs'));
// });

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/{id}', [JobController::class, 'show']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store']);


