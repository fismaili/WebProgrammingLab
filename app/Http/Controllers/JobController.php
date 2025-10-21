<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
         $title = 'Available Jobs';
         $jobs = [
             'Software Engineer',
             'Web Developer',
             'Data Scientist',
          ];

        return view('jobs/index', compact('title', 'jobs'));
      
    }

     public function create()
    {
        
        return view('jobs/create');
      
    }

    public function store(Request $request)
    {
    
        $title = $request->input('title');
        $description = $request->input('description');

        return "Title: $title, Description: $description";
    
    }

    public function show($id)
    {
      return "Showing job $id";
    }

}
