<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function informasi()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.berita.informasi.index');
    }
    public function pengumuman()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.berita.pengumuman.index');
    }
    public function agenda()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.berita.agenda.index');
    }
}
