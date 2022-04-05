<?php


use App\Http\Controllers\AparaturController;
use App\Http\Controllers\PkkController;
use App\Http\Controllers\BUMDesController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\SejarahController;
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
    return view('admin.v_dashboard');
});



// route profile desa
Route::resource('identitas', IdentitasController::class);
Route::resource('sejarah', SejarahController::class);

// route organisasi desa
Route::resource('aparatur_desa', AparaturController::class);
Route::resource('pkk', PkkController::class);
Route::resource('bumdes', BUMDesController::class);

Route::resource('register', 'RegisterController::class');
