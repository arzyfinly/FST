@extends('layouts.app')

@section('content')
<!--Start breadcrumb area paroller-->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url({{ asset('admin/images/logo.png') }})">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title">
                        <h2>  Start the Festive Season with a Sweet Delicacy</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li class="breadcrumb-item"><a href="">Home &nbsp;</a></li><li class="breadcrumb-item">Start the Festive Season with a Sweet Delicacy</li>                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Teaching Area-->
<section class="teaching-area">
    <div class="auto-container">
        <div class="row">
            <div class="col-xl-6">
                <div class="teaching-content">
                    <div class="sec-title">
                        <h2>Excellence in Teaching<br> and Learning </h2>
                        <div class="sub-title">
                            <p>Welcomed every pain avoided but in certain
                                circumstances owing to the claims of
                                duty or the obligations of business it will
                                frequently occurs that pleasures.</p>
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

                </div>
            </div>
            <div class="col-xl-6">
                <div class="teaching-img-box__bg"
                    style="background-image: url({{ asset('admin/images/logo.png') }});">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Teaching Area-->

@endsection
