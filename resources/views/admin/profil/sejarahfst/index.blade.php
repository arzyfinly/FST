@extends('layout.app')
@section('title', 'Sejarah')
@section('sejarah-fst-active', 'active')
@section('profile-active', 'active')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{__('Sejarah')}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">{{__('Home')}}</a></li>
            <li class="breadcrumb-item">{{__('Profil')}}</li>
            <li class="breadcrumb-item active" aria-current="page">{{__('Sejarah FST')}}</li>
        </ol>
    </div>
    <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Sejarah FST</h6>

                  <a href="{{ route('sejarah-fst.create') }}" data-toggle="tooltip" data-original-title="Create" class="btn btn-success  py-0"><b style="font-size: 27px">+</b></a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Tittle</th>
                        <th>Keyword</th>
                        <th>Description</th>
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
                        <th>Keyword</th>
                        <th>Description</th>
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
          <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
          <script>
            $(document).ready(function(){
            // var api = "{{env('API_URL')}}";

            $('#dataTable').DataTable({
                // processing: true,
                serverSide: true,
                ajax: {
                    url: "/profil/sejarah-fst",
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
                        data: 'keyword',
                    },
                    {
                        data: 'description',
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
{{-- @include('admin.master.classes.scriptdatatable') --}}
@endsection
