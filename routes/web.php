<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/kontakt', 'EmailController@index')->name('contact');


});

Route::post('/submit-contact-form-route', [EmailController::class, 'sendEmail'])->name('submit-contact-form');


require __DIR__.'/auth.php';

