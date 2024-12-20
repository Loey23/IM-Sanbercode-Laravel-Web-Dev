<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\castController;

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

Route::get('/master',function(){
    return view('layouts.master');
});
route::get('/table',function(){
    return view('page.table');
});
Route::get('/data-table', function(){
    return view('page.data-table');
});

//crud cast
Route::get('/cast', [castController::class, 'index']);
Route::get('/cast/create', [castController::class, 'create']);

//Route untuk menyimpan ke database
Route::post('/cast', [castController::class, 'store']);

//Route menampilkan data berdasarkan id
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

//Route update data
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

//Route Delete data
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);