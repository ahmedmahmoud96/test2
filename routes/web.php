<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes(["verify" => true]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

    Route::group(['prefix'=>'Jobs'],function (){
        Route::get('create',[JobsController::class,'create'])->name('create') ;
        Route::POST('store',[JobsController::class,'store'])->name('store') ;
    });

});
