<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('promoter')->user();

    //dd($users);

    return view('promoter.home');
})->name('home');

