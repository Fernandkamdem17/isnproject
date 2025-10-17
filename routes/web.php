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


Route::middleware('auth::sanctum')->name('admin.')->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('layouts.pages.admin-home');
    })->name('dashboard');


    Route::get('/trainings/list', function () {
        return view('layouts.pages.trainings.index');
    })->name('trainings.index');
    Route::get('/trainings/create', function () {
        return view('layouts.pages.trainings.create');
    })->name('trainings.create');


    Route::get('/admin-modules', function () {
        return view('layouts.pages.modules.index');
    })->name('modules.index');


    Route::get('/admin-ues', function () {
        return view('layouts.pages.ues.index');
    })->name('ues.index');


    Route::get('/admin-faqs', function () {
        return view('layouts.pages.faqs.index');
    })->name('faqs.index');


    Route::get('/admin-anounces', function () {
        return view('layouts.pages.anounces.index');
    })->name('anounces.index');


    Route::get('/admin-events', function () {
        return view('layouts.pages.events.index');
    })->name('events.index');

    Route::get('/admin-recentsnews', function () {
        return view('layouts.pages.recentsnews.index');
    })->name('recentsnews.index');


    Route::get('/admin-galleries', function () {
        return view('layouts.pages.galleries.index');
    })->name('galleries.index');


    Route::get('/admin-ues', function () {
        return view('layouts.pages.ues.index');
    })->name('ues.index');
});


Route::get('/login', function () {
    return view('layouts.pages.login');
})->name('login');


require __DIR__ . '/auth.php';
