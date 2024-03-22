<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/produk-korporasi', function () {
    return view('admin.data_produk_korporasi');
});

Route::get('/produk-retail', function () {
    return view('admin.data_produk_retail');
});

Route::get('/edit-produkKorporasi', function () {
    return view('admin.edit_produk_korporasi');
});

Route::get('/edit-produkRetail', function () {
    return view('admin.edit_produk_retail');
});

Route::post('/submit-form', [MessageController::class, 'store'])->name('submit-form');
Route::get('/', function () {
    return view('welcome');
})->name('home');
