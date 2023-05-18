<?php

use App\Http\Controllers\InfaqController;
use App\Http\Controllers\ProfileController;
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
    return view('home');
});

Route::get('/infaqs', [InfaqController::class, 'index'])->name('infaqs.index')->middleware('auth');
Route::get('/infaqs/create', [InfaqController::class, 'create'])->name('infaqs.create')->middleware('auth');
Route::post('/infaqs', [InfaqController::class, 'store'])->name('infaqs.store')->middleware('auth');
Route::get('/infaqs/{id}/edit', [InfaqController::class, 'edit'])->name('infaqs.edit')->middleware('auth');
Route::put('/infaqs/{id}', [InfaqController::class, 'update'])->name('infaqs.update')->middleware('auth');
Route::delete('/infaqs/{id}', [InfaqController::class, 'destroy'])->name('infaq.destroy')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
