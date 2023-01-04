<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    SejarahController, VisiMisiTujuanController, DashboardController, ProfilPimpinanController, ProfilStaffDosenController, IdentitasFSTController, PanduanPendidikanController, ProgramStudiController
};
use App\Http\Controllers\{
    ProfilController, HomeController, AkademikController,
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
Route::get('/profil/staff-dosen-fst/',                             [ProfilController::class, 'staffDosenFst'])->name('guest.staff-dosen-fst');

// AKADEMIk
Route::get('/akademik/panduan-pendidikan-fst/',                      [AkademikController::class, 'panduanPendidikanFst'])->name('guest.panduan-pendidikan-fst');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // HOME
    Route::get('/dashboard',                                                                [DashboardController::class, 'index'])->name('dashboard');

    // PROFIL
    Route::get('sejarah-fst',                                                               [SejarahController::class,                  'show'])    ->name('sejarah-fst.show');
    Route::post('admin/profil/sejarah-fst/header',                                          [SejarahController::class,                  'header'])  ->name('sejarah-fst.header');
    Route::resource('admin/profil/sejarah-fst',                                              SejarahController::class)        ->except(['show']);
    Route::get('visi-misi-tujuan-fst',                                                      [VisiMisiTujuanController::class,           'show'])    ->name('visi-misi-tujuan-fst.show');
    Route::post('admin/profil/visi-misi-tujuan-fst/header',                                 [VisiMisiTujuanController::class,           'header'])  ->name('visi-misi-tujuan-fst.header');
    Route::resource('admin/profil/visi-misi-tujuan-fst',                                     VisiMisiTujuanController::class) ->except(['show']);
    Route::get('pimpinan-fst',                                                              [ProfilPimpinanController::class,           'show'])    ->name('pimpinan-fst.show');
    Route::post('admin/profil/pimpinan-fst/header',                                         [ProfilPimpinanController::class,           'header'])  ->name('pimpinan-fst.header');
    Route::resource('admin/profil/pimpinan-fst',                                             ProfilPimpinanController::class) ->except(['show']);
    Route::get('staff-dosen-fst',                                                           [ProfilStaffDosenController::class,         'show'])    ->name('staff-dosen-fst.show');
    Route::post('admin/profil/staff-dosen-fst/header',                                      [ProfilStaffDosenController::class,         'header'])  ->name('staff-dosen-fst.header');
    Route::resource('admin/profil/staff-dosen-fst',                                          ProfilStaffDosenController::class)->except(['show']);
    // Route::post('admin/profil/identitas-fst/header',                                      [IdentitasFSTController::class,             'header']) ->name('identitas-fst.header');
    // Route::get('identitas-fst',                                                           [IdentitasFSTController::class,             'show'])   ->name('identitas-fst.show');
    // Route::resource('admin/profil/identitas-fst',                                         IdentitasFSTController::class)    ->except(['show']);

    // AKADEMIK
    Route::get('panduan-pendidikan-fst',                                                    [PanduanPendidikanController::class,            'show'])            ->name('panduan-penididikan-fst.show');
    Route::post('admin/akademik/panduan-pendidikan-fst/header',                             [PanduanPendidikanController::class,            'header'])          ->name('panduan-pendidikan-fst.header');
    Route::resource('admin/akademik/panduan-pendidikan-fst',                                PanduanPendidikanController::class)   ->except(['show']);

    Route::post('admin/akademik/program-studi-fst/header',                                  [ProgramStudiController::class,             'header'])          ->name('program-studi-fst.header');
    Route::resource('admin/akademik/program-studi-fst',                                     ProgramStudiController::class);
    Route::post('admin/akademik/program-studi-fst/{id?}/create',                            [ProgramStudiController::class,             'detailCreate']) ->name('program-studi-fst.detail.create');

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
