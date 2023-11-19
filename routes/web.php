<?php

use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BijouController;
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
      return view('accueil');     })->name('accueil');

Route::get('/welcome', function () { 
      return view('welcome');     })->name('welcome');

Route::get('/apropos', function () { 
      return view('apropos');     })->name('apropos');

// Display de bijoux
Route::get('/boutique', [BijouController::class, 'index'])->name('boutique');
Route::get('/bijoux/{slug}', [BijouController::class,'show'])->name('bijou');

//Laravel Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Panier
Route::get('/panier',[PanierController::class,'index'])->name('panier');
Route::post('/panier-add',[PanierController::class,'addToCart'])->name('ajouterProduitPanier');
Route::put('/panier-update/{rowId}',[PanierController::class,'updateCart'])->name('updatePanier');
Route::delete('/panier-delete/{rowId}',[PanierController::class,'deleteItem'])->name('retirerPanier');

//Espace Client :
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
