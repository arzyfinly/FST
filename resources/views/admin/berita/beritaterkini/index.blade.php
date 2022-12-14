@extends('layout.app')
@section('title', 'Kelas')
@section('master-active', 'active')
@section('class-active', 'active')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{__('Kelas')}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">{{__('Home')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{__('Kelas')}}</li>
        </ol>
    </div>
    <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Kelas</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Nama Kelas</th>
                        <th>Jurusan</th>
                        <th>Diskripsi</th>
                        <th>Banyaknya Murid</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nama Kelas</th>
                        <th>Jurusan</th>
                        <th>Diskripsi</th>
                        <th>Banyaknya Murid</th>
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
                processing: true,
                serverSide: true,
                ajax: {
                    url: "/classes",
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
                        data: 'name',
                    },
                    {
                        data: 'major',
                    },
                    {
                        data: 'description',
                    },
                    {
                        data: 'num_of_students',
                    },
                ],
            });
        });
          </script>
{{-- @include('admin.master.classes.scriptdatatable') --}}
@endsection
