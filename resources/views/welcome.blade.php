<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $GeneralTITLE->title .' | '.$GeneralTITLE->prefix }}</title>
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
                    <li class="nav-item"><a href="" class="nav-link">Referenzen</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="hero-section">
        <div class="container">
            <div class="row-hero">
                <div class="title-box">
                    <img src="{{ asset('Upload/General/'.$GeneralTITLE->logo) }}" width="130px" alt="">
                    <h4>Herzlich <br>Willkommen <br>Frau Meierkowski</h4>
                </div>
                <div class="title-box">
                    <h4>Meine Bewerbung um die Stelle als <span class="text-highlight">Creative Director</span></h4>
                    <div class="btn-group">
                        <a href="" class="btn btn-direkt">Direkt zu den Referenzen</a>
                        <a href="{{ $AboutMe->download_resume }}" class="btn btn-download" download>Download CV</a>
                    </div>
                </div>
            </div>
            <div class="content-section">
                <div class="content-heading">
                    <h2>Münchener Senior-Manager möchte <br><span class="text-highlight">wieder zurück in die Kreativstube</span></h2>
                    <h3>Liebe Frau Peterkowski,</h3>
                </div>
                <p>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen Viktor quer über den großen Sylter Deich. Vogel Quax
                    zwickt Johnys Pferd Bim. Sylvia wagt quick den Jux bei Pforzheim. Polyfon zwitschernd aßen Mäxchens Vögel Rüben, Joghurt und Quark. "Fix, Schwyz!" quäkt Jürgen blöd vom Paß. Victor jagt zwölf Boxkämpfer
                    quer über den großen Sylter Deich. Falsches Üben von Xylophonmusik quält jeden größeren Zwerg. Heizölrückstoßabdämpfung. Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im
                    komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen Viktor quer über den großen Sylter Deich. Vogel Quax zwickt Johnys Pferd Bim. Sylvia wagt quick den Jux bei Pforzheim. Polyfon
                    zwitschernd aßen Mäxchens Vögel Rüben, Joghurt und Quark. "Fix, Schwyz!" quäkt Jürgen blöd vom Paß. Victor jagt zwölf Boxkämpfer quer über den großen Sylter Deich. Falsches Üben von Xylophonmusik quält
                    jeden größeren Zwerg. Heizölrückstoßabdämpfung.Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer </p>
                <p>Zwölf Boxkämpfer jagen Viktor quer über den großen Sylter Deich. Vogel Quax zwickt Johnys Pferd Bim. Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten
                    Taxi quer durch Bayern. Zwölf Boxkämpfer jagen Viktor quer über den großen Sylter Deich. Vogel Quax zwickt Johnys Pferd Bim. Sylvia wagt quick den Jux bei Pforzheim. Polyfon zwitschernd aßen Mäxchens
                    Vögel Rüben, Joghurt und Quark. "Fix, Schwyz!" quäkt Jürgen blöd vom Paß. Victor jagt zwölf Boxkämpfer quer über den großen Sylter Deich. Falsches Üben von Xylophonmusik quält jeden größeren Zwerg.
                    Heizölrückstoßabdämpfung. Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen Viktor quer über den
                    großen Sylter Deich. Vogel Quax zwickt Johnys Pferd Bim. Sylvia wagt quick den Jux bei Pforzheim. Polyfon zwitschernd aßen Mäxchens Vögel Rüben, Joghurt und Quark. "Fix, Schwyz!" quäkt Jürgen blöd vom
                    Paß. Victor jagt zwölf Boxkämpfer quer über den großen Sylter Deich. Falsches Üben von Xylophonmusik quält jeden größeren Zwerg. Heizölrückstoßabdämpfung.Zwei flinke Boxer jagen die quirlige Eva und ihren
                    Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer.</p>
                <div class="signature">
                    <img src="{{ $AboutMe->signature }}" alt="signature">
                </div>
            </div>
        </div>
    </section>
    <section id="florian-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8-profile-img">
                    <div class="display-img">
                        <img src="{{ asset('Frontend/assets/img/profile-img.png') }}" alt="Profile">
                    </div>
                </div>
                <div class="col-md-8-profile bg-light">
                    <h2 class="d-heading" style="font-size: 45px">{{ ucwords($AboutMe->name) }}</h2>
                    <div>
                        <h2 class="d-heading profile-heading-txt"><span class="text-highlight">{{ $AboutMe->short_story }}</span></h2>
                    </div>
                    <span>Mobile: <a href="tel:+{{ $AboutMe->mobile }}" style="color: #000000">+{{ $AboutMe->mobile }}</a></span>
                    <span class="m-5">E-Mail: <a href="mailto:{{ $AboutMe->email_address }}" style="color: #000000">{{ $AboutMe->email_address }}</a></span>
                    <p class="p-text">{{ $AboutMe->about_me }}</p>

                </div>
            </div>
        </div>
    </section>
    <section id="service-section">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item">
                            <a href="">
                                <img src="{{ asset('Upload/ServiceIcon/'.$service->image) }}" alt="">
                                <div class="service-overlay">
                                    <div class="service-caption">
                                        <h5>{{ $service->title }}</h5>
                                        <h6>{{ $service->sub_title }}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div id="heute-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 heute-sidebar">
                    <h4><span class="text-highlight">2020 - heute</span></h4>
                    <ul>
                        <li>CCOVID-19 pandemic</li>
                        <li>Australian bushfires</li>
                        <li>Prince Harry and Meghan Markle quit royal family</li>
                        <li>Stock market crash 2020</li>
                        <li>Impeachment of President Donald Trump</li>
                        <li>Beirut explosion</li>
                    </ul>
                </div>
                <div class="col-md-10 right-side">
                    <div class="row">
                        <div class="col-md-3 left">
                            <h3>schalk & friends</h3>
                            <p>wir wirkt wunder</p>
                        </div>
                        <div class="col-md-9">
                            <h2><span class="text-highlight">Account Manager Digital</span></h2>
                            <h5>Job Description</h5>
                            <p>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen Viktor quer über den großen Sylter Deich.
                                Vogel Quax zwickt Johnys Pferd Bim. Sylvia wagt quick den Jux bei Pforzheim. Polyfon zwitschernd aßen Mäxchens Vögel Rüben, Joghurt und Quark. "Fix, Schwyz!" quäkt Jürgen blöd</p>
                            <h5>Verantwortlichkeiten</h5>
                            <div class="col-md-12">
                                <a href="" class="btn btn-outline-success">Verantwortung</a>
                                <a href="" class="btn btn-outline-success">Verantwortung</a>
                                <a href="" class="btn btn-outline-success">Verantwortung</a>
                                <a href="" class="btn btn-outline-success">Verantwortung</a>
                                <a href="" class="btn btn-outline-success">Verantwortung</a>
                                <a href="" class="btn btn-outline-success">Verantwortung</a>
                                <a href="" class="btn btn-outline-success">Verantwortung</a>
                                <a href="" class="btn btn-outline-success">Verantwortung</a>
                            </div>
                            <h5>Rollen</h5>
                            <div class="col-md-12">
                                <a href="" class="btn btn-outline-success">Rollen</a>
                                <a href="" class="btn btn-outline-success">Rollen</a>
                                <a href="" class="btn btn-outline-success">Rollen</a>
                                <a href="" class="btn btn-outline-success">Rollen</a>
                                <a href="" class="btn btn-outline-success">Rollen</a>
                                <a href="" class="btn btn-outline-success">Rollen</a>
                            </div>
                        </div>
                        <div class="mini-banner">
                            <img src="{{ asset('Frontend/assets/img/mini-banner.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="slick-section">
        <div class="col-md-12">
            <div class="slider responsive">
                @foreach($brands as $brand)
                    <img src="{{ asset('Upload/Brand/'.$brand->brand_img) }}" alt="{{ $brand->title }}">
                @endforeach
            </div>
        </div>
    </div>
    <div id="susbildung-section">
        <div class="col-5 box-1">
            <h2><span class="text-highlight">Ausbildung</span></h2>
            <div class="row">
                <div class="col-md-2 text-box">
                    <h6>2012</h6>
                </div>
                <div class="col-md-7 text-box">
                    <h5>Mediengestalter Digital & Print, Gestaltung und Technik</h5>
                    <p>Industrie- und Handelskammer für München & Oberbayern, München</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 text-box">
                    <h6>2012</h6>
                </div>
                <div class="col-md-7 text-box">
                    <h5>Mediengestalter Digital & Print, Gestaltung und Technik</h5>
                    <p>Industrie- und Handelskammer für München & Oberbayern, München</p>
                </div>
            </div>
        </div>
        <div class="col-5 box-2">
            <h2 class="footer-heading-txt">Persönliche Daten & <br><span class="text-highlight">Sprachkenntnisse</span></h2>
            <div class="row">
                <div class="col-md-2 text-box">
                    <h6>Daten</h6>
                </div>
                <div class="col-md-7 text-box">
                    <p>Jahrgang: 1990 Berufserfahrung: 10 Jahre und 3 Monate Nationalität: Deutsch</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 text-box">
                    <h6>Sprach- kenntnisse</h6>
                </div>
                <div class="col-md-7 text-box">
                    <p>Deutsch (Muttersprache) Englisch (Verhandlungssicher) Französisch (Grundkenntnisse)</p>
                </div>
            </div>
        </div>
    </div>
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
    <script type="text/javascript" src="{{ asset('Frontend/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/script.js') }}"></script>

</body>
</html>
