<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\Cardcontents;

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

Route::get('/', [StaticController::class, "index"])->name('home');
Route::get("/settings", [StaticController::class, "settings"])->name('settings');
Route::get("/contact", [StaticController::class, "contact"])->name('contact');

Route::resource("/computers", Cardcontents::class);
