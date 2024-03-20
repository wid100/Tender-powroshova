<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\TenderController as TenderController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('root');
Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::namespace('App\Http\Controllers')->group(function () {
    Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::resource('tender', 'TenderController');
    });
});

// ================================user AND ROUTE=============
Route::namespace('App\Http\Controllers')->group(
    function () {
        Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
            Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
            Route::get('/user-mangement', [UserDashboardController::class, 'userMangement'])->name('user-mangement');
            Route::get('/live-tender', [UserDashboardController::class, 'liveTender'])->name('live-tender');
            Route::get('/live-tender/{id}', [UserDashboardController::class, 'liveTenderId'])->name('live-tender.show');
            Route::get('/participate-tender', [UserDashboardController::class, 'ParticipateTender'])->name('participate-tender');
            Route::get('/change-password', [UserDashboardController::class, 'changePassword'])->name('change-password');

            Route::resource('supplier', 'SupplierController');
        });
    }
);
// ================================user AND ROUTE END=============



// Route::namespace('App\Http\Controllers')->group(
//     function () {
//         Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
//             Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
//             Route::resource('supplier', 'SupplierController');
//         });
//     }
// );
