<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('venue')->user();

    //dd($users);

    return view('venue.home');
})->name('home');

