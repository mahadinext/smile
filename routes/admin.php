<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\WebElementController;
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
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

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

    // Home Page
    Route::group(['prefix' => 'home', 'as' => 'home.', 'middleware' => ['auth']], function () {
        Route::get('/', [HomePageController::class, 'index'])->name('index');
    });

    // Web Elements
    Route::group(['prefix' => 'web', 'as' => 'web.', 'middleware' => ['auth']], function () {
        Route::get('/image', [WebElementController::class, 'image'])->name('image');
        Route::post('/image/update/', [WebElementController::class, 'updateImage'])->name('image.update');

        Route::get('/color', [WebElementController::class, 'color'])->name('color');
        Route::post('/color/update/', [WebElementController::class, 'updateColor'])->name('color.update');

        Route::get('/typography', [WebElementController::class, 'typography'])->name('typography');
        Route::post('/typography/update/', [WebElementController::class, 'updateTypography'])->name('typography.update');

        Route::get('/meta-contents', [WebElementController::class, 'metaContents'])->name('meta-contents');
        Route::post('/meta-contents/update/', [WebElementController::class, 'updateMetaContents'])->name('meta-contents.update');
    });

    // Home Page
    Route::group(['prefix' => 'home', 'as' => 'home.', 'middleware' => ['auth']], function () {
        Route::get('/hero-section', [HomeController::class, 'heroSection'])->name('hero-section');
        Route::post('/hero-section/update/', [HomeController::class, 'updateHeroSection'])->name('hero-section.update');

        Route::get('/campaign-section', [HomeController::class, 'campaignSection'])->name('campaign-section');
        Route::post('/campaign-section/update/', [HomeController::class, 'updateCampaignSection'])->name('campaign-section.update');
    });

    // About Us Page
    Route::group(['prefix' => 'about-us', 'as' => 'about-us.', 'middleware' => ['auth']], function () {
        Route::get('/section-1', [AboutUsController::class, 'section1'])->name('section-1');
        Route::get('/section-1/edit/{id}', [AboutUsController::class, 'editSection1'])->name('section-1.edit');
        Route::post('/section-1/update/', [AboutUsController::class, 'updateSection1'])->name('section-1.update');

        Route::get('/section-2', [AboutUsController::class, 'section2'])->name('section-2');
        Route::get('/section-2/create', [AboutUsController::class, 'createSection2'])->name('section-2.create');
        Route::post('/section-2/store', [AboutUsController::class, 'storeSection2'])->name('section-2.store');
        Route::get('/section-2/edit/{id}', [AboutUsController::class, 'editSection2'])->name('section-2.edit');
        Route::post('/section-2/update/{id}', [AboutUsController::class, 'updateSection2'])->name('section-2.update');

        Route::get('/section-3', [AboutUsController::class, 'section3'])->name('section-3');
        Route::get('/section-3/create', [AboutUsController::class, 'createSection3'])->name('section-3.create');
        Route::post('/section-3/store', [AboutUsController::class, 'storeSection3'])->name('section-3.store');
        Route::get('/section-3/edit/{id}', [AboutUsController::class, 'editSection3'])->name('section-3.edit');
        Route::post('/section-3/update/{id}', [AboutUsController::class, 'updateSection3'])->name('section-3.update');

        Route::get('/delete/{id}', [AboutUsController::class, 'delete'])->name('delete');
    });

    // Contact Us Page
    Route::group(['prefix' => 'contact-us', 'as' => 'contact-us.', 'middleware' => ['auth']], function () {
        Route::get('/', [ContactUsController::class, 'index'])->name('index');
        Route::get('/edit', [ContactUsController::class, 'edit'])->name('edit');
        Route::post('/update', [ContactUsController::class, 'update'])->name('update');
    });

    // FAQs Page
    Route::group(['prefix' => 'faqs', 'as' => 'faqs.', 'middleware' => ['auth']], function () {
        Route::get('/', [FaqsController::class, 'index'])->name('index');
        Route::get('/show/{id}', [FaqsController::class, 'show'])->name('show');
        Route::get('/create', [FaqsController::class, 'create'])->name('create');
        Route::post('/store', [FaqsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [FaqsController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [FaqsController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [FaqsController::class, 'delete'])->name('delete');
    });

    // Privacy Policy Page
    Route::group(['prefix' => 'privacy-policy', 'as' => 'privacy-policy.', 'middleware' => ['auth']], function () {
        Route::get('/', [PrivacyPolicyController::class, 'index'])->name('index');
        Route::post('/update/{id}', [PrivacyPolicyController::class, 'update'])->name('update');
    });
});
