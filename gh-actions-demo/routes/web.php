<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return 'Hello GitHub Actions';
});

Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});

Route::get('/posts', function () {
    return Post::all();
});