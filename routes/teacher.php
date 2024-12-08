<?php

use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Teacher\CourseController;
use App\Http\Controllers\Teacher\DashboardController;
use App\Http\Controllers\Teacher\ProfileController;
use App\Http\Controllers\Teacher\ReviewController;
use App\Http\Controllers\Web\TeacherAuthController;
use Illuminate\Support\Facades\Route;


Route::middleware('checkIfLoggedIn')->group(function () {
    Route::get('/teacher/login', [TeacherAuthController::class, 'loginPage'])->name('teacher.login-page');
    // Route::post('/teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');
    Route::get('/teacher/register', [TeacherAuthController::class, 'registerPage'])->name('teacher.register-page');
    Route::post('/teacher/sign-up', [TeacherAuthController::class, 'register'])->name('teacher.register');
    Route::get('/teacher/account/verify/{token}', [TeacherAuthController::class, 'verifyAccount'])->name('teacher.verify');
});

Route::group(['prefix' => 'teacher', 'as' => 'teacher.', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'courses', 'as' => 'courses.', 'middleware' => ['auth']], function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('/show/{id}', [CourseController::class, 'show'])->name('show');
        Route::get('/create', [CourseController::class, 'create'])->name('create');
        Route::post('/store', [CourseController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CourseController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CourseController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::post('/update/{id}', [ProfileController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'change-password', 'as' => 'change-password.', 'middleware' => ['auth']], function () {
        Route::get('/', [ChangePasswordController::class, 'index'])->name('index');
        Route::post('/update/{id}', [ChangePasswordController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'reviews', 'as' => 'reviews.', 'middleware' => ['auth']], function () {
        Route::get('/', [ReviewController::class, 'index'])->name('index');
    });
});
