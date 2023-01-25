@extends('layout.app')
@section('title', 'Detail Prodi')
@section('program-studi-active', 'active')
@section('akademik-active', 'active')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Detail Content Program Studi FST') }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Akademik') }}</li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Detail Content Program Studi FST') }}</li>
        </ol>
    </div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center">
                    <div class="mr-auto p-2">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Content</h6>
                    </div>
                    <div class="p-1">
                        <button data-toggle="modal" data-target=".ModalContentCreate" data-original-title="Create"
                            class="btn btn-success"><span><i class="fas fa-plus"></i></span></button>
                    </div>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            @foreach ($contents as $content)
                        <tbody>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->content }}</td>
                            <td>
                                <a href="{{route('program-studi-fst.detail.edit', $content->id)}}" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-pen-square"></i></span></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)"  data-id="{{$content->id}}" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>
                            </td>
                        </tbody>
                            @endforeach
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    @include('admin.akademik.programstudi.contentcreate')
    @include('admin.akademik.programstudi.scriptdeletecontent')
@endsection
