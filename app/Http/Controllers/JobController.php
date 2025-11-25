<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\JobListing;


class JobController extends Controller
{
    public function index()
    {
        $title = 'Available Jobs';
        $jobs = JobListing::all();
        return view('jobs.index', compact('title', 'jobs')); 
    }

    public function create()
    {
        
        return view('jobs.create');
      
    }

    public function store(Request $request)
    {
    
        // $title = $request->input('title');
        // $description = $request->input('description');

        // return "Title: $title, Description: $description";

         $title = $request->input('title');
    $description = $request->input('description');

    JobListing::create([
        'title' => $title,
        'description' => $description
    ]);

    return redirect()->route('jobs.index');
    
    }

    public function show($id)
    {
      return "Showing job $id";
    }

}
