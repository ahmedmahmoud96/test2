<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Models\Job;
use Dotenv\Validator;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('Jobs.create');
    }

    public function store(JobRequest $request)
    {
        $request = Job::create($request->all());
        return redirect()->route('home')->with('Succ', 'Data has been added successfully');
    }

}
