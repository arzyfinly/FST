@extends('layout.app')
@section('title', 'Visi Misi & Tujuan')
@section('visi-misi-tujuan-fst-active', 'active')
@section('profile-active', 'active')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Visi Misi & Tujuan') }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Profil') }}</li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Visi Misi & Tujuan FST') }}</li>
        </ol>
    </div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center">
                    <div class="mr-auto p-2">
                        <h6 class="m-0 font-weight-bold text-primary">Visi Misi & Tujuan FST</h6>
                    </div>
                    <div class="p-1">
                        <a href="{{ route('visi-misi-tujuan-fst.show') }}" data-toggle="tooltip" data-original-title="Show"
                            class="btn btn-info"><span><i style="font-size: 15px" class="fas fa-eye"></i></span></a>
                    </div>
                    <div class="p-1">
                        <a href="{{ route('visi-misi-tujuan-fst.create') }}" data-toggle="tooltip" data-original-title="Create"
                            class="btn btn-success"><span><i class="fas fa-plus"></i></span></a>
                    </div>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Tittle</th>
                                <th>Content</th>
                                <th>Image Header</th>
                                <th>Image Content</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Tittle</th>
                                <th>Content</th>
                                <th>Image Header</th>
                                <th>Image Content</th>
                                <th>Publish</th>
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
    <script>
        $(document).ready(function() {
            // var api = "{{ env('API_URL') }}";

            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('visi-misi-tujuan-fst.index') }}",
                    type: 'GET',
                },
                "responsive": true,
                "language": {
                    "oPaginate": {
                        "sNext": "<i class='fas fa-angle-right'>",
                        "sPrevious": "<i class='fas fa-angle-left'>",
                    },
                    // processing: '<img src="{{ asset('image/loading2.gif') }}">',
                },
                columns: [{
                        data: 'DT_RowIndex',
                    },
                    {
                        data: 'title',
                    },
                    {
                        data: 'content',
                    },
                    {
                        data: 'image-header',
                    },
                    {
                        data: 'image-content',
                    },
                    {
                        data: 'status',
                    },
                    {
                        data: 'action',
                    },
                ],
            });
        });
    </script>
    @include('admin.profil.visimisitujuanfst.scriptdelete')
@endsection
