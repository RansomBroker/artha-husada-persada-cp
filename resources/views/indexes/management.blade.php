@extends('master')
@section('title', 'Management Artha Husada Persada')
@section('content')
    <div class="container-fluid p-0">
        {{-- Management--}}
        <div class="jumbotron-management position-relative wow fadeIn">
            <div class="overlay bg-black-o-78"></div>
            <div class="position-absolute container-fluid management-caption">
                <h3 class="text-white display-4 text-uppercase text-center wow backInDown">Management</h3>
                <div class="d-flex w-100 justify-content-center mb-3 wow fadeInDown">
                    <div class="underline-shape bg-light w-25" style="height: 4px;"></div>
                </div>
                <p class="text-white text-center wow fadeInUp">
                    The management of <span class="fw-bold">PT Artha Hutama Persada</span> consists of dedicated individuals who have the experience and expertise to analyze and provide transformative products and services. We have an experienced and dedicated team with the expertise to analyze and provide the best products and services for our clients.
                </p>
            </div>
        </div>
        {{-- BOC --}}
        <div class="mt-6 container-fluid wow fadeIn">
            <h1 class="text-center text-primary mb-3">Board Of Commissioner</h1>
            <div class="d-flex w-100 justify-content-center mb-3">
                <div class="underline-shape bg-primary-gradient w-25" style="height: 4px;"></div>
            </div>
            <div class="row justify-content-center wow fadeInDown">
                <div class="col-10 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <img src="{{ asset('/src/img/commissioner.png') }}" alt="" class="img-fluid mb-3">
                            <p class="fs-5 text-primary fw-bold mb-0 text-center">Tendy A. Himawan</p>
                            <p class="text-primary text-center">Commissioner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- BOD--}}
        <div class="mt-6 container-fluid wow fadeIn">
            <h1 class="text-center text-primary mb-3">Board Of Director</h1>
            <div class="d-flex w-100 justify-content-center mb-3">
                <div class="underline-shape bg-primary-gradient w-25" style="height: 4px;"></div>
            </div>
            <div class="row justify-content-center wow fadeInDown">
                <div class="col-8 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <img src="{{ asset('/src/img/president_director.png') }}" alt="" class="img-fluid mb-3">
                            <p class="fs-5 text-primary fw-bold mb-0 text-center">Taufik Hidayat</p>
                            <p class="text-primary text-center">President Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <img src="{{ asset('/src/img/sales_marketing_director.png') }}" alt="" class="img-fluid mb-3">
                            <p class="fs-5 text-primary fw-bold mb-0 text-center">Wawan Rulianto</p>
                            <p class="text-primary text-center">Sales & Marketing Director</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center wow fadeInDown">
                <div class="col-8 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <img src="{{ asset('/src/img/commercial_business_development_director.png') }}" alt="" class="img-fluid mb-3">
                            <p class="fs-5 text-primary fw-bold mb-0 text-center">Vanry S. Sihotang</p>
                            <p class="text-primary text-center">Business Development & Commercial Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <img src="{{ asset('/src/img/operational_procurement_director.png') }}" alt="" class="img-fluid mb-3">
                            <p class="fs-5 text-primary fw-bold mb-0 text-center">Ijon Tiop P. Sipayung</p>
                            <p class="text-primary text-center">Operational & Procurement
                                Director
                            </p>
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
        })
    </script>
@endsection
