<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    SejarahController, VisiMisiTujuanController, DashboardController,
    ProfilPimpinanController, ProfilStaffDosenController, IdentitasFSTController,
    PanduanPendidikanController, ProgramStudiController, FasilitasController, AkreditasiController,
    KalenderAkademikController, AgendaController, BeasiswaController, BEMFSTController, HimaInformatikaController,
    HimaSistemInformasiController, HimaTeknikIndustriController, InformasiController, PrestasiMahasiswaController,
    PengumumanController,
};
use App\Http\Controllers\{
    ProfilController, HomeController, AkademikController, KemahasiswaanController, BeritaController,
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

// PROFIL
Route::get('/profil/sejarah-fst/',                                 [ProfilController::class, 'sejarah'])->name('guest.sejarah');
Route::get('/profil/visi-misi-tujuan-fst/',                        [ProfilController::class, 'visiMisiTujuanFst'])->name('guest.visi-misi');
Route::get('/profil/pimpinan-fst/',                                [ProfilController::class, 'pimpinanFst'])->name('guest.pimpinan');
Route::get('/profil/staff-dosen-fst/',                             [ProfilController::class, 'staffDosenFst'])->name('guest.staff-dosen-fst');
Route::get('/profil/rencana-strategis-fst/',                       [ProfilController::class, 'rencanaStrategis'])->name('guest.rencana-strategis-fst');
Route::get('/profil/fasilitas-fst/',                               [ProfilController::class, 'fasilitas'])->name('guest.fasilitas-fst');
Route::get('/profil/akreditasi-fst/',                              [ProfilController::class, 'akreditasi'])->name('guest.akreditasi-fst');

// AKADEMIK
Route::get('/akademik/panduan-pendidikan-fst/',                    [AkademikController::class, 'panduanPendidikanFst'])->name('guest.panduan-pendidikan-fst');
Route::get('/akademik/buku-pedoman-skripsi-fst/',                  [AkademikController::class, 'bukuPedomanSkripsiFst'])->name('guest.buku-pedoman-skripsi-fst');
Route::get('/akademik/program-studi-fst/informatika',              [AkademikController::class, 'informatika'])->name('guest.informatika-fst');
Route::get('/akademik/program-studi-fst/sistem-informasi',         [AkademikController::class, 'sistemInformasi'])->name('guest.sistem-informasi-fst');
Route::get('/akademik/program-studi-fst/teknik-industri',          [AkademikController::class, 'teknikIndustri'])->name('guest.teknik-industri-fst');
Route::get('/akademik/kalender-akademik-fst/',                     [AkademikController::class, 'kalenderAkademikFst'])->name('guest.kalender-akademik-fst');
Route::get('/akademik/yudisium-dan-wisuda/',                       [AkademikController::class, 'yudisiumDanWisuda'])->name('guest.yudisium-dan-wisuda-fst');

// KEMAHASISWAAN
Route::get('/kemahasiswaan/info-kemahasiswaan/beasiswa',           [KemahasiswaanController::class, 'beasiswa'])->name('guest.beasiswa-fst');
Route::get('/kemahasiswaan/info-kemahasiswaan/prestasi-mahasiswa', [KemahasiswaanController::class, 'prestasiMahasiswa'])->name('guest.prestasi-mahasiswa-fst');
Route::get('/kemahasiswaan/ormawa/BEM-FST',                        [KemahasiswaanController::class, 'bemfst'])->name('guest.bemfst-fst');
Route::get('/kemahasiswaan/ormawa/HIMA/{id?}',                     [KemahasiswaanController::class, 'hima'])->name('guest.hima-fst');

// BERITA
Route::get('/berita/informasi-fst',                                [BeritaController::class, 'informasi'])->name('guest.informasi-fst');
Route::get('/berita/pengumuman-fst',                               [BeritaController::class, 'pengumuman'])->name('guest.pengumuman-fst');
Route::get('/berita/agenda-fst',                                   [BeritaController::class, 'agenda'])->name('guest.agenda-fst');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // HOME
    Route::get('/dashboard',                                                                [DashboardController::class, 'index'])->name('dashboard');

    // PROFIL
    Route::get('Akreditasi-fst',                                                            [AkreditasiController::class,                  'show'])    ->name('akreditasi-fst.show');
    Route::post('admin/profil/akreditasi-fst/header',                                       [AkreditasiController::class,                  'header'])  ->name('akreditasi-fst.header');
    Route::resource('admin/profil/akreditasi-fst',                                          AkreditasiController::class)        ->except(['show']);

    Route::get('fasilitas-fst',                                                             [FasilitasController::class,                  'show'])    ->name('fasilitas-fst.show');
    Route::post('admin/profil/fasilitas-fst/header',                                        [FasilitasController::class,                  'header'])  ->name('fasilitas-fst.header');
    Route::resource('admin/profil/fasilitas-fst',                                           FasilitasController::class)        ->except(['show']);

    Route::get('sejarah-fst',                                                               [SejarahController::class,                  'show'])    ->name('sejarah-fst.show');
    Route::post('admin/profil/sejarah-fst/header',                                          [SejarahController::class,                  'header'])  ->name('sejarah-fst.header');
    Route::resource('admin/profil/sejarah-fst',                                             SejarahController::class)        ->except(['show']);

    Route::get('visi-misi-tujuan-fst',                                                      [VisiMisiTujuanController::class,           'show'])    ->name('visi-misi-tujuan-fst.show');
    Route::post('admin/profil/visi-misi-tujuan-fst/header',                                 [VisiMisiTujuanController::class,           'header'])  ->name('visi-misi-tujuan-fst.header');
    Route::resource('admin/profil/visi-misi-tujuan-fst',                                    VisiMisiTujuanController::class) ->except(['show']);

    Route::get('pimpinan-fst',                                                              [ProfilPimpinanController::class,           'show'])    ->name('pimpinan-fst.show');
    Route::post('admin/profil/pimpinan-fst/header',                                         [ProfilPimpinanController::class,           'header'])  ->name('pimpinan-fst.header');
    Route::resource('admin/profil/pimpinan-fst',                                            ProfilPimpinanController::class) ->except(['show']);

    Route::get('staff-dosen-fst',                                                           [ProfilStaffDosenController::class,         'show'])    ->name('staff-dosen-fst.show');
    Route::post('admin/profil/staff-dosen-fst/header',                                      [ProfilStaffDosenController::class,         'header'])  ->name('staff-dosen-fst.header');
    Route::resource('admin/profil/staff-dosen-fst',                                         ProfilStaffDosenController::class)->except(['show']);

    // Route::post('admin/profil/identitas-fst/header',                                      [IdentitasFSTController::class,             'header']) ->name('identitas-fst.header');
    // Route::get('identitas-fst',                                                           [IdentitasFSTController::class,             'show'])   ->name('identitas-fst.show');
    // Route::resource('admin/profil/identitas-fst',                                         IdentitasFSTController::class)    ->except(['show']);

    // AKADEMIK
    Route::get('panduan-pendidikan-fst',                                                    [PanduanPendidikanController::class,            'show'])            ->name('panduan-pendidikan-fst.show');
    Route::post('admin/akademik/panduan-pendidikan-fst/header',                             [PanduanPendidikanController::class,            'header'])          ->name('panduan-pendidikan-fst.header');
    Route::resource('admin/akademik/panduan-pendidikan-fst',                                PanduanPendidikanController::class)   ->except(['show']);

    Route::post('admin/akademik/program-studi-fst/header',                                  [ProgramStudiController::class,             'header'])          ->name('program-studi-fst.header');
    Route::resource('admin/akademik/program-studi-fst',                                     ProgramStudiController::class);
    Route::post('admin/akademik/program-studi-fst/{id?}/create',                            [ProgramStudiController::class,             'detailStore']) ->name('program-studi-fst.detail.store');
    Route::post('admin/akademik/program-studi-fst/{id?}/update',                            [ProgramStudiController::class,             'detailUpdate']) ->name('program-studi-fst.detail.update');
    Route::post('admin/akademik/program-studi-fst/{id?}/edit',                              [ProgramStudiController::class,               'detailEdit']) ->name('program-studi-fst.detail.edit');
    Route::delete('admin/akademik/program-studi-fst/{id?}/delete',                          [ProgramStudiController::class,               'detailDestroy']) ->name('program-studi-fst.detail.destroy');

    Route::get('kalender-akademik-fst',                                                     [KalenderAkademikController::class,            'show'])            ->name('kalender-akademik-fst.show');
    Route::post('admin/akademik/kalender-akademik-fst/header',                              [KalenderAkademikController::class,            'header'])          ->name('kalender-akademik-fst.header');
    Route::resource('admin/akademik/kalender-akademik-fst',                                 KalenderAkademikController::class)   ->except(['show']);

    // KEMAHASISWAAN
    Route::resource('admin/kemahasiswaan/info-kemahasiswaan/beasiswa-fst',                  BeasiswaController::class)   ->except(['show']);
    Route::get('beasiswa-fst',                                                              [BeasiswaController::class,            'show'])            ->name('beasiswa-fst.show');
    Route::post('admin/kemahasiswaan/info-kemahasiswaan/beasiswa-fst/header',               [BeasiswaController::class,            'header'])          ->name('beasiswa-fst.header');

    Route::resource('admin/kemahasiswaan/info-kemahasiswaan/prestasi-mahasiswa-fst',        PrestasiMahasiswaController::class)   ->except(['show']);
    Route::get('prestasi-mahasiswa-fst',                                                    [PrestasiMahasiswaController::class,            'show'])            ->name('prestasi-mahasiswa-fst.show');
    Route::post('admin/kemahasiswaan/info-kemahasiswaan/prestasi-mahasiswa-fst/header',     [PrestasiMahasiswaController::class,            'header'])          ->name('prestasi-mahasiswa-fst.header');

    Route::resource('admin/kemahasiswaan/ormawa/BEM-fst',                                   BEMFSTController::class)   ->except(['show']);
    Route::get('BEM-fst',                                                                   [BEMFSTController::class,            'show'])            ->name('BEM-fst.show');
    Route::post('admin/kemahasiswaan/ormawa/BEM-fst/header',                                [BEMFSTController::class,            'header'])          ->name('BEM-fst.header');

    Route::resource('admin/kemahasiswaan/ormawa/HIMA-informatika-fst',                      HimaInformatikaController::class)   ->except(['show']);
    Route::get('HIMA-informatika-fst',                                                      [HimaInformatikaController::class,            'show'])            ->name('HIMA-informatika-fst.show');
    Route::post('admin/kemahasiswaan/ormawa/HIMA-informatika-fst/header',                   [HimaInformatikaController::class,            'header'])          ->name('HIMA-informatika-fst.header');

    Route::resource('admin/kemahasiswaan/ormawa/HIMA-sistem-informasi-fst',                 HimaSistemInformasiController::class)   ->except(['show']);
    Route::get('HIMA-sistem-informasi-fst',                                                 [HimaSistemInformasiController::class,            'show'])            ->name('HIMA-sistem-informasi-fst.show');
    Route::post('admin/kemahasiswaan/ormawa/HIMA-sistem-informasi-fst/header',              [HimaSistemInformasiController::class,            'header'])          ->name('HIMA-sistem-informasi-fst.header');

    Route::resource('admin/kemahasiswaan/ormawa/HIMA-teknik-industri-fst',                  HimaTeknikIndustriController::class)   ->except(['show']);
    Route::get('HIMA-teknik-industri-fst',                                                  [HimaTeknikIndustriController::class,            'show'])            ->name('HIMA-teknik-industri-fst.show');
    Route::post('admin/kemahasiswaan/ormawa/HIMA-teknik-industri-fst/header',               [HimaTeknikIndustriController::class,            'header'])          ->name('HIMA-teknik-industri-fst.header');

    // BERITA
    Route::resource('admin/berita/informasi-fst',                                           InformasiController::class)   ->except(['show']);
    Route::get('informasi-fst',                                                             [InformasiController::class,            'show'])            ->name('informasi-fst.show');
    Route::post('admin/berita/informasi-fst/header',                                        [InformasiController::class,            'header'])          ->name('informasi-fst.header');

    Route::resource('admin/berita/pengumuman-fst',                                          PengumumanController::class)   ->except(['show']);
    Route::get('pengumuman-fst',                                                            [PengumumanController::class,            'show'])            ->name('pengumuman-fst.show');
    Route::post('admin/berita/pengumuman-fst/header',                                       [PengumumanController::class,            'header'])          ->name('pengumuman-fst.header');

    Route::resource('admin/berita/agenda-fst',                                              AgendaController::class)   ->except(['show']);
    Route::get('agenda-fst',                                                                [AgendaController::class,            'show'])            ->name('agenda-fst.show');
    Route::post('admin/berita/agenda-fst/header',                                           [AgendaController::class,            'header'])          ->name('agenda-fst.header');

    // ALUMNI

    // LAINNYA

    // INFORMASI PUBLIK

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
