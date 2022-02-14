<?php

    use App\Models\Post;
    use App\Models\User;
    use Illuminate\Support\Facades\Route;
    use App\Models\Category;
    use App\Http\Controllers\PostController;

    Route::get('/', [PostController::class, 'index'])->name('home');

    Route::get('posts/{post:slug}', [PostController::class, 'show']);

