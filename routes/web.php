<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/contact', function () {
    return view('contactus');
})->name('contact');


Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/offices', function () {
    return view('offices');
})->name('offices');

Route::get('/insights', function () {
    return view('insights');
})->name('insights');

Route::get('/events', function () {
    return view('event');
})->name('event');

Route::get('/teams', function () {
    return view('teams');
})->name('teams');

Route::get('/article', function () {
    return view('article');
});


