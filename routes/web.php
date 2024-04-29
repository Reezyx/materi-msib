<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
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

Route::get('/cafe-amandemy', [ProductController::class, 'index']);

// Route::get('/form-request', [UserController::class, 'getForm'])->name('get_form');
// Route::post('/send-request', [UserController::class, 'sendRequest'])->name('send_request');

Route::get('/form-request', [TugasController::class, 'getForm'])->name('get_form');
Route::post('/post-request', [TugasController::class, 'postForm'])->name('post_form');