@extends('master')
@section('title', 'Vision Mission Artha Husada Persada')
@section('content')
    <div class="vision-mission container-fluid wow fadeIn">
        <div class="row vision">
            <div class="col-12 col-lg-12 col-xl-6 p-0 bg-vision wow fadeInLeft">
            </div>
            <div class="col-12 col-lg-12 col-xl-6 p-0">
                <div class="container-fluid bg-white h-100  vision-text">
                    <h1 class="text-secondary fw-bold wow fadeInRight" data-wow-delay="0.2s">Our Vision</h1>
                    <p class="text-primary fw-semibold wow fadeInRight" data-wow-delay="0.4s">Always leading innovation in creating smart solutions for the advancement of all stakeholders, and becoming a visionary national private company in the fields of Technology & Information, Advertising Media and financial & tax consulting services.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mission wow fadeInRight">
            <div class="col-12 col-lg-12 col-xl-6 p-0">
                <div class="container-fluid bg-white h-100  mission-text">
                    <h1 class="text-secondary fw-bold wow fadeInRight" data-wow-delay="0.2s">Our Mission</h1>
                    <p class="text-primary fw-semibold wow fadeInRight" data-wow-delay="0.4s">Providing various conveniences and innovations in the provision of computer devices and secure advertising media devices in Indonesia. Through the various services and products offered, we strive to develop technology and communication technology to create a better life with a focus on a closer better relationship between society and customers with the outside world so as to achieve a harmonious relationship with us. the goal of a harmonious relationship with us.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-6 p-0 bg-mission">
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
