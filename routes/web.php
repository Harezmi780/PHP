<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, index] -> name('homepage'); 

Route::get('/yazilar', function () {
    $title = 'Yazilar';
    $posts = collect(
        [
            ['title' => 'Laravel Nedir?', 'description' => 'laravel bir frameworktur'],
        ]
    );
    return view('posts.index', compact('title', 'posts'));
})->name('blog.index');
