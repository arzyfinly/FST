@extends('layout.app')
@section('title', 'Attandances')
@section('attendances-active', 'active')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{__('Absensi Siswa')}}</h1>
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">{{__('Home')}}</a></li>
      <li class="breadcrumb-item"><a href="/attendances">{{__('Absensi')}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{__('Absensi Siswa')}}</li>
  </ol>
</div>
<div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="row">
        <div class="col-8">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{__('Absensi Siswa')}}</h6>
          </div>
          <div class="table-responsive p-3">
            <div class="form-group">
              <label> Kelas </label>
              <input type="text" class="form-control form-control-sm" disabled value="{{$classesattendance->classes->name}}">
            </div>
            <div class="form-group" id="date">
              <label for="simpleDataInput">Tanggal</label>
              <div class="input-group date">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                </div>
                <input type="text" name="date" class="form-control form-control-sm "disabled value="{{$classesattendance->date}}" id="simpleDataInput">
              </div>
            </div>
            <form id="createDetailAttendances" enctype="multipart/form-data">
              <div class="form-group">
                @csrf
                <input name="classes_attendance_id" hidden type="text" value="{{$classesattendance->id}}">
              <label for="select2SinglePlaceholder">Siswa</label> <br>
              <select name="student_id" class=" form-control form-control-sm">
                <option value="" selected>Pilih Siswa</option>
                @foreach ($students as $student)
                <option value="{{ $student->id }}">{{ $student->name }}
                </option>
                @endforeach 
              </select>
            </div>
            <div class="form-group">
              <label>Status Kehadiran</label>
              <select class="form-control form-control-sm" name="status" id="status">
                <option value="">Pilih Status Kehadiran</option>
                <option value="A">Alpa</option>
                <option value="I">Izin</option>
                <option  value="H">Hadir</option>
              </select>
            </div>
            <div class="form-group text-right">
              <button type="submit" id="submit" class="btn btn-success">Buat Absensi Siswa</button>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
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
    @include('admin.attendances.scriptcreatedetaildata')
@endsection
