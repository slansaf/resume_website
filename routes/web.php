<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/works', function () {
    return view('home');
})->name('works');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact.all');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');