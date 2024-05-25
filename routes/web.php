<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/about', function(){
    return Inertia('Players/Home');
});

Route::get('/player', [PlayerController::class, 'create']);

Route::get('/player-list', [PlayerController::class, 'index']);

Route::get('/players/{players}', [PlayerController::class, 'show']);
Route::put('/players/{player}', [PlayerController::class, 'update']);
Route::delete('/players/{player}', [PlayerController::class, 'destroy']);

Route::get('/games', function() {
    return Inertia('Games/Games');
});

Route::resource('/Record', PlayerController::class);   

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/home', function(){
        return Inertia('Players/Home');
    });

    Route::get('/list', [PlayerController::class, 'create']);

    Route::get('/record', [PlayerController::class, 'index']);

    Route::get('/players/{players}', [PlayerController::class, 'show']);
    Route::put('/players/{player}', [PlayerController::class, 'update']);
    Route::delete('/players/{player}', [PlayerController::class, 'destroy']);

    Route::resource('/Record', PlayerController::class);  

    Route::get('/games', function() {
        return Inertia('Games/Games');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
