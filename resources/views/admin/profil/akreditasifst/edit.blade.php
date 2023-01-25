@extends('layout.app')
@section('title', 'Akreditasi FST')
@section('akreditasi-fst-active', 'active')
@section('profile-active', 'active')

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
        <h1 class="h3 mb-0 text-gray-800">{{ __('Akreditasi FST') }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Profil') }}</li>
            <li class="breadcrumb-item">{{ __('Akreditasi FST') }}</li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit') }}</li>
        </ol>
    </div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('Edit Akreditasi FST') }}</h6>
                    {{-- <a href="{{ route('visi-misi-tujuan.create') }}" data-toggle="tooltip" data-original-title="Create" class="btn btn-success  py-0"><b style="font-size: 27px">+</b></a> --}}
                </div>
                <div class="table-responsive p-3">
                    <form action="{{ route('akreditasi-fst.update', $akreditasi->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Akreditasi Fakultas</h4>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label class="labels">Program Studi</label>
                                                <input type="text" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="program studi" value="{{$akreditasi->title}}">
                                                @error('title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <label class="labels">Akreditasi</label>
                                                <select class="form-control @error('description') is-invalid @enderror" name="description" id="exampleFormControlSelect1">
                                                    <option hidden value="">-- Select Akreditasi --</option>
                                                    <option @if ($akreditasi->description == 'A') selected @endif value="A">A</option>
                                                    <option @if ($akreditasi->description == 'B') selected @endif value="B">B</option>
                                                    <option @if ($akreditasi->description == 'C') selected @endif value="C">C</option>
                                                    <option @if ($akreditasi->description == 'Baik') selected @endif value="Baik">Baik</option>
                                                    <option @if ($akreditasi->description == 'Baik Sekali') selected @endif value="Baik Sekali">Baik Sekali</option>
                                                    <option @if ($akreditasi->description == 'Unggul') selected @endif value="Unggul">Unggul</option>
                                                  </select>
                                                @error('description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <label class="labels">Tahun SK</label>
                                                <input type="number" name="content" min="2000" max="2030"
                                                    class="form-control @error('content') is-invalid @enderror"
                                                    placeholder="ex:2019" value="{{$akreditasi->content}}">
                                                @error('content')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                                <input type="date" name="date" hidden
                                                    class="form-control @error('date') is-invalid @enderror"
                                                    placeholder="" value="{{ $akreditasi->date }}">
                                        </div>
                                                    <input class="form-check-input" name="publish" @if($akreditasi->publish == 1) checked @endif
                                                        type="text" value="1" hidden id="checkbox-1" />
                                                    <input hidden name="category_profile_id" type="text"
                                                        value="6" />
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
