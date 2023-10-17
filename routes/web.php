<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('admin/index');
});


Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori');
Route::get('/admin/tambah_kategori', [KategoriController::class, 'create']);
Route::post('/admin/simpan_kategori', [KategoriController::class, 'store']);
Route::get('/admin/{id_kategori}/edit_kategori', [KategoriController::class, 'edit']);
Route::delete('/admin/{id_kategori}', [KategoriController::class, 'destroy']);
Route::put('/admin/{id_kategori}', [KategoriController::class, 'update']);

Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin.produk');
Route::get('/admin/tambah_produk', [ProdukController::class, 'create']);
Route::post('/admin/simpan_produk', [ProdukController::class, 'store']);

//Route::get('/index', function () {
  //  return view('admin.index');
//})->middleware(['auth', 'verified'])->name('index');

//Route::middleware('auth')->group(function () {
  //  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//require __DIR__.'/auth.php';
