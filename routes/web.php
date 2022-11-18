<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    SejarahController, DashboardController
};
use App\Http\Controllers\{
    ProfilController, HomeController
};

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
Route::get('/home',                                                [HomeController::class, 'index'])->name('home');
Route::get('/profil/sejarah-fst/',                                 [ProfilController::class, 'sejarah'])->name('guest.sejarah');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('admin/profil/sejarah-fst',                           SejarahController::class);                          //index
    // Route::resource('/admin/profil/Visi-Misi-&-Tujuan-fst/',           VisiMisiController::class);                          //index
});
// profil
// Route::get('profil/visi-misi-tujuan-fst',           [ProfilController::class, 'visiMisiIndex']);            //index
// Route::get('profil/staff-dosen',                    [ProfilController::class, 'staffDosenIndex']);          //index
// Route::get('profil/tenaga-kependidikan',            [ProfilController::class, 'tendikIndex']);              //index
// Route::get('profil/pimpinan-fakultas',              [ProfilController::class, 'pimFakIndex']);              //index
// Route::get('profil/identitas-fst',                  [ProfilController::class, 'identitasIndex']);           //index
// Route::get('profil/struktur-organisasi',            [ProfilController::class, 'strukOrgIndex']);            //index

// // akademik
// Route::get('akademik/panduan-pendidikan-fst',       [AkademikController::class, 'panPendikIndex']);         //index
// Route::get('akademik/program-studi',                [AkademikController::class, 'progStuIndex']);           //index
// Route::get('akademik/kalender-akademik',            [AkademikController::class, 'kalAkIndex']);             //index
// Route::get('akademik/kemahasiswaan',                [AkademikController::class, 'KemHasIndex']);            //index

// // penelitian
// Route::resource('penelitian',                       PenelitianController::class);                           //resources

// // berita
// Route::get('berita/terkini',                        [BeritaController::class, 'berTerIndex']);              //index
// Route::get('berita/agenda',                         [BeritaController::class, 'berAgenIndex']);             //index
// Route::get('berita/laporan',                        [BeritaController::class, 'berLapIndex']);              //index