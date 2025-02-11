<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'displayControllerpPage'])->name('displayController');

Route::get('/getpost/{id}', [PageController::class,'showPost'])->name('post')->whereNumber('id');

Route::get('/invoke', PageController::class)->name('invoke');
