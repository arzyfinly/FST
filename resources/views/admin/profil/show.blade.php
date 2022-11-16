@extends('layout.app')
@section('title', 'Attendances')
@section('attendance-active', 'active')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{__('Detail Absensi')}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">{{__('Home')}}</a></li>
            <li class="breadcrumb-item"><a href="/attendances">{{__('Absensi')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$classesattendance->classes->name}}</li>
        </ol>
    </div>
    <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Absensi {{ $classesattendance->classes->name }}</h6>
                  <a href="/attendances/detail/create/{{$classesattendance->id}}" class="btn btn-success mr-2" style="float: right"><i class="fa fa-plus"></i></a>
                </div>
                <div class="table-responsive p-3">
                  <strong class="text-secondary" style="font-size: 14px;">{{ $classesattendance->date }}</strong>
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Status</th>
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
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/attendances/{{ $classesattendance->id }}',
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
                        data: 'status',
                    },
                    {
                        data: 'action',
                    },
                ],
            });
        });
          </script>
@include('admin.attendances.scriptdeletedetaildata')
@endsection
 