<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\foundersController;
use App\Http\Controllers\auth\investorsController;
use App\Http\Controllers\auth\partnersController;
use App\Http\Controllers\auth\loginController;

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

//Login
Route::get('/sign_in',[loginController::class, 'sign_in'])->name('sign_in');

//Founders
Route::prefix('founders')->group(function () {

    Route::get('/sign_up',[foundersController::class, 'sign_up'])->name('sign_up');
});
//Founders End

//Investors
Route::prefix('investors')->group(function () {

    Route::get('/sign_up',[investorsController::class, 'sign_up'])->name('sign_up');
});
//Investors End

//Partners
Route::prefix('partners')->group(function () {

    Route::get('/sign_up',[partnersController::class, 'sign_up'])->name('sign_up');
});
//Partners End
