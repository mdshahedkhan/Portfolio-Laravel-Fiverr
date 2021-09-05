<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\AboutMeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/cleareverything', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";
    $configClear = Artisan::call('cache:clear');
    $Optimize = Artisan::call('optimize');
    echo "Config<br>";
});

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/about', [SiteController::class, 'AboutMe'])->name('about');

Route::get('/contact-us', [SiteController::class, 'ContactUs'])->name('ContactUs');
Route::post('/contact', [SiteController::class, 'contact'])->name('contact');




Route::prefix('/staff')->name('staff.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    /*Frontend Route */
    Route::prefix('/home')->name('home.')->group(function () {
        // Service Section Route
        Route::prefix('service')->name('service.')->group(function () {
            Route::get('/', [ServiceController::class, 'index'])->name('index');
            Route::get('/change-status/{id}/{status}', [ServiceController::class, 'ChangeStatus'])->name('ChangeStatus');
            Route::match(['get', 'post'], '/create', [ServiceController::class, 'create'])->name('create');
            Route::match(['get', 'PATCH'], '/edit/{id}', [ServiceController::class, 'edit'])->name('edit');
            Route::post('/destroy/{id}', [ServiceController::class, 'destroy'])->name('destroy');
        });
        /** About Me Route Define */
        Route::prefix('/aboutme')->name('aboutme.')->group(function () {
            Route::get('/', [AboutMeController::class, 'index'])->name('index');
            Route::get('/edit/{id}', [AboutMeController::class, 'UpdateMe'])->name('edit');
            Route::post('/edit/{id}', [AboutMeController::class, 'UpdateStore'])->name('update');
        });
        /*General Setting Route*/
        Route::prefix('/brand')->name('brand.')->group(function () {
            Route::get('/', [BrandController::class, 'index'])->name('index');
            Route::get('/change-status/{id}/{status}', [BrandController::class, 'ChangeStatus'])->name('ChangeStatus');
            Route::match(['get', 'post'], '/create', [BrandController::class, 'create'])->name('create');
            Route::match(['get', 'PATCH'], '/edit/{id}', [BrandController::class, 'edit'])->name('edit');
            Route::post('/destroy/{id}', [BrandController::class, 'destroy'])->name('destroy');
        });
    });

    Route::prefix('/mail')->name('mail')->group(function () {
        Route::get('/', [MailController::class, 'index'])->name('index');
    });
    // General Setting Route
    Route::prefix('/general')->name('general.')->group(function () {
        Route::get('/', [SiteController::class, 'Setting'])->name('index');
        Route::patch('/user-update', [SiteController::class, 'userInfoUpdate'])->name('userInfoUpdate');
        Route::post('/update', [SiteController::class, 'UpdateGeneralSetting'])->name('UpdateGeneralSetting');
    });
});

Route::prefix('/staff')->group(function () {
    require __DIR__ . '/auth.php';
});
