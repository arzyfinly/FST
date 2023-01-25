@extends('layout.app')
@section('title', 'Prodi')
@section('program-studi-active', 'active')
@section('akademik-active', 'active')

@section('content')
    <style>
        .file1 {
            visibility: hidden;
            position: absolute;
        }

        .file2 {
            visibility: hidden;
            position: absolute;
        }

        .big-checkbox {
            width: 30px;
            height: 30px;
        }
    </style>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Program Studi FST') }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Akademik') }}</li>
            <li class="breadcrumb-item">{{ __('Edit Content Program Studi FST') }}</li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit') }}</li>
        </ol>
    </div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('Edit Content Program Studi FST') }}</h6>
                    {{-- <a href="{{ route('visi-misi-tujuan.create') }}" data-toggle="tooltip" data-original-title="Create" class="btn btn-success  py-0"><b style="font-size: 27px">+</b></a> --}}
                </div>
                <div class="table-responsive p-3">
                    <form action="{{ route('program-studi-fst.detail.update', $program_studi_fst->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Content Program Studi</h4>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label class="labels">Judul</label>
                                                <select name="title" class="form-control @error('title') is-invalid @enderror">
                                                    <option> --- Select the title --- </option>
                                                    <option @if ($program_studi_fst->title == "VISI") selected @endif value="VISI">VISI</option>
                                                    <option @if ($program_studi_fst->title == "MISI") selected @endif value="MISI">MISI</option>
                                                    <option @if ($program_studi_fst->title == "TUJUAN") selected @endif value="TUJUAN">TUJUAN</option>
                                                </select>
                                                @error('title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12 mt-2">
                                                <label class="labels">Konten</label>
                                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="exampleFormControlTextarea1"
                                                    rows="4" style="font-size: 10pt">{{ $program_studi_fst->content }}</textarea>
                                                @error('content')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-5 text-center"><button
                                                class="btn btn-primary profile-button"type="submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    {{-- @include('admin.master.classes.scriptdatatable') --}}
@endsection
