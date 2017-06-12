<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('band')->user();

    //dd($users);

    return view('band.home');
})->name('home');

