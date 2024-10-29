<?php

use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\CourseController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\StudentAuthController;
use App\Http\Controllers\Web\TeacherController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(CourseController::class)->group(function () {
    Route::prefix('courses')->group(function () {
        Route::get('/', 'index')->name('courses');
        Route::get('/detail/{slug}', 'courseDetails')->name('course-details');
    });
});

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');

Route::get('/teacher/{slug}/profile', [TeacherController::class, 'profile'])->name('teacher-profile');
