<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentAcademic;
use App\Models\Akademik;

class AkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function panduanPendidikanFst()
    {
        $akademik = Akademik::where('category_academic_id', '1')->first();
        $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.akademik.panduanpendidikanfst.index', compact('panduan', 'akademik'));
    }
    public function bukuPedomanSkripsiFst()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.akademik.bukupedomanskripsi.index');
    }
    public function informatika()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.akademik.prodi.index');
    }
    public function sistemInformasi()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.akademik.prodi.index');
    }
    public function teknikIndustri()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.akademik.prodi.index');
    }
    public function kalenderAkademikFst()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.akademik.kalenderakademik.index');
    }
    public function yudisiumDanWisuda()
    {
        // $akademik = Akademik::where('category_academic_id', '1')->first();
        // $panduan = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get();

        return view('guest.akademik.yudisiumdanwisuda.index');
    }


}
