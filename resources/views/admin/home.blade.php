@extends('layout.app')
@section('title', 'Dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">BK SMK</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
    @if (Session::has('error'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <i class="fas fa-exclamation-triangle"></i>
            {{ Session::get('error') }}
        </div>
    @endif
    <div class="row mb-3">
        <!-- Data Konseling Siswa -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Konseling Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{-- @if ($counselings > null)
                                    {{ count($counselings) }}
                                @else
                                    --/--
                                @endif --}}
                            </div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <a href="/counselings"><span
                                        class="text-success mr-2">Selengkapnya <i class="fa fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Konselors -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Konselor</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{-- @if ($counselors > null)
                                    {{ count($counselors) }}
                                @else
                                    --/--
                                @endif --}}
                            </div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <a href="/counselors"><span
                                        class="text-success mr-2">Selengkapnya <i class="fa fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection