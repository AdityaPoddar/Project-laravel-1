<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CdController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\NewsletterController;

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
/**
 * Mutliple routes were created 
 * Some consist of controller 
 * Middleware was added
 * Middleware Group called 'Guard' was created
 * All the Pages related to admin falls under guard middleware group
 * different http request were used suchas delete , post, put, get
 * All the pages for regular user were also given a route
 */



// Route::get('for the url', function () or controller can be used {
//     return view('which view you want to return');
// });

// Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/categories', function () {
    return view('category');
})->middleware(['auth'])->name('categories');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/homepage', function () {
//     return view('homepage');
// });


Route::get('/userbook', [BookController::class , 'Usershow'] 

)->name('userbook');
Route::get('/usercd', [CdController::class , 'Usershow'] 

);
Route::get('/usergame', [GameController::class , 'Usershow'] 

);

Route::post('/subscribe',[NewsletterController::class,'subscribe']);
Route::middleware(['guard'])->group(function()
{   
            Route::get('/book', [BookController::class , 'show'] 
                
            );
            Route::get('/cd', [CdController::class , 'show'] 

            );
            Route::get('/game', [GameController::class , 'show'] 

            );

            Route::get('/cd_add_values', function () {
                return view('admin.cd_add_values');
            });
            Route::get('/game_add_values', function () {
                return view('admin.game_add_values');
            });
            Route::get('/book_add_values', function () {
                return view('admin.book_add_values');
            });

            // Adding Data
            Route::post('/book',[BookController::class,'addBookData']);
            Route::post('/cd',[CdController::class,'addCdData']);
            Route::post('/game',[GameController::class,'addGameData']);

            // Deleting Data
            Route::get('/delete_game/{id}',[GameController::class,'deleteGameData']);
            Route::get('/delete_cd/{id}',[CdController::class,'deleteCdData']);
            // baaki hai
            Route::delete('/delete_book/{id}',[BookController::class,'deleteBookData']);


            // updating Data
            Route::get('/edit_book/{id}',[BookController::class,'updateShowBookData']);
            Route::put('/edit_book',[BookController::class,'updateBookData']);

            Route::get('/edit_game/{id}',[GameController::class,'updateShowGameData']);
            Route::post('/edit_game',[GameController::class,'updateGameData']);

            Route::get('/edit_cd/{id}',[CdController::class,'updateShowCdData']);
            Route::post('/edit_cd',[CdController::class,'updateCdData']);

});
