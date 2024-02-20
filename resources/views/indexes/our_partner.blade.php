@extends('master')
@section('title', 'Our Partner Artha Husada Persada')
@section('content')
    <div class="container-fluid p-5">
        <div class="w-100 container-our-partner">
            <h1 class="text-primary fw-bold wow fadeInLeft">Our Partner</h1>
            <p class="text-primary mb-0 wow fadeInRight">
                We believe that partnership and collaboration are essential to running a business,
            </p>
            <p class="text-primary wow fadeInLeft">
                we work with partners who are committed to driving positive transformation for our clients.
            </p>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="wow fadeInDown card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="0.2s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_kms.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInDown card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="0.4s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_hkvision.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInDown card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="0.6s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_alhua.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInDown card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0 " data-wow-delay="0.7s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_microsoft.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInDown card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="0.8s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_onesia.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInDown card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="1s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_zoom.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInDown card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="1.2s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_geovision.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInDown card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="1.4s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_ruckus.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script>
        $(document).ready(function()  {
            new WOW().init();
        })
    </script>
@endsection
