<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeLuarController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.dashboard');
});

//halaman CRUD user
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/{id}/show', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/{id}/delete', [UserController::class, 'destory']);

//halaman CRUD barang
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/tambah', [BarangController::class, 'create']);
Route::post('/barang/simpan', [BarangController::class, 'store']);
Route::get('/barang/{id}/show', [BarangController::class, 'show']);
Route::post('/barang/{id}/update', [BarangController::class, 'update']);
Route::get('/barang/{id}/delete', [BarangController::class, 'destory']);

//halaman CRUD jenis
Route::get('/jenis', [JenisController::class, 'index']);
Route::get('/jenis/tambah', [JenisController::class, 'create']);
Route::post('/jenis/simpan', [JenisController::class, 'store']);
Route::get('/jenis/{id}/show', [JenisController::class, 'show']);
Route::post('/jenis/{id}/update', [JenisController::class, 'update']);

//halaman CRUD supplier
Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/tambah', [SupplierController::class, 'create']);
Route::post('/supplier/simpan', [SupplierController::class, 'store']);
Route::get('/supplier/{id}/show', [SupplierController::class, 'show']);
Route::post('/supplier/{id}/update', [SupplierController::class, 'update']);

//halaman CRUD barang_masuk
Route::get('/barang_masuk', [BarangMasukController::class, 'index']);
Route::get('/barang_masuk/tambah', [BarangMasukController::class, 'create']);
Route::post('/barang_masuk/simpan', [BarangMasukController::class, 'store']);

//halaman CRUD barang_keluar
Route::get('/barang_keluar', [BarangKeluarController::class, 'index']);
Route::get('/barang_keluar/tambah', [BarangKeluarController::class, 'create']);
Route::post('/barang_masuk/simpan', [BarangKeluarController::class, 'store']);