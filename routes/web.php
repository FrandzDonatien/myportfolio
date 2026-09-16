<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

/*
 | Étape 4 : le formulaire de contact pointera ici.
 | Route::post('/contact', ContactController::class)->name('contact.store');
 */
