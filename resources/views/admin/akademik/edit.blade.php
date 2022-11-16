@extends('layout.app')
@section('title', 'Class-Secretaries')
@section('secretaries-active', 'active')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{__('Sekretaris Kelas')}}</h1>
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">{{__('Home')}}</a></li>
      <li class="breadcrumb-item"><a href="/categories">{{__('Sekretaris Kelas')}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{__('Edit')}}</li>
  </ol>
</div>
<div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{__('Edit Sekretaris Kelas')}}</h6>
          </div>
          <div class="table-responsive p-3">
          <form id="editSecretary">
            @csrf
            @method('PUT')
            <input type="text" id="id" hidden value="{{ $secretary->id }}">
            <div class="form-group">
              <label>Kelas</label>
              <input hidden type="text" name="class_id" value="{{ $secretary->class_id }}">
              <input class="form-control" type="text" disabled value="{{ $secretary->class_school->name }}">
            </div>
            <div class="form-group">
            <label>Siswa</label>
            <select name="student_id" id="select2Single" class=" form-control form-control-sm student">
              <option value="" selected>Pilih Siswa</option>
              @foreach ($students as $student)
              @if ($secretary->student_id == $student->id)
              <option selected value="{{ $student->id }}">{{ $student->name }}</option>
              @else
              <option value="{{ $student->id }}">{{ $student->name }}</option>
              @endif
              @endforeach
            </select>
            </div>
            <div class="modal-footer">
              <button type="submit" id="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@include('admin.class-secretaries.scripteditdata')
@endsection
