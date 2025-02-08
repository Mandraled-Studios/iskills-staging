<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])->name('homepage');
Route::get('/corporate-training', [PagesController::class, 'corporateTraining'])->name('corporateTraining');
Route::get('/courses/all', [PagesController::class, 'courses'])->name('allcourses');
Route::get('/courses/category/{cat}', [PagesController::class, 'coursesByCategory'])->name('coursesByCategory');
Route::get('/courses/{slug}', [PagesController::class, 'courseDetails'])->name('coursedetails');

Route::get('/careers', [PagesController::class, 'careers'])->name('careers');
Route::get('/careers/{id}', [PagesController::class, 'careerDetail'])->name('careerDetail');
Route::get('/placements', [PagesController::class, 'placements'])->name('placements');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
