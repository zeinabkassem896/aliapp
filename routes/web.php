<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ClientController;



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


Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
Route::post('/addclient', [ClientController::class, 'addClientPost'])->name('add-client-post');

Route::get('/addclient', [ClientController::class, 'addClient'])->name('add-client');
Route::post('/addclient', [ClientController::class, 'addClientPost'])->name('add-client-post');

// Route::get('/', [TestController::class, 'index']);
// Route::get('/', [TestController::class, 'index']);
// Route::get('/', [TestController::class, 'index']);