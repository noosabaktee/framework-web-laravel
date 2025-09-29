<?php

use App\Http\Controllers\Barang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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
    Route::get('/rahasia', function () {return "Rahasia bossku";})
    ->middleware(['auth', 'verified', 'RoleCheck:admin'])
    ->name('dashboard');
    Route::get('/product/{id}',  [ProductController::class, 'index'])
    ->middleware(['auth', 'verified', 'RoleCheck:admin,owner'])
    ->name('product');
});

Route::get('/produk/{nama}',  [ProductController::class, 'show']);
Route::get('/route_count/{id}', [Barang::class,'show']);
Route::get('/uts', [UtsController::class,'index'])->name('uts');

require __DIR__.'/auth.php';
