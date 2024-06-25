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
require __DIR__ . '/auth.php';
