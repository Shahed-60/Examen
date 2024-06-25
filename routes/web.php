<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistributorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// link naar de index methode van de DistributorController en daar laat die ee view zien met de data van de distributors
Route::get('/distributors', [DistributorController::class, 'index'])->name('distributors.index');
// link naar de show methode van de DistributorController en daar laat die een view zien met de data van de distributor met het id dat je meegeeft
Route::get('/distributors/{id}', [DistributorController::class, 'show'])->name('distributors.show');
Route::get('/distributor/{id}', 'DistributorController@show')->name('distributor.show');
// link naar de create methode van de DistributorController en daar laat die een view zien met een formulier om een nieuwe distributor toe te voegen
Route::delete('/distributors/{distributor}', [DistributorController::class, 'destroy'])->name('distributors.destroy');
// Voor het ophalen van het bewerkingsformulier
Route::get('/distributors/{distributor}/edit', [DistributorController::class, 'edit'])->name('distributors.edit');
// Voor het verwerken van de wijzigingen
Route::put('/distributors/{distributor}', [DistributorController::class, 'update'])->name('distributors.update');
// Voor het opslaan van de nieuwe leverancier
Route::get('/distributors/create',  [DistributorController::class, 'create'])->name('distributors.create');
require __DIR__ . '/auth.php';
