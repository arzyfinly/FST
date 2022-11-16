@extends('layout.app')
@section('title', 'Attandances')
@section('attendances-active', 'active')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{__('Detail Absensi')}}</h1>
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">{{__('Home')}}</a></li>
      <li class="breadcrumb-item"><a href="/attendances">{{__('Absensi')}}</a></li>
      <li class="breadcrumb-item"><a href="/attendances/{{$classesattendance->id}}">{{__('Detail Absensi')}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{__('Edit')}}</li>
  </ol>
</div>
<div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{__('Edit Absensi Siswa')}}</h6>
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
            <div class="form-group">
              <label> Nama Siswa </label>
              <input type="text" class="form-control form-control-sm" disabled value="{{$detailattendance->student->name}}">
              {{-- <span class="input-group-text"><i class="fas fa-calendar"></i></span> --}}
            </div>
            <form id="editDetailAttendance" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Status Kehadiran</label>
              <select class="form-control form-control-sm" name="status" id="status">
                @if($detailattendance->status == "A")
                <option selected value="A">Alpa</option>
                <option value="I">Izin</option>
                <option value="H">Hadir</option>
                @elseif($detailattendance->status == "I")
                <option value="A">Alpa</option>
                <option selected value="I">Izin</option>
                <option value="H">Hadir</option>
                @else
                <option value="A">Alpa</option>
                <option value="I">Izin</option>
                <option selected value="H">Hadir</option>
                @endif
              </select>
            </div>
            <input type="text" id="id" hidden value="{{$detailattendance->id}}">
            <div class="modal-footer">
              <button type="submit" id="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script>
  $('#date .input-group.date').datepicker({
    format: 'yyyy-mm-dd',
    todayBtn: 'linked',
    todayHighlight: true,
    autoclose: true,        
  }).datepicker("setDate", "{{ $classesattendance->date }}");
</script>
@include('admin.attendances.scripteditdetaildata')
@endsection
