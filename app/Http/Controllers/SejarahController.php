<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Http\Requests\SejarahRequest;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Str;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $sejarahAll = Profil::where('category_profile_id', '1')->get();
        $sejarah = Profil::where('category_profile_id', '1')
                                ->where('publish', '1')
                                ->first();
        if($request->ajax()){
            return DataTables::of($sejarahAll)
                            ->addColumn('title', function($row){
                                return $row->title;
                            })
                            ->addColumn('keyword', function($row){
                                return $row->keyword;
                            })
                            ->addColumn('description', function($row){
                                return $row->description;
                            })
                            ->addColumn('content', function($row){
                                $text_content = $row->content;

                                $hasil = Str::substr($text_content, 0, 100);
                                
                                $hasil = "$hasil.............";
                                return $hasil;
                            })
                            ->addColumn('image-header', function($row){
                                $header = '<img src="/images/sejarah-fakultas/'.$row->image_header.'" alt="FST" title="FST" width="100px" />';
                                return $header;
                            })
                            ->addColumn('image-content', function($row){
                                $content = '<img src="/images/sejarah-fakultas/'.$row->image_content.'" alt="FST" title="FST" width="100px"/>';
                                return $content;
                            })
                            ->addColumn('date', function($row){
                                return $row->date;
                            })
                            ->addColumn('category', function($row){ 
                                return $row->categoryProfile->name;
                            })
                            ->addColumn('status', function($row){
                                if($row->publish == '0'){
                                    $haw = '<a class="badge badge-danger text-white">Not Published</a>';
                                    return $haw;
                                }else{
                                    $haw = '<a class="badge badge-success text-white">Published</a>';
                                    return $haw;
                                };
                            })
                            ->addColumn('action', function($row){
                                
                                $btn = '<a href="javascript:void(0)" data-toggle="tooltip" onclick="updateItem(this)" data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                $btn = $btn.'&nbsp;';
                                $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';
                                
                                return $btn;
                            })
                            ->rawColumns(['image-header','image-content','status','action'])
                            ->addIndexColumn()
                            ->make(true);
            }
        $auth = Auth::user();
        if($auth){
            return view('admin.profil.sejarahfst.index');
        }
        return view('guest.profil.sejarah.index', compact('sejarah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profil.sejarahfst.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        if($request->hasfile('image_header') && $request->hasfile('image_content')){
            $file = $request->file('image_header');
            $file_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move($path, $file_name);
            $data['image_header'] = $file_name;
            
            $file = $request->file('image_content');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move($path, $nama_file);
            $data['image_content']=$nama_file;
        }

        if($data['publish'] == 1 && $data['category_profile_id'] == 1){
            $sejarah = Profil::where('category_profile_id', '1')
                                ->where('publish', '1')
                                ->first();
            $sejarah->publish = 0;
            $sejarah->save();
        }
        // dd($data);
        Profil::create($data);

        return redirect('admin/profil/sejarah-fst');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
