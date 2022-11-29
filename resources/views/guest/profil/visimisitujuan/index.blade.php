@extends('layouts.app')

@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="439" class="elementor elementor-439">
        <section class="breadcrumb-style9-area">
            <div class="breadcrumb-style9-area-bg"
                style="background-image: url('{{ asset('images/visi-misi-fakultas/' . $visimisitujuan->profil->image_header) }}');">
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
                            <div class="statements-img-box">
                                <div class="statements-img-box__bg"
                                    style="background-image: url('{{ asset('images/visi-misi-fakultas/' . $visimisitujuan->image_content) }}');">
                                </div>
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
                                                <div class="owl-item" style="width: 488px;">
                                                    <div class="item">
                                                        <div class="single-statements-item">
                                                            <div class="icon"></div>
                                                            <div class="text">
                                                                <h3>{{ $visimisitujuan->title }}</h3>
                                                                <p class="text-break"> {{ $visimisitujuan->content }} </p>
                                                            </div>
                                                        </div>
                                                        <div class="single-statements-item">
                                                            <div class="icon"></div>
                                                            <div class="text">
                                                                <h3>Vision Statement</h3>
                                                                <p>Lirinking from toil &amp; pain these
                                                                    cases are perfectly in
                                                                    simple easy distinguish.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 488px;">
                                                    <div class="item">
                                                        <div class="single-statements-item">
                                                            <div class="icon"></div>
                                                            <div class="text">
                                                                <h3>Health Sciences</h3>
                                                                <p>These cases are perfectly simple and easy
                                                                    distinguish. The same as saying through
                                                                    shrinking from toil &amp; pain in a free
                                                                    hour when our power.</p>
                                                            </div>
                                                        </div>
                                                        <div class="single-statements-item">
                                                            <div class="icon"></div>
                                                            <div class="text">
                                                                <h3>Student Statement</h3>
                                                                <p>Pain these cases toil &amp; pain these
                                                                    cases are perfectly in simple easy
                                                                    distinguish.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
