<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    SejarahController, VisiMisiController, ProfilStaffDosenController, ProfilTendikController, ProfilPimpinanFakultasController, IdentitasFstController,
    StrukturOrganisasiController, HomeController,
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
Route::get('/profil/sejarah-fst',                   [SejarahController::class, 'index'])->name('sejarah-home');                              //index
Route::get('/home',                                 [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('/admin/profil/sejarah-fst/',                      SejarahController::class, 
    [
        // 'as' => 'sejarah-fst'
    'names' => [
        'index' => 'sejarah-fst.index',
        'create' => 'sejarah-fst.create',
        'update' => 'sejarah-fst.update',
        'edit' => 'sejarah-fst.edit',
        'store' => 'sejarah-fst.store',
        'destroy' => 'sejarah-fst.destroy',
    ]
    ]
);                          //index
    Route::resource('/admin/profil/Visi-Misi-&-Tujuan-fst/',           VisiMisiController::class);                          //index
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