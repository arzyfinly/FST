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
  <div class="col-lg-12">
    <div class="row">
      <div class="col-8">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{__('Absensi Per Kelas')}}</h6>
          </div>
          <div class="table-responsive p-3">
            <form id="createAttendances" enctype="musltipart/form-data">
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
              <div class="form-group text-right">
                <button type="submit" id="submit" class="btn btn-primary">Buat Absensi</button>
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
      }).datepicker("setDate",'now');
          })
    </script>
    @include('admin.attendances.scriptcreatealldata')
@endsection
