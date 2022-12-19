<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;


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

Route::get('market', [WebController::class, 'market'])->name('market');
Route::get('paracetamol', [WebController::class, 'paracetamol'])->name('paracetamol');
Route::get('admin', [WebController::class, 'admin'])->name('admin');
Route::get('sales', [WebController::class, 'sales'])->name('sales');
Route::get('service', [WebController::class, 'service'])->name('service');
Route::get('adminservice', [WebController::class, 'adminservice'])->name('adminservice');
require __DIR__.'/auth.php';
