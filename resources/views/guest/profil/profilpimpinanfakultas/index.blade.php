@extends('layouts.app')

@section('content')
<div data-elementor-type="wp-page" data-elementor-id="439" class="elementor elementor-439">
    <section class="breadcrumb-style9-area">
        <div class="breadcrumb-style9-area-bg"
            style="background-image: url('{{ asset('images/pimpinan-fakultas/'.$profil->image_header) }}');">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title">
                            <h2>Pimpinan FST</h2>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li class="breadcrumb-item"><a href="/home">Home &nbsp;</a></li>
                                <li class="breadcrumb-item">Pimpinan FST</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col-sm mb-5">
                    <span style="font-size: 27px; color:black;"><strong> DEKAN </strong></span><br><br>
                        <img src="{{ asset('images/pimpinan-fakultas/'.$dekan->image_content) }}" style="border-radius: 45%; width:155px; max-height:175px; border-image: url({{ asset('images/pimpinan-fakultas/'.$dekan->image_content) }}) 30 round;"><br>
                    <span class="font-wight-light">{{ $dekan->content }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm mb-5">
                    <span style="font-size: 27px; color:black;"><strong> WAKIL DEKAN </strong></span><br><br>
                    <img class="oval" src="{{ asset('images/pimpinan-fakultas/'.$wakil_dekan->image_content) }}" style="border-radius: 45%; width:155px; max-height:175px; border-image: url({{ asset('images/pimpinan-fakultas/'.$wakil_dekan->image_content) }}) 30 round;"><br>
                    <span class="font-wight-light">{{ $wakil_dekan->content }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm mb-5">
                    <span style="font-size: 25px; color:black;"><strong> KAPRODI INFORMATIKA </strong></span><br><br>
                    <img class="oval" src="{{ asset('images/pimpinan-fakultas/'.$kap_inf->image_content) }}" style="border-radius: 45%; width:155px; max-height:175px; border-image: url({{ asset('images/pimpinan-fakultas/'.$kap_inf->image_content) }}) 30 round;"><br>
                    <span class="font-wight-light">{{ $kap_inf->content }}</span>
                </div>
                <div class="col-sm">
                    <span style="font-size: 25px; color:black;"><strong> KAPRODI SISTEM INFORMASI </strong></span><br><br>
                    <img class="oval" src="{{ asset('images/pimpinan-fakultas/'.$kap_sis_inf->image_content) }}" style="border-radius: 45%; width:155px; max-height:175px; border-image: url({{ asset('images/pimpinan-fakultas/'.$kap_sis_inf->image_content) }}) 30 round;"><br>
                    <span class="font-wight-light">{{ $kap_sis_inf->content }}</span>
                </div>
                <div class="col-sm">
                    <span style="font-size: 25px; color:black;"><strong> KAPRODI TEKNIK INDUSTRI </strong></span><br><br>
                    <img class="oval" src="{{ asset('images/pimpinan-fakultas/'.$kap_tek_indus->image_content) }}" style="border-radius: 45%; width:155px; max-height:175px; border-image: url({{ asset('images/pimpinan-fakultas/'.$kap_tek_indus->image_content) }}) 30 round;"><br>
                    <span class="font-wight-light">{{ $kap_tek_indus->content }}</span>
                </div>
            </div>
        </div>

    </section>
</div>


@endsection
