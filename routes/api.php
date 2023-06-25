<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    Route::get('/users', 'UserController@index'); // Mendapatkan semua pengguna
Route::post('/users', 'UserController@store'); // Membuat pengguna baru
Route::get('/users/{id}', 'UserController@show'); // Mendapatkan pengguna tertentu
Route::put('/users/{id}', 'UserController@update'); // Memperbarui pengguna
Route::delete('/users/{id}', 'UserController@destroy'); // Menghapus pengguna

});

