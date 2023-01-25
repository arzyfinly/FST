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

<div class="row justify-content-center pt-5">
<div class="col-lg-8 ">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center">
            <div class="mr-auto p-2">
                <h3>Akreditasi FST</h3>
            </div>
        </div>
        <div class="table-responsive p-3">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Nama Prodi</th>
                        <th>Akreditasi</th>
                        <th>Tahun SK</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nama Prodi</th>
                        <th>Akreditasi</th>
                        <th>Tahun SK</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@endsection
