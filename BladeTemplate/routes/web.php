<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/about', function () {
    return view(view: 'pages.about');
});
Route::get('/project', function () {
    return view('pages.projects');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

