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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/contracts', App\Http\Controllers\ContractController::class);
Route::resource('/templates', App\Http\Controllers\TemplateController::class);
Route::resource('/components', App\Http\Controllers\ComponentController::class);
Route::resource('/contract_components', App\Http\Controllers\ComponentContractController::class);
Route::resource('/components_template', App\Http\Controllers\ComponentTemplateController::class);
Route::get('/downloadpdf/{id}', [App\Http\Controllers\ContractController::class, 'downloadpdf'])->name('downloadpdf');
