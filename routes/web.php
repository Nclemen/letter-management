<?php

use App\Http\Controllers\LetterController;
use App\Http\Controllers\RecipientController;
use App\Http\Controllers\SenderController;
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

Route::resource('recipients', RecipientController::class);
Route::resource('senders', SenderController::class);
Route::resource('letters', LetterController::class);