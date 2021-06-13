<?php

use App\Http\Controllers\BarangController;
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

Route::get('/barang', [BarangController::class, 'index'])
    ->name('barang.index');

Route::get('/barang/tambah', [BarangController::class, 'create'])
    ->name('barang.tambah');

Route::post('/barang/simpan', [BarangController::class, 'store'])
    ->name('barang.simpan');

Route::get('/barang/edit/{barang}', [BarangController::class, 'edit'])
    ->name('barang.edit');

Route::post('/barang/update/{barang}', [BarangController::class, 'update'])
    ->name('barang.update');

Route::get('/barang/hapus/{barang}', [BarangController::class, 'destroy'])
    ->name('barang.hapus');