<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Create New Routes for Post Pages using Routes Attributes
Route::get('/post', function(){
    return view('post');
});

// Create New Routes for Blogs Pages using view attributes
Route::view('/getblogs', 'blog');

// Create Route with Parameters
Route::get('/post/{id}', function(int $id){
    return "<h1> Post ID: " .$id. "</h1>";
});

// Create Enum Route with Validate Optinal Parameters 
Route::get('/blog/{id?}', function(string $id=null){
    if($id)
        return view('blog', ['id' => $id]);
    else
        return redirect('/');
})->whereAlpha(parameters: 'id')->whereIn('id', ['admin', 'user', 'guest']);

// Create Nested View Routes with Named Routes 
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Create Group Routes
Route::prefix('user')->group(function () {
    Route::get('/', function() {
        return view('user.index');
    });
    Route::get('/{id}', function ($id){
        return view('user.show', ['id' => $id]);
    });

    Route::post('/create', function() {
        return view('user.create');
    });
});

// Create 404 Routes
Route::fallback(function () {
    return response()->view('404', [], 404);
});


