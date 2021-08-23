<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;

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

Route::get('/', function () {
    return view('welcome');
})->name('index');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::prefix('/staff')->name('staff.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    /*Frontend Route */
    Route::prefix('/home')->name('home.')->group(function () {
        // Service Section Route
        Route::prefix('service')->name('service.')->group(function () {
            Route::get('/', [ServiceController::class, 'index'])->name('index');
            Route::match(['get', 'post'], '/create', [ServiceController::class, 'create'])->name('create');
        });
    });
});

Route::prefix('/staff')->group(function () {
    require __DIR__ . '/auth.php';
});
