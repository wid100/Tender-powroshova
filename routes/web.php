<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\TenderController as TenderController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\SupplierController as UserSupplierController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ParticipateController;
use App\Http\Controllers\Admin\ParticipateController as AdminParticipateController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\ProfileController;

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

Route::get('/clear-cache', function () {
    // Clear route cache
    Artisan::call('route:clear');

    // Optimize class loading
    Artisan::call('optimize');

    // Optimize configuration loading
    Artisan::call('config:cache');

    // Optimize views loading
    Artisan::call('view:cache');

    // Additional optimizations you may want to run

    return "Cache cleared and optimizations done successfully.";
});


Route::get('/', [HomeController::class, 'index'])->name('root');
Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::namespace('App\Http\Controllers')->group(function () {
    Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::resource('tender', 'TenderController');
        Route::resource('participate', 'ParticipateController');
        Route::get('/profile', 'ProfileController@profile')->name('profile');
        Route::post('/profile/update', 'ProfileController@profileupdate')->name('profile.update');

        Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');
        Route::get('change/password', [ProfileController::class, 'ViewPassword'])->name('view.password');
        Route::get('/print/tender/{id}', 'ParticipateController@participate_print')->name('print.participate');



        Route::get('/tender/{id}/participants', [TenderController::class, 'showParticipants'])->name('tender.showParticipants');
        // Route::get('/participate/draft', [AdminParticipateController::class, 'draft'])->name('admin.participate.draft');


        Route::get('/tenders', [TenderController::class, 'getUniqueYears'])->name('tenders.index');
        Route::get('/tenders/{year}', [TenderController::class, 'getTendersByYear'])->name('tenders.year');
        Route::get('/participate-year/{year}', [AdminParticipateController::class, 'getPreticipateByYear'])->name('participate.year');

    });
});

// ================================user AND ROUTE=============
Route::namespace('App\Http\Controllers')->group(
    function () {
        Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
            Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
            Route::get('/user-mangement', [UserSupplierController::class, 'index'])->name('user-mangement');
            Route::get('/live-tender', [UserDashboardController::class, 'liveTender'])->name('live-tender');
            Route::get('/latest-tender', [UserDashboardController::class, 'latestTender'])->name('latest-tender');
            Route::get('/live-tender/{id}', [UserDashboardController::class, 'liveTenderId'])->name('live-tender.show');
            Route::get('/participate-tender/{id}', [UserDashboardController::class, 'ParticipateTender'])->name('participate-tender');

            Route::get('/my-tender', [ParticipateController::class, 'index'])->name('my-tender');
            Route::get('/award-tender', [ParticipateController::class, 'AwardTenderList'])->name('award-tender');
            Route::get('/close-tender', [AdminParticipateController::class, 'CloseTender'])->name('close-tender');




            Route::get('/change-password', [UserDashboardController::class, 'showChangePasswordForm'])->name('change-password');
            Route::post('/change-password', [UserDashboardController::class, 'changePassword'])->name('change-password.post');
            Route::get('/print/tender/{id}', 'ParticipateController@show')->name('print.participate');

            Route::resource('supplier', 'SupplierController');
            Route::get('/user/supplier', 'SupplierController@show');
            Route::resource('participate', 'ParticipateController');
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
