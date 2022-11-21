<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Str;
use File;

class VisiMisiTujuanController extends Controller
{

    public function index()
    {
        $visi_misi_tujuan = Profil::where('category_profile_id', '2')->get();
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
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
