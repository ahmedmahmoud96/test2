<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Dotenv\Validator;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('Jobs.create');
    }

    public function store(Request $request){
        $rools=[
            'name'=>'required',
            'description'=>'required',
            'salary'=>'required',
        ];
        $mass=[
            'name.required'=>'The Name Require',
            'description.required'=>'The Description Require',
            'salary.required'=>'The Salary Require',
        ];
       $validate=\Illuminate\Support\Facades\Validator::make($request->all(),$rools,$mass);
       if($validate->fails()){
           return redirect()->back()->withErrors($validate)->withInput($request->all());
       }
       else {
           $request=Job::create($request->all());
           return redirect()->route('home')->with('Succ','Data has been added successfully');
       }
    }
}
