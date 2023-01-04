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
                                <th>Image</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contents as $content)
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->image }}</td>
                            <td>{{ $content->content }}</td>
                            <td>
                                <a href="{{route('program-studi-fst.edit', $row->id)}}" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-pen-square"></i></span></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)"  data-id="{{$row->id}}" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>
                            </td>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Image</th>
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
    <script>
        $(document).on("click", "#browse1", function() {
            var file1 = $(this).parents().find(".file1");
            file1.trigger("click");
        });

        var loadFile1 = function(event) {
            var output1 = document.getElementById('output1');
            output1.src = URL.createObjectURL(event.target.files[0]);
            output1.onload = function() {
                URL.revokeObjectURL(output1.src) // free memory
            }
        };

        $(document).on("click", "#browse2", function() {
            var file2 = $(this).parents().find(".file2");
            file2.trigger("click");
        });

        var loadFile2 = function(event) {
            var output2 = document.getElementById('output2');
            output2.src = URL.createObjectURL(event.target.files[0]);
            output2.onload = function() {
                URL.revokeObjectURL(output2.src) // free memory
            }
        };
    </script>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    @include('admin.akademik.programstudi.contentcreat')
@endsection
