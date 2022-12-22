<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    SejarahController, VisiMisiTujuanController, DashboardController, ProfilPimpinanController,
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

Route::redirect('/', '/home');
Route::get('/home',                                                [HomeController::class, 'index'])->name('home');
Route::get('/profil/sejarah-fst/',                                 [ProfilController::class, 'sejarah'])->name('guest.sejarah');
Route::get('/profil/visi-misi-tujuan-fst/',                        [ProfilController::class, 'visiMisiTujuanFst'])->name('guest.visi-misi');
Route::get('/profil/pimpinan-fst/',                                [ProfilController::class, 'pimpinanFst'])->name('guest.pimpinan');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',                                                                [DashboardController::class, 'index'])->name('dashboard');
    Route::get('sejarah-fst',                                                               [SejarahController::class, 'show'])->name('sejarah-fst.show');
    Route::get('visi-misi-tujuan-fst',                                                      [VisiMisiTujuanController::class, 'show'])->name('visi-misi-tujuan-fst.show');
    Route::get('pimpinan-fst',                                                              [ProfilPimpinanController::class, 'show'])->name('pimpinan-fst.show');
    // Route::get('',                                                        [SejarahController::class, 'show'])->name('sejarah-fst.show');
    // Route::get('',                                                        [SejarahController::class, 'show'])->name('sejarah-fst.show');
    // Route::get('',                                                        [SejarahController::class, 'show'])->name('sejarah-fst.show');
    // Route::get('',                                                        [SejarahController::class, 'show'])->name('sejarah-fst.show');
    Route::resource('admin/profil/sejarah-fst',                                             SejarahController::class)->except(['show']);
    Route::post('admin/profil/sejarah-fst/header',                                          [SejarahController::class, 'header'])->name('sejarah-fst.header');
    Route::resource('admin/profil/visi-misi-tujuan-fst',                                    VisiMisiTujuanController::class)->except(['show']);
    Route::post('admin/profil/visi-misi-tujuan-fst/header',                                 [VisiMisiTujuanController::class, 'header'])->name('visi-misi-tujuan-fst.header');
    Route::resource('admin/profil/pimpinan-fst',                                            ProfilPimpinanController::class)->except(['show']);
    Route::post('admin/profil/pimpinan-fst/header',                                         [ProfilPimpinanController::class, 'header'])->name('pimpinan-fst.header');
    // Route::resource('/admin/profil/Visi-Misi-&-Tujuan-fst/',           VisiMisiController::class);          //index
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
