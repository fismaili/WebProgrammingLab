<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs.jobs');
});

// Route::get('/jobs', function () {
//     $title = 'Avail,dhjhfdghvj';
//     $jobs = [
//         'Software Engineer',
//         'Web Developer',
//         'Data Scientist',
//     ];
//     return view('jobs.jobs',compact('title', 'jobs'));
// });


