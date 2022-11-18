<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function sejarah()
    {
        $sejarah = Profil::where('category_profile_id', '1')
                         ->where('publish', '1')
                         ->first();
        return view('guest.profil.sejarah.index', compact('sejarah'));
    }
}
