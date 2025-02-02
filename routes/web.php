<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/sobre', function () {
    return Inertia::render('Sobre');
});
