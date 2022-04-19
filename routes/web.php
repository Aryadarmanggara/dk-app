<?php


use App\Http\Controllers\AparaturController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PkkController;
use App\Http\Controllers\BUMDesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\VisiMisiController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [IndexController::class, 'index'])->name('index.home');

Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // route profile desa
    Route::resource('identitas', IdentitasController::class);
    Route::resource('sejarah', SejarahController::class);
    Route::resource('ulasan', UlasanController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('visimisi', VisiMisiController::class);

    // route organisasi desa
    Route::resource('aparatur_desa', AparaturController::class);
    Route::resource('pkk', PkkController::class);
    Route::resource('bumdes', BUMDesController::class);

    //route post
    Route::resource('berita', BeritaController::class);
    Route::resource('kategori', KategoriController::class);

    // route main feature
    Route::resource('penduduk', PendudukController::class);
    Route::resource('galeri', GaleriController::class);
});



Auth::routes();
