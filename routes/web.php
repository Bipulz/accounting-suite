<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/contact', function () { /* ... */ })->name('contact');
Route::get('/about', function () { /* ... */ })->name('about');
Route::get('/services', function () { /* ... */ })->name('services');
Route::get('/services/audit', function () { /* ... */ })->name('services.audit');
Route::get('/services/tax', function () { /* ... */ })->name('services.tax');
Route::get('/services/risk', function () { /* ... */ })->name('services.risk');
Route::get('/services/consulting', function () { /* ... */ })->name('services.consulting');
Route::get('/services/reporting', function () { /* ... */ })->name('services.reporting');
Route::get('/services/corporate', function () { /* ... */ })->name('services.corporate');
Route::get('/industries', function () { /* ... */ })->name('industries');