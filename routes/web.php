<?php

use App\Http\Controllers\AlaamController;
use App\Http\Controllers\AparaturController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PkkController;
use App\Http\Controllers\BUMDesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailAlamController;
use App\Http\Controllers\DetailBlogController;
use App\Http\Controllers\DetailKerajinanController;
use App\Http\Controllers\DetailKulinerController;
use App\Http\Controllers\DetailPariwisataController;
use App\Http\Controllers\DetailPengumumanController;
use App\Http\Controllers\DetailPerikananController;
use App\Http\Controllers\DetailPerkebunanController;
use App\Http\Controllers\DetailSeniBudayaController;
use App\Http\Controllers\DetailUsahaMikroController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KarangTarunaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KerajinanController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\LinmasController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PerikananController;
use App\Http\Controllers\PerkebunanController;
use App\Http\Controllers\PublikAlamController;
use App\Http\Controllers\PublikBeritaController;
use App\Http\Controllers\PublikBumdesaController;
use App\Http\Controllers\PublikIdentitasController;
use App\Http\Controllers\PublikKarangTarunaController;
use App\Http\Controllers\PublikKerajinanController;
use App\Http\Controllers\PublikKulinerController;
use App\Http\Controllers\PublikLinmasController;
use App\Http\Controllers\PublikPariwisataController;
use App\Http\Controllers\PublikPengumumanController;
use App\Http\Controllers\PublikPerangkatController;
use App\Http\Controllers\PublikPerikananController;
use App\Http\Controllers\PublikPerkebunanController;
use App\Http\Controllers\PublikPkkController;
use App\Http\Controllers\PublikSejarahController;
use App\Http\Controllers\PublikSeniBudayaController;
use App\Http\Controllers\PublikUsahaMikroController;
use App\Http\Controllers\PublikVisiMisiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SeniBudayaController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\UsahaMikroController;
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
*/;

Route::get('/', [IndexController::class, 'index'])->name('index.home');
// Route::get('berita/{slug}', [IndexController::class, 'show'])->name('show');

// route profile desa
Route::get('/sejarah_desa', [PublikSejarahController::class, 'index'])->name('sejarah_desa');
Route::get('/identitas_desa', [PublikIdentitasController::class, 'index'])->name('identitas_desa');
Route::get('/pvisimisi', [PublikVisiMisiController::class, 'index'])->name('pvisimisi');

// route organisasi desa
Route::get('/publik_pkk', [PublikPkkController::class, 'index'])->name('publik_pkk');
Route::get('/publik_bumdesa', [PublikBumdesaController::class, 'index'])->name('publik_bumdesa');
Route::get('/publik_linmas', [PublikLinmasController::class, 'index'])->name('publik_linmas');
Route::get('/publik_karang_taruna', [PublikKarangTarunaController::class, 'index'])->name('publik_karang_taruna');
Route::resource('perangkat-desa', PublikPerangkatController::class);

// route post
Route::get('/publik_pengumuman', [PublikPengumumanController::class, 'index'])->name('publik_pengumuman');
Route::get('/detail_pengumuman/{slug}', [DetailPengumumanController::class, 'index'])->name('detail_pengumuman');
Route::get('/publik_berita', [PublikBeritaController::class, 'index'])->name('publik_berita');
Route::get('/detail_blog/{slug}', [DetailBlogController::class, 'index'])->name('detail_blog');

// route potensi desa
Route::get('/publik_pariwisata', [PublikPariwisataController::class, 'index'])->name('publik_pariwisata');
Route::get('publik_pariwisata/detail_pariwisata/{slug}', [DetailPariwisataController::class, 'index'])->name('detail_pariwisata');
Route::get('/publik_senibudaya', [PublikSeniBudayaController::class, 'index'])->name('publik_senibudaya');
Route::get('publik_senibudaya/detail_senibudaya/{slug}', [DetailSeniBudayaController::class, 'index'])->name('detail_senibudaya');
Route::get('/publik_alam', [PublikAlamController::class, 'index'])->name('publik_alam');
Route::get('publik_alam/detail_alam/{slug}', [DetailAlamController::class, 'index'])->name('detail_alam');
Route::get('/publik_kuliner', [PublikKulinerController::class, 'index'])->name('publik_kuliner');
Route::get('publik_kuliner/detail_kuliner/{slug}', [DetailKulinerController::class, 'index'])->name('detail_kuliner');
Route::get('/publik_perkebunan', [PublikPerkebunanController::class, 'index'])->name('publik_perkebunan');
Route::get('publik_perkebunan/detail_perkebunan/{slug}', [DetailPerkebunanController::class, 'index'])->name('detail_perkebunan');
Route::get('/publik_perikanan', [PublikPerikananController::class, 'index'])->name('publik_perikanan');
Route::get('publik_perikanan/detail_perikanan/{slug}', [DetailPerikananController::class, 'index'])->name('detail_perikanan');
Route::get('/publik_kerajianan', [PublikKerajinanController::class, 'index'])->name('publik_kerajianan');
Route::get('publik_kerajianan/detail_kerajinan/{slug}', [DetailKerajinanController::class, 'index'])->name('detail_kerajinan');
Route::get('/publik_usahamikro', [PublikUsahaMikroController::class, 'index'])->name('publik_usahamikro');
Route::get('publik_usahamikro/detail_usahamikro/{slug}', [DetailUsahaMikroController::class, 'index'])->name('detail_usahamikro');

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
    Route::resource('karang_taruna', KarangTarunaController::class);
    Route::resource('linmas', LinmasController::class);

    //route post
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('kategori', KategoriController::class);

    // route main feature
    Route::resource('penduduk', PendudukController::class);
    Route::resource('galeri', GaleriController::class);

    // route potensi desa
    Route::resource('pariwisata', PariwisataController::class);
    Route::resource('alam', AlaamController::class);
    Route::resource('senibudaya', SeniBudayaController::class);
    Route::resource('perkebunan', PerkebunanController::class);
    Route::resource('kuliner', KulinerController::class);
    Route::resource('perikanan', PerikananController::class);
    Route::resource('kerajinan', KerajinanController::class);
    Route::resource('usahamikro', UsahaMikroController::class);
});



Auth::routes();
