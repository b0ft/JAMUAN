{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ $logo }}" width="50" height="50" alt="">
            JAMUAN
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="bi bi-house-door-fill"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-bookmarks-fill"></i> Link
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-address-book"></i> Contact Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person-fill"></i> Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}

<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <h1 class="m-0">
                <img src="{{ $logo }}" alt="Logo">
                JAMUAN<span class="fs-2">.</span><span class="fs-5">ID</span>
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::is('home') ? 'active' : '' }}">
                    <i class="bi bi-house-door-fill"></i> Home
                </a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">
                    <i class="bi bi-bookmarks-fill"></i> About
                </a>
                <a href="{{ route('services') }}" class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}"">
                    <i class="fa-solid fa-bell-concierge"></i> Services
                </a>
                <a href="{{ route('error') }}" class="nav-item nav-link">
                    <i class="fa-solid fa-address-book"></i> Contact Us
                </a>
                <a href="{{ route('error') }}" class="nav-item nav-link">
                    <i class="bi bi-person-fill"></i> Login
                </a>
            </div>
        </div>
    </nav>

    @yield('isian-tengah')
</div>