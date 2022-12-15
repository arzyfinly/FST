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
}
