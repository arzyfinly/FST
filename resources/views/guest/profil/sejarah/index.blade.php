@extends('layouts.app')

@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="439" class="elementor elementor-439">
        <section class="breadcrumb-style9-area">
            <div class="breadcrumb-style9-area-bg"
                style="background-image: url('{{ asset('images/sejarah-fakultas/'.$sejarah->profil->image_header) }}');">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title">
                                <h2>Sejarah Fakultas</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li class="breadcrumb-item"><a href="/home">Home &nbsp;</a></li>
                                    <li class="breadcrumb-item">Sejarah Fakultas</li>
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
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-b1716ae elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="b1716ae" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fff3e76"
                        data-id="fff3e76" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-695382e elementor-widget elementor-widget-educamb_statement_of_educamb_v2"
                                data-id="695382e" data-element_type="widget"
                                data-widget_type="educamb_statement_of_educamb_v2.default">
                                <div class="elementor-widget-container">

                                    <!--Start About Style1 Area-->
                                    <section class="about-style1-area">
                                        <div class="container">
                                            <div class="sec-title text-center">
                                                <h2>{{ $sejarah->title }}</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="about-style1__inner">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="about-style1-content">
                                                                    <div class="top">
                                                                        <div class="big-text">{{ substr($sejarah->content, 0, 1) }}</div>
                                                                        <div class="text">
                                                                            <p align="justify">
                                                                                                    {{ substr($sejarah->content, 1, $pos = strpos(substr($sejarah->content, 1, 250),".")+1) }} </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="bottom-text">
                                                                        <p align="justify"> {{ substr($sejarah->content, $pos+2) }} </p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="{{ route('guest.visi-misi') }}">
                                                                            <span class="txt">Visi, Misi & Tujuan</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="about-style1-img-box">
                                                                    <div class="inner">
                                                                        <img src="{{ asset('images/sejarah-fakultas/'.$sejarah->image_content) }}" alt="Sejarah FST" title="Sejarah FST">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--End About Style1 Area-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-4f2e52e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="4f2e52e" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8b13b72"
                        data-id="8b13b72" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-2847473 elementor-widget elementor-widget-educamb_feature_tab_v2"
                                data-id="2847473" data-element_type="widget"
                                data-widget_type="educamb_feature_tab_v2.default">
                                <div class="elementor-widget-container">

                                    <!--Start Statements style2 Area-->
                                    <section class="statements-style2-area">
                                        <div class="statements-area-bg"
                                            style="background-image: url(../wp-content/uploads/2022/06/statements-area-bg.jpg);">
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="statements-tab">

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="tabs-content-box">
                                                                    <!--Tab-->
                                                                    <div class="tab-content-box-item tab-content-box-item-active"
                                                                        id="1">
                                                                        <div class="statements-tab__content">
                                                                            <div class="theme_carousel statements-tab-carousel owl-theme owl-carousel owl-nav-style-one"
                                                                                data-options='{
                                                    "loop": true,
                                                    "margin": 0,
                                                    "autoheight":true,
                                                    "lazyload":true,
                                                    "nav": true,
                                                    "dots": false,
                                                    "autoplay": true,
                                                    "autoplayTimeout": 5000,
                                                    "smartSpeed": 500,
                                                    "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                                    "<span class=\"right icon-right-arrow-1\"></span>"],
                                                    "responsive":{
                                                    "0" :{ "items": "1" },
                                                    "600" :{ "items" : "1" },
                                                    "768" :{ "items" : "1" },
                                                    "992":{ "items" : "1" },
                                                    "1200":{ "items" : "1" }
                                                }
                                                }'>

                                                                                <!--Start Single Box-->
                                                                                <div class="single-box">
                                                                                    <div class="text-holder">
                                                                                        <h3><a href="index.html">Mission
                                                                                                Statement</a></h3>
                                                                                        <p>Cannot forese the pain trouble
                                                                                            that are bound to ensue &amp;
                                                                                            equal blame belongs too those
                                                                                            who fail in their duty through
                                                                                            weakness of will.</p>
                                                                                    </div>
                                                                                    <div class="icon-holder">
                                                                                        <span class="icon-target"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--End Single Box-->
                                                                                <!--Start Single Box-->
                                                                                <div class="single-box">
                                                                                    <div class="text-holder">
                                                                                        <h3><a href="index.html">Mission
                                                                                                Statement</a></h3>
                                                                                        <p>Cannot forese the pain trouble
                                                                                            that are bound to ensue &amp;
                                                                                            equal blame belongs too those
                                                                                            who fail in their duty through
                                                                                            weakness of will.</p>
                                                                                    </div>
                                                                                    <div class="icon-holder">
                                                                                        <span class="icon-target"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--End Single Box-->

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--Tab-->
                                                                    <div class="tab-content-box-item " id="2">
                                                                        <div class="statements-tab__content">
                                                                            <div class="theme_carousel statements-tab-carousel owl-theme owl-carousel owl-nav-style-one"
                                                                                data-options='{
                                                    "loop": true,
                                                    "margin": 0,
                                                    "autoheight":true,
                                                    "lazyload":true,
                                                    "nav": true,
                                                    "dots": false,
                                                    "autoplay": true,
                                                    "autoplayTimeout": 5000,
                                                    "smartSpeed": 500,
                                                    "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                                    "<span class=\"right icon-right-arrow-1\"></span>"],
                                                    "responsive":{
                                                    "0" :{ "items": "1" },
                                                    "600" :{ "items" : "1" },
                                                    "768" :{ "items" : "1" },
                                                    "992":{ "items" : "1" },
                                                    "1200":{ "items" : "1" }
                                                }
                                                }'>

                                                                                <!--Start Single Box-->
                                                                                <div class="single-box">
                                                                                    <div class="text-holder">
                                                                                        <h3><a href="index.html">Vision
                                                                                                Statement</a></h3>
                                                                                        <p>forese the pain trouble that are
                                                                                            bound to ensue &amp; equal blame
                                                                                            belongs too those who fail in
                                                                                            their duty through weakness of
                                                                                            will.</p>
                                                                                    </div>
                                                                                    <div class="icon-holder">
                                                                                        <span class="icon-infinite"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--End Single Box-->
                                                                                <!--Start Single Box-->
                                                                                <div class="single-box">
                                                                                    <div class="text-holder">
                                                                                        <h3><a href="index.html">Vision
                                                                                                Statement</a></h3>
                                                                                        <p>weakness of will Cannot forese
                                                                                            the pain trouble that are bound
                                                                                            to ensue &amp; equal blame
                                                                                            belongs too those who fail in
                                                                                            their duty through</p>
                                                                                    </div>
                                                                                    <div class="icon-holder">
                                                                                        <span class="icon-infinite"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--End Single Box-->

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--Tab-->
                                                                    <div class="tab-content-box-item " id="3">
                                                                        <div class="statements-tab__content">
                                                                            <div class="theme_carousel statements-tab-carousel owl-theme owl-carousel owl-nav-style-one"
                                                                                data-options='{
                                                    "loop": true,
                                                    "margin": 0,
                                                    "autoheight":true,
                                                    "lazyload":true,
                                                    "nav": true,
                                                    "dots": false,
                                                    "autoplay": true,
                                                    "autoplayTimeout": 5000,
                                                    "smartSpeed": 500,
                                                    "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                                    "<span class=\"right icon-right-arrow-1\"></span>"],
                                                    "responsive":{
                                                    "0" :{ "items": "1" },
                                                    "600" :{ "items" : "1" },
                                                    "768" :{ "items" : "1" },
                                                    "992":{ "items" : "1" },
                                                    "1200":{ "items" : "1" }
                                                }
                                                }'>

                                                                                <!--Start Single Box-->
                                                                                <div class="single-box">
                                                                                    <div class="text-holder">
                                                                                        <h3><a href="index.html">Our
                                                                                                Values</a></h3>
                                                                                        <p>bound to ensue &amp; equal blame
                                                                                            belongs too those who fail in
                                                                                            their duty through cannot forese
                                                                                            the pain trouble that are
                                                                                            weakness of will.</p>
                                                                                    </div>
                                                                                    <div class="icon-holder">
                                                                                        <span
                                                                                            class="icon-diploma-1"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--End Single Box-->
                                                                                <!--Start Single Box-->
                                                                                <div class="single-box">
                                                                                    <div class="text-holder">
                                                                                        <h3><a href="index.html">Our
                                                                                                Values</a></h3>
                                                                                        <p>those bound to ensue &amp; equal
                                                                                            blame belongs too those who fail
                                                                                            in their duty through cannot
                                                                                            forese the pain trouble that are
                                                                                            weakness of will.</p>
                                                                                    </div>
                                                                                    <div class="icon-holder">
                                                                                        <span
                                                                                            class="icon-diploma-1"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--End Single Box-->

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--Tab-->
                                                                    <div class="tab-content-box-item " id="4">
                                                                        <div class="statements-tab__content">
                                                                            <div class="theme_carousel statements-tab-carousel owl-theme owl-carousel owl-nav-style-one"
                                                                                data-options='{
                                                    "loop": true,
                                                    "margin": 0,
                                                    "autoheight":true,
                                                    "lazyload":true,
                                                    "nav": true,
                                                    "dots": false,
                                                    "autoplay": true,
                                                    "autoplayTimeout": 5000,
                                                    "smartSpeed": 500,
                                                    "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                                    "<span class=\"right icon-right-arrow-1\"></span>"],
                                                    "responsive":{
                                                    "0" :{ "items": "1" },
                                                    "600" :{ "items" : "1" },
                                                    "768" :{ "items" : "1" },
                                                    "992":{ "items" : "1" },
                                                    "1200":{ "items" : "1" }
                                                }
                                                }'>

                                                                                <!--Start Single Box-->
                                                                                <div class="single-box">
                                                                                    <div class="text-holder">
                                                                                        <h3><a
                                                                                                href="index.html">Sustainability</a>
                                                                                        </h3>
                                                                                        <p>too those trouble that bound to
                                                                                            ensue &amp; equal blame belongs
                                                                                            who fail in their duty through
                                                                                            cannot forese the pain are
                                                                                            weakness of will.</p>
                                                                                    </div>
                                                                                    <div class="icon-holder">
                                                                                        <span
                                                                                            class="icon-navigation"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--End Single Box-->
                                                                                <!--Start Single Box-->
                                                                                <div class="single-box">
                                                                                    <div class="text-holder">
                                                                                        <h3><a
                                                                                                href="index.html">Sustainability</a>
                                                                                        </h3>
                                                                                        <p>trouble that bound to ensue &amp;
                                                                                            equal blame belongs too those
                                                                                            who fail in their duty through
                                                                                            cannot forese the pain are
                                                                                            weakness of will.</p>
                                                                                    </div>
                                                                                    <div class="icon-holder">
                                                                                        <span
                                                                                            class="icon-navigation"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--End Single Box-->

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="statements-tab__button">
                                                                    <ul class="tabs-button-box clearfix">
                                                                        <li data-tab="#1"
                                                                            class="tab-btn-item active-btn-item">
                                                                            <h3>Mission Statement</h3>
                                                                        </li>
                                                                        <li data-tab="#2" class="tab-btn-item ">
                                                                            <h3>Vision Statement</h3>
                                                                        </li>
                                                                        <li data-tab="#3" class="tab-btn-item ">
                                                                            <h3>Our Values</h3>
                                                                        </li>
                                                                        <li data-tab="#4" class="tab-btn-item ">
                                                                            <h3>Sustainability</h3>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--End Statements Style2 Area-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-dcd10ec elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="dcd10ec" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-99919df"
                        data-id="99919df" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-29f7940 elementor-widget elementor-widget-educamb_history_of_university"
                                data-id="29f7940" data-element_type="widget"
                                data-widget_type="educamb_history_of_university.default">
                                <div class="elementor-widget-container">


                                    <!--Start  University History Area-->
                                    <section class="university-history-area">
                                        <div class="container">
                                            <div class="sec-title text-center">
                                                <h2>History Of The University</h2>
                                                <div class="sub-title">
                                                    <p>How all this mistaken idea of denouncing pleasure and praising pain
                                                        was born.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="university-history-img-box">
                                                        <div class="inner">
                                                            <img src="../wp-content/uploads/2022/06/university-history-img.jpg"
                                                                alt="Awesome Image">
                                                            <div class="university-history-img-box__content">
                                                                <h3>Building The Campus</h3>
                                                                <p>Explain to you how all this mistaken idea of pleasure and
                                                                    praising pain was born will give you a completed account
                                                                    of system actual teachings.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6">
                                                    <div class="university-history-content">
                                                        <div class="single-vertical-carousel">

                                                            <!--Start Single Item-->
                                                            <div class="single-item">
                                                                <ul>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Foundation <span>/ April 1934</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>General Assembly Votes <span>/ September
                                                                                    1935</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Lecture Hall Opens <span>/ March 1944</span>
                                                                            </h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Research Foundation <span>/ October
                                                                                    1946</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>New Library Cooperation <span>/ March
                                                                                    1950</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Respect Wins <span>/ December 1951</span>
                                                                            </h3>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                            <!--End Single Item-->
                                                            <!--Start Single Item-->
                                                            <div class="single-item">
                                                                <ul>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Foundation <span>/ April 1934</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>General Assembly Votes <span>/ September
                                                                                    1935</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Lecture Hall Opens <span>/ March 1944</span>
                                                                            </h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Research Foundation <span>/ October
                                                                                    1946</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>New Library Cooperation <span>/ March
                                                                                    1950</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Research Foundation <span>/ October
                                                                                    1946</span></h3>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                            <!--End Single Item-->
                                                            <!--Start Single Item-->
                                                            <div class="single-item">
                                                                <ul>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Foundation <span>/ April 1934</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>General Assembly Votes <span>/ September
                                                                                    1935</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Lecture Hall Opens <span>/ March 1944</span>
                                                                            </h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Respect Wins <span>/ December 1951</span>
                                                                            </h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>New Library Cooperation <span>/ March
                                                                                    1950</span></h3>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="video-popup" title="Video Gallery"
                                                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                            <span class="icon-play"></span>
                                                                            <h3>Research Foundation <span>/ October
                                                                                    1946</span></h3>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!--End Single Item-->

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                    <!--End  University History Area-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-4ee1536 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="4ee1536" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62803ce"
                        data-id="62803ce" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8ead831 elementor-widget elementor-widget-educamb_styles_of_photography_v2"
                                data-id="8ead831" data-element_type="widget"
                                data-widget_type="educamb_styles_of_photography_v2.default">
                                <div class="elementor-widget-container">

                                    <!--Start Choose Style1 Area-->
                                    <section class="choose-style1-area">
                                        <div class="container">
                                            <div class="sec-title">
                                                <h2>Reason For Choose Us</h2>
                                                <div class="sub-title">
                                                    <p>Trouble that are bound to ensue; and equal blame belongs to those who
                                                        fail.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="choose-style1-content">
                                                        <div class="theme_carousel choose-style1-carousel owl-theme owl-carousel owl-nav-style-one"
                                                            data-options='{
                                "loop": true,
                                "margin": 30,
                                "autoheight":true,
                                "lazyload":true,
                                "nav": true,
                                "dots": false,
                                "autoplay": true,
                                "autoplayTimeout": 5000,
                                "smartSpeed": 500,
                                "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                "<span class=\"right icon-right-arrow-1\"></span>"],
                                "responsive":{
                                "0" :{ "items": "1" },
                                "600" :{ "items" : "1" },
                                "768" :{ "items" : "2" },
                                "992":{ "items" : "3" },
                                "1200":{ "items" : "4" }
                            }
                            }'>

                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Libraries</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Physical exercise except to some advantages from
                                                                            but who has any right.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-1.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Canteen &amp; Dining</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Indignation &amp; dislike men who beguileds
                                                                            that’s pleasure the moment.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-2.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Stationaries</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Who has any right but physical exercise except to
                                                                            some advantages from.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-3.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Gym &amp; Yoga</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Dislike men indignation &amp; who beguileds
                                                                            that’s pleasure the moment.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-4.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Libraries</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Physical exercise except to some advantages from
                                                                            but who has any right.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-1.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Canteen &amp; Dining</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Indignation &amp; dislike men who beguileds
                                                                            that’s pleasure the moment.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-2.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Stationaries</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Who has any right but physical exercise except to
                                                                            some advantages from.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-3.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Gym &amp; Yoga</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Dislike men indignation &amp; who beguileds
                                                                            that’s pleasure the moment.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-4.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Libraries</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Physical exercise except to some advantages from
                                                                            but who has any right.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-1.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Canteen &amp; Dining</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Indignation &amp; dislike men who beguileds
                                                                            that’s pleasure the moment.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-2.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Stationaries</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Who has any right but physical exercise except to
                                                                            some advantages from.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-3.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                            <!--Start Single Choose Style1-->
                                                            <div class="single-choose-style1">
                                                                <div class="single-choose-style1__inner">
                                                                    <div class="icon">
                                                                        <span class="icon-tick">
                                                                            <span class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="inner-title">
                                                                        <h3>Gym &amp; Yoga</h3>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Dislike men indignation &amp; who beguileds
                                                                            that’s pleasure the moment.</p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="single-choose-style1__overlay"
                                                                        style="background-image: url(../wp-content/uploads/2022/06/choose-style-1-img-4.jpg);">
                                                                        <div class="btns-box">
                                                                            <a class="btn-one"
                                                                                href="../college-overview/index.html">
                                                                                <span class="txt">Read More</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Single Choose Style1-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--End Choose Style1 Area-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-fe07eb1 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="fe07eb1" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c53e3cf"
                        data-id="c53e3cf" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5a526d0 elementor-widget elementor-widget-educamb_funfacts"
                                data-id="5a526d0" data-element_type="widget" data-widget_type="educamb_funfacts.default">
                                <div class="elementor-widget-container">

                                    <!--Start Fact Counter Area-->
                                    <section class="fact-counter-area">

                                        <div class="container">
                                            <div class="sec-title text-center">
                                                <h2>Most Interesting Facts</h2>
                                                <div class="sub-title">
                                                    <p>To take a trivial example which of us ever undertakes laborious
                                                        physical exercise.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <ul class="fact-counter-box">
                                                        <!--Start Single Fact Counter-->
                                                        <!--Start Single Fact Counter-->
                                                        <li class="single-fact-counter">
                                                            <div class="title-holder">
                                                                <div class="count-outer count-box">
                                                                    <span class="count-text" data-speed="3000"
                                                                        data-stop="2500">0</span>
                                                                </div>
                                                                <h3>History of High Achievers</h3>
                                                            </div>
                                                            <div class="icon-holder">
                                                                <span class="icon-online"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span><span
                                                                        class="path6"></span><span
                                                                        class="path7"></span><span
                                                                        class="path8"></span><span
                                                                        class="path9"></span><span
                                                                        class="path10"></span><span
                                                                        class="path11"></span><span
                                                                        class="path12"></span><span
                                                                        class="path13"></span><span
                                                                        class="path14"></span><span
                                                                        class="path15"></span><span
                                                                        class="path16"></span><span
                                                                        class="path17"></span></span>
                                                            </div>
                                                        </li>
                                                        <!--End Single Fact Counter-->
                                                        <!--Start Single Fact Counter-->
                                                        <li class="single-fact-counter single-fact-counter--style2">
                                                            <div class="title-holder">
                                                                <div class="count-outer count-box">
                                                                    <span class="count-text" data-speed="3000"
                                                                        data-stop="1870">0</span>
                                                                </div>
                                                                <h3>Total Acres of the Land</h3>
                                                            </div>
                                                            <div class="icon-holder">
                                                                <span class="icon-office-building"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span><span
                                                                        class="path6"></span><span
                                                                        class="path7"></span><span
                                                                        class="path8"></span><span
                                                                        class="path9"></span><span
                                                                        class="path10"></span><span
                                                                        class="path11"></span><span
                                                                        class="path12"></span><span
                                                                        class="path13"></span><span
                                                                        class="path14"></span><span
                                                                        class="path15"></span><span
                                                                        class="path16"></span><span
                                                                        class="path17"></span><span
                                                                        class="path18"></span><span
                                                                        class="path19"></span><span
                                                                        class="path20"></span><span
                                                                        class="path21"></span><span
                                                                        class="path22"></span><span
                                                                        class="path23"></span><span
                                                                        class="path24"></span><span
                                                                        class="path25"></span><span
                                                                        class="path26"></span><span
                                                                        class="path27"></span><span
                                                                        class="path28"></span><span
                                                                        class="path29"></span><span
                                                                        class="path30"></span><span
                                                                        class="path31"></span><span
                                                                        class="path32"></span><span
                                                                        class="path33"></span><span
                                                                        class="path34"></span><span
                                                                        class="path35"></span><span
                                                                        class="path36"></span><span
                                                                        class="path37"></span><span
                                                                        class="path38"></span><span
                                                                        class="path39"></span><span
                                                                        class="path40"></span><span
                                                                        class="path41"></span><span
                                                                        class="path42"></span><span
                                                                        class="path43"></span><span
                                                                        class="path44"></span><span
                                                                        class="path45"></span><span
                                                                        class="path46"></span><span
                                                                        class="path47"></span><span
                                                                        class="path48"></span><span
                                                                        class="path49"></span><span
                                                                        class="path50"></span><span
                                                                        class="path51"></span><span
                                                                        class="path52"></span><span
                                                                        class="path53"></span><span
                                                                        class="path54"></span><span
                                                                        class="path55"></span><span
                                                                        class="path56"></span><span
                                                                        class="path57"></span><span
                                                                        class="path58"></span><span
                                                                        class="path59"></span><span
                                                                        class="path60"></span><span
                                                                        class="path61"></span><span
                                                                        class="path62"></span><span
                                                                        class="path63"></span></span>
                                                            </div>
                                                        </li>
                                                        <!--End Single Fact Counter-->

                                                    </ul>

                                                    <ul class="fact-counter-box bottom">
                                                        <!--Start Single Fact Counter-->
                                                        <li class="single-fact-counter pdt50 pdb0">
                                                            <div class="title-holder">
                                                                <div class="count-outer count-box">
                                                                    <span class="count-text" data-speed="3000"
                                                                        data-stop="3.9">0</span>
                                                                </div>
                                                                <h3>Kilometer's of Bookshelves</h3>
                                                            </div>
                                                            <div class="icon-holder">
                                                                <span class="icon-book"><span class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span><span
                                                                        class="path6"></span><span
                                                                        class="path7"></span><span
                                                                        class="path8"></span><span
                                                                        class="path9"></span><span
                                                                        class="path10"></span><span
                                                                        class="path11"></span><span
                                                                        class="path12"></span><span
                                                                        class="path13"></span><span
                                                                        class="path14"></span><span
                                                                        class="path15"></span><span
                                                                        class="path16"></span><span
                                                                        class="path17"></span><span
                                                                        class="path18"></span><span
                                                                        class="path19"></span><span
                                                                        class="path20"></span><span
                                                                        class="path21"></span><span
                                                                        class="path22"></span><span
                                                                        class="path23"></span><span
                                                                        class="path24"></span><span
                                                                        class="path25"></span><span
                                                                        class="path26"></span><span
                                                                        class="path27"></span><span
                                                                        class="path28"></span><span
                                                                        class="path29"></span><span
                                                                        class="path30"></span><span
                                                                        class="path31"></span><span
                                                                        class="path32"></span><span
                                                                        class="path33"></span><span
                                                                        class="path34"></span></span>
                                                            </div>
                                                        </li>
                                                        <!--End Single Fact Counter-->
                                                        <!--Start Single Fact Counter-->
                                                        <li
                                                            class="single-fact-counter single-fact-counter--style2 pdt50 pdb0">
                                                            <div class="title-holder">
                                                                <div class="count-outer count-box">
                                                                    <span class="count-text" data-speed="3000"
                                                                        data-stop="164">0</span>
                                                                </div>
                                                                <h3>Awards &amp; Achivements</h3>
                                                            </div>
                                                            <div class="icon-holder">
                                                                <span class="icon-browser"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span><span
                                                                        class="path6"></span><span
                                                                        class="path7"></span><span
                                                                        class="path8"></span><span
                                                                        class="path9"></span><span
                                                                        class="path10"></span><span
                                                                        class="path11"></span><span
                                                                        class="path12"></span><span
                                                                        class="path13"></span><span
                                                                        class="path14"></span><span
                                                                        class="path15"></span><span
                                                                        class="path16"></span><span
                                                                        class="path17"></span><span
                                                                        class="path18"></span><span
                                                                        class="path19"></span><span
                                                                        class="path20"></span><span
                                                                        class="path21"></span><span
                                                                        class="path22"></span><span
                                                                        class="path23"></span></span>
                                                            </div>
                                                        </li>
                                                        <!--End Single Fact Counter-->
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--End Fact Counter Area-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-a8b43a5 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="a8b43a5" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-53e97c2"
                        data-id="53e97c2" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5247efb elementor-widget elementor-widget-educamb_our_instructors_v3"
                                data-id="5247efb" data-element_type="widget"
                                data-widget_type="educamb_our_instructors_v3.default">
                                <div class="elementor-widget-container">

                                    <!--Start Team Style1 Area-->
                                    <section class="team-style1-area">
                                        <div class="container">

                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="team-style1__top">
                                                        <div class="sec-title">
                                                            <h2>Our Management Team</h2>
                                                            <div class="sub-title">
                                                                <p>Trouble that are bound to ensue and equal blame belongs
                                                                    to those who fail.</p>
                                                            </div>
                                                        </div>
                                                        <div class="btns-box">
                                                            <a class="btn-one btn-one--style2"
                                                                href="../college-departments/index.html">
                                                                <span class="txt">All Members</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!--Start Single Team Style1-->
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="single-team-style1 wow fadeInUp" data-wow-delay="100ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="img-holder">
                                                            <div class="inner">
                                                                <img loading="lazy" width="370" height="370"
                                                                    src="../wp-content/uploads/2022/07/team-v1-1.jpg"
                                                                    class="attachment-educamb_370x370 size-educamb_370x370 wp-post-image"
                                                                    alt=""
                                                                    srcset="https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-1.jpg 370w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-1-300x300.jpg 300w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-1-150x150.jpg 150w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-1-70x70.jpg 70w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-1-100x100.jpg 100w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-1-130x130.jpg 130w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-1-140x140.jpg 140w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-1-120x120.jpg 120w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-1-270x270.jpg 270w"
                                                                    sizes="(max-width: 370px) 100vw, 370px" />
                                                                <div class="share-button">
                                                                    <div class="icon">
                                                                        <span class="icon-share-1"></span>
                                                                    </div>
                                                                    <ul class="social-links">

                                                                        <li><a href="https://www.facebook.com/"><i
                                                                                    class="fab fa-facebook"></i></a></li>
                                                                        <li><a href="https://www.linkedin.com/"><i
                                                                                    class="fab fa-linkedin"></i></a></li>
                                                                        <li><a href="https://www.twitter.com/"><i
                                                                                    class="fab fa-twitter"></i></a></li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-holder">
                                                            <h3><a href="#">Ian Hudson</a>
                                                                <sup><span>*</span>Chancellor</sup></h3>
                                                            <div class="text">
                                                                <p>Loves or pursues desires to obtain pain itself because it
                                                                    is pain&hellip;</p>
                                                            </div>
                                                            <div class="mail-info">
                                                                <div class="icon">
                                                                    <span class="icon-send"></span>
                                                                </div>
                                                                <a href="mailto:hutson@educamb.com">hutson@educamb.com</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Team Style1-->
                                                <!--Start Single Team Style1-->
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="single-team-style1 wow fadeInUp" data-wow-delay="100ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="img-holder">
                                                            <div class="inner">
                                                                <img width="370" height="370"
                                                                    src="../wp-content/uploads/2022/07/team-v1-2.jpg"
                                                                    class="attachment-educamb_370x370 size-educamb_370x370 wp-post-image"
                                                                    alt="" loading="lazy"
                                                                    srcset="https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-2.jpg 370w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-2-300x300.jpg 300w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-2-150x150.jpg 150w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-2-70x70.jpg 70w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-2-100x100.jpg 100w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-2-130x130.jpg 130w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-2-140x140.jpg 140w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-2-120x120.jpg 120w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-2-270x270.jpg 270w"
                                                                    sizes="(max-width: 370px) 100vw, 370px" />
                                                                <div class="share-button">
                                                                    <div class="icon">
                                                                        <span class="icon-share-1"></span>
                                                                    </div>
                                                                    <ul class="social-links">

                                                                        <li><a href="https://www.facebook.com/"><i
                                                                                    class="fab fa-facebook"></i></a></li>
                                                                        <li><a href="https://www.linkedin.com/"><i
                                                                                    class="fab fa-linkedin"></i></a></li>
                                                                        <li><a href="https://www.twitter.com/"><i
                                                                                    class="fab fa-twitter"></i></a></li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-holder">
                                                            <h3><a href="#">Lillian Stella</a>
                                                                <sup><span>*</span>Vice Chancellor</sup></h3>
                                                            <div class="text">
                                                                <p>To take a trivial example which off undertakes laborious
                                                                    physical exercise.</p>
                                                            </div>
                                                            <div class="mail-info">
                                                                <div class="icon">
                                                                    <span class="icon-send"></span>
                                                                </div>
                                                                <a href="mailto:stella@educamb.com">stella@educamb.com</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Team Style1-->
                                                <!--Start Single Team Style1-->
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="single-team-style1 wow fadeInUp" data-wow-delay="100ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="img-holder">
                                                            <div class="inner">
                                                                <img width="370" height="370"
                                                                    src="../wp-content/uploads/2022/07/team-v1-3.jpg"
                                                                    class="attachment-educamb_370x370 size-educamb_370x370 wp-post-image"
                                                                    alt="" loading="lazy"
                                                                    srcset="https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-3.jpg 370w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-3-300x300.jpg 300w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-3-150x150.jpg 150w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-3-70x70.jpg 70w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-3-100x100.jpg 100w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-3-130x130.jpg 130w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-3-140x140.jpg 140w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-3-120x120.jpg 120w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/07/team-v1-3-270x270.jpg 270w"
                                                                    sizes="(max-width: 370px) 100vw, 370px" />
                                                                <div class="share-button">
                                                                    <div class="icon">
                                                                        <span class="icon-share-1"></span>
                                                                    </div>
                                                                    <ul class="social-links">

                                                                        <li><a href="https://www.facebook.com/"><i
                                                                                    class="fab fa-facebook"></i></a></li>
                                                                        <li><a href="https://www.linkedin.com/"><i
                                                                                    class="fab fa-linkedin"></i></a></li>
                                                                        <li><a href="https://www.twitter.com/"><i
                                                                                    class="fab fa-twitter"></i></a></li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-holder">
                                                            <h3><a href="#">Luis Kaiden</a>
                                                                <sup><span>*</span>President</sup></h3>
                                                            <div class="text">
                                                                <p>Right to find fault with a man who chooses to that
                                                                    has&hellip;</p>
                                                            </div>
                                                            <div class="mail-info">
                                                                <div class="icon">
                                                                    <span class="icon-send"></span>
                                                                </div>
                                                                <a href="mailto:kaiden@educamb.com">kaiden@educamb.com</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Team Style1-->
                                            </div>
                                        </div>
                                    </section>
                                    <!--End Team Style1 Area-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-daf1b88 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="daf1b88" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b5f17fe"
                        data-id="b5f17fe" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-56e1935 elementor-widget elementor-widget-educamb_video_section_v5"
                                data-id="56e1935" data-element_type="widget"
                                data-widget_type="educamb_video_section_v5.default">
                                <div class="elementor-widget-container">

                                    <!--Start Video Gallery Style1 Area-->
                                    <section class="video-gallery-style1-area">
                                        <div class="video-gallery-style1-area__bg"></div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="theme_carousel video-gallery-carousel owl-theme owl-carousel owl-dot-style1"
                                                        data-options='{
                                "loop": true,
                                "margin": 30,
                                "autoheight":true,
                                "lazyload":true,
                                "nav": false,
                                "dots": true,
                                "autoplay": true,
                                "autoplayTimeout": 5000,
                                "smartSpeed": 500,
                                "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                "<span class=\"right icon-right-arrow-1\"></span>"],
                                "responsive":{
                                "0" :{ "items": "1" },
                                "600" :{ "items" : "1" },
                                "768" :{ "items" : "1" },
                                "992":{ "items" : "2" },
                                "1200":{ "items" : "2" }
                            }
                        }'>

                                                        <!--Start Single Video Gallery Style1-->
                                                        <div class="single-video-gallery-style1">
                                                            <div class="top">
                                                                <div class="inner-title">
                                                                    <div class="dot-box"></div>
                                                                    <h3>Journey of Emma Amelia</h3>
                                                                </div>
                                                                <div class="share-button">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-share-1"></span>
                                                                        <p>Share</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="img-box">
                                                                <img src="../wp-content/uploads/2022/06/video-gallery-style1-img-1.jpg"
                                                                    alt="Awesome Image">
                                                            </div>
                                                            <div class="bottom">
                                                                <div class="play-btn">
                                                                    <a class="video-popup" title="Video Gallery"
                                                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                        <span class="icon-play"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="reload-btn">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-rotating-arrow-symbol"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Single Video Gallery Style1-->
                                                        <!--Start Single Video Gallery Style1-->
                                                        <div class="single-video-gallery-style1">
                                                            <div class="top">
                                                                <div class="inner-title">
                                                                    <div class="dot-box"></div>
                                                                    <h3>Journey of Wiliam Theo</h3>
                                                                </div>
                                                                <div class="share-button">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-share-1"></span>
                                                                        <p>Share</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="img-box">
                                                                <img src="../wp-content/uploads/2022/06/video-gallery-style1-img-2.jpg"
                                                                    alt="Awesome Image">
                                                            </div>
                                                            <div class="bottom">
                                                                <div class="play-btn">
                                                                    <a class="video-popup" title="Video Gallery"
                                                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                        <span class="icon-play"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="reload-btn">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-rotating-arrow-symbol"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Single Video Gallery Style1-->
                                                        <!--Start Single Video Gallery Style1-->
                                                        <div class="single-video-gallery-style1">
                                                            <div class="top">
                                                                <div class="inner-title">
                                                                    <div class="dot-box"></div>
                                                                    <h3>Journey of Emma Amelia</h3>
                                                                </div>
                                                                <div class="share-button">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-share-1"></span>
                                                                        <p>Share</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="img-box">
                                                                <img src="../wp-content/uploads/2022/06/video-gallery-style1-img-1.jpg"
                                                                    alt="Awesome Image">
                                                            </div>
                                                            <div class="bottom">
                                                                <div class="play-btn">
                                                                    <a class="video-popup" title="Video Gallery"
                                                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                        <span class="icon-play"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="reload-btn">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-rotating-arrow-symbol"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Single Video Gallery Style1-->
                                                        <!--Start Single Video Gallery Style1-->
                                                        <div class="single-video-gallery-style1">
                                                            <div class="top">
                                                                <div class="inner-title">
                                                                    <div class="dot-box"></div>
                                                                    <h3>Journey of Wiliam Theo</h3>
                                                                </div>
                                                                <div class="share-button">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-share-1"></span>
                                                                        <p>Share</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="img-box">
                                                                <img src="../wp-content/uploads/2022/06/video-gallery-style1-img-2.jpg"
                                                                    alt="Awesome Image">
                                                            </div>
                                                            <div class="bottom">
                                                                <div class="play-btn">
                                                                    <a class="video-popup" title="Video Gallery"
                                                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                        <span class="icon-play"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="reload-btn">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-rotating-arrow-symbol"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Single Video Gallery Style1-->
                                                        <!--Start Single Video Gallery Style1-->
                                                        <div class="single-video-gallery-style1">
                                                            <div class="top">
                                                                <div class="inner-title">
                                                                    <div class="dot-box"></div>
                                                                    <h3>Journey of Emma Amelia</h3>
                                                                </div>
                                                                <div class="share-button">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-share-1"></span>
                                                                        <p>Share</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="img-box">
                                                                <img src="../wp-content/uploads/2022/06/video-gallery-style1-img-1.jpg"
                                                                    alt="Awesome Image">
                                                            </div>
                                                            <div class="bottom">
                                                                <div class="play-btn">
                                                                    <a class="video-popup" title="Video Gallery"
                                                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                        <span class="icon-play"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="reload-btn">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-rotating-arrow-symbol"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Single Video Gallery Style1-->
                                                        <!--Start Single Video Gallery Style1-->
                                                        <div class="single-video-gallery-style1">
                                                            <div class="top">
                                                                <div class="inner-title">
                                                                    <div class="dot-box"></div>
                                                                    <h3>Journey of Wiliam Theo</h3>
                                                                </div>
                                                                <div class="share-button">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-share-1"></span>
                                                                        <p>Share</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="img-box">
                                                                <img src="../wp-content/uploads/2022/06/video-gallery-style1-img-2.jpg"
                                                                    alt="Awesome Image">
                                                            </div>
                                                            <div class="bottom">
                                                                <div class="play-btn">
                                                                    <a class="video-popup" title="Video Gallery"
                                                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                                        <span class="icon-play"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="reload-btn">
                                                                    <a href="../contact-08/index.html">
                                                                        <span class="icon-rotating-arrow-symbol"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Single Video Gallery Style1-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--End Video Gallery Style1 Area-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>

        <div class="clearfix"></div>







        {{-- Banner 3 slide v1 --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-866cf41 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="866cf41" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-37221da" data-id="37221da" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5b9f81d elementor-widget elementor-widget-educamb_banner_v9" data-id="5b9f81d" data-element_type="widget" data-widget_type="educamb_banner_v9.default">
                        <div class="elementor-widget-container">

                            <!-- Start Main Slider -->
                            <section class="main-slider style1 nav-style2 main-slider--style9">
                                <div class="slider-box">
                                    <!-- Banner Carousel -->
                                    <div class="banner-carousel owl-theme owl-carousel">

                                        <!-- Slide -->
                                        <div class="slide">
                                            <div class="image-layer" style="background-image:url(../wp-content/uploads/2022/06/slide-v9-1.jpg)">
                                            </div>
                                            <div class="auto-container">
                                                <div class="content">
                                                    <div class="sub-title">
                                                        <h5>The freedom blows</h5>
                                                    </div>
                                                    <div class="big-title">
                                                        <h2>Inspiring Futures</h2>
                                                    </div>
                                                    <div class="text">
                                                        <p>A wonderful environment where children undertakes<br>
                                                            laborious physical learn and grow.</p>
                                                    </div>
                                                    <div class="btns-box">
                                                        <a class="btn-one"
                                                            href="../college-about-us/index.html">
                                                            <span class="txt">
                                                                Read More </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Slide -->
                                        <div class="slide">
                                            <div class="image-layer"
                                                style="background-image:url(../wp-content/uploads/2022/06/slide-v9-2.jpg)">
                                            </div>
                                            <div class="auto-container">
                                                <div class="content text-right">
                                                    <div class="sub-title">
                                                        <h5>In Affordable</h5>
                                                    </div>
                                                    <div class="big-title">
                                                        <h2>Better Education</h2>
                                                    </div>
                                                    <div class="text">
                                                        <p>Laborious physical learn and grow<br> A wonderful
                                                            environment where children undertakes
                                                        </p>
                                                    </div>
                                                    <div class="btns-box">
                                                        <a class="btn-one"
                                                            href="../college-about-us/index.html">
                                                            <span class="txt">
                                                                Read More </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Slide -->
                                        <div class="slide">
                                            <div class="image-layer"
                                                style="background-image:url(../wp-content/uploads/2022/06/slide-v9-3.jpg)">
                                            </div>
                                            <div class="auto-container">
                                                <div class="content text-center">
                                                    <div class="sub-title">
                                                        <h5>Get education with fun</h5>
                                                    </div>
                                                    <div class="big-title">
                                                        <h2>Move Forward</h2>
                                                    </div>
                                                    <div class="text">
                                                        <p>Physical learn and grow wonderful environment where
                                                            children undertakes<br> laborious.</p>
                                                    </div>
                                                    <div class="btns-box">
                                                        <a class="btn-one"
                                                            href="../college-about-us/index.html">
                                                            <span class="txt">
                                                                Read More </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <!-- End Main Slider -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- 4 link card --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-73f21b0 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="73f21b0" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c295351" data-id="c295351" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-0c4d5f7 elementor-widget elementor-widget-educamb_our_feature_v7" data-id="0c4d5f7" data-element_type="widget" data-widget_type="educamb_our_feature_v7.default">
                        <div class="elementor-widget-container">

                            <!--Start Essentials Content Area-->
                            <section class="essentials-content-area">
                                <div class="container">
                                    <ul class="row">
                                        <!--Start Single Essentials Item-->
                                        <li
                                            class="col-xl-3 col-lg-3 col-md-6 single-essentials-colum text-center">
                                            <div class="single-essentials-item">
                                                <div class="static-content">
                                                    <div class="icon">
                                                        <span class="icon-learning"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span><span
                                                                class="path6"></span><span
                                                                class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span><span
                                                                class="path10"></span><span
                                                                class="path11"></span><span
                                                                class="path12"></span><span
                                                                class="path13"></span><span
                                                                class="path14"></span><span
                                                                class="path15"></span><span
                                                                class="path16"></span><span
                                                                class="path17"></span><span
                                                                class="path18"></span><span
                                                                class="path19"></span><span
                                                                class="path20"></span><span
                                                                class="path21"></span></span>
                                                    </div>
                                                    <h3><a href="../college-admissions/index.html">Admission
                                                            &amp; Records</a></h3>
                                                    <div class="btn-box">
                                                        <a href="../college-admissions/index.html">
                                                            <span class="icon-right-arrow-1"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--End Single Essentials Item-->
                                        <!--Start Single Essentials Item-->
                                        <li
                                            class="col-xl-3 col-lg-3 col-md-6 single-essentials-colum text-center">
                                            <div class="single-essentials-item">
                                                <div class="static-content">
                                                    <div class="icon">
                                                        <span class="icon-study"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span><span
                                                                class="path6"></span><span
                                                                class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span><span
                                                                class="path10"></span><span
                                                                class="path11"></span><span
                                                                class="path12"></span><span
                                                                class="path13"></span><span
                                                                class="path14"></span><span
                                                                class="path15"></span><span
                                                                class="path16"></span><span
                                                                class="path17"></span><span
                                                                class="path18"></span><span
                                                                class="path19"></span><span
                                                                class="path20"></span><span
                                                                class="path21"></span><span
                                                                class="path22"></span><span
                                                                class="path23"></span><span
                                                                class="path24"></span><span
                                                                class="path25"></span><span
                                                                class="path26"></span><span
                                                                class="path27"></span><span
                                                                class="path28"></span><span
                                                                class="path29"></span><span
                                                                class="path30"></span></span>
                                                    </div>
                                                    <h3><a href="../college-admissions/index.html">Register for
                                                            Classes</a></h3>
                                                    <div class="btn-box">
                                                        <a href="../college-admissions/index.html">
                                                            <span class="icon-right-arrow-1"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--End Single Essentials Item-->
                                        <!--Start Single Essentials Item-->
                                        <li
                                            class="col-xl-3 col-lg-3 col-md-6 single-essentials-colum text-center">
                                            <div class="single-essentials-item">
                                                <div class="static-content">
                                                    <div class="icon">
                                                        <span class="icon-speech"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span><span
                                                                class="path6"></span><span
                                                                class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span><span
                                                                class="path10"></span><span
                                                                class="path11"></span><span
                                                                class="path12"></span><span
                                                                class="path13"></span><span
                                                                class="path14"></span><span
                                                                class="path15"></span><span
                                                                class="path16"></span><span
                                                                class="path17"></span><span
                                                                class="path18"></span><span
                                                                class="path19"></span><span
                                                                class="path20"></span><span
                                                                class="path21"></span><span
                                                                class="path22"></span></span>
                                                    </div>
                                                    <h3><a href="../college-admissions/index.html">Board
                                                            Agendas</a></h3>
                                                    <div class="btn-box">
                                                        <a href="../college-admissions/index.html">
                                                            <span class="icon-right-arrow-1"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--End Single Essentials Item-->
                                        <!--Start Single Essentials Item-->
                                        <li
                                            class="col-xl-3 col-lg-3 col-md-6 single-essentials-colum text-center">
                                            <div class="single-essentials-item">
                                                <div class="static-content">
                                                    <div class="icon">
                                                        <span class="icon-career"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span><span
                                                                class="path6"></span><span
                                                                class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span><span
                                                                class="path10"></span><span
                                                                class="path11"></span><span
                                                                class="path12"></span><span
                                                                class="path13"></span><span
                                                                class="path14"></span><span
                                                                class="path15"></span><span
                                                                class="path16"></span><span
                                                                class="path17"></span><span
                                                                class="path18"></span><span
                                                                class="path19"></span><span
                                                                class="path20"></span><span
                                                                class="path21"></span><span
                                                                class="path22"></span><span
                                                                class="path23"></span><span
                                                                class="path24"></span></span>
                                                    </div>
                                                    <h3><a href="../college-admissions/index.html">Career
                                                            Interviews</a></h3>
                                                    <div class="btn-box">
                                                        <a href="../college-admissions/index.html">
                                                            <span class="icon-right-arrow-1"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--End Single Essentials Item-->
                                    </ul>
                                </div>
                            </section>
                            <!--End Essentials Content Area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- content with left image --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-8779d62 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="8779d62" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1f5c277" data-id="1f5c277" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-573aa79 elementor-widget elementor-widget-educamb_excellence_in_teaching" data-id="573aa79" data-element_type="widget" data-widget_type="educamb_excellence_in_teaching.default">
                        <div class="elementor-widget-container">

                            <!--Start Teaching Area-->
                            <section class="teaching-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="teaching-img-box-style2">
                                                <img src="../wp-content/uploads/2022/06/teaching-img-box-style2.jpg"
                                                    alt="Awesome Image">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="teaching-content teaching-content--style2">
                                                <div class="sec-title">
                                                    <h2>Excellence in Teaching<br> and Learning</h2>
                                                    <div class="sub-title">
                                                        <p>Welcomed every pain avoided but in certain
                                                            circumstances owing obligations of business it will
                                                            to the claims of duty or the obligations of business
                                                            it willfrequently occurs that pleasures.</p>
                                                    </div>
                                                </div>
                                                <div class="inner-title">
                                                    <div class="border-line"></div>
                                                    <h3>Provide Endless Opportunities</h3>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="dot-box"></div>A higher education
                                                        qualification
                                                    </li>
                                                    <li>
                                                        <div class="dot-box"></div>Better career prospects
                                                    </li>
                                                    <li>
                                                        <div class="dot-box"></div>Valuable employability skills
                                                    </li>
                                                    <li>
                                                        <div class="dot-box"></div>Personal development time
                                                    </li>
                                                </ul>
                                                <div class="btns-box">
                                                    <a class="btn-one" href="../college-admissions/index.html">
                                                        <span class="txt">Read More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <!--End Teaching Area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- content with card and 3 link --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-f1bbd12 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f1bbd12" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9c7c911" data-id="9c7c911" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-bff489a elementor-widget elementor-widget-educamb_easier_to_access" data-id="bff489a" data-element_type="widget" data-widget_type="educamb_easier_to_access.default">
                        <div class="elementor-widget-container">

                            <!--Start Choose Style1 Area-->
                            <section class="choose-style1-area">
                                <div class="choose-style1-area--gray-bg"></div>
                                <div class="container">
                                    <div class="sec-title">
                                        <h2>Makes Easier to Access</h2>
                                        <div class="sub-title">
                                            <p>Trouble that are bound to ensue; and equal blame belongs to those
                                                who fail.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="choose-style1-content">
                                                <div class="theme_carousel choose-style1-carousel owl-theme owl-carousel owl-nav-style-one"
                                                    data-options=' {
                                                                        "loop": true,
                                                                        "margin": 30,
                                                                        "autoheight":true,
                                                                        "lazyload":true,
                                                                        "nav": true,
                                                                        "dots": false,
                                                                        "autoplay": true,
                                                                        "autoplayTimeout": 5000,
                                                                        "smartSpeed": 500,
                                                                        "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                                                        "<span class=\"right icon-right-arrow-1\"></span>"],
                                                                        "responsive":{
                                                                        "0" :{ "items": "1" },
                                                                        "600" :{ "items" : "1" },
                                                                        "768" :{ "items" : "2" },
                                                                        "992":{ "items" : "3" },
                                                                        "1200":{ "items" : "4" }
                                                                        }
                                                                    }'>
                                                    <!--Start Single Choose Style1-->
                                                    <div class="single-choose-style1">
                                                        <div class="single-choose-style1__inner">
                                                            <div class="icon">
                                                                <span class="icon-tick">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span>
                                                                </span>
                                                            </div>
                                                            <div class="inner-title">
                                                                <h3>Libraries</h3>
                                                            </div>
                                                            <div class="text">
                                                                <p>Physical exercise except to some advantages
                                                                    from but who has any right.</p>
                                                            </div>
                                                            <div class="btns-box">
                                                                <a class="btn-one btn-one--style2"
                                                                    href="../college-admissions/index.html">
                                                                    <span class="txt">Read More</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Choose Style1-->
                                                    <!--Start Single Choose Style1-->
                                                    <div class="single-choose-style1">
                                                        <div class="single-choose-style1__inner">
                                                            <div class="icon">
                                                                <span class="icon-tick">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span>
                                                                </span>
                                                            </div>
                                                            <div class="inner-title">
                                                                <h3>Canteen &amp; Dining</h3>
                                                            </div>
                                                            <div class="text">
                                                                <p>Indignation &amp; dislike men who beguileds
                                                                    that’s pleasure the moment.</p>
                                                            </div>
                                                            <div class="btns-box">
                                                                <a class="btn-one btn-one--style2"
                                                                    href="../college-admissions/index.html">
                                                                    <span class="txt">Read More</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Choose Style1-->
                                                    <!--Start Single Choose Style1-->
                                                    <div class="single-choose-style1">
                                                        <div class="single-choose-style1__inner">
                                                            <div class="icon">
                                                                <span class="icon-tick">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span>
                                                                </span>
                                                            </div>
                                                            <div class="inner-title">
                                                                <h3>Stationaries</h3>
                                                            </div>
                                                            <div class="text">
                                                                <p>Advantages of physical exercise except to
                                                                    some from but whoany right.</p>
                                                            </div>
                                                            <div class="btns-box">
                                                                <a class="btn-one btn-one--style2"
                                                                    href="../college-admissions/index.html">
                                                                    <span class="txt">Read More</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Choose Style1-->
                                                    <!--Start Single Choose Style1-->
                                                    <div class="single-choose-style1">
                                                        <div class="single-choose-style1__inner">
                                                            <div class="icon">
                                                                <span class="icon-tick">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span>
                                                                </span>
                                                            </div>
                                                            <div class="inner-title">
                                                                <h3>Gym &amp; Yoga</h3>
                                                            </div>
                                                            <div class="text">
                                                                <p>Moment at indignation &amp; dislike men who
                                                                    beguileds that’s pleasure the</p>
                                                            </div>
                                                            <div class="btns-box">
                                                                <a class="btn-one btn-one--style2"
                                                                    href="../college-admissions/index.html">
                                                                    <span class="txt">Read More</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Choose Style1-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--End Choose Style1 Area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- 3 slide v2 --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-38d7780 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="38d7780" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a67468c" data-id="a67468c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7fd883c elementor-widget elementor-widget-educamb_explore_your_direction" data-id="7fd883c" data-element_type="widget" data-widget_type="educamb_explore_your_direction.default">
                        <div class="elementor-widget-container">

                            <!--Start Explore Direction Area-->
                            <section class="explore-direction-area explore-direction-area--style2">
                                <div class="container">
                                    <div class="sec-title">
                                        <h2>Explore Your Direction</h2>
                                        <div class="sub-title">
                                            <p>Trouble that are bound to ensue; and equal blame belongs to those
                                                who fail.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="explore-direction-content">

                                                <div class="theme_carousel explore-direction-carousel owl-theme owl-carousel owl-dot-style1"
                                                    data-options='{
                                                                    "loop": true,
                                                                    "margin": 30,
                                                                    "autoheight":true,
                                                                    "lazyload":true,
                                                                    "nav": false,
                                                                    "dots": true,
                                                                    "autoplay": true,
                                                                    "autoplayTimeout": 5000,
                                                                    "smartSpeed": 500,
                                                                    "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                                                    "<span class=\"right icon-right-arrow-1\"></span>"],
                                                                    "responsive":{
                                                                    "0" :{ "items": "1" },
                                                                    "600" :{ "items" : "1" },
                                                                    "768" :{ "items" : "1" },
                                                                    "1200":{ "items" : "1" },
                                                                    "1800":{ "items" : "1" }
                                                                    }
                                                                }'>
                                                    <!--Start Single Explore Direction Box Item -->
                                                    <div class="single-explore-direction-box__item">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-12">
                                                                <div class="text-box">
                                                                    <h2>Undergraduate<br> Studies</h2>
                                                                    <p>Nor again there anyone who loves pursues
                                                                        or desires to obtain pain of itself
                                                                        because but praising at occasionally
                                                                        circumstances osome great pleasure.</p>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-8 col-lg-12">
                                                                <div class="img-box">
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="img-box__item">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a
                                                                                            href="../college-overview/index.html">
                                                                                            <span>Majors &amp;
                                                                                                Degrees</span>
                                                                                            <i
                                                                                                class="icon-diagonal-arrow"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="../college-overview/index.html">
                                                                                            <span>Profesioanl
                                                                                                Programs</span>
                                                                                            <i
                                                                                                class="icon-diagonal-arrow"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="../college-overview/index.html">
                                                                                            <span>Combined
                                                                                                Degrees</span>
                                                                                            <i
                                                                                                class="icon-diagonal-arrow"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-6">
                                                                            <div class="img-box__img">
                                                                                <img src="../wp-content/uploads/2022/06/explore-direction-img-1.jpg"
                                                                                    alt="Awesome Image">
                                                                                <div
                                                                                    class="img-box__img-overlay">
                                                                                    <a
                                                                                        href="../college-overview/index.html">
                                                                                        <span
                                                                                            class="icon-down-arrow-1"></span>Prospects
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Explore Direction Box Item -->
                                                    <!--Start Single Explore Direction Box Item -->
                                                    <div class="single-explore-direction-box__item">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-12">
                                                                <div class="text-box">
                                                                    <h2>Postgraduate<br> Studies</h2>
                                                                    <p>Through shrinking from toil and pain
                                                                        these cases are perfectly simple easy
                                                                        distinguish In a free hour, when our
                                                                        power of choice is untrammelled nothing
                                                                        prevents.</p>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-8 col-lg-12">
                                                                <div class="img-box">
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="img-box__item">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a
                                                                                            href="../college-overview/index.html">
                                                                                            <span>Majors &amp;
                                                                                                Degrees</span>
                                                                                            <i
                                                                                                class="icon-diagonal-arrow"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="../college-overview/index.html">
                                                                                            <span>Doctorate</span>
                                                                                            <i
                                                                                                class="icon-diagonal-arrow"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="../college-overview/index.html">
                                                                                            <span>Certificate</span>
                                                                                            <i
                                                                                                class="icon-diagonal-arrow"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-6">
                                                                            <div class="img-box__img">
                                                                                <img src="../wp-content/uploads/2022/06/explore-direction-img-2.jpg"
                                                                                    alt="Awesome Image">
                                                                                <div
                                                                                    class="img-box__img-overlay">
                                                                                    <a
                                                                                        href="../college-overview/index.html">
                                                                                        <span
                                                                                            class="icon-down-arrow-1"></span>Prospects
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Explore Direction Box Item -->
                                                    <!--Start Single Explore Direction Box Item -->
                                                    <div class="single-explore-direction-box__item">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-12">
                                                                <div class="text-box">
                                                                    <h2>School of Distance<br> Education</h2>
                                                                    <p>Our being able t what we like best, every
                                                                        pleasure is to be welcomed
                                                                        and every pain avoided. But in certain
                                                                        circumstances and owing to
                                                                        the claims of obligations.</p>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one btn-one--style2"
                                                                            href="../college-overview/index.html">
                                                                            <span class="txt">Read More</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-8 col-lg-12">
                                                                <div class="img-box">
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="img-box__item">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a
                                                                                            href="../college-overview/index.html">
                                                                                            <span>Degrees &amp;
                                                                                                Certificates</span>
                                                                                            <i
                                                                                                class="icon-diagonal-arrow"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="../college-overview/index.html">
                                                                                            <span>Non-Credit
                                                                                                Certificates</span>
                                                                                            <i
                                                                                                class="icon-diagonal-arrow"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="../college-overview/index.html">
                                                                                            <span>Microcredentials</span>
                                                                                            <i
                                                                                                class="icon-diagonal-arrow"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-6">
                                                                            <div class="img-box__img">
                                                                                <img src="../wp-content/uploads/2022/06/explore-direction-img-3.jpg"
                                                                                    alt="Awesome Image">
                                                                                <div
                                                                                    class="img-box__img-overlay">
                                                                                    <a
                                                                                        href="../college-overview/index.html">
                                                                                        <span
                                                                                            class="icon-down-arrow-1"></span>Prospects
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Explore Direction Box Item -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--End Explore Direction Area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- Link to youtube --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-0a7b514 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0a7b514" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-38bf9bf" data-id="38bf9bf" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-d2d3f5c elementor-widget elementor-widget-educamb_video_section_v3" data-id="d2d3f5c" data-element_type="widget" data-widget_type="educamb_video_section_v3.default">
                        <div class="elementor-widget-container">

                            <!--Start Video Gallery Style2 Area-->
                            <section class="video-gallery-style2-area">
                                <div class="video-gallery-style2-area__bg" style="background-image: url(../wp-content/uploads/2022/06/video-gallery-style2-area__bg.jpg);">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12 text-center">
                                            <div class="video-gallery-style2-content">
                                                <div class="logo-box">
                                                    <div class="curved-circle">Educamb University</div>
                                                    <div class="curved-circle-2">Established in 1964</div>
                                                    <div class="inner-logo">
                                                        <img src="../wp-content/uploads/2022/06/logo-box-2.png"
                                                            alt="Awesome Image">
                                                    </div>
                                                </div>
                                                <h2>Top-Rated Undergraduate &amp; Graduate<br> Programs In The
                                                    World</h2>
                                                <div class="video-holder-box">
                                                    <a class="video-popup wow zoomIn" data-wow-delay="300ms"
                                                        data-wow-duration="1500ms" title="Video Gallery"
                                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                                        <span class="icon-play-button"></span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--End Video Gallery Style2 Area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- 3 card and linked --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-5368a0c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5368a0c" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f7191d5" data-id="f7191d5" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-e160ec8 elementor-widget elementor-widget-educamb_other_admissions" data-id="e160ec8" data-element_type="widget" data-widget_type="educamb_other_admissions.default">
                        <div class="elementor-widget-container">

                            <!--Start Admissions Style2 Area-->
                            <section class="admissions-style2-area">
                                <div class="container">
                                    <div class="sec-title text-center">
                                        <h2>Other Admissions</h2>
                                        <div class="sub-title">
                                            <p>Business it will frequently occur that pleasures have repudiated
                                                accepted.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--Start Single Admissions Style2-->
                                        <div class="col-xl-4">
                                            <div class="single-admissions-style2">
                                                <div class="img-holder">
                                                    <div class="text-holder">
                                                        <h3>Military/Veteran</h3>
                                                        <p>Ever undertake laborious physical right business will
                                                            frequently occur that pleasures to repudiated.</p>
                                                    </div>
                                                    <div class="text-holder text-holder--overlay">
                                                        <h3>Military/Veteran</h3>
                                                        <p>Ever undertake laborious physical right business will
                                                            frequently occur that pleasures to repudiated.</p>
                                                        <div class="btn-box">
                                                            <a href="../contact-08/index.html">
                                                                <span class="icon-right-arrow-1"></span>Apply
                                                                Now </a>
                                                        </div>
                                                    </div>
                                                    <div class="inner">
                                                        <img src="../wp-content/uploads/2022/06/admissions-style3-img-1.jpg"
                                                            alt="Awesome Image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Admissions Style2-->
                                        <!--Start Single Admissions Style2-->
                                        <div class="col-xl-4">
                                            <div class="single-admissions-style2">
                                                <div class="img-holder">
                                                    <div class="text-holder">
                                                        <h3>Summer Session</h3>
                                                        <p>Ever undertake laborious physical right business will
                                                            frequently occur that pleasures to repudiated.</p>
                                                    </div>
                                                    <div class="text-holder text-holder--overlay">
                                                        <h3>Summer Session</h3>
                                                        <p>Ever undertake laborious physical right business will
                                                            frequently occur that pleasures to repudiated.</p>
                                                        <div class="btn-box">
                                                            <a href="../contact-08/index.html">
                                                                <span class="icon-right-arrow-1"></span>Apply
                                                                Now </a>
                                                        </div>
                                                    </div>
                                                    <div class="inner">
                                                        <img src="../wp-content/uploads/2022/06/admissions-style3-img-2.jpg"
                                                            alt="Awesome Image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Admissions Style2-->
                                        <!--Start Single Admissions Style2-->
                                        <div class="col-xl-4">
                                            <div class="single-admissions-style2">
                                                <div class="img-holder">
                                                    <div class="text-holder">
                                                        <h3>Lifelong Learning</h3>
                                                        <p>Ever undertake laborious physical right business will
                                                            frequently occur that pleasures to repudiated.</p>
                                                    </div>
                                                    <div class="text-holder text-holder--overlay">
                                                        <h3>Lifelong Learning</h3>
                                                        <p>Ever undertake laborious physical right business will
                                                            frequently occur that pleasures to repudiated.</p>
                                                        <div class="btn-box">
                                                            <a href="../contact-08/index.html">
                                                                <span class="icon-right-arrow-1"></span>Apply
                                                                Now </a>
                                                        </div>
                                                    </div>
                                                    <div class="inner">
                                                        <img src="../wp-content/uploads/2022/06/admissions-style3-img-3.jpg"
                                                            alt="Awesome Image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Admissions Style2-->
                                    </div>
                                </div>
                            </section>
                            <!-- End Admissions Style2 Area -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- content with left image v2 --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-0b394f7 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0b394f7" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4ba753d" data-id="4ba753d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2fc22cd elementor-widget elementor-widget-educamb_educamb_accommodation" data-id="2fc22cd" data-element_type="widget" data-widget_type="educamb_educamb_accommodation.default">
                        <div class="elementor-widget-container">

                            <!--Start Register Accommodation Area-->
                            <section class="register-accommodation-area register-accommodation-area--style2">
                                <div class="register-accommodation-area__bg" style="background-image: url(../wp-content/uploads/2022/06/register-accommodation-area-bg-2.jpg);">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="register-accommodation-content">
                                                <div class="sec-title">
                                                    <h2>Register For<br> Educamb Accommodation</h2>
                                                </div>
                                                <div class="text">
                                                    <p>he same as saying through shrinking from toil &amp; pain
                                                        these cases areperfectly simple easy distinguish in a
                                                        free hour when our power troublethat are bound to ensue
                                                        equal blame.</p>
                                                    <h3><span class="icon-diagonal-arrow"></span> Let’s Know
                                                        About</h3>
                                                    <ul>
                                                        <li>01. Accommodation Guide</li>
                                                        <li>02. Residential Student Health Guide </li>
                                                        <li>03. University Living in Guide</li>
                                                    </ul>
                                                    <div class="btn-box">
                                                        <a class="btn-one" href="../contact-08/index.html"><span
                                                                class="txt">Apply Now</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--End Register Accommodation Area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- 3 Card with hover v2 --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-8beb9a4 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="8beb9a4" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eb98371" data-id="eb98371" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-987f19f elementor-widget elementor-widget-educamb_involment_and_activities" data-id="987f19f" data-element_type="widget" data-widget_type="educamb_involment_and_activities.default">
                        <div class="elementor-widget-container">

                            <!--Start Involment  Activities Area-->
                            <section class="involment-activities-area involment-activities-area--style2">
                                <div class="container">
                                    <div class="sec-title text-center">
                                        <h2>Involment &amp; Activities</h2>
                                        <div class="sub-title">
                                            <p>How all this mistaken idea of denouncing pleasure and praising
                                                pain was born.</p>
                                        </div>
                                    </div>

                                    <div class="involment-activities-tab__button">
                                        <ul class="tabs-button-box clearfix">
                                            <li data-tab="#arts-culture" class="tab-btn-item active-btn-item">
                                                <h3>Arts &amp; Culture</h3>
                                            </li>
                                            <li data-tab="#sports-fitness" class="tab-btn-item">
                                                <h3>Sports &amp; Fitness</h3>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tabs-content-box">

                                        <!--Tab-->
                                        <div class="tab-content-box-item tab-content-box-item-active"
                                            id="arts-culture">
                                            <div class="tabs-content-box__single-item">
                                                <div class="row">
                                                    <!--Start Single Involment Activities Box-->
                                                    <div class="col-xl-4 col-lg-4">
                                                        <div class="single-involment-activities-box">
                                                            <div class="img-box">
                                                                <div class="inner">
                                                                    <img src="../wp-content/uploads/2022/06/involment-activities-1.jpg"
                                                                        alt="Awesome Image">
                                                                </div>
                                                                <div class="text-holder">
                                                                    <h3>Tourism &amp; Culture</h3>
                                                                    <p>Shrinking from pain these perfectly
                                                                        simple and easy distinguish.</p>
                                                                    <ul>
                                                                        <li>Creative Industries</li>
                                                                        <li>Hawaii Volcanoes National Park</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Involment Activities Box-->
                                                    <!--Start Single Involment Activities Box-->
                                                    <div class="col-xl-4 col-lg-4">
                                                        <div class="single-involment-activities-box">
                                                            <div class="img-box">
                                                                <div class="inner">
                                                                    <img src="../wp-content/uploads/2022/06/involment-activities-2.jpg"
                                                                        alt="Awesome Image">
                                                                </div>
                                                                <div class="text-holder">
                                                                    <h3>Educamb Talent Fest</h3>
                                                                    <p>The saying through shrinking from pain
                                                                        these cases perfectly.</p>
                                                                    <ul>
                                                                        <li>Competitions</li>
                                                                        <li>Foresee the pain and trouble</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Involment Activities Box-->
                                                    <!--Start Single Involment Activities Box-->
                                                    <div class="col-xl-4 col-lg-4">
                                                        <div class="single-involment-activities-box">
                                                            <div class="img-box">
                                                                <div class="inner">
                                                                    <img src="../wp-content/uploads/2022/06/involment-activities-3.jpg"
                                                                        alt="Awesome Image">
                                                                </div>
                                                                <div class="text-holder">
                                                                    <h3>The Cultural Fest</h3>
                                                                    <p>Every void in certain circumstances owing
                                                                        to the claims of duty.</p>
                                                                    <ul>
                                                                        <li>National Level Cultural Event</li>
                                                                        <li>Celebrities</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Involment Activities Box-->
                                                </div>
                                            </div>
                                        </div>

                                        <!--Tab-->
                                        <div class="tab-content-box-item" id="sports-fitness">
                                            <div class="tabs-content-box__single-item">
                                                <div class="row">
                                                    <!--Start Single Involment Activities Box-->
                                                    <div class="col-xl-4 col-lg-4">
                                                        <div class="single-involment-activities-box">
                                                            <div class="img-box">
                                                                <div class="inner">
                                                                    <img src="../wp-content/uploads/2022/06/involment-activities-4.jpg"
                                                                        alt="Awesome Image">
                                                                </div>
                                                                <div class="text-holder">
                                                                    <h3>Tourism &amp; Culture</h3>
                                                                    <p>Shrinking from pain these perfectly
                                                                        simple and easy distinguish.</p>
                                                                    <ul>
                                                                        <li>Creative Industries</li>
                                                                        <li>Hawaii Volcanoes National Park</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Involment Activities Box-->
                                                    <!--Start Single Involment Activities Box-->
                                                    <div class="col-xl-4 col-lg-4">
                                                        <div class="single-involment-activities-box">
                                                            <div class="img-box">
                                                                <div class="inner">
                                                                    <img src="../wp-content/uploads/2022/06/involment-activities-5.jpg"
                                                                        alt="Awesome Image">
                                                                </div>
                                                                <div class="text-holder">
                                                                    <h3>Educamb Talent Fest</h3>
                                                                    <p>The saying through shrinking from pain
                                                                        these cases perfectly.</p>
                                                                    <ul>
                                                                        <li>Competitions</li>
                                                                        <li>Foresee the pain and trouble</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Involment Activities Box-->
                                                    <!--Start Single Involment Activities Box-->
                                                    <div class="col-xl-4 col-lg-4">
                                                        <div class="single-involment-activities-box">
                                                            <div class="img-box">
                                                                <div class="inner">
                                                                    <img src="../wp-content/uploads/2022/06/involment-activities-6.jpg"
                                                                        alt="Awesome Image">
                                                                </div>
                                                                <div class="text-holder">
                                                                    <h3>The Cultural Fest</h3>
                                                                    <p>Every void in certain circumstances owing
                                                                        to the claims of duty.</p>
                                                                    <ul>
                                                                        <li>National Level Cultural Event</li>
                                                                        <li>Celebrities</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single Involment Activities Box-->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <!--End Involment  Activities Area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- Slide Vertikal content horizontal --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-a587c8d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="a587c8d" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c5f2ccc" data-id="c5f2ccc" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2508ea8 elementor-widget elementor-widget-educamb_ready_to_make" data-id="2508ea8" data-element_type="widget" data-widget_type="educamb_ready_to_make.default">
                        <div class="elementor-widget-container">

                            <!--Start Working Process Area-->
                            <section class="working-process-area working-process-area--style2">
                                <div class="working-process-area__bg" style="background-image: url(../wp-content/uploads/2022/06/working-process-area_bg-2-1.jpg);">
                                </div>
                                <div class="auto-container">
                                    <div
                                        class="working-process-area__inner working-process-area__inner--style2">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="working-process-title">
                                                    <div class="sec-title">
                                                        <h2>Ready to Make<br> it Happen?</h2>
                                                        <div class="sub-title">
                                                            <p>Duty obligations of business frequently occur
                                                                pleasures enjoy.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-8">
                                                <div class="working-process-content clearfix">
                                                    <div class="theme_carousel working-process-carousel owl-theme owl-carousel owl-nav-style-one owl-dot-style1"
                                                        data-options='{
                                    "loop": false,
                                    "margin": 0,
                                    "autoheight":true,
                                    "lazyload":true,
                                    "nav": true,
                                    "dots": true,
                                    "autoplay": true,
                                    "autoplayTimeout": 5000,
                                    "smartSpeed": 500,
                                    "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                    "<span class=\"right icon-right-arrow-1\"></span>"],
                                    "responsive":{
                                    "0" :{ "items": "1" },
                                    "600" :{ "items" : "1" },
                                    "768" :{ "items" : "1" },
                                    "992":{ "items" : "2" },
                                    "1200":{ "items" : "2" }
                                }
                                }'>

                                                        <!--Start Single Working Process Box-->
                                                        <div class="single-working-process-box">
                                                            <div class="top">
                                                                <div class="icon">
                                                                    <span class="icon-resume"></span>
                                                                    <div class="round-box"></div>
                                                                </div>
                                                                <div class="counting"></div>
                                                            </div>
                                                            <div class="text">
                                                                <h3>Application &amp; Fees</h3>
                                                                <p>Prevents our being able do what we like all
                                                                    best every pleasures.</p>
                                                            </div>
                                                        </div>
                                                        <!--End Single Working Process Box-->
                                                        <!--Start Single Working Process Box-->
                                                        <div class="single-working-process-box">
                                                            <div class="top">
                                                                <div class="icon">
                                                                    <span class="icon-award"></span>
                                                                    <div class="round-box"></div>
                                                                </div>
                                                                <div class="counting"></div>
                                                            </div>
                                                            <div class="text">
                                                                <h3>Transcripts &amp; Test Scores</h3>
                                                                <p>pleasures prevents our being able do what we
                                                                    like allbest every .</p>
                                                            </div>
                                                        </div>
                                                        <!--End Single Working Process Box-->
                                                        <!--Start Single Working Process Box-->
                                                        <div class="single-working-process-box">
                                                            <div class="top">
                                                                <div class="icon">
                                                                    <span class="icon-resume"></span>
                                                                    <div class="round-box"></div>
                                                                </div>
                                                                <div class="counting"></div>
                                                            </div>
                                                            <div class="text">
                                                                <h3>Application &amp; Fees</h3>
                                                                <p>Prevents our being able do what we like all
                                                                    best every pleasures.</p>
                                                            </div>
                                                        </div>
                                                        <!--End Single Working Process Box-->
                                                        <!--Start Single Working Process Box-->
                                                        <div class="single-working-process-box">
                                                            <div class="top">
                                                                <div class="icon">
                                                                    <span class="icon-award"></span>
                                                                    <div class="round-box"></div>
                                                                </div>
                                                                <div class="counting"></div>
                                                            </div>
                                                            <div class="text">
                                                                <h3>Transcripts &amp; Test Scores</h3>
                                                                <p>pleasures prevents our being able do what we
                                                                    like allbest every .</p>
                                                            </div>
                                                        </div>
                                                        <!--End Single Working Process Box-->
                                                        <!--Start Single Working Process Box-->
                                                        <div class="single-working-process-box">
                                                            <div class="top">
                                                                <div class="icon">
                                                                    <span class="icon-resume"></span>
                                                                    <div class="round-box"></div>
                                                                </div>
                                                                <div class="counting"></div>
                                                            </div>
                                                            <div class="text">
                                                                <h3>Application &amp; Fees</h3>
                                                                <p>Prevents our being able do what we like all
                                                                    best every pleasures.</p>
                                                            </div>
                                                        </div>
                                                        <!--End Single Working Process Box-->
                                                        <!--Start Single Working Process Box-->
                                                        <div class="single-working-process-box">
                                                            <div class="top">
                                                                <div class="icon">
                                                                    <span class="icon-award"></span>
                                                                    <div class="round-box"></div>
                                                                </div>
                                                                <div class="counting"></div>
                                                            </div>
                                                            <div class="text">
                                                                <h3>Transcripts &amp; Test Scores</h3>
                                                                <p>pleasures prevents our being able do what we
                                                                    like allbest every .</p>
                                                            </div>
                                                        </div>
                                                        <!--End Single Working Process Box-->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--End Working Process Area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- Slide with 2 card on 3 slides --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-75c6cfa elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="75c6cfa" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-87207bc" data-id="87207bc" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-67f5d32 elementor-widget elementor-widget-educamb_our_research" data-id="67f5d32" data-element_type="widget" data-widget_type="educamb_our_research.default">
                        <div class="elementor-widget-container">

                            <!--Start Research Area-->
                            <section class="research-area">
                                <div class="auto-container">
                                    <div class="sec-title text-center">
                                        <h2>Research &amp; Innovation</h2>
                                        <div class="sub-title">
                                            <p>Business it will frequently occur that pleasures have to
                                                repudiated and accepted.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="theme_carousel research-carousel owl-theme owl-carousel owl-dot-style1"
                                                data-options='{
                        "loop": true,
                        "margin": 30,
                        "autoheight":true,
                        "lazyload":true,
                        "nav": false,
                        "dots": true,
                        "autoplay": true,
                        "autoplayTimeout": 5000,
                        "smartSpeed": 500,
                        "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                        "<span class=\"right icon-right-arrow-1\"></span>"],
                        "responsive":{
                        "0" :{ "items": "1" },
                        "600" :{ "items" : "1" },
                        "768" :{ "items" : "1" },
                        "1200":{ "items" : "2" },
                        "1800":{ "items" : "3" }
                    }
                }'>
                                                <!--Start Single Research Box-->
                                                <div class="single-research-box">
                                                    <div class="img-holder">
                                                        <img loading="lazy" width="550" height="320"
                                                            src="../wp-content/uploads/2022/06/research-3.jpg"
                                                            class="attachment-educamb_550x320 size-educamb_550x320 wp-post-image"
                                                            alt=""
                                                            srcset="https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/06/research-3.jpg 550w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/06/research-3-300x175.jpg 300w"
                                                            sizes="(max-width: 550px) 100vw, 550px" />
                                                        <div class="icon">
                                                            <span class="icon-web"></span>
                                                        </div>
                                                        <div class="overlay-icon">
                                                            <span class="icon-web"></span>
                                                        </div>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="inner-title">
                                                            <h3><a href="../university-programs/index.html">Science<br>
                                                                    &#038; Techinology</a></h3>
                                                        </div>
                                                        <div class="text">
                                                            <p>Prevents our being able to do what we like best
                                                                every pleasure...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Research Box-->
                                                <!--Start Single Research Box-->
                                                <div class="single-research-box">
                                                    <div class="img-holder">
                                                        <img width="550" height="320"
                                                            src="../wp-content/uploads/2022/06/research-2.jpg"
                                                            class="attachment-educamb_550x320 size-educamb_550x320 wp-post-image"
                                                            alt="" loading="lazy"
                                                            srcset="https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/06/research-2.jpg 550w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/06/research-2-300x175.jpg 300w"
                                                            sizes="(max-width: 550px) 100vw, 550px" />
                                                        <div class="icon">
                                                            <span class="icon-test-tube"></span>
                                                        </div>
                                                        <div class="overlay-icon">
                                                            <span class="icon-test-tube"></span>
                                                        </div>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="inner-title">
                                                            <h3><a href="../university-programs/index.html">Health<br>
                                                                    &#038; Medicinis</a></h3>
                                                        </div>
                                                        <div class="text">
                                                            <p>Foresee the pain that are bound to ensue and
                                                                equal blame...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Research Box-->
                                                <!--Start Single Research Box-->
                                                <div class="single-research-box">
                                                    <div class="img-holder">
                                                        <img width="550" height="320"
                                                            src="../wp-content/uploads/2022/06/research-1.jpg"
                                                            class="attachment-educamb_550x320 size-educamb_550x320 wp-post-image"
                                                            alt="" loading="lazy"
                                                            srcset="https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/06/research-1.jpg 550w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/06/research-1-300x175.jpg 300w"
                                                            sizes="(max-width: 550px) 100vw, 550px" />
                                                        <div class="icon">
                                                            <span class="icon-research"></span>
                                                        </div>
                                                        <div class="overlay-icon">
                                                            <span class="icon-research"></span>
                                                        </div>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="inner-title">
                                                            <h3><a href="../university-programs/index.html">Culturie<br>
                                                                    &#038; Creativity</a></h3>
                                                        </div>
                                                        <div class="text">
                                                            <p>Through shrinking from at toil &amp; pain these
                                                                cases are perfectly...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Research Box-->
                                                <!--Start Single Research Box-->
                                                <div class="single-research-box">
                                                    <div class="img-holder">
                                                        <img width="550" height="320"
                                                            src="../wp-content/uploads/2022/06/research-3.jpg"
                                                            class="attachment-educamb_550x320 size-educamb_550x320 wp-post-image"
                                                            alt="" loading="lazy"
                                                            srcset="https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/06/research-3.jpg 550w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/06/research-3-300x175.jpg 300w"
                                                            sizes="(max-width: 550px) 100vw, 550px" />
                                                        <div class="icon">
                                                            <span class="icon-web"></span>
                                                        </div>
                                                        <div class="overlay-icon">
                                                            <span class="icon-web"></span>
                                                        </div>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="inner-title">
                                                            <h3><a href="../university-programs/index.html">Sciences<br>
                                                                    &#038; Technology</a></h3>
                                                        </div>
                                                        <div class="text">
                                                            <p>Prevents our being able to do what we like best
                                                                every pleasure...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Research Box-->
                                                <!--Start Single Research Box-->
                                                <div class="single-research-box">
                                                    <div class="img-holder">
                                                        <img width="550" height="320"
                                                            src="../wp-content/uploads/2022/06/research-2.jpg"
                                                            class="attachment-educamb_550x320 size-educamb_550x320 wp-post-image"
                                                            alt="" loading="lazy"
                                                            srcset="https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/06/research-2.jpg 550w, https://fastwpdemo.com/newwp/educamb/wp-content/uploads/2022/06/research-2-300x175.jpg 300w"
                                                            sizes="(max-width: 550px) 100vw, 550px" />
                                                        <div class="icon">
                                                            <span class="icon-test-tube"></span>
                                                        </div>
                                                        <div class="overlay-icon">
                                                            <span class="icon-test-tube"></span>
                                                        </div>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="inner-title">
                                                            <h3><a href="../university-programs/index.html">Health<br>
                                                                    &#038; Medicines</a></h3>
                                                        </div>
                                                        <div class="text">
                                                            <p>Foresee the pain that are bound to ensue and
                                                                equal blame...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Research Box-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--End Research Area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- Card and slide with icon rate (stars) --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-98d9d7e elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="98d9d7e" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7497895" data-id="7497895" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-693ae50 elementor-widget elementor-widget-educamb_our_testimonial_v9" data-id="693ae50" data-element_type="widget" data-widget_type="educamb_our_testimonial_v9.default">
                        <div class="elementor-widget-container">

                            <!--Start Testimonial Style9 Area-->
                            <section class="testimonial-style9-area">
                                <div class="container">
                                    <div class="sec-title">
                                        <h2>Hear Our Students Words</h2>
                                        <div class="sub-title">
                                            <p>Trouble that are bound to ensue; and equal blame belongs to those
                                                who fail.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="testimonial-style1-content">
                                                <div class="theme_carousel testimonial-carousel-nine owl-nav-style-one owl-theme owl-carousel"
                                                    data-options='{
                        "loop": true,
                        "margin": 30,
                        "autoheight":true,
                        "lazyload":true,
                        "nav": true,
                        "dots": false,
                        "autoplay": true,
                        "autoplayTimeout": 5000,
                        "smartSpeed": 500,
                        "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                        "<span class=\"right icon-right-arrow-1\"></span>"],
                        "responsive":{
                        "0" :{ "items": "1" },
                        "600" :{ "items" : "1" },
                        "768" :{ "items" : "2" },
                        "992":{ "items" : "3" },
                        "1200":{ "items" : "3" }
                        }
                    }'>
                                                    <!--Start Single Testimonial Style9-->
                                                    <div class="single-testimonial-style9 text-center">
                                                        <div class="quote-iocn-box">
                                                            <span class="icon-quote"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Educamb University It was my immense luck &amp;
                                                                fortune to be the part of where I can grow.</p>
                                                        </div>
                                                        <div class="client-name">
                                                            <h3>Arlo Sebastian</h3>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--End Single Testimonial Style9-->
                                                    <!--Start Single Testimonial Style9-->
                                                    <div class="single-testimonial-style9 text-center">
                                                        <div class="quote-iocn-box">
                                                            <span class="icon-quote"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Fortune to be the part it was my immense luck
                                                                &amp; of Educamb University where I can grow.
                                                            </p>
                                                        </div>
                                                        <div class="client-name">
                                                            <h3>Silverster Scoot</h3>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--End Single Testimonial Style9-->
                                                    <!--Start Single Testimonial Style9-->
                                                    <div class="single-testimonial-style9 text-center">
                                                        <div class="quote-iocn-box">
                                                            <span class="icon-quote"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Immense luck &amp; fortune to be the part of
                                                                Educamb University It was my where I can grow.
                                                            </p>
                                                        </div>
                                                        <div class="client-name">
                                                            <h3>Nora Penelope</h3>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star"></span></li>
                                                                <li><span class="flaticon-star-o"></span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--End Single Testimonial Style9-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--End Testimonial Style1 Area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- Card and content below --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-3af39b3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3af39b3" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cb2ef45" data-id="cb2ef45" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3450658 elementor-widget elementor-widget-educamb_latest_news_v6" data-id="3450658" data-element_type="widget" data-widget_type="educamb_latest_news_v6.default">
                        <div class="elementor-widget-container">

                            <!--Start Blog Style1 Area-->
                            <section class="blog-style1-area">
                                <div class="container">
                                    <div class="sec-title text-center">
                                        <h2>Latest From Our Blog</h2>
                                        <div class="sub-title">
                                            <p>Business it will frequently occur that pleasures have to
                                                repudiated and accepted.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--Start Single Blog Style1-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-blog-style1">
                                                <div class="img-holder">
                                                    <div class="inner">
                                                        <img width="370" height="240"
                                                            src="../wp-content/uploads/2022/06/blog-details-img-1-370x240.jpg"
                                                            class="attachment-educamb_370x240 size-educamb_370x240 wp-post-image"
                                                            alt="" loading="lazy" />
                                                    </div>
                                                    <div class="category-box">
                                                        <div class="dot-box"></div>
                                                        <p><a href="../category/awards/index.html"
                                                                rel="category tag">Awards</a></p>
                                                    </div>
                                                </div>
                                                <div class="text-holder">
                                                    <h3><a
                                                            href="../2022/06/university-of-educamb-award-4-honorary-degrees/index.html">University
                                                            of Educamb Award 4 Honorary Degrees</a></h3>
                                                    <div class="text">
                                                        M enounce with righteous indignation and mens who are so
                                                        beguiled demord&hellip; </div>
                                                    <div class="bottom-box">
                                                        <div class="btn-box">
                                                            <a
                                                                href="../2022/06/university-of-educamb-award-4-honorary-degrees/index.html">
                                                                <span class="icon-right-arrow-1"></span>Read
                                                                More </a>
                                                        </div>
                                                        <div class="meta-info">
                                                            <ul>
                                                                <li><span class="icon-calendar"></span><a
                                                                        href="../2022/06/index.html">June 27,
                                                                        2022</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Blog Style1-->
                                        <!--Start Single Blog Style1-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-blog-style1">
                                                <div class="img-holder">
                                                    <div class="inner">
                                                        <img width="370" height="240"
                                                            src="../wp-content/uploads/2022/06/academy-blog-v3-1-370x240.jpg"
                                                            class="attachment-educamb_370x240 size-educamb_370x240 wp-post-image"
                                                            alt="" loading="lazy" />
                                                    </div>
                                                    <div class="category-box">
                                                        <div class="dot-box"></div>
                                                        <p><a href="../category/awards/index.html"
                                                                rel="category tag">Awards</a></p>
                                                    </div>
                                                </div>
                                                <div class="text-holder">
                                                    <h3><a
                                                            href="../2022/06/university-college-appoints-dean-of-humanities/index.html">University
                                                            College Appoints Dean of Humanities</a></h3>
                                                    <div class="text">
                                                        C enounce with righteous indignation and mens who are so
                                                        beguiled demord&hellip; </div>
                                                    <div class="bottom-box">
                                                        <div class="btn-box">
                                                            <a
                                                                href="../2022/06/university-college-appoints-dean-of-humanities/index.html">
                                                                <span class="icon-right-arrow-1"></span>Read
                                                                More </a>
                                                        </div>
                                                        <div class="meta-info">
                                                            <ul>
                                                                <li><span class="icon-calendar"></span><a
                                                                        href="../2022/06/index.html">June 27,
                                                                        2022</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Blog Style1-->
                                        <!--Start Single Blog Style1-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-blog-style1">
                                                <div class="img-holder">
                                                    <div class="inner">
                                                        <img width="370" height="240"
                                                            src="../wp-content/uploads/2022/06/instructor-blog-v3-1-370x240.jpg"
                                                            class="attachment-educamb_370x240 size-educamb_370x240 wp-post-image"
                                                            alt="" loading="lazy" />
                                                    </div>
                                                    <div class="category-box">
                                                        <div class="dot-box"></div>
                                                        <p><a href="../category/awards/index.html"
                                                                rel="category tag">Awards</a></p>
                                                    </div>
                                                </div>
                                                <div class="text-holder">
                                                    <h3><a
                                                            href="../2022/06/award-4-honorary-degrees-university-of-educamb/index.html">Award
                                                            4 Honorary Degrees University of Educamb</a></h3>
                                                    <div class="text">
                                                        E enounce with righteous indignation and mens who are so
                                                        beguiled demord&hellip; </div>
                                                    <div class="bottom-box">
                                                        <div class="btn-box">
                                                            <a
                                                                href="../2022/06/award-4-honorary-degrees-university-of-educamb/index.html">
                                                                <span class="icon-right-arrow-1"></span>Read
                                                                More </a>
                                                        </div>
                                                        <div class="meta-info">
                                                            <ul>
                                                                <li><span class="icon-calendar"></span><a
                                                                        href="../2022/06/index.html">June 27,
                                                                        2022</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Blog Style1-->
                                    </div>
                                </div>
                            </section>
                            <!--End Blog Style1 Area-->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- 2 simple card --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-064a79c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="064a79c" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8c7f61b" data-id="8c7f61b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-6e71aa1 elementor-widget elementor-widget-educamb_social_activity_v2" data-id="6e71aa1" data-element_type="widget" data-widget_type="educamb_social_activity_v2.default">
                        <div class="elementor-widget-container">

                            <!--Start social activity Area-->
                            <section class="social-activity-area layout-two">
                                <div class="auto-container">
                                    <div class="social-activity-content">

                                        <div class="single-social-activity-box width40">
                                            <!--Start Single Social Activity Box Inner-->
                                            <div class="single-social-activity-box__inner">
                                                <div class="row">

                                                    <div class="col-xl-6">
                                                        <div class="img-box-outer">
                                                            <div class="img-box"
                                                                style="background-image: url(../wp-content/uploads/2022/06/blog-details-img-1.jpg);">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">

                                                        <div class="text-box">
                                                            <div class="top-box">
                                                                <div class="social-link">
                                                                    <a href="../author/admin/index.html">
                                                                        <span class="flaticon-user"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="date-box">
                                                                    <p>June 27, 2022</p>
                                                                </div>
                                                            </div>
                                                            <div class="inner-title">
                                                                <h3><a
                                                                        href="../2022/06/university-of-educamb-award-4-honorary-degrees/index.html">University
                                                                        of Educamb Award 4 Honorary Degrees</a>
                                                                </h3>
                                                            </div>
                                                            <div class="text">
                                                                <p>M enounce with righteous indignation and mens
                                                                    who are so beguiled demord charm&hellip;</p>
                                                            </div>
                                                            <div class="post-info">
                                                                <ul>
                                                                    <li>
                                                                        <span class="icon-heart-1"></span><a
                                                                            href="../author/admin/index.html">admin</a>
                                                                    </li>
                                                                    <li>
                                                                        <span class="icon-chat"></span><a
                                                                            href="../2022/06/university-of-educamb-award-4-honorary-degrees/index.html#comments">0
                                                                            Comments</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <!--End Single Social Activity Box Inner-->
                                        </div>

                                        <!--Start Single Social Activity Box-->
                                        <div class="single-social-activity-box width20">
                                            <div class="single-social-activity-box__inner">
                                                <div class="img-box-outer heigh325">
                                                    <div class="img-box"
                                                        style="background-image: url(../wp-content/uploads/2022/08/social-activity-3.jpg);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Social Activity Box-->
                                        <div class="single-social-activity-box width40">
                                            <!--Start Single Social Activity Box Inner-->
                                            <div class="single-social-activity-box__inner">
                                                <div class="row">
                                                    <div class="col-xl-6">

                                                        <div class="text-box text-box--style4">
                                                            <div class="top-box">
                                                                <div class="social-link">
                                                                    <a href="../author/admin/index.html">
                                                                        <span class="flaticon-user"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="date-box">
                                                                    <p>June 27, 2022</p>
                                                                </div>
                                                            </div>
                                                            <div class="inner-title">
                                                                <h3><a
                                                                        href="../2022/06/a-core-commitment-to-liberal-arts-and-sciences/index.html">A
                                                                        Core Commitment to Liberal Arts and
                                                                        Sciences</a></h3>
                                                            </div>
                                                            <div class="text">
                                                                <p>G enounce with righteous indignation and mens
                                                                    who are so beguiled demord charm&hellip;</p>
                                                            </div>
                                                            <div class="post-info">
                                                                <ul>
                                                                    <li>
                                                                        <span class="icon-heart-1"></span><a
                                                                            href="../author/admin/index.html">admin</a>
                                                                    </li>
                                                                    <li>
                                                                        <span class="icon-chat"></span><a
                                                                            href="../2022/06/a-core-commitment-to-liberal-arts-and-sciences/index.html#comments">0
                                                                            Comments</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="img-box-outer">
                                                            <div class="img-box"
                                                                style="background-image: url(../wp-content/uploads/2022/06/kindergarten-blog-v2-1.jpg);">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--End Single Social Activity Box Inner-->
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <!--End social activity Area-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- Card with hover --}}
        {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-ef3bc70 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="ef3bc70" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7818dfc" data-id="7818dfc" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-118110a elementor-widget elementor-widget-educamb_future_with_educamb" data-id="118110a" data-element_type="widget" data-widget_type="educamb_future_with_educamb.default">
                        <div class="elementor-widget-container">

                            <!--Start future area-->
                            <section class="future-area pdtop0">
                                <div class="container">
                                    <div class="sec-title text-center">
                                        <h2>Future With Educamb</h2>
                                        <div class="sub-title">
                                            <p>Business it will frequently occur that pleasures have repudiated
                                                accepted.</p>
                                        </div>
                                    </div>

                                    <ul class="row">
                                        <!--Start Single Future Box-->
                                        <li class="col-xl-3 col-lg-6 col-md-6 single-future-box-colum">
                                            <div class="single-future-box">
                                                <h3>Visit <br> Our Campus</h3>
                                                <ul>
                                                    <li><a href="../college-about-us/index.html">Group Visit</a>
                                                    </li>
                                                    <li><a href="../college-about-us/index.html">Individual
                                                            Visit</a></li>
                                                    <li><a href="../college-about-us/index.html">Special
                                                            Programs</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!--End Future Single Box-->
                                        <!--Start Single Future Box-->
                                        <li class="col-xl-3 col-lg-6 col-md-6 single-future-box-colum">
                                            <div class="single-future-box">
                                                <h3>Costs &amp; <br> Financial Aid</h3>
                                                <ul>
                                                    <li><a href="../college-about-us/index.html">Admission
                                                            Information</a></li>
                                                    <li><a href="../college-about-us/index.html">Cost Info</a>
                                                    </li>
                                                    <li><a href="../college-about-us/index.html">Scholarship</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!--End Future Single Box-->
                                        <!--Start Single Future Box-->
                                        <li class="col-xl-3 col-lg-6 col-md-6 single-future-box-colum">
                                            <div class="single-future-box">
                                                <h3>Student <br> Experience</h3>
                                                <ul>
                                                    <li><a href="../college-about-us/index.html">Academic
                                                            Skills</a></li>
                                                    <li><a href="../college-about-us/index.html">Academic
                                                            Skills</a></li>
                                                    <li><a href="../college-about-us/index.html">Leadership</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!--End Future Single Box-->
                                        <!--Start Single Future Box-->
                                        <li class="col-xl-3 col-lg-6 col-md-6 single-future-box-colum">
                                            <div class="single-future-box">
                                                <h3>Early <br> College Credits</h3>
                                                <ul>
                                                    <li><a href="../college-about-us/index.html">Dual Credit</a>
                                                    </li>
                                                    <li><a href="../college-about-us/index.html">Dual Credit</a>
                                                    </li>
                                                    <li><a href="../college-about-us/index.html">Summer
                                                            School</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!--End Future Single Box-->
                                    </ul>
                                </div>
                            </section>
                            <!--End future area-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    </div>
@endsection
