<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

Route::get('/', [ComicController :: class, 'index']);

Route::get('/users/{id}', [ComicController :: class, 'show']);
