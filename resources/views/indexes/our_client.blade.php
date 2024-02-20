@extends('master')
@section('title', 'Our Client Artha Husada Persada')
@section('content')
    <div class="container-fluid p-5">
        <div class="w-100 container-our-partner">
            <h1 class="text-primary fw-bold wow fadeInLeft">Those Who Trust Us</h1>
            <p class="text-warning mb-0 wow fs-2 fadeInRight">
                Join the family of SUCCESS
            </p>
        </div>
        <div class="container-fluid wow fadeIn">
            <div class="row justify-content-center">
                <div class="wow fadeInUp card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="0.2s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_idea.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="0.4s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_nissho.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="0.6s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_ryosho.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="0.8s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_lapas.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="1s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_kemendagri.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="1.2s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_medika.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-12 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="1.4s">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('src/img/logo_asta_prima.png') }}" alt="" class="img-fluid">
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
