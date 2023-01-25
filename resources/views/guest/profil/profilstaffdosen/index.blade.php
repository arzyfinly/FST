@extends('layouts.app')

@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="439" class="elementor elementor-439">
        <section class="breadcrumb-style9-area">
            <div class="breadcrumb-style9-area-bg"
                style="background-image: url('{{ asset('images/staff-dosen-fakultas/' . $profil->image_header) }}');">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title">
                                <h2>Dosen FST</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li class="breadcrumb-item"><a href="/home">Home &nbsp;</a></li>
                                    <li class="breadcrumb-item">Dosen FST</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container text-center mt-5">
                @if($informatika->count() != null)
                <div class="sec-title text-center">
                    <h2>INFORMATIKA</h2>
                </div>
                <div class="row">
                    @foreach ($informatika as $row)
                    <div class="col-sm-4 mb-5">
                        {{-- <span style="font-size: 25px; color:black;"><strong> {{$row->title}} </strong></span><br><br> --}}
                        <img class="oval" src="{{ asset('images/staff-dosen-fakultas/' . $row->image_content) }}"
                        style="border-radius: 45%; width:155px; max-height:175px; border-image: url({{ asset('images/staff-dosen-fakultas/' . $row->image_content) }}) 30 round;"><br>
                        <span class="font-wight-light">{{ $row->content }}</span>
                    </div>
                    @endforeach
                </div>
                @endif
                @if($sisinfor->count() != null)
                <div class="sec-title text-center">
                    <h2>SISTEM INFORMASI</h2>
                </div>
                <div class="row">
                    @foreach ($sisinfor as $row)
                    <div class="col-sm-4 mb-5">
                        {{-- <span style="font-size: 25px; color:black;"><strong> {{$row->title}} </strong></span><br><br> --}}
                        <img class="oval" src="{{ asset('images/staff-dosen-fakultas/' . $row->image_content) }}"
                        style="border-radius: 45%; width:155px; max-height:175px; border-image: url({{ asset('images/staff-dosen-fakultas/' . $row->image_content) }}) 30 round;"><br>
                        <span class="font-wight-light">{{ $row->content }}</span>
                    </div>
                    @endforeach
                </div>
                @endif
                @if($tekindustri->count() != null)
                <div class="sec-title text-center">
                    <h2>TEKNIK INDUSTRI</h2>
                </div>
                <div class="row">
                    @foreach ($tekindustri as $row)
                    <div class="col-sm-4 mb-5">
                        {{-- <span style="font-size: 25px; color:black;"><strong> {{$row->title}} </strong></span><br><br> --}}
                        <img class="oval" src="{{ asset('images/staff-dosen-fakultas/' . $row->image_content) }}"
                        style="border-radius: 45%; width:155px; max-height:175px; border-image: url({{ asset('images/staff-dosen-fakultas/' . $row->image_content) }}) 30 round;"><br>
                        <span class="font-wight-light">{{ $row->content }}</span>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </section>
    </div>
@endsection
