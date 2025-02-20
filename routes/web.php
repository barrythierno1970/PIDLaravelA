<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RepresentationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\RoleController;
use App\Models\Locality;

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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/artist', [ArtistController::class, 'index'])->middleware(['auth'])->name('artist_index');
Route::get('/artist/{id}', [ArtistController::class, 'show'])
	->where('id', '[0-9]+')->middleware(['auth'])->name('artist_show');
Route::get('/artist/edit/{id}', [ArtistController::class, 'edit'])
	->where('id', '[0-9]+')->middleware(['auth'])->name('artist_edit');
Route::put('/artist/{id}', [ArtistController::class, 'update'])
	->where('id', '[0-9]+')->middleware(['auth'])->name('artist_update');


Route::get('/type', [TypeController::class, 'index'])->middleware(['auth'])->name('type_index');
Route::get('/type/{id}', [TypeController::class, 'show'])
        ->where('id', '[0-9]+')->middleware(['auth'])->name('type_show');
Route::get('/type/edit/{id}', [ArtistController::class, 'edit'])
        ->where('id', '[0-9]+')->middleware(['auth'])->name('type_edit');
Route::put('/type/{id}', [ArtistController::class, 'update'])
        ->where('id', '[0-9]+')->middleware(['auth'])->name('type_update');


Route::get('/role', [RoleController::class, 'index'])->middleware(['auth'])->name('role_index');
Route::get('/role/{id}', [RoleController::class, 'show'])
        ->where('id', '[0-9]+')->middleware(['auth'])->name('role_show');

Route::get('/locality', [LocalityController::class, 'index'])->middleware(['auth'])->name('locality_index');
Route::get('/locality/{id}', [LocalityController::class, 'show'])
        ->where('id', '[0-9]+')->middleware(['auth'])->name('locality_show');

Route::get('/location', [LocationController::class, 'index'])->middleware(['auth'])->name('location_index');
Route::get('/location/{id}', [LocationController::class, 'show'])
        ->where('id', '[0-9]+')->middleware(['auth'])->name('location_show');

Route::get('/show', [ShowController::class, 'index'])->middleware(['auth'])->name('show_index');
Route::get('/show/{id}', [ShowController::class, 'show'])
        ->where('id', '[0-9]+')->middleware(['auth'])->name('show_show');

Route::get('/representation', [RepresentationController::class, 'index'])->middleware(['auth'])->name('representation_index');
Route::get('/representation/{id}', [RepresentationController::class, 'show'])
                ->where('id', '[0-9]+')->middleware(['auth'])->name('representation_show');

Route::get('/locality/edit/{id}', [LocalityController::class, 'edit'])->middleware(['auth'])->name('locality_edit');
Route::put('/locality/{id}', [LocalityController::class, 'update'])
        ->where('id', '[0-9]+')->middleware(['auth'])->name('locality_update');

Route::get('/reservation', [ReservationController::class, 'index'])->middleware(['auth'])->name('reservation_index'); // Ajout B
Route::get('/reservation/{id}', [ReservationController::class, 'show'])                                               // Ajout B
        ->where('id', '[0-9]+')->middleware(['auth'])->name('reservation_show');              // Ajout B
require __DIR__.'/auth.php';
