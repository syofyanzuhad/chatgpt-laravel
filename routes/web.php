<?php

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

Route::get('/chatgpt', [App\Http\Controllers\ChatGPTController::class, 'index']);
Route::post('/chatgpt', [App\Http\Controllers\ChatGPTController::class, 'chat'])->name('chatgpt.chat');