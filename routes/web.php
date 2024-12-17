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
use App\Http\Controllers\pitchDeckController;
use App\Http\Controllers\investorDatabaseController;
use App\Http\Controllers\scientiaLibraryController;
use App\Http\Controllers\coreController;
use App\Http\Controllers\alliedController;


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

            //Prospects
            Route::get('/prospects',[prospectController::class, 'index'])->name('prospects');

            //Service Request
            Route::get('/service_requests',[serviceRequestController::class, 'index'])->name('service_requests');

            //Pitch Deck
            Route::prefix('pitch_decks')->group(function () {
                Route::name('pitch_decks.')->group(function () {
                    Route::get('/create',[pitchDeckController::class, 'create'])->name('create');
                    Route::get('/template',[pitchDeckController::class, 'template'])->name('template');
                    Route::get('/review',[pitchDeckController::class, 'review'])->name('review');
                    Route::get('/status',[pitchDeckController::class, 'status'])->name('status');
                    Route::get('/outreach_email',[pitchDeckController::class, 'outreach_email'])->name('outreach_email');
                    Route::get('/cv',[pitchDeckController::class, 'cv'])->name('cv');
                });
            });

            //Investor Database
            Route::prefix('databases')->group(function () {
                Route::name('databases.')->group(function () {
                    Route::get('/free_db',[investorDatabaseController::class, 'free_db'])->name('free_db');
                    Route::get('/full_db',[investorDatabaseController::class, 'full_db'])->name('full_db');
                    Route::get('/addition_to_db',[investorDatabaseController::class, 'addition_to_db'])->name('addition_to_db');
                });
            });

            //Scientia Library
            Route::prefix('scientia_libraries')->group(function () {
                Route::name('scientia_libraries.')->group(function () {
                    Route::get('/deck_designer',[scientiaLibraryController::class, 'deck_designer'])->name('deck_designer');
                    Route::get('/deck_template',[scientiaLibraryController::class, 'deck_template'])->name('deck_template');
                    Route::get('/financal_modeling',[scientiaLibraryController::class, 'financal_modeling'])->name('financal_modeling');
                    Route::get('/blog',[scientiaLibraryController::class, 'blog'])->name('blog');
                    Route::get('/podcast',[scientiaLibraryController::class, 'podcast'])->name('podcast');
                    Route::get('/YT',[scientiaLibraryController::class, 'YT'])->name('YT');
                    Route::get('/market_watch',[scientiaLibraryController::class, 'market_watch'])->name('market_watch');
                });
            });

            //Core Service
            Route::prefix('core_services')->group(function () {
                Route::name('core_services.')->group(function () {
                    Route::get('/pitch_deck',[coreController::class, 'pitch_deck'])->name('pitch_deck');
                    Route::get('/financial_modeling',[coreController::class, 'financial_modeling'])->name('financial_modeling');
                    Route::get('/market_research',[coreController::class, 'market_research'])->name('market_research');
                    Route::get('/comprehensive',[coreController::class, 'comprehensive'])->name('comprehensive');
                });
            });

            //Allied Service
            Route::prefix('allied_services')->group(function () {
                Route::name('allied_services.')->group(function () {
                    Route::get('/legal',[alliedController::class, 'legal'])->name('legal');
                    Route::get('/regulatory',[alliedController::class, 'regulatory'])->name('regulatory');
                    Route::get('/copyright',[alliedController::class, 'copyright'])->name('copyright');
                    Route::get('/development',[alliedController::class, 'development'])->name('development');
                    Route::get('/accounting',[alliedController::class, 'accounting'])->name('accounting');
                });
            });

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
