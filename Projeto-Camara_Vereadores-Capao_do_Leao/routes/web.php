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

Route::get('/', function () {
    return view('home');
});
Route::middleware('auth')->prefix('/auth')->group(function (){
    Route::resource('material', 'App\Http\Controllers\MaterialController');
    Route::resource('vereador', 'App\Http\Controllers\VereadorController');
    Route::resource('fornecedor', 'App\Http\Controllers\FornecedorController');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::auth();

