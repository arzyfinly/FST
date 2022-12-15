@extends('layouts.app')

@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="439" class="elementor elementor-439">
        <section class="breadcrumb-style9-area">
            <div class="breadcrumb-style9-area-bg"
                style="background-image: url('{{ asset('images/visi-misi-fakultas/' . $profil->image_header) }}');">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title">
                                <h2>Visi Misi & Tujuan Fakultas</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li class="breadcrumb-item"><a href="/home">Home &nbsp;</a></li>
                                    <li class="breadcrumb-item">Visi Misi & Tujuan Fakultas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->
        <!--
                =============================================
                    End College Home Page Banner
                ==============================================
                -->
        <div data-elementor-type="wp-page" data-elementor-id="2086" class="elementor elementor-2086">
            <section class="statements-area">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-xl-6">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @foreach ($visimisitujuan as $row)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$row->loop}}" @if ($row->title == 'VISI') class="active" @endif></li>
                                        @endforeach
                                    </ol>
                                    <div class="carousel-inner">
                                        @foreach ($visimisitujuan as $row)
                                        <div class="carousel-item @if ($row->title == 'VISI') active @endif">
                                            <img class="d-block w-100" style="height: 710px" src="{{ asset('images/visi-misi-fakultas/' . $row->image_content) }}">
                                        </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="statements-content-box">
                                <div class="sec-title">
                                    <h2>Visi, Misi & Tujuan FST<br> UNIBA Madura</h2>
                                </div>
                                <div class="statements-content-box__inner">
                                    <div class="theme_carousel statements-carousel owl-theme owl-carousel owl-nav-style-one owl-loaded owl-drag"
                                        data-options="{
                                            &quot;loop&quot;: false,
                                            &quot;margin&quot;: 0,
                                            &quot;autoheight&quot;:true,
                                            &quot;lazyload&quot;:true,
                                            &quot;nav&quot;: true,
                                            &quot;dots&quot;: true,
                                            &quot;autoplay&quot;: true,
                                            &quot;autoplayTimeout&quot;: 5000,
                                            &quot;smartSpeed&quot;: 500,
                                            &quot;navText&quot;: [&quot;<span class=\&quot;left icon-right-arrow-1\&quot;></span>&quot;,
                                            &quot;<span class=\&quot;right icon-right-arrow-1\&quot;></span>&quot;],
                                            &quot;responsive&quot;:{
                                            &quot;0&quot; :{ &quot;items&quot;: &quot;1&quot; },
                                            &quot;600&quot; :{ &quot;items&quot; : &quot;1&quot; },
                                            &quot;768&quot; :{ &quot;items&quot; : &quot;1&quot; },
                                            &quot;992&quot;:{ &quot;items&quot; : &quot;1&quot; },
                                            &quot;1200&quot;:{ &quot;items&quot; : &quot;1&quot; }
                                        }
                                        }">


                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(-488px, 0px, 0px); transition: all 0.5s ease 0s; width: 976px;">
                                                @foreach ($visimisitujuan as $row)
                                                <div class="owl-item @if ($row->title == 'VISI')
                                                    active
                                                @endif" style="width: 488px;">
                                                    <div class="item">
                                                        <div class="single-statements-item">
                                                            <div class="icon"></div>
                                                            <div class="text">
                                                                <h3>{{ $row->title }}</h3>
                                                                <p class="text-break">{{ $row->content }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="owl-dots"><button role="button"
                                                class="owl-dot"><span></span></button><button role="button"
                                                class="owl-dot active"><span></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    @endsection
