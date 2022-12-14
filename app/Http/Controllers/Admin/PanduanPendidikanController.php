<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentAcademic;
use App\Models\Akademik;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Str;
use File;

class PanduanPendidikanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $akademik = Akademik::where('category_academic_id', 1)->first();
        if($akademik == null){
            $panduanPendidikan = ContentAcademic::where('akademik_id', 0)->get();
        }else{
            $panduanPendidikan = ContentAcademic::where('akademik_id', $akademik->id)->get();
        }
        // dd($panduanPendidikan);
        if ($request->ajax()) {
            return DataTables::of($panduanPendidikan)
                ->addColumn('title', function ($row) {
                    return $row->title;
                })
                ->addColumn('content', function ($row) {
                    $link = '<a href="/files/akademik/' . $row->content . '"> '. $row->content .' </a>';
                    return $link;
                })
                ->addColumn('image-content', function ($row) {
                    $content = '<img src="/Images/panduan-pendidikan-fakultas/' . $row->image_content . '" alt="panduan-pendidikan" title="FST" width="100px"/>';
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

                    $btn = '<a href="' . route('panduan-pendidikan-fst.edit', $row->id) . '" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                    $btn = $btn . '&nbsp;';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['content','image-content','status', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.akademik.panduanpendidikanfst.index', compact('akademik'));
    }
    public function header(Request $request)
    {
        $data = $request->all();
        $path = 'Images/panduan-pendidikan-fakultas';
        $file = $request->hasfile('image_header');

        $header_cache = Akademik::where('category_academic_id', 1)->first();
        if ($request['image_header'] == null) {

            $data['image_header'] = $header_cache['image_header'];
        }else{
            if (isset($header_cache['image_header'])) {
                File::delete('Images/panduan-pendidikan-fakultas/'.$header_cache['image_header']);
            }
        }

        if ($request->hasfile('image_header')) {
            $file = $request->file('image_header');
            $file_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $file_name);
            $data['image_header'] = $file_name;
        }
        Akademik::updateOrCreate(
         [
            'category_academic_id' => '1',
         ],
         [  'keyword'      => $data['keyword'],
            'image_header' => $data['image_header'],
         ]);

        return redirect('admin/akademik/panduan-pendidikan-fst');
    }
    public function create()
    {

        return view('admin.akademik.panduanpendidikanfst.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'                 => 'required',
            'description'           => 'required|max:150',
            'content'               => 'required',
            'image_content'         => 'nullable',
            'date'                  => 'required',
            'publish'               => 'nullable',
        ]);

        $data = $request->all();
        $path = 'Images/panduan-pendidikan-fakultas';
        $path_file = 'files/akademik/';

        if ($request->hasfile('image_content')) {
            $file = $request->file('image_content');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $nama_file);
            $data['image_content'] = $nama_file;
        }

        if ($request->hasfile('content')) {
            $file = $request->file('content');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path_file, $nama_file);
            $data['content'] = $nama_file;
        }

        // dd($data);
        $akademik = Akademik::where('category_academic_id', 1)->first();
        $content = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get()->count();
        if($akademik){
                $content = [
                        'akademik_id'           => $akademik->id,
                        'title'                 => $data['title'],
                        'description'           => $data['description'],
                        'content'               => $data['content'],
                        'image_content'         => $data['image_content'],
                        'date'                  => $data['date'],
                        'publish'               => '1',
                    ];

                ContentAcademic::create($content);
                return redirect()->route('panduan-pendidikan-fst.index');
        } else {
            return response()->json([
                'success' => false,
                'message' => "Isi form Akademik terlebih dahulu !!"
            ],409);
        }
        return redirect()->route('panduan-pendidikan-fst.index');
    }

    public function show()
    {
        return redirect('/akademik-fst');
    }

    public function edit($panduan_pendidikan_fst)
    {
        $panduan = ContentAcademic::Find($panduan_pendidikan_fst);
        return view('admin.akademik.panduanpendidikanfst.edit', compact('panduan'));
    }

    public function update(Request $request, $panduan_pendidikan_fst)
    {
        $panduan = ContentAcademic::Find($panduan_pendidikan_fst);
        $request->validate([
            'title'                 => 'required',
            'description'           => 'required|max:150',
            'content'               => 'nullable',
            'image_content'         => 'nullable',
            'date'                  => 'required',
            'publish'               => 'nullable',
        ]);
        $path = 'Images/panduan-pendidikan-fakultas/';
        $path_file = 'files/akademik/';

        if ($request['publish'] == null) {
            $request['publish'] = 0;
        }

        if($request['image_content'] == null) {
            $request['image_content'] = $panduan['image_content'];

        }
        $data = $request->all();
        if ($request['content'] == null) {
            $request['content'] = $panduan['content'];
        } elseif ($request->hasfile('content')) {
            $file = $request->file('content');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path_file, $nama_file);
            if (File::exists('files/akademik/'.$panduan['content'])) {
                File::delete('files/akademik/'.$panduan['content']);
            }
            $data['content'] = $nama_file;
        }

        if ($request->hasfile('image_content')) {
            $file = $request->file('image_content');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $nama_file);
            if (File::exists('Images/panduan-pendidikan-fakultas/'.$panduan['image_content'])) {
                File::delete('Images/panduan-pendidikan-fakultas/'.$panduan['image_content']);
            }
            $data['image_content'] = $nama_file;
        }

        if ($data['publish'] == 1) {
            $akademik = Akademik::where('category_academic_id', 1)->first();
            $visimisi = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get()->count();
        }
        // dd($data);

        $panduan->update([
            'title'                 => $data['title'],
            'description'           => $data['description'],
            'content'               => $data['content'],
            'image_content'         => $data['image_content'],
            'date'                  => $data['date'],
            'publish'               => '1',
        ]);

        return redirect()->route('panduan-pendidikan-fst.index');
    }

    public function destroy($panduan_pendidikan_fst)
    {
        $fst_panduan = ContentAcademic::Find($panduan_pendidikan_fst);

        if (File::exists("Images/panduan-pendidikan-fakultas/".$fst_panduan->image_content)) {
            File::delete("Images/panduan-pendidikan-fakultas/".$fst_panduan->image_content);
        }

        if (File::exists("files/akademik/".$fst_panduan->content)) {
            File::delete("files/akademik/".$fst_panduan->content);
        }


        $fst_panduan->delete();

        return response()->json([
            'success' => true,
            'message' => 'data Panduan Pendidikan berhasil dihapus!'
        ],200);
    }
}
