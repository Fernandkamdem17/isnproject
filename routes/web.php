<?php

use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



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



Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts.pages.admin-home');
    })->name('dashboard');


    Route::get('/trainings/list/list', function () {
        return view('layouts.pages.trainings.index');
    })->name('trainings.index');
    Route::get('/trainings/create/list', function () {
        return view('layouts.pages.trainings.create');
    })->name('trainings.create');


    Route::get('/modules/list', function () {
        return view('layouts.pages.modules.index');
    })->name('modules.index');


    Route::get('/ues/list', function () {
        return view('layouts.pages.ues.index');
    })->name('ues.index');


    Route::get('/faqs/list', function () {
        return view('layouts.pages.faqs.index');
    })->name('faqs.index');


    Route::get('/anounces/list', function () {
        return view('layouts.pages.anounces.index');
    })->name('anounces.index');


    Route::get('/events/list', function () {
        return view('layouts.pages.events.index');
    })->name('events.index');

    Route::get('/recentsnews/list', function () {
        return view('layouts.pages.recentsnews.index');
    })->name('recentsnews.index');


    Route::get('/galleries/list', function () {
        return view('layouts.pages.galleries.index');
    })->name('galleries.index');


    Route::get('/ues/list', function () {
        return view('layouts.pages.ues.index');
    })->name('ues.index');
});


require __DIR__ . '/auth.php';
