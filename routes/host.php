<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('host')->user();

    //dd($users);

    return view('host.home');
})->name('home');

