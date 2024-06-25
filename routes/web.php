<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockManagementController;
use Illuminate\Support\Facades\Route;

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

// Route::get('stock_management/read', function () {
//     return view('stock_management/read');
// })->middleware(['auth', 'verified'])->name('stock_management.read');

//stock management routes

//read
Route::get('stock_management/read', ([StockManagementController::class, 'read']))->middleware(['auth', 'verified'])
->name('stock_management.read');

//delete
Route::delete('/stock_management/read/{productId}', [StockManagementController::class, 'destroy'])->name('stock_management.destroy');

//update view
Route::get('stock_management/update/{productId}', ([StockManagementController::class, 'update']))->middleware(['auth', 'verified'])
->name('stock_management.update');

//edit function
Route::post('/stock_management/edit', [StockManagementController::class, 'edit'])->name('stock_management.edit');

//create view
//update view
Route::get('stock_management/create', ([StockManagementController::class, 'create']))->middleware(['auth', 'verified'])
    ->name('stock_management.create');

//store function
Route::post('/stock_management/store', [StockManagementController::class, 'store'])->name('stock_management.store');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
