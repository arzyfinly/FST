@extends('layout.app')
@section('title', 'Counselings')
@section('counseling-active', 'active')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{__('Konselor')}}</h1>
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">{{__('Home')}}</a></li>
      <li class="breadcrumb-item"><a href="/counselings">{{__('Konseling')}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{__('Edit')}}</li>
  </ol>
</div>
<div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{__('Edit Konseling')}}</h6>
          </div>
          <div class="table-responsive p-3">
          <form id="editCounseling">
            @csrf
            @method('PUT')
            <input type="text" hidden id="id" value="{{ $counseling->id }}">
            <div class="form-group">
              <label>Siswa</label>
              <input type="text" disabled class="form-control" value="{{ $counseling->student->name }}">
            </div>
            <div class="form-group">
                <label>Metode</label>
                <select name="method" id="method" class="form-control method">
                    <option value="" selected>Pilih Metode</option>
                    @if ($counseling->method == "Online")
                    <option selected value="Online">Online</option>
                    <option value="Offline">Offline</option>
                    @else
                    <option value="Online">Online</option>
                    <option selected value="Offline">Offline</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label>Waktu Konseling</label>
                <div class="input-group clockpicker" id="clock">
                    <input type="time" placeholder="00:00" class="form-control" name="time"
                        id="time" value="{{ $counseling->time }}">
                    <div class="input-group-append">
                    </div>
                </div>
            </div>
            <div class="form-group" id="simple-date1">
                <label for="date">Tanggal</label>
                <div class="input-group date">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control" value="{{ $counseling->date_counseling }}" name="date_counseling" id="date_counseling" autocomplete="off">
                </div>
                <small class="text-danger" id="date-error"></small>
            </div>
            <div class="form-group">
                <label>Tempat</label>
                <input placeholder="ruangan bk" type="text" name="place" value="{{ $counseling->place }}" class="form-control">
            </div>
            <div class="form-group">
              <label>Status</label>
              <select name="status" id="status" class="form-control status">
                  <option value="" selected>Pilih Status</option>
                  @if ($counseling->status == "ongoing")
                  <option selected value="ongoing">Pending</option>
                  <option value="done">Selesai</option>
                  @else
                  <option value="ongoing">Pending</option>
                  <option selected value="done">Selesai</option>
                  @endif
              </select>
          </div>
            <div class="form-group">
                <label>Konselor</label>
                <select name="counselor_id" id="counselor_id" class="form-control counselor_id">
                    <option value="" selected>Pilih Konselor</option>
                    @foreach ($counselors as $counselor)
                      @if ($counselor->id == $counseling->counselor_id)
                          @php($select = 'selected')
                      @else
                          @php($select = '')
                      @endif
                      <option {{ $select }} value="{{ $counselor->id }}">{{ $counselor->teacher->name }}
                      </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="submit" id="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@include('admin.counselings.scripteditdata')
@endsection
