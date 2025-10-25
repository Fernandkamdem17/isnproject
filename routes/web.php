<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecentsNewController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\WebPageController;
use App\Models\Faq;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



/** Route pour chatbot **/
Route::post('/chatbot', [ChatbotController::class, 'chat'])->name('chatbot');

Route::get('/test/form', function () {
    return view('text');
});

/** Routes pour pages principales site web**/
Route::name('web.')->group(function () {
    Route::get('/', [WebPageController::class, 'home'])->name('home');
    Route::get('/presentation', [WebPageController::class, 'presentation'])->name('about');
    Route::get('/formations', [WebPageController::class, 'formations'])->name('formations');
    Route::get('/actualites', [WebPageController::class, 'actualites'])->name('actualites');
    Route::get('/contact', [WebPageController::class, 'contact'])->name('contact');
    Route::get('/aide/faqs', [WebPageController::class, 'faqs'])->name('faqs');
});



/** Routes de gestion **/
Route::middleware('auth')->group(function () {
    Route::resource('announces', AnnounceController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('events', EventController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('lessons', LessonController::class);
    Route::resource('modules', ModuleController::class);
    Route::resource('recentsnews', RecentsNewController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('trainings', TrainingController::class);
    Route::patch('/trainings/restore/{training}', [TrainingController::class, 'restore'])->name('trainings.restore');
    Route::patch('/modules/restore/{module}', [ModuleController::class, 'restore'])->name('modules.restore');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::get('/test/select-2', function () {
    return view('test');
});



require __DIR__ . '/auth.php';
