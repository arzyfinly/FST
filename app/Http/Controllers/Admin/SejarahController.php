<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use App\Http\Requests\SejarahRequest;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Str;
use File;


class SejarahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $sejarahAll = Profil::where('category_profile_id', '1')->get();
        if ($request->ajax()) {
            return DataTables::of($sejarahAll)
                ->addColumn('title', function ($row) {
                    return $row->title;
                })
                ->addColumn('keyword', function ($row) {
                    return $row->keyword;
                })
                ->addColumn('description', function ($row) {
                    return $row->description;
                })

                ->addColumn('content', function ($row) {
                    $text_content = $row->content;

                    $hasil = Str::substr($text_content, 0, 100);

                    $hasil = "$hasil.............";
                    return $hasil;
                })
                ->addColumn('image-header', function ($row) {
                    $header = '<img src="/images/sejarah-fakultas/' . $row->image_header . '" alt="FST" title="FST" width="100px" />';
                    return $header;
                })
                ->addColumn('image-content', function ($row) {
                    $content = '<img src="/images/sejarah-fakultas/' . $row->image_content . '" alt="FST" title="FST" width="100px"/>';
                    return $content;
                })
                ->addColumn('date', function ($row) {
                    return $row->date;
                })
                ->addColumn('category', function ($row) {
                    return $row->categoryProfile->name;
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

                    $btn = '<a href="' . route('sejarah-fst.edit', $row->id) . '" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                    $btn = $btn . '&nbsp;';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['image-header', 'image-content', 'status', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.profil.sejarahfst.index');
    }

    public function create()
    {

        return view('admin.profil.sejarahfst.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'                 => 'required',
            'keyword'               => 'required',
            'description'           => 'required',
            'content'               => 'required',
            'image_content'         => 'required',
            'image_header'          => 'required',
            'date'                  => 'required',
            'publish'               => 'nullable',
            'category_profile_id'   => 'required',
        ]);

        $data = $request->all();
        $path = 'images/sejarah-fakultas';
        $file = $request->hasfile('image_header');
        if ($request->hasfile('image_header') && $request->hasfile('image_content')) {
            $file = $request->file('image_header');
            $file_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $file_name);
            $data['image_header'] = $file_name;

            $file = $request->file('image_content');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $nama_file);
            $data['image_content'] = $nama_file;
        }

        if ($data['publish'] == 1 && $data['category_profile_id'] == 1) {
            $sejarah = Profil::where('category_profile_id', '1')
                ->where('publish', '1')
                ->first();
            $sejarah->publish = 0;
            $sejarah->save();
        }
        // dd($data);
        Profil::create($data);

        return redirect()->route('sejarah-fst.index');
    }

    public function show()
    {
    }

    public function edit($sejarah_fst)
    {
        $sejarah = Profil::Find($sejarah_fst);
        return view('admin.profil.sejarahfst.edit', compact('sejarah'));
    }

    public function update(Request $request, $sejarah_fst)
    {
        $fst_sejarah = Profil::Find($sejarah_fst);
        $request->validate([
            'title'                 => 'required',
            'keyword'               => 'required',
            'description'           => 'required',
            'content'               => 'required',
            'image_content'         => 'nullable',
            'image_header'          => 'nullable',
            'date'                  => 'required',
            'publish'               => 'nullable',
            'category_profile_id'   => 'required',
        ]);

        if ($request['publish'] == null) {
            $request['publish'] = 0;
        }

        if($request['image_header'] == null) {
            $request['image_header'] = $fst_sejarah['image_header'];

        }

        if($request['image_content'] == null) {
            $request['image_content'] = $fst_sejarah['image_content'];

        }
        $data = $request->all();
        $path = 'images/sejarah-fakultas';
        $file = $request->hasfile('image_header');

        if ($request->hasfile('image_header')) {
            $file = $request->file('image_header');
            $file_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $file_name);
            if (File::exists('Images/sejarah-fakultas/'.$fst_sejarah['image_header'])) {
                File::delete('Images/sejarah-fakultas/'.$fst_sejarah['image_header']);
            }
            $data['image_header'] = $file_name;
        }

        if ($request->hasfile('image_content')) {
            $file = $request->file('image_content');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $nama_file);
            if (File::exists('Images/sejarah-fakultas/'.$fst_sejarah['image_content'])) {
                File::delete('Images/sejarah-fakultas/'.$fst_sejarah['image_content']);
            }
            $data['image_content'] = $nama_file;
        }

        if ($data['publish'] == 1 && $data['category_profile_id'] == 1) {
            $sejarah = Profil::where('category_profile_id', '1')
                ->where('publish', '1')
                ->first();
                if($sejarah){
                    $sejarah->publish = 0;
                    $sejarah->save();
                }
        }
        // dd($data);
        $fst_sejarah->update([
            'title'                 => $data['title'],
            'keyword'               => $data['keyword'],
            'description'           => $data['description'],
            'content'               => $data['content'],
            'image_header'          => $data['image_header'],
            'image_content'         => $data['image_content'],
            'date'                  => $data['date'],
            'publish'               => $data['publish'],
            'category_profile_id'   => $data['category_profile_id'],
        ]);

        return redirect()->route('sejarah-fst.index');

    }

    public function destroy($sejarah_fst)
    {
        //
    }
}
