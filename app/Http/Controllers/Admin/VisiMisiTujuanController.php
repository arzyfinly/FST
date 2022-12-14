<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\ContentProfile;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Str;
use File;

class VisiMisiTujuanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $profil = Profil::where('category_profile_id', '2')->first();
        if($profil == null){
            $visimisiAll = ContentProfile::where('profil_id', 0)->get();
        }else{
            $visimisiAll = ContentProfile::where('profil_id', $profil->id)->get();
        }
        // dd($visimisiAll);
        if ($request->ajax()) {
            return DataTables::of($visimisiAll)
                ->addColumn('title', function ($row) {
                    return $row->title;
                })
                ->addColumn('content', function ($row) {
                    $text_content = $row->content;

                    $hasil = Str::substr($text_content, 0, 100);

                    $hasil = "$hasil.............";
                    return $hasil;
                })
                ->addColumn('image-content', function ($row) {
                    $content = '<img src="/images/visi-misi-fakultas/' . $row->image_content . '" alt="FST" title="FST" width="100px"/>';
                    return $content;
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

                    $btn = '<a href="' . route('visi-misi-tujuan-fst.edit', $row->id) . '" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                    $btn = $btn . '&nbsp;';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['image-content', 'status', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.profil.visimisitujuanfst.index', compact('profil'));
    }

    public function header(Request $request)
    {
        $data = $request->all();
        $path = 'images/visi-misi-fakultas';
        $file = $request->hasfile('image_header');

        $header_cache = Profil::where('category_profile_id', 2)->first();
        if ($request['image_header'] == null) {
            $data['image_header'] = $header_cache['image_header'];
        }else{
            if ($header_cache != null) {
                File::delete('Images/visi-misi-fakultas/'.$header_cache['image_header']);
            }
        }

        if ($request->hasfile('image_header')) {
            $file = $request->file('image_header');
            $file_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $file_name);
            $data['image_header'] = $file_name;
        }
        Profil::updateOrCreate(
         [
            'category_profile_id' => '2',
         ],
         [  'keyword'      => $data['keyword'],
            'image_header' => $data['image_header'],
         ]);

        return redirect('admin/profil/visi-misi-tujuan-fst');
    }

    public function create()
    {
        $profil = Profil::where('category_profile_id', 2)->first();
        return view('admin.profil.visimisitujuanfst.create', compact('profil'));
    }

    public function store(Request $request)
    {

            $validated = $request->validate([
                'title'                 => 'required',
                'description'           => 'required|max:150',
                'content'               => 'required',
                'image_content'         => 'required',
                'date'                  => 'required',
                'publish'               => 'nullable',
            ]);

        $data = $request->all();
        $path = 'images/visi-misi-fakultas';

        if ($request->hasfile('image_content')) {
            $file = $request->file('image_content');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $nama_file);
            $data['image_content'] = $nama_file;
        }
        // dd($data);
        $profil = Profil::where('category_profile_id', '2')->first();
        $content = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->get()->count();
        if($profil){
            if ($request['publish'] && $content < 3) {
                $content = [
                        'profil_id'             => $profil->id,
                        'title'                 => $data['title'],
                        'description'           => $data['description'],
                        'content'               => $data['content'],
                        'image_content'         => $data['image_content'],
                        'date'                  => $data['date'],
                        'publish'               => $data['publish'],
                    ];
                } else {
                    $content = [
                        'profil_id'             => $profil->id,
                        'title'                 => $data['title'],
                        'description'           => $data['description'],
                        'content'               => $data['content'],
                        'image_content'         => $data['image_content'],
                        'date'                  => $data['date'],
                    ];
                }
                ContentProfile::create($content);

                return redirect()->route('visi-misi-tujuan-fst.index');
        } else {
            return response()->json([
                'success' => false,
                'message' => "Isi form Profil terlebih dahulu !!"
            ],409);
        }





    }

    public function show()
    {
        return redirect('/profil/visi-misi-tujuan-fst');
    }

    public function edit($visi_misi_tujuan_fst)
    {
        $visimisi = ContentProfile::Find($visi_misi_tujuan_fst);
        return view('admin.profil.visimisitujuanfst.edit', compact('visimisi'));
    }

    public function update(Request $request, $visi_misi_tujuan_fst)
    {
        $fst_vmt = ContentProfile::Find($visi_misi_tujuan_fst);
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
            $request['image_content'] = $fst_vmt['image_content'];

        }
        $data = $request->all();
        $path = 'images/visi-misi-fakultas';

        if ($request->hasfile('image_content')) {
            $file = $request->file('image_content');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $nama_file);
            if (File::exists('Images/visi-misi-fakultas/'.$fst_vmt['image_content'])) {
                File::delete('Images/visi-misi-fakultas/'.$fst_vmt['image_content']);
            }
            $data['image_content'] = $nama_file;
        }

        if ($data['publish'] == 1) {
            $profil = Profil::where('category_profile_id', 2)->first();
            $visimisi = ContentProfile::where('profil_id', $profil->id)->where('publish', '1')->get()->count();
                if($visimisi > 3){
                    $data['publish'] = 0;
                }
        }
        // dd($data);

        $fst_vmt->update([
            'title'                 => $data['title'],
            'description'           => $data['description'],
            'content'               => $data['content'],
            'image_content'         => $data['image_content'],
            'date'                  => $data['date'],
            'publish'               => $data['publish'],
        ]);

        return redirect()->route('visi-misi-tujuan-fst.index');
    }

    public function destroy($visi_misi_tujuan_fst)
    {
        $fst_vmt = ContentProfile::Find($visi_misi_tujuan_fst);
        $path = '/images/visi-misi-fakultas/';

        if (File::exists("/images/visi-misi-fakultas/".$fst_vmt->image_content)) {
            File::delete("/images/visi-misi-fakultas/".$fst_vmt->image_content);
        }
        $fst_vmt->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Visi Misi Tujuan berhasil dihapus!'
        ],200);
    }
}
