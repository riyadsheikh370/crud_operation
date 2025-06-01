<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    $posts = Post::paginate(5);
    return view('home', compact('posts'));
})->name('home');

Route::get('/dashboard', function () {
    $posts = Post::paginate(5);
    return view('welcome', compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('post', PostController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
