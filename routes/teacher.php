<?php

use App\Http\Controllers\Teacher\DashboardController;
use App\Http\Controllers\Web\TeacherAuthController;
use Illuminate\Support\Facades\Route;



Route::get('/teacher/login', [TeacherAuthController::class, 'loginPage'])->name('teacher.login-page');
// Route::post('/teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');
Route::get('/teacher/register', [TeacherAuthController::class, 'registerPage'])->name('teacher.register-page');
Route::post('/teacher/sign-up', [TeacherAuthController::class, 'register'])->name('teacher.register');
Route::get('/account/verify/{token}', [TeacherAuthController::class, 'verifyAccount'])->name('teacher.verify');

Route::group(['prefix' => 'teacher', 'as' => 'teacher.', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
