<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Jobs=Job::select('id','salary',
            'name_'.LaravelLocalization::getCurrentLocale().' as name',
            'description_'.LaravelLocalization::getCurrentLocale().' as description',
        )->get();
        return view('home',compact('Jobs'));
    }
}
