<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// GET request
Route::get('/post', function () {
    $data = [
        'posts' => [
            ['id' => 1, 'name' => 'test', 'message' => 'lorem ipsum']
        ]
    ];
    return view('pages/posts/index',$data);
});

Route::get('/post/create', function () {
    return view('pages/posts/create');
});

// POST request
Route::post('/post', function () {
    //TODO
});

Route::get('/post/{id}', function () {
    $data = [
    'posts' => [
        ['id' => 1, 'name' => 'test', 'message' => 'lorem ipsum']
    ]
    ];
    return view('pages/posts/create', $data);
});

// PATCH request — Note the {id} instead of :id
Route::patch('/post/{id}', function ($id) {
    //TODO
});

// DELETE request — Also use {id}
Route::delete('/post/{id}', function ($id) {
    //TODO
});
