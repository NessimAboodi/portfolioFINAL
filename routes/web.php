<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/competences', function () {
    return view('pages.competences');
});

Route::get('/projets', function () {
    return view('pages.projets');
});

Route::get('/veille', function () {
    return view('pages.veille');
});

Route::get('/experiences/stages', function () {
    return view('pages.experiences-stages');
});

Route::get('/experiences/projets', function () {
    return view('pages.experiences-projets');
});

Route::get('/experiences/stage2', function () {
    return view('pages.experiences-stage2');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
