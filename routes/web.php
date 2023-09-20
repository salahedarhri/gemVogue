<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JewelryProductController;
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


Route::get('/', function () {   return view('accueil');     });
Route::get('/welcome', function () {   return view('welcome');     });
Route::get('/apropos', function () {   return view('apropos');     });

Route::get('/boutique', [JewelryProductController::class, 'index'])
  ->name('boutique');
Route::get('/bijoux/{id}', [JewelryProductController::class,'show'])
  ->name('bijou');

//Laravel Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
