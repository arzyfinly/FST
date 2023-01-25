<?php

namespace App\Http\Controllers;

use App\Models\ContentProfile;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function sejarah()
    {

        $profil = Profil::where('category_profile_id', '1')->first();
        $sejarah = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->first();

        return view('guest.profil.sejarah.index', compact('sejarah'));
    }

    public function visiMisiTujuanFst()
    {
        $profil = Profil::where('category_profile_id', '2')->first();
        $visimisitujuan = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->get();
        return view('guest.profil.visimisitujuan.index', compact('visimisitujuan', 'profil'));
    }

    public function pimpinanFst()
    {
        $profil = Profil::where('category_profile_id', '3')->first();
        $pimpinan = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->get();
        $dekan = $pimpinan->where('title', 'DEKAN')->first();
        $wakil_dekan = $pimpinan->where('title', 'WAKIL DEKAN')->first();
        $kap_inf = $pimpinan->where('title', 'KAPRODI INFORMATIKA')->first();
        // dd($kap_inf);
        $kap_sis_inf = $pimpinan->where('title', 'KAPRODI SISTEM INFORMASI')->first();
        $kap_tek_indus  = $pimpinan->where('title', 'KAPRODI TEKNIK INDUSTRI')->first();
        return view('guest.profil.profilpimpinanfakultas.index', compact('pimpinan', 'profil', 'dekan','wakil_dekan', 'kap_inf', 'kap_sis_inf', 'kap_tek_indus'));
    }
    public function staffDosenFst()
    {
        $profil = Profil::where('category_profile_id', '4')->first();
        $informatika = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'INFORMATIKA')->get();
        $sisinfor = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'SISTEM INFORMASI')->get();
        $tekindustri = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'TEKNIK INDUSTRI')->get();
        return view('guest.profil.profilstaffdosen.index', compact('profil', 'informatika', 'sisinfor','tekindustri'));
    }

    public function rencanaStrategis()
    {
        // $profil = Profil::where('category_profile_id', '4')->first();
        // $informatika = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'INFORMATIKA')->get();
        // $sisinfor = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'SISTEM INFORMASI')->get();
        // $tekindustri = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'TEKNIK INDUSTRI')->get();
        return view('guest.profil.rencanastrategis.index');
    }
    public function fasilitas()
    {
        // $profil = Profil::where('category_profile_id', '4')->first();
        // $informatika = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'INFORMATIKA')->get();
        // $sisinfor = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'SISTEM INFORMASI')->get();
        // $tekindustri = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'TEKNIK INDUSTRI')->get();
        return view('guest.profil.fasilitasfst.index');
    }
    public function akreditasi()
    {
        // $profil = Profil::where('category_profile_id', '4')->first();
        // $informatika = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'INFORMATIKA')->get();
        // $sisinfor = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'SISTEM INFORMASI')->get();
        // $tekindustri = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->where('title', 'TEKNIK INDUSTRI')->get();
        return view('guest.profil.akreditasifst.index');
    }
}
