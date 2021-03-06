<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\StaticController::class, 'index'])->name('index');

Route::get('/contact',[\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('/contact',[\App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

Route::get('/gsb',[\App\Http\Controllers\StaticController::class, 'gsb'])->name('gsb');
Route::get('/stagewess',[\App\Http\Controllers\StaticController::class, 'stagewess'])->name('stagewess');
Route::get('/construction',[\App\Http\Controllers\StaticController::class, 'construction'])->name('construction');
Route::get('/veilletech',[\App\Http\Controllers\StaticController::class, 'veilletech'])->name('veilletech');
Route::get('/applicsharp',[\App\Http\Controllers\StaticController::class, 'applicsharp'])->name('applicsharp');
Route::get('/stage2',[\App\Http\Controllers\StaticController::class, 'stage2'])->name('stage2');
Route::get('/engagement',[\App\Http\Controllers\StaticController::class, 'engagement'])->name('engagement');
