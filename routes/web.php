<?php

use App\Http\Controllers\PostController;
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


Route::prefix('posts')->group(function () {
    // GET request
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    // POST request
    Route::post('/', [PostController::class, 'store'])->name('posts.store');
    Route::get('/create', function () {
        return view('pages/posts/create');
    })->name('posts.create');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.edit');

    // PATCH request — Note the {id} instead of :id
    Route::patch('/post/{id}', [PostController::class, 'update'])->name('posts.update');

    // DELETE request — Also use {id}
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});





