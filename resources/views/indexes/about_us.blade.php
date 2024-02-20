@extends('master')
@section('title', 'About Artha Husada Persada')
@section('content')
    <div class="container p-5 wow fadeIn">
        <h1 class="fw-bolder text-uppercase text-about wow fadeInLeft">Know More</h1>
        <h2 class="fw-bolder text-capitalize wow fadeInLeft">About Us</h2>
        <div class="row mt-5 wow fadeIn">
            <div class="col-12 col-lg-12 col-xl-6 d-flex justify-content-center wow fadeInLeft">
                <img src="{{ asset('src/img/logo_about.png') }}" alt="logo_about" class="img-fluid">
            </div>
            <div class="col-12 col-lg-12 col-xl-6 wow fadeInRight">
                <p><span class="fw-bold">PT ARTHA HUTAMA PERSADA</span> is a company established since 2019 that provides procurement of Technology & Information Devices, Advertising Media Devices (Videotron & Digital Signage) and Financial & Tax Consultancy services. With our professional and dedicated team, we are highly committed to provide sophisticated and comprehensive end-to-end solutions to our valued partners and clients. With our vast experience in this field, we have honed our expertise in providing Technology & Information Devices, Advertising Media Devices (Videotron & Digital Signage), Healthtech & Medical and Financial & Tax Consultancy enabling us to assist our clients to run our clients' business operations well.</p>
                <p>True to our tagline "Your Excellent Solution Business Partner", we support all industry sectors to improve effectiveness and security in all aspects of our clients' business and encapsulates our company spirit then reflects our unwavering commitment in supporting and leveraging technology to drive positive transformation for our clients.</p>
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
