<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
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
    return view('welcome');
})->name('welcome');
Route::post('/',[DataController::class,"create"]);
Route::get('/' ,[DataController::class,"index"])->name('index');
Route::get('edit/{id}',[DataController::class,"edit"])->name('edit');
Route::put('edit/{id}',[DataController::class,"update"]);
Route::get('delete/{id}',[DataController::class,"destroy"]);
Route::get('delete/{id}',[DataController::class,"destroy"])->name('delete');
