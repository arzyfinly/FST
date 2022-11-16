@extends('layout.app')
@section('title', 'Attandances')
@section('attendances-active', 'active')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{__('Absensi Kelas')}}</h1>
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">{{__('Home')}}</a></li>
      <li class="breadcrumb-item"><a href="/attendances">{{__('Absensi')}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{__('Absensi Kelas')}}</li>
  </ol>
</div>
<div class="row">
      <!-- Datatables -->
      <form id="createAttendances" enctype="multipart/form-data">
      <div class="col-lg-12">
        <div class="row">
        <div class="col-8">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{__('Absensi Per Kelas')}}</h6>
          </div>
          <div class="table-responsive p-3">
            <div class="form-group">
                @csrf
                <label for="select2SinglePlaceholder">Kelas</label> <br>
                <select style="width: 100%" name="class_id" id="select2SinglePlaceholder" class=" form-control form-control-sm select-student class_id">
                    <option value="" selected>Pilih Kelas</option>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}
                        </option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group" id="date">
                <label for="simpleDataInput">Tanggal</label>
                  <div class="input-group date">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input type="text" name="date" class="form-control form-control-sm" value="" id="simpleDataInput">
                  </div>
              </div>
            <div class="form-group">
                <label>Siswa Tidak Masuk</label>
                <table class="table table-bordered" id="dynamicAddRemove">  
                  <tr>
                  <th style="text-align: center;">Siswa Tidak Masuk</th>
                  <th style="text-align: center;">Status Kehadiran</th>
                  <th style="text-align: center;"> Tambah Siswa Tidak Masuk </td>  
                  </th>
                  </tr>
                  <tr>  
                  <td style="width: 50%">
                    <select name="student[0][student_id]" id="select2Single" class=" form-control form-control-sm student">
                        <option value="" selected>Pilih Siswa</option>
                        
                    </select>
                   </td>
                    <td style="width: 20%">
                        <select class="select2-single-placeholder form-control form-control-sm" name="status[0][status]" id="status">
                            <option value="A">Alpa</option>
                            <option value="I">Izin</option>
                        </select>
                    </td>
                  <td style="align-content: center; text-align: center;">
                    <button type="button" name="add" id="add-btn" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                  </td>
                  </tr>  
                  </table>
                {{-- <input type="text" class="form-control form-control-sm"name="point" id="point"> --}}
              </div>
        </div>
      </div>
    </div>
  
    <div class="col-4">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{__('Upload Surat Izin')}}</h6>
          </div>
          <div class="table-responsive p-3">
            <div class="form-group">
            <input class="form-control" type="file" name="file">
            <strong style="font-size: 11px; color: red"> Kumpulkan file menjadi 1 zip, Lalu upload file pada form input di atas !! </strong>
          </div>
          <div class="form-group text-right">
            <button type="submit" id="submit" class="btn btn-primary">Buat Absensi</button>
          </div>
          </div>
        </div>
    </div>
  </form>
  </div>
</div>
</div>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript">
    var i = 0;
    $("#add-btn").click(function(){
    ++i;
    $("#dynamicAddRemove").append(`
    <tr>
        <td>
            <select style="width: 100%" name="student[${i}][student_id]" id="select2Single" class=" form-control form-control-sm student">
                        <option value="" selected>Pilih Siswa</option>
            </select>
        </td>
        <td>
            <select class="select2-single-placeholder form-control form-control-sm" name="status[${i}][status]" id="status">
                <option value="A">Alpa</option>
                <option value="I">Izin</option>
            </select>
        </td>
        <td style="text-align: center;">
            <button type="button" class="btn btn-danger btn-sm remove-tr">Hapus</button>
        </td>
    </tr>`);
    });
    $(document).on('click', '.remove-tr', function(){  
    $(this).parents('tr').remove();
    });  
    </script>
    <script>
      $(document).ready(function() {
        $('#date .input-group.date').datepicker({
        format: 'yyyy-mm-dd',
        todayBtn: 'linked',
        todayHighlight: true,
        autoclose: true,        
      });
          })
    </script>
    <script>
    $(document).ready(function() {
        $('.class_id').on('change', function() {
            var classId = $(this).val();
                $.ajax({
                    url: "http://backend.smk1sumenep.sch.id/api/attendances/students/"+ classId,
                    type: "GET",
                    headers: {
                        'Accept':'*/*',
                        'Authorization':'Bearer '+ getCookie('token'),
                    },
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success:function(response) {
                        console.log(response);
                        $(".student").empty();
                        $(".student").append('<option value="0" disabled="true" selected="true">Pilih Siswa</option>');
                        $.each(response.student,function(key, value){
                            $(".student").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }
                });
        });
    });
    </script>


    @include('admin.attendances.scriptcreatedata')
@endsection
