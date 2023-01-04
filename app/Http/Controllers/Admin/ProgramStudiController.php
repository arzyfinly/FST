<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentAcademic;
use App\Models\DetailContent;
use App\Models\Akademik;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Str;
use File;

class ProgramStudiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $akademik = Akademik::where('category_academic_id', 2)->first();
        if($akademik == null){
            $programStudi = ContentAcademic::where('akademik_id', 0)->get();
        }else{
            $programStudi = ContentAcademic::where('akademik_id', $akademik->id)->get();
        }
        // dd($programStudi);
        if ($request->ajax()) {
            return DataTables::of($programStudi)
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
                    $content = '<img src="/Images/program-studi-fakultas/' . $row->image_content . '" alt="program-studi" title="FST" width="100px"/>';
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

                    $btn = '<a href="' . route('program-studi-fst.edit', $row->id) . '" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                    $btn = $btn . '&nbsp;';
                    $btn = $btn . '<a href="' . route('program-studi-fst.show', $row->id) . '" data-toggle="tooltip" data-original-title="Tambah Content" class="btn btn-warning btn-sm"><span><i class="fas fa-plus"></i></span></a>';
                    $btn = $btn . '&nbsp;';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['content','image-content','status', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.akademik.programstudi.index', compact('akademik'));
    }
    public function header(Request $request)
    {
        $data = $request->all();
        $path = 'Images/program-studi-fakultas/';
        $file = $request->hasfile('image_header');

        $header_cache = Akademik::where('category_academic_id', 2)->first();
        if ($request['image_header'] == null) {

            $data['image_header'] = $header_cache['image_header'];
        }else{
            if (isset($header_cache['image_header'])) {
                File::delete('Images/program-studi-fakultas/'.$header_cache['image_header']);
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
            'category_academic_id' => '2',
         ],
         [  'keyword'      => $data['keyword'],
            'image_header' => $data['image_header'],
         ]);

        return redirect('admin/akademik/program-studi-fst');
    }
    public function create()
    {

        return view('admin.akademik.programstudi.create');
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
        $path = 'Images/program-studi-fakultas/';
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
        $akademik = Akademik::where('category_academic_id', 2)->first();
        $content = ContentAcademic::where('akademik_id', $akademik->id)->where('title', $data['title'])->where('publish', '1')->get()->count();
        if($akademik){
            if($content != 0){
                $content = [
                        'akademik_id'           => $akademik->id,
                        'title'                 => $data['title'],
                        'description'           => $data['description'],
                        'content'               => $data['content'],
                        'image_content'         => $data['image_content'],
                        'date'                  => $data['date'],
                        'publish'               => '0',
                    ];

                ContentAcademic::create($content);
                return redirect()->route('program-studi-fst.index');
            } else {
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
                return redirect()->route('program-studi-fst.index');
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => "Isi form Akademik terlebih dahulu !!"
            ],409);
        }
        return redirect()->route('program-studi-fst.index');
    }

    public function show($program_studi_fst)
    {
        $contents = DetailContent::where('content_id', $program_studi_fst)->get();

        return view('admin.akademik.programstudi.content', compact('contents'));
    }

    public function detailCreate(Request $request)
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
        $path = 'Images/program-studi-fakultas/';
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
        $akademik = Akademik::where('category_academic_id', 2)->first();
        $content = ContentAcademic::where('akademik_id', $akademik->id)->where('title', $data['title'])->where('publish', '1')->get()->count();
        if($akademik){
            if($content != 0){
                $content = [
                        'akademik_id'           => $akademik->id,
                        'title'                 => $data['title'],
                        'description'           => $data['description'],
                        'content'               => $data['content'],
                        'image_content'         => $data['image_content'],
                        'date'                  => $data['date'],
                        'publish'               => '0',
                    ];

                ContentAcademic::create($content);
                return redirect()->route('program-studi-fst.index');
            } else {
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
                return redirect()->route('program-studi-fst.index');
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => "Isi form Akademik terlebih dahulu !!"
            ],409);
        }
        return redirect()->route('program-studi-fst.index');
    }


    public function edit($program_studi_fst)
    {
        $program_studi_fst = ContentAcademic::Find($program_studi_fst);
        return view('admin.akademik.programstudi.edit', compact('program_studi_fst'));
    }

    public function update(Request $request, $program_studi_fst)
    {
        $prodi = ContentAcademic::Find($program_studi_fst);
        $request->validate([
            'title'                 => 'required',
            'description'           => 'required|max:150',
            'content'               => 'nullable',
            'image_content'         => 'nullable',
            'date'                  => 'required',
            'publish'               => 'nullable',
        ]);
        $path = 'Images/program-studi-fakultas/';
        $path_file = 'files/akademik/';

        if ($request['publish'] == null) {
            $request['publish'] = 0;
        }

        if($request['image_content'] == null) {
            $request['image_content'] = $prodi['image_content'];

        }
        $data = $request->all();
        if ($request['content'] == null) {
            $request['content'] = $prodi['content'];
        } elseif ($request->hasfile('content')) {
            $file = $request->file('content');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path_file, $nama_file);
            if (File::exists('files/akademik/'.$prodi['content'])) {
                File::delete('files/akademik/'.$prodi['content']);
            }
            $data['content'] = $nama_file;
        }

        if ($request->hasfile('image_content')) {
            $file = $request->file('image_content');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $nama_file);
            if (File::exists('Images/program-studi-fakultas/'.$prodi['image_content'])) {
                File::delete('Images/program-studi-fakultas/'.$prodi['image_content']);
            }
            $data['image_content'] = $nama_file;
        }

        if ($data['publish'] == 1) {
            $akademik = Akademik::where('category_academic_id', 2)->first();
            $visimisi = ContentAcademic::where('akademik_id', $akademik->id)->where('publish', '1')->get()->count();
        }
        // dd($data);

        $prodi->update([
            'title'                 => $data['title'],
            'description'           => $data['description'],
            'content'               => $data['content'],
            'image_content'         => $data['image_content'],
            'date'                  => $data['date'],
            'publish'               => '1',
        ]);

        return redirect()->route('program-studi-fst.index');
    }

    public function destroy($program_studi_fst)
    {
        $fst_prodi = ContentAcademic::Find($program_studi_fst);

        if (File::exists("Images/program-studi-fakultas/".$fst_prodi->image_content)) {
            File::delete("Images/program-studi-fakultas/".$fst_prodi->image_content);
        }

        if (File::exists("files/akademik/".$fst_prodi->content)) {
            File::delete("files/akademik/".$fst_prodi->content);
        }


        $fst_prodi->delete();

        return response()->json([
            'success' => true,
            'message' => 'data Prodi berhasil dihapus!'
        ],200);
    }
}
