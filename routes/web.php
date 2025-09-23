<?php

use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;

/** Routes pour chatbots **/
Route::post('/chatbot', [ChatbotController::class, 'chat'])->name('chatbot');

/** Routes pour pages principales **/
Route::get('/', function () {
    return view('layouts.pages.home');
})->name('home');
Route::get('/a-propos', function () {
    return view('layouts.pages.about');
})->name('about');
Route::get('/formations', function () {
    return view('layouts.pages.formations');
})->name('formations');
Route::get('/actualites', function () {
    return view('layouts.pages.actualites');
})->name('actualites');
Route::get('/contact', function () {
    return view('layouts.pages.contact');
})->name('contact');
Route::get('/faqs', function () {
    return view('layouts.pages.faqs');
})->name('faqs');
