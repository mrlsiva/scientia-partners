<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\foundersController;
use App\Http\Controllers\auth\investorsController;
use App\Http\Controllers\auth\partnersController;
use App\Http\Controllers\founderController;
use App\Http\Controllers\prospectController;
use App\Http\Controllers\serviceRequestController;


Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!!!";
 });

Route::get('/phpmyinfo', function () {
    phpinfo(); 
})->name('phpmyinfo');

//Home
Route::get('/',[homeController::class, 'home'])->name('home');

//Login
Route::get('/login',[loginController::class, 'login'])->name('login');
Route::post('/sign_in',[loginController::class, 'sign_in'])->name('sign_in');

// Sign_up
Route::get('founders/sign_up',[foundersController::class, 'sign_up'])->name('founders.sign_up');
Route::get('investors/sign_up',[investorsController::class, 'sign_up'])->name('investors.sign_up');
Route::get('partners/sign_up',[partnersController::class, 'sign_up'])->name('partners.sign_up');

//Founders
Route::prefix('founders')->group(function () {
    Route::name('founders.')->group(function () {

        // Route::group(['middleware' => ['auth']], function () {
    
            Route::get('/dashboard',[founderController::class, 'dashboard'])->name('dashboard');
            Route::get('/prospects',[prospectController::class, 'index'])->name('prospects');
            Route::get('/service_requests',[serviceRequestController::class, 'index'])->name('service_requests');
        // });
    });
});
//Founders End

//Investors
Route::prefix('investors')->group(function () {
});
//Investors End

//Partners
Route::prefix('partners')->group(function () {   
});
//Partners End
