@extends('master')
@section('title', 'Product & Services Artha Husada Persada')
@section('content')
    <div class="container-fluid p-0">
        <div class="jumbotron-pos position-relative wow fadeIn">
            <div class="overlay bg-primary-o-30"></div>
            <div class="position-absolute container-fluid pos-caption">
                <h1 class="text-white fw-semibold display-3">Our Services</h1>
                <p class="text-white mb-0">Elevate Your Business with Our Innovative</p>
                <p class="text-white mb-3">Service Offerings at PT ARTHA HUTAMA PERSADA</p>
                <ul class="text-white">
                    <li>Digital Information and IT  Security Hardware
                    </li>
                    <li>Tax & Financial Services</li>
                    <li>Enterprise Management Systems & HMIS</li>
                    <li>Medical Equipment & Medical Consumable</li>
                </ul>
            </div>
        </div>
        <div class="mt-6 mb-5 container-fluid wow fadeIn">
            <h1 class="text-center text-primary mb-3 fw-bold">Our Products</h1>
            <div class="d-flex w-100 justify-content-center mb-5">
                <div class="underline-shape bg-primary-gradient w-25" style="height: 4px;"></div>
            </div>
            <div class="container-fluid p-products">
                <ul class="nav nav-product nav-pills nav-fill mb-3 wow fadeInDown" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-digital-it-tab" data-bs-toggle="pill" data-bs-target="#pills-digital-it" type="button" role="tab" aria-controls="pills-digital-it" aria-selected="true">
                            <span class="d-block">Digital Information and </span>
                            <span class="d-block">IT  Security Hardware</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tax-finance-tab" data-bs-toggle="pill" data-bs-target="#pills-tax-finance" type="button" role="tab" aria-controls="pills-tax-finance" aria-selected="false">Tax & Financial Services
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-ems-hmis-tab" data-bs-toggle="pill" data-bs-target="#pills-ems-hmis" type="button" role="tab" aria-controls="pills-ems-hmis" aria-selected="false">
                            <span class="d-block">Enterprise Management Systems &</span>
                            <span class="d-block">HMIS</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-medical-tab" data-bs-toggle="pill" data-bs-target="#pills-medical" type="button" role="tab" aria-controls="pills-medical" aria-selected="false">
                            <span class="d-block">Medical Equipment &</span>
                            <span class="d-block">Medical Consumable</span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content wow fadeInUp" id="pills-tabContent">
                    <div class="tab-pane fade show active " id="pills-digital-it" role="tabpanel" aria-labelledby="pills-digital-it-tab">
                        <div class="container-fluid d-flex justify-content-center digi-it-list owl-carousel">
                            <div class="card card-product overflow-scroll">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-devices display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">IT Hardware & Software</p>
                                    </div>
                                    <div class="text-primary">
                                        <p class="fw-semibold">Hardware</p>
                                        <ul>
                                            <li>PC (Monitor, CPU, Keyboard),
                                                Notebook, Printer, MFD (Multi-
                                                Function Device: Print, Copy and Scan)
                                            </li>
                                            <li>Router and Access Point</li>
                                            <li>UPS, CCTV, VoIP and etc.</li>
                                        </ul>
                                        <p class="fw-semibold">Software</p>
                                        <ul>
                                            <li>Microsoft Product</li>
                                            <li>Zoom Product</li>
                                            <li>Adobe Product</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-fingerprint display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Digital Information & Advertising Board</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Hold all the System Information and
                                            multimedia product needs:</p>
                                        <ul>
                                            <li>Videotron</li>
                                            <li>Digital Signage</li>
                                            <li>KiosK “Queue Machine”
                                            </li>
                                            <li>Video Wall Display</li>
                                            <li>Digital Interactive Smart Board
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tax-finance" role="tabpanel" aria-labelledby="pills-tax-finance-tab">
                        <div class="container-fluid d-flex justify-content-center tax-list owl-carousel">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-money-withdraw display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Financial Service</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Preparation of Financial
                                            Statements start from receiving
                                            premier data and processing
                                            data obtained from the client
                                            admin until the issuance of
                                            financial statements Based on
                                            PSAK & IFRS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-receipt display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Tax Compliance</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Make monthly tax calculation
                                            and help clients to make tax
                                            reports up to their reporting. The
                                            tax calculation consists of PPh
                                            21, PPh 23, PPh Final 42 (Based
                                            on SKT) and based on
                                            Indonesian Regulation</p>
                                </div>
                            </div>
                        </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bxs-school display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Corporate Income Tax</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Make annual tax calculation of
                                            companies that we will compile
                                            based on the applicable tax
                                            regulations as the basis for us to
                                            make fiscal corrections</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-edit-alt display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Corporate Tax Planning</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Administration service of tax
                                            management, such as changes
                                            NPWP, submission of PKP,
                                            Concentration of Value Added
                                            Tax (PPN), Revaluation of fixed
                                            assets and etc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bxs-user display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Individual Income Tax</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Make annual tax calculations of
                                            private persons that we will
                                            arrange based on the applicable
                                            tax regulations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bxs-user-voice display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Training & Coaching</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Training and Coaching taxation
                                            for employees tailored to the
                                            needs of the company in order to
                                            have human resources that
                                            understand the obligations and
                                            rules of taxation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-notepad display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Tax Administration</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Administration service of tax
                                            management, such as changes
                                            NPWP, submission of PKP,
                                            Concentration of Value Added
                                            Tax (PPN), Revaluation of fixed
                                            assets and etc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-transfer-alt display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Transfer Document Pricing</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>TPreparation for related parties
                                            report and also CBCR (Country
                                            by Country Report)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bxs-analyse display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Tax Review</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Make a review of both monthly
                                            and annual tax liabilities</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-ems-hmis" role="tabpanel" aria-labelledby="pills-ems-hmis-tab">
                        <div class="container-fluid d-flex justify-content-center ems-hmis-list owl-carousel">
                            <div class="card card-product overflow-scroll">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-archive display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Hospital Management Information System</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Hospital
                                            Management Information
                                            System and our product
                                            Arthamed HMIS is a web-based
                                            hospital information
                                            management system
                                            developed from business
                                            capacity to functional system
                                            that complies with Indonesian
                                            government regulations and
                                            Hospital Accreditation
                                            Committee (KARS) standards
                                            related to data administration
                                            and patient medical records.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-folder-open display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Asset Management System</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>Mapping on partner company
                                            assets, development with a
                                            system tailored to the needs of
                                            partners.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product overflow-scroll">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-video-recording display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Video Conference System</p>
                                    </div>
                                    <div class="text-primary">
                                        <p>VCS is a system that can help
                                            you connect visually between
                                            two or more people to share
                                            images, text, video and audio
                                            communication despite being
                                            in different locations.</p>
                                        <p>
                                            Some of the features available
                                            in our VCS include :
                                        </p>
                                        <ul>
                                            <li>Reduce commercial costs</li>
                                            <li>Faster Communication</li>
                                            <li>Share more convenient
                                                Information</li>
                                            <li>Improve business efficiency
                                                and competitiveness.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-medical" role="tabpanel" aria-labelledby="pills-medical-tab">
                        <div class="container-fluid d-flex justify-content-center medical-list owl-carousel">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-brush-alt display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Disinfectant & Cleaner</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bxs-injection display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Vaccine Carrier</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bxs-baby-carriage display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Baby Bassinet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-bulb display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Examination Lamp</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bx-package display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Oxiair Dry Mist</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class='bx bxs-face-mask display-4 text-primary'></i>
                                        <p class="text-primary fw-semibold mb-0 px-3">Medical Mask</p>
                                    </div>
                                </div>
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
            $('.digi-it-list').owlCarousel({
                loop:false,
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
                        items: 2,
                        margin:48
                    },
                    1336:{
                        items:2
                    },
                    1400: {
                        items:2
                    }
                }
            })
            $('.tax-list').owlCarousel({
                loop:false,
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
                        items: 2,
                        margin:48
                    },
                    1336:{
                        items:3,
                    },
                    1400: {
                        items:4
                    }
                }
            })
            $('.ems-hmis-list').owlCarousel({
                loop:false,
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
                        items: 2,
                        margin:48
                    },
                    1336:{
                        items:3,
                    },
                    1400: {
                        items:4
                    }
                }
            })
            $('.medical-list').owlCarousel({
                loop:false,
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
                        items:4,
                    },
                    1400: {
                        items:4
                    }
                }
            })
        })
    </script>
@endsection
