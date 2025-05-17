<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/category')->group(function () {
    Route::get('/{category}', [ProductController::class, 'showCategory']);
});

Route::get('/user/{id}/name/{name}', [UserController2::class, 'profile']);

Route::get('/penjualan', [PenjualanController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);             // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);           // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);         // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);            // menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);            // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);       // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);          // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']);       // menghapus data user
});

Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);