<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobAppleController;

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

Route::get('/job-listings', [JobController::class, 'index'])->name('Jobs.index');
Route::get('/job-apply/{id}', [JobAppleController::class, 'create'])->name('Jobs.apple'); 
Route::post('/job-applied', [JobAppleController::class, 'store'])->name('Jobs.store'); 