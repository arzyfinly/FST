<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KemahasiswaanController extends Controller
{
    public function beasiswa()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.kemahasiswaan.infokemahasiswaan.beasiswa.index');
    }
    public function prestasiMahasiswa()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.kemahasiswaan.infokemahasiswaan.prestasimahasiswa.index');
    }
    public function bemfst()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.kemahasiswaan.ormawa.bemfst.index');
    }
    public function hima($id)
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.kemahasiswaan.ormawa.hima.index');
    }


}
