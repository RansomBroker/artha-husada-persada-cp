<header>
    <nav class="wow fadeIn navbar navbar-light navbar-expand-sm bg-white px-5 py-4">
        <div class="container-fluid">
            <div class="d-flex justify-content-start align-items-center">
                <a class="navbar-brand" href="{{ route('index.index.view') }}">
                    <img src="{{ asset('src/img/logo_black.png') }}" alt="" width="64" height="64">
                </a>
                <div class="fw-bold text-primary brand-text">
                    <p class="m-0 p-0">ARTHA</p>
                    <p class="m-0 p-0">HUTAMA</p>
                    <p class="m-0 p-0">PERSADA</p>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid d-flex justify-content-center navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav gap-lg-5 gap-sm-0">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('index.index.view'))active @endif" href="{{ route('index.index.view') }}">Home</a>
                        @if(Route::is('index.index.view'))
                            <div class="underline-shape bg-primary-gradient w-100" style="height: 4px;"></div>
                        @endif
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link @if(Route::is('index.about.us.view') || Route::is('index.vision.mission.view') || Route::is('index.management.view'))active @endif" href="#" role="button" id="dropdownAboutUs" data-bs-toggle="dropdown" aria-expanded="false">About Us <i class='bx bx-chevron-down'></i></a>
                        <ul class="dropdown-menu ps-2 border-0 shadow-lg" aria-labelledby="dropdownAboutUs">
                            <li class="nav-item"><a href="{{ route('index.about.us.view') }}" class="nav-link"> About AHP</a></li>
                            <li class="nav-item"><a href="{{ route('index.vision.mission.view') }}" class="nav-link"> Vision & Mision </a></li>
                            <li class="nav-item"><a href="{{ route('index.management.view') }}" class="nav-link"> Management</a></li>
                        </ul>
                        @if(Route::is('index.about.us.view') || Route::is('index.vision.mission.view') || Route::is('index.management.view'))
                            <div class="underline-shape bg-primary-gradient w-100" style="height: 4px;"></div>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('index.product.services.view'))active @endif" href="{{ route('index.product.services.view') }}">Product & Services</a>
                        @if(Route::is('index.product.services.view'))
                            <div class="underline-shape bg-primary-gradient w-100" style="height: 4px;"></div>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('index.our.partner.view'))active @endif" href="{{ route('index.our.partner.view') }}">Our Partner</a>
                        @if(Route::is('index.our.partner.view'))
                            <div class="underline-shape bg-primary-gradient w-100" style="height: 4px;"></div>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('index.our.client.view'))active @endif" href="{{ route('index.our.client.view') }}">Our Client</a>
                        @if(Route::is('index.our.client.view'))
                            <div class="underline-shape bg-primary-gradient w-100" style="height: 4px;"></div>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('index.contact.us.view'))active @endif" href="{{ route('index.contact.us.view') }}">Contact Us</a>
                        @if(Route::is('index.contact.us.view'))
                            <div class="underline-shape bg-primary-gradient w-100" style="height: 4px;"></div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
