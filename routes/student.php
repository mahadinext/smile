<?php

use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Web\StudentAuthController;
use Illuminate\Support\Facades\Route;




Route::get('/student/login', [StudentAuthController::class, 'loginPage'])->name('student.login-page');
// Route::post('/student/login', [StudentAuthController::class, 'login'])->name('student.login');
Route::get('/student/register', [StudentAuthController::class, 'registerPage'])->name('student.register-page');
Route::post('/student/sign-up', [StudentAuthController::class, 'register'])->name('student.register');
Route::get('/account/verify/{token}', [StudentAuthController::class, 'verifyAccount'])->name('student.verify');

Route::group(['prefix' => 'student', 'as' => 'student.', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
