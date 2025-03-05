<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::get('/posts', function () {
//     return 'API';
// });

Route::apiResource('posts', PostController::class);
