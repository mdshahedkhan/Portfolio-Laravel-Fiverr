<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title'){{ ' | '.$GeneralTITLE->prefix }}</title>
    <link href="{{ asset('Frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" rossorigin="anonymous">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/vendor/slick/slick.css') }}"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/vendor/slick/slick-theme.css') }}"/>
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('Upload/General/'.$GeneralTITLE->logo) }}" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/Responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/Pack/toastr.min.css') }}">
</head>
<body>
    <div class="visible-topScroll">
        <div class="topScroll">
            <a href="javascript:avoid(0)"><i class="fa fa-arrow-up"></i></a>
        </div>
    </div>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="{{ route('index') }}" class="navbar-brand"><span class="text-highlight">{{ $GeneralTITLE->title }}</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-md-auto gap-2">
                    <li class="nav-item"><a href="" class="nav-link">Curricula Vitae</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Referenzen</a></li>
                    <li class="nav-item"><a href="{{ route('ContactUs') }}" class="nav-link">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer>
        <div class="container-fluid">
            <ul class="footer-menu">
                <li>Kontakt</li>
                <li>Impressum</li>
                <li>Datenschutz</li>
            </ul>
            <ul class="footer-menu-social">
                <li class="footer-item"><span class="material-icons" style="font-size: 20px">translate</span></li>
                <li class="footer-item"><a href="{{ $GeneralTITLE->linkedin }}" target="_blank" style="color: #000"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="footer-item"><a href="{{ $GeneralTITLE->facebook }}" target="_blank" style="color: #000"><i class="fab fa-facebook"></i></a></li>
                @if($GeneralTITLE->twitter)
                    <li class="footer-item"><a href="{{ $GeneralTITLE->twitter }}" target="_blank" style="color: #000"><i class="fab fa-twitter"></i></a></li>
                @endif
            </ul>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('Frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('Frontend/Pack/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Frontend/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/script.js') }}"></script>
    @yield('JS')

</body>
</html>
