<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentKemahasiswaan;
use App\Models\Kemahasiswaan;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Str;
use File;
use RealRashid\SweetAlert\Facades\Alert;


class BeasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $kemahasiswaan = Kemahasiswaan::where('category_kemahasiswaan_id', 1)->first();
        if($kemahasiswaan == null){
            $beasiswaKemahasiswaan = ContentKemahasiswaan::where('kemahasiswaan_id', 0)->get();
        }else{
            $beasiswaKemahasiswaan = ContentKemahasiswaan::where('kemahasiswaan_id', $kemahasiswaan->id)->get();
        }
        // dd($beasiswaKemahasiswaan);
        if ($request->ajax()) {
            return DataTables::of($beasiswaKemahasiswaan)
                ->addColumn('title', function ($row) {
                    return $row->title;
                })
                ->addColumn('content', function ($row) {
                    $text_content = $row->content;

                    $hasil = Str::substr($text_content, 0, 100);

                    $hasil = "$hasil.............";
                    return $hasil;
                })
                ->addColumn('status', function ($row) {
                    if ($row->publish == '0') {
                        $haw = '<a class="badge badge-danger text-white">Not Published</a>';
                        return $haw;
                    } else {
                        $haw = '<a class="badge badge-success text-white">Published</a>';
                        return $haw;
                    };
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="' . route('beasiswa-fst.edit', $row->id) . '" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                    $btn = $btn . '&nbsp;';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['status','action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.kemahasiswaan.beasiswa.index', compact('kemahasiswaan'));
    }
    public function header(Request $request)
    {
        $data = $request->all();
        $path = 'Images/beasiswa-fakultas';
        $file = $request->hasfile('image_header');

        $header_cache = Kemahasiswaan::where('category_kemahasiswaan_id', 1)->first();
        if ($request['image_header'] == null) {

            $data['image_header'] = $header_cache['image_header'];
        }else{
            if (isset($header_cache['image_header'])) {
                File::delete('Images/beasiswa-fakultas/'.$header_cache['image_header']);
            }
        }

        if ($request->hasfile('image_header')) {
            $file = $request->file('image_header');
            $file_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $file_name);
            $data['image_header'] = $file_name;
        }
        Kemahasiswaan::updateOrCreate(
         [
            'category_kemahasiswaan_id' => '1',
         ],
         [  'keyword'      => $data['keyword'],
            'image_header' => $data['image_header'],
         ]);

        return redirect('admin/kemahasiswaan/info-kemahasiswaan/beasiswa-fst');
    }
    public function create()
    {

        return view('admin.kemahasiswaan.beasiswa.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'title'                 => 'required',
            'description'           => 'nullable',
            'content'               => 'required',
            'image_content'         => 'nullable',
            'date'                  => 'required',
            'publish'               => 'nullable',
        ]);

        $data = $request->all();
        $path = 'Images/beasiswa-fakultas';
        // dd($data);
        $kemahasiswaan = Kemahasiswaan::where('category_kemahasiswaan_id', 1)->first();
        $content = ContentKemahasiswaan::where('kemahasiswaan_id', $kemahasiswaan->id)->where('publish', 1)->get()->count();
        if($kemahasiswaan){
            if ($request['publish']) {
                $content = [
                        'kemahasiswaan_id'      => $kemahasiswaan->id,
                        'title'                 => $data['title'],
                        'description'           => '-',
                        'content'               => $data['content'],
                        'image_content'         => '-',
                        'date'                  => $data['date'],
                        'publish'               => $data['publish'],
                    ];
                } else {
                    $content = [
                        'kemahasiswaan_id'      => $kemahasiswaan->id,
                        'title'                 => $data['title'],
                        'description'           => '-',
                        'content'               => $data['content'],
                        'image_content'         => '-',
                        'date'                  => $data['date'],
                    ];
                }
                ContentKemahasiswaan::create($content);

                return redirect()->route('beasiswa-fst.index');
        } else {
            Alert::toast('isi form Kemahasiswaan diatas terlebih dahulu','error');
            return redirect()->route('beasiswa-fst.index');
        }
            return redirect()->route('beasiswa-fst.index');
    }

    public function show()
    {
        return redirect('/kemahasiswaan/info-kemahasiswaan/beasiswa-fst');
    }

    public function edit($beasiswa_kemahasiswaan)
    {
        $beasiswa = ContentKemahasiswaan::Find($beasiswa_kemahasiswaan);
        return view('admin.kemahasiswaan.beasiswa.edit', compact('beasiswa'));
    }

    public function update(Request $request, $beasiswa_kemahasiswaan)
    {
        $beasiswa = ContentKemahasiswaan::Find($beasiswa_kemahasiswaan);
        $request->validate([
            'title'                 => 'required',
            'description'           => 'required|max:150',
            'content'               => 'required',
            'image_content'         => 'nullable',
            'date'                  => 'required',
            'publish'               => 'nullable',
        ]);

        if ($request['publish'] == null) {
            $request['publish'] = 0;
        }

        if($request['image_content'] == null) {
            $request['image_content'] = $beasiswa['image_content'];
        }
        $data = $request->all();
        $path = 'Images/beasiswa-fakultas';
        // dd($data);

        $beasiswa->update([
            'title'                 => $data['title'],
            'description'           => $data['description'],
            'content'               => $data['content'],
            'image_content'         => $data['image_content'],
            'date'                  => $data['date'],
            'publish'               => $data['publish'],
        ]);

        return redirect()->route('beasiswa-fst.index');
    }

    public function destroy($beasiswa_kemahasiswaan)
    {
        $fst_beasiswa = ContentKemahasiswaan::Find($beasiswa_kemahasiswaan);

        if (File::exists("/Images/beasiswa-fakultas/".$fst_beasiswa->file)) {
            File::delete("/Images/beasiswa-fakultas/".$fst_beasiswa->file);
        }
        $fst_beasiswa->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Beasiswa berhasil dihapus!'
        ],200);
    }
}
