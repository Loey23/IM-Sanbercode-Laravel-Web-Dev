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

Route::get('/master',function(){
    return view('layouts.master');
});
route::get('/table',function(){
    return view('page.table');
});
Route::get('/data-table', function(){
    return view('page.data-table');
});
