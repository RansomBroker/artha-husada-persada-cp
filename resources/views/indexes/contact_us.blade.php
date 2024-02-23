@extends('master')
@section('title', 'Contact Us Artha Husada Persada')
@section('content')
    <div class="container-fluid p-0">
        <div class="container-fluid p-0 position-relative wow fadeIn">
            <div class="bg-contact-us"></div>
            <div class="overlay bg-primary-o-30"></div>
        </div>
        <div class="container-fluid p-0 mt-5 wow fadeIn">
            <h1 class="text-center text-primary">Contact Us</h1>
            <div class="d-flex justify-content-center mt-4 mb-5 wow fadeIn">
                <div class="underline-shape underline-width bg-primary-gradient" style="height: 10px;"></div>
            </div>
            <div class="row d-flex justify-content-center mb-5">
                <div class="col-lg-6 col-xl-4 col-12 wow fadeInUp">
                    <p class="text-center text-primary mb-0 display-1"><i class='bx bx-map' ></i></p>
                    <p class="text-center fw-bold text-secondary fs-3 m-0 mb-0"><span class="fs-5">Where Are We</span></p>
                    <p class="text-center m-0 p-0">Epiwalk Suites Office 5th Floor</p>
                    <p class="text-center m-0 p-0">Jl. H.R Rasuna Epicentrum</p>
                    <p class="text-center m-0 p-0">Jakarta Selatan</p>
                </div>
                <div class="col-lg-6 col-xl-4 col-12 wow fadeInDown">
                    <p class="text-center text-primary mb-0 display-1"><i class='bx bx-phone' ></i></p>
                    <p class="text-center fw-bold text-secondary fs-3 m-0 mb-0"><span class="fs-5">if you need us</span></p>
                    <p class="text-center m-0 p-0">Phone : +62 21 29941392</p>
                    <p class="text-center m-0 p-0">Email : info.cs@ahpersada.com</p>
                </div>
            </div>
            <div class="container-fluid p-0 bg-primary-o-30 wow fadeInDown">
                <div class="row d-flex justify-content-center p-5">
                    <div class="card card-transparent border-0 col-12 col-lg-6 col-xl-6">
                        <div class="card-body">
                            <p class="text-center fs-4 text-primary fw-bold">Contact Our Team</p>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xl-6 col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control form-control-sm rounded-10" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-xl-6 col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control form-control-sm rounded-10" id="companyName" placeholder="Company Name">
                                            <label for="companyName">Company Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xl-6 col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control form-control-sm rounded-10" id="email" placeholder="Email Address">
                                            <label for="name">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-xl-6 col-12">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control form-control-sm rounded-10" id="phone" placeholder="Phone Number">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xl-12 col-12">
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control form-control-sm rounded-10 p-2">Message</textarea>
                                    </div>
                                </div>

                                <a href="{{ route('index.product.services.view') }}" class="wow fadeIn btn btn-primary-gradient px-5 py-3 px-xl-5 py-xl-3 rounded-10 fw-bold mt-3 w-100">Send Message</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31730.55657119174!2d106.81332155195453!3d-6.221524647120633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3d1d1d56c11%3A0x8fb910e5e21d5073!2sPT%20Artha%20Hutama%20Persada%20(AHP)!5e0!3m2!1sid!2sid!4v1708179532757!5m2!1sid!2sid" class=" w-100" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
