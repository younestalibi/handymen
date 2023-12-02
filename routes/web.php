<?php

use App\Http\Controllers\AgreementController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('home');
});

Auth::routes();


//Customer
Route::group(['prefix' => 'home'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/services', [HomeController::class, 'services'])->name('home-services');
    Route::get('/service/{id}', [HomeController::class, 'serviceDetail'])->name('home-service-detail');
    Route::get('/contact', [HomeController::class, 'contact'])->name('home-contact');
    Route::get('/about-us', [HomeController::class, 'about'])->name('home-about');
});

//administrator
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    //home-admin
    Route::get("/",[HomeController::class, 'admin'])->name('home-admin');

    //profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('index', [ProfileController::class, 'index'])->name('profile_index');
        Route::post('update', [ProfileController::class, 'update'])->name('profile_update');
        Route::post('UpdateImg', [ProfileController::class, 'UpdateImg'])->name('profile_UpdateImg');
        Route::post('UpdatePass', [ProfileController::class, 'UpdatePass'])->name('profile_UpdatePass');
        Route::post('destroy', [ProfileController::class, 'destroy'])->name('user_destroy');
    });

    //users
    Route::group(['prefix' => 'users'], function () {
        Route::get('index', [UserController::class, 'index'])->name('users_index');
        Route::get('destroy/{id}', [UserController::class, 'destroy'])->name('users_destroy');
    });

    //service
    Route::group(['prefix' => 'services'], function () {
        Route::get('index', [ServiceController::class, 'index'])->name('service-index');
        Route::get('create', [ServiceController::class, 'create'])->name('service-create');
        Route::get('edit/{id}', [ServiceController::class, 'edit'])->name('service-edit');
        Route::post('destroy/{id}', [ServiceController::class, 'destroy'])->name('service-destroy');
        Route::post('store', [ServiceController::class, 'store'])->name('service-store');
        Route::post('update', [ServiceController::class, 'update'])->name('service-update');
    });
    //categorie
    Route::group(['prefix' => 'categories'], function () {
        Route::get('index', [CategoryController::class, 'index'])->name('categorie-index');
        Route::get('create', [CategoryController::class, 'create'])->name('categorie-create');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('categorie-edit');
        Route::post('destroy/{id}', [CategoryController::class, 'destroy'])->name('categorie-destroy');
        Route::post('store', [CategoryController::class, 'store'])->name('categorie-store');
        Route::post('update', [CategoryController::class, 'update'])->name('categorie-update');
    });
    
    //booking 
    Route::group(['prefix' => 'bookings'], function () {
        Route::get('index', [BookingController::class, 'index'])->name('booking-index');
        Route::get('create', [BookingController::class, 'create'])->name('booking-create');
        Route::get('edit/{id}', [BookingController::class, 'edit'])->name('booking-edit');
        Route::post('destroy/{id}', [BookingController::class, 'destroy'])->name('booking-destroy');
        Route::post('store', [BookingController::class, 'store'])->name('booking-store')->withoutMiddleware(['auth']);
        Route::post('urgent', [BookingController::class, 'urgent'])->name('booking-urgent')->withoutMiddleware(['auth']);
        Route::post('update', [BookingController::class, 'update'])->name('booking-update');
    });


});

