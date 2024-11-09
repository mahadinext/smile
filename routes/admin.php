<?php

use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\RolesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.dashboard');
});

Auth::routes([
    'register' => false, // Register Routes...
]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    Route::get('users/restoreByEmail/{email}', 'UsersController@restoreByEmail')->name('users.restoreByEmail');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    Route::group(['prefix' => 'faqs', 'as' => 'faqs.', 'middleware' => ['auth']], function () {
        Route::get('/', [FaqsController::class, 'index'])->name('index');
        Route::get('/show/{id}', [FaqsController::class, 'show'])->name('show');
        Route::get('/create', [FaqsController::class, 'create'])->name('create');
        Route::post('/store', [FaqsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [FaqsController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [FaqsController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [FaqsController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'privacy-policy', 'as' => 'privacy-policy.', 'middleware' => ['auth']], function () {
        Route::get('/', [PrivacyPolicyController::class, 'index'])->name('index');
        Route::post('/update/{id}', [PrivacyPolicyController::class, 'update'])->name('update');
    });
});
