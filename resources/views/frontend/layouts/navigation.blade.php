<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Ease</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awessome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frondend/asset/icon/Favicon_AyamKita.svg') }}" />


    <!-- Link Css -->
    <link href="{{ asset('frontend/asset/style.css') }}" rel="stylesheet">
</head>


<body>

    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top shadow-sm" id="navbar-modern">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">
                <img src="{{ asset('frondend/asset/icon/Favicon_AyamKita.svg') }}" alt="" width="40" class="me-2">
                Travel Ease
            </a>
    
            <!-- Hamburger Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav ms-auto me-auto text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="{{ route('destinasi') }}">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="{{ route('paket') }}">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="{{ route('tentang') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center" style="gap: 1rem">
                    <a href="{{ route('login') }}" class="btn-masuk me-2">Masuk</a>
                    <a href="{{ route('register') }}" class="btn-daftar">Daftar</a>
                </div>
            </div>
        </div>
    </nav>


    {{-- CONTENT UTAMA --}}

    @yield('content')

    {{-- Open Footer --}}

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section brand">
                <h2 class="footer-logo">Travlog</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aliquam.</p>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Product</h3>
                <ul>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Case studies</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Updates</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Culture</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Support</h3>
                <ul>
                    <li><a href="#">Getting started</a></li>
                    <li><a href="#">Help center</a></li>
                    <li><a href="#">Server status</a></li>
                    <li><a href="#">Report a bug</a></li>
                    <li><a href="#">Chat support</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h3>Contacts us</h3>
                <ul>
                    <li><i class="fa-regular fa-envelope"></i> contact@company.com</li>
                    <li><i class="fa-solid fa-phone"></i> (xx) xxxx-xxxx</li>
                    <li><i class="fa-solid fa-location-dot"></i> 794 Mcallister St<br> San Francisco, 94102</li>
                </ul>
            </div>
        </div>
        <span class="garis-footer">
            <hr>
        </span>
        <div class="footer-bottom">
            <p>Copyright © 2023 Travel Ease</p>
            <div class="footer-links">

            </div>
        </div>
    </footer>
    
    
        {{-- Close Footer --}}
    

    <!-- Link Js -->
    <script src="{{ asset('frontend/asset/script.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
