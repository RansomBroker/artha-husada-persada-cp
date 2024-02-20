@extends('master')
@section('title', 'Artha Husada Persada')
@section('content')
    <!-- Section 1 / Jumbotron / Carousel -->
    <div class="jumbotron carousel slide wow fadeIn " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('src/img/asset_home_01.png') }}" class="wow fadeIn  d-block w-100 img-1" alt="...">
                <div class="overlay bg-primary-o-30"></div>
                <div class="carousel-caption top-40 end-50 translate-middle-y text-start">
                    <p class="wow slideInLeft fs-4 fw-bold text-light">Empowering Businesses with Smart Solutions: Our Core Services at PT ARTHA HUTAMA PERSADA</p>
                    <a href="{{ route('index.vision.mission.view') }}" class="wow slideInLeft btn btn-outline-light px-5 py-2 rounded-pill border border-3 fw-bold">Find Out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 2 / Why Us -->
    <div class="why-us wow fadeInUp container mt-6-5 position-relative overflow-hidden">
        <!-- grid image -->
        <img src="{{ asset('src/img/grid.png') }}" alt="grid" width="118" height="118" class="position-absolute top-0 start-0 wow fadeIn">
        <img src="{{ asset('src/img/grid.png') }}" alt="grid" width="118" height="118" class="position-absolute bottom-0 end-0 wow fadeIn">
        <h1 class="text-primary text-center fw-bold wow fadeIn">Your Excellent Solution Business Partner</h1>
        <div class="d-flex justify-content-center mt-4 mb-5 wow fadeIn">
            <div class="underline-shape bg-primary-gradient w-50" style="height: 10px;"></div>
        </div>
        <div class="fs-5 wow fadeInDown">
            <p class="text-center text-secondary fw-semibold m-0">Discover smart solutions for your business with <span class="fw-bolder">PT ARTHA HUTAMA PERSADA</span> We specialize in Technology & Information Devices, Advertising Media Devices, and Financial & Tax Consultancy.</p>
            <p class="text-center text-secondary fw-semibold m-0">Consultancy.</p>
            <p class="text-center text-secondary fw-semibold m-0">Our dedicated team is committed to providing you with innovative solutions to enhance your business operations. We focus on building strong relationships with our clients and partners </p>
            <p class="text-center text-secondary fw-semibold m-0">to ensure your satisfaction and success.</p>
            <p class="text-center text-secondary fw-semibold m-0">Thank you for choosing <span class="fw-bolder">PT ARTHA HUTAMA PERSADA</span> as your business partner. Let's work </p>
            <p class="text-center text-secondary fw-semibold m-0">together to achieve your goals. Welcome aboard!</p>
        </div>
    </div>
    <!-- Section 3 / Our Product And Service -->
    <div class="our-product-services wow fadeIn carousel slide mt-6-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('src/img/asset_home_02.png') }}" alt="asset_home_02" class="d-block w-100 img-1 wow fadeIn">
                <div class="overlay bg-primary-o-30"></div>
                <div class="carousel-caption position-absolute top-5 start-50 translate-middle-x w-100 wow fadeIn">
                    <div class="container-md wow fadeIn">
                        <h1 class="text-light text-center fw-bold ">Our Services</h1>
                        <div class="underline-container d-flex justify-content-center mt-4 mb-5">
                            <div class="underline-shape bg-light" style="height: 10px; width: 12%;"></div>
                        </div>
                    </div>
                    <div class="wow fadeInLeft product-card owl-carousel container-md px-5 mb-5 ">
                        <!-- product 1 -->
                        <div class="card card-hover shadow-lg rounded-18 p-2 p-xl-4 my-2 " style="width: 18rem; height: 24rem;">
                            <img src="{{ asset('src/img/product_1.png') }}" class="card-img-top rounded-circle" alt="..." width="200" height="200">
                            <div class="card-body">
                                <p class="text-dark fs-5 text-center">Tax & Financial Services</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                        <!-- product 2 -->
                        <div class="card card-hovershadow-lg rounded-18 p-2 p-xl-4 my-2" style="width: 18rem; height: 24rem;">
                            <img src="{{ asset('src/img/product_2.png') }}" class="card-img-top rounded-circle" alt="..." width="200" height="200">
                            <div class="card-body">
                                <p class="text-dark fs-5 text-center">Enterprise Management System & HMIS</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                        <!-- product 3 -->
                        <div class="card card-hover shadow-lg rounded-18 p-2 p-xl-4 my-2" style="width: 18rem; height: 24rem;">
                            <img src="{{ asset('src/img/product_3.png') }}" class="card-img-top rounded-circle" alt="..." width="200" height="200">
                            <div class="card-body">
                                <p class="text-dark fs-5 text-center">Digital Information Hardware and IT Security Hardware</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                        <!-- product 4 -->
                        <div class="card card-hover shadow-lg rounded-18 p-2 p-xl-4 my-2" style="width: 18rem; height: 24rem;">
                            <img src="{{ asset('src/img/product_4.png') }}" class="card-img-top rounded-circle" alt="..." width="200" height="200">
                            <div class="card-body">
                                <p class="text-dark fs-5 text-center">Medical Equipment & Medical Consumable</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('index.product.services.view') }}" class="wow fadeIn btn btn-primary-gradient px-5 py-3 px-xl-5 py-xl-3 rounded-10 fw-bold">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 4 / Our Client -->
    <div class="wow fadeInDown our-client container mt-6-5 position-relative overflow-hidden">
        <img src="{{ asset('src/img/grid.png') }}" alt="grid" width="118" height="118" class="position-absolute top-0 start-0 wow fadeIn">
        <img src="{{ asset('src/img/grid.png') }}" alt="grid" width="118" height="118" class="position-absolute bottom-0 end-0 wow fadeIn">
        <h1 class="text-primary text-center fw-bold wow fadeInDown">Our Client</h1>
        <div class="d-flex justify-content-center mt-4 mb-5">
            <div class="underline-shape bg-primary-gradient w-50" style="height: 10px;"></div>
        </div>
        <!-- Image gallery client -->
        <div class="container-fluid wow fadeIn">
            <div class="row justify-content-center">
                <div class="wow fadeInUp card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="0.2s">
                    <div class="card-body">
                        <img src="{{ asset('src/img/logo_idea.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="0.4s">
                    <div class="card-body">
                        <img src="{{ asset('src/img/logo_nissho.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="0.6s">
                    <div class="card-body">
                        <img src="{{ asset('src/img/logo_ryosho.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="0.8s">
                    <div class="card-body">
                        <img src="{{ asset('src/img/logo_lapas.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="1s">
                    <div class="card-body">
                        <img src="{{ asset('src/img/logo_kemendagri.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="1.2s">
                    <div class="card-body">
                        <img src="{{ asset('src/img/logo_medika.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="wow fadeInUp card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-circle border-0" data-wow-delay="1.4s">
                    <div class="card-body">
                        <img src="{{ asset('src/img/logo_asta_prima.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 5 / Our Partner -->
    <div class="wow fadeInUp our-partner carousel slide mt-6-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('src/img/asset_home_03.png') }}" alt="..." class="d-block w-100 img-1 wow fadeIn">
                <div class="overlay bg-primary-o-30"></div>
                <div class="carousel-caption position-absolute top-5 start-50 translate-middle-x w-100 wow fadeIn">
                    <div class="container-md wow fadeIn">
                        <h1 class="text-light text-center fw-bold ">Our Partner</h1>
                        <div class="underline-container d-flex justify-content-center mt-4 mb-5">
                            <div class="underline-shape bg-light" style="height: 10px; width: 12%;"></div>
                        </div>
                    </div>
                    <div class="container-md">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="wow fadeInDown card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="0.2s">
                                    <div class="card-body">
                                        <img src="{{ asset('src/img/logo_kms.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="wow fadeInDown card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="0.4s">
                                    <div class="card-body">
                                        <img src="{{ asset('src/img/logo_hkvision.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="wow fadeInDown card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="0.6s">
                                    <div class="card-body">
                                        <img src="{{ asset('src/img/logo_alhua.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="wow fadeInDown card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="0.7s">
                                    <div class="card-body">
                                        <img src="{{ asset('src/img/logo_microsoft.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="wow fadeInDown card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="0.8s">
                                    <div class="card-body">
                                        <img src="{{ asset('src/img/logo_onesia.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="wow fadeInDown card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="1s">
                                    <div class="card-body">
                                        <img src="{{ asset('src/img/logo_zoom.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="wow fadeInDown card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="1.2s">
                                    <div class="card-body">
                                        <img src="{{ asset('src/img/logo_geovision.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="wow fadeInDown card card-hover col-4 col-lg-2 col-xl-2 my-2 mx-3 rounded-10 border-0" data-wow-delay="1.4s">
                                    <div class="card-body">
                                        <img src="{{ asset('src/img/logo_ruckus.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 6 / Contact Us -->
    <div class="wow fadeIn container mt-6-5 mb-5 position-relative overflow-hidden">
        <img src="{{ asset('src/img/grid.png') }}" alt="grid" width="118" height="118" class="position-absolute top-0 start-0 wow fadeIn">
        <img src="{{ asset('src/img/grid.png') }}" alt="grid" width="118" height="118" class="position-absolute bottom-0 end-0 wow fadeIn">
        <h1 class="text-primary text-center fw-bold ">Contact Us</h1>
        <div class="d-flex justify-content-center mt-4 mb-5">
            <div class="underline-shape bg-primary-gradient w-50" style="height: 10px;"></div>
        </div>
        <!-- Contact Us -->
        <div class="container-md mb-5">
            <div class="card rounded-10 border-0 shadow-lg">
                <div class="card-body p-0 wow fadeIn">
                    <div class="row">
                        <!-- Map -->
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="container p-lg-4 p-xl-4 d-flex justify-content-start flex-wrap">
                                <div class="address">
                                    <p class="text-center fw-bold text-secondary fs-3 m-0 mb-0"><i class='bx bx-map' ></i><span class="fs-5">Where Are We</span></p>
                                    <p class="text-center m-0 p-0">Epiwalk Suites Office 5th Floor</p>
                                    <p class="text-center m-0 p-0">Jl. H.R Rasuna Epicentrum</p>
                                    <p class="text-center m-0 p-0">Jakarta Selatan</p>
                                </div>
                                <div class="contact">
                                    <p class="text-center fw-bold text-secondary fs-3 m-0 mb-0"><i class='bx bx-phone' ></i><span class="fs-5">if you need us</span></p>
                                    <p class="text-center m-0 p-0">Phone : +62 21 29941392</p>
                                    <p class="text-center m-0 p-0">Email : info.cs@ahpersada.com</p>
                                </div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31730.55657119174!2d106.81332155195453!3d-6.221524647120633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3d1d1d56c11%3A0x8fb910e5e21d5073!2sPT%20Artha%20Hutama%20Persada%20(AHP)!5e0!3m2!1sid!2sid!4v1708179532757!5m2!1sid!2sid" class="map mt-2 mb-4" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="container-fluid p-lg-5 p-xl-5 p-4 bg-secondary contact-card h">
                                <p class="text-center fs-4 text-white fw-bold">Contact Our Team</p>
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

                                    <button class="btn btn-light mt-3 mb-3 rounded-pill w-100 text-secondary fw-bold py-3">Send Message</button>
                                </form>
                            </div>
                        </div>
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
            $('.product-card').owlCarousel({
                loop:true,
                margin:14,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2,
                        margin:48
                    },
                    1000: {
                        items: 3,
                        margin:48
                    },
                    1336:{
                        items:3
                    },
                    1400: {
                        items:4
                    }
                }
            })

        })
    </script>
@endsection
