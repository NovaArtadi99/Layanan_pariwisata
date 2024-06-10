<?php

use App\Http\Controllers\FrontpageController;
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

Route::get('/', [FrontpageController::class, 'beranda'])->name('frontpage.beranda');
Route::get('/tentang', [FrontpageController::class, 'tentang'])->name('frontpage.tentang');
Route::get('/pariwisata', [FrontpageController::class, 'pariwisata'])->name('frontpage.pariwisata');
Route::get('/pariwisatadetail', [FrontpageController::class, 'pariwisatadetail'])->name('frontpage.pariwisatadetail');
Route::get('/kendaraan', [FrontpageController::class, 'kendaraan'])->name('frontpage.kendaraan');
Route::get('/kendaraandetail', [FrontpageController::class, 'kendaraandetail'])->name('frontpage.kendaraandetail');
Route::get('/penginapan', [FrontpageController::class, 'penginapan'])->name('frontpage.penginapan');
Route::get('/penginapandetail', [FrontpageController::class, 'penginapandetail'])->name('frontpage.penginapandetail');
Route::get('/pemandu', [FrontpageController::class, 'pemandu'])->name('frontpage.pemandu');
Route::get('/pemandudetail', [FrontpageController::class, 'pemandudetail'])->name('frontpage.pemandudetail');
Route::get('/paketlayanan', [FrontpageController::class, 'paketlayanan'])->name('frontpage.paketlayanan');
Route::get('/paketlayanandetail', [FrontpageController::class, 'paketlayanandetail'])->name('frontpage.paketlayanandetail');
Route::get('/blog', [FrontpageController::class, 'blog'])->name('frontpage.blog');
Route::get('/blogdetail', [FrontpageController::class, 'blogdetail'])->name('frontpage.blogdetail');
Route::get('/berita', [FrontpageController::class, 'berita'])->name('frontpage.berita');
Route::get('/beritadetail', [FrontpageController::class, 'beritadetail'])->name('frontpage.beritadetail');
Route::get('/kontak', [FrontpageController::class, 'kontak'])->name('frontpage.kontak');
Route::get('/ketentuan', [FrontpageController::class, 'ketentuan'])->name('frontpage.ketentuan');
Route::get('/kebijakan', [FrontpageController::class, 'kebijakan'])->name('frontpage.kebijakan');
