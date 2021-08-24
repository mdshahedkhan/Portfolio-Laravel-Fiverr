<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('Frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" rossorigin="anonymous">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/vendor/slick/slick.css') }}"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/vendor/slick/slick-theme.css') }}"/>
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

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
            <a href="#" class="navbar-brand"><span class="sub-headingBG">Florian Lafay</span></a>
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
                    <img src="{{ asset('Frontend/assets/img/01.jpg') }}" width="130px" alt="">
                    <h4>Herzlich Willkommen Frau Meierkowski</h4>
                </div>
                <div class="title-box">
                    <h4>Meine Bewerbung um die Stelle als Creative Director</h4>
                    <div class="btn-group">
                        <a href="" class="btn btn-direkt">Direkt zu den Referenzen</a>
                        <a href="" class="btn btn-download" download>Download CV</a>
                    </div>
                </div>
            </div>
            <div class="content-section">
                <div class="content-heading">
                    <h2>Münchener Senior-Manager möchte wieder zurück in die Kreativstube</h2>
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
                <div class="signeture">
                    <img src="{{ asset('Frontend/assets/img/signeture.png') }}" alt="Signeture">
                </div>
            </div>
        </div>
    </section>
    <section id="florian-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8-profile bg-light">
                    <h2 class="d-heading">Florian Lafay <span class="sub-heading">Lead Designer, Account Manager, Art Director & mehr</span></h2>
                    <span>Mobile: +49 175 208 79 62</span>
                    <span class="m-5">E-Mail: lafayflorian@gmail.com</span>
                    <p class="p-text">Als Digital Native blicke ich auf mittlerweile 10 erfolgreiche Jahre in der Werbe- und Marketingbranche zurück. Dabei begleitete ich bisher Marken wie Fujitsu, LOTTO Bayern und F-Secure
                        als Senior Project-Manager, digitaler Designer und auf Art-Direktions-Basis.</p>
                    <div class="display-img">
                        <img src="{{ asset('Frontend/assets/img/profile-img.png') }}" alt="Profile">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="service-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <a href="">
                            <img src="{{ asset('Frontend/assets/img/img01.jpg') }}" alt="">
                            <div class="service-overlay">
                                <div class="service-caption">
                                    <h5>Kernkompetenzen & Skill-Sets</h5>
                                    <h6>BLIND Wie ich mich seit 11 Jahren in der Branche weiterentwickelt habe.</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <a href="">
                            <img src="{{ asset('Frontend/assets/img/img02.jpg') }}" alt="">
                            <div class="service-overlay">
                                <div class="service-caption">
                                    <h5>Kernkompetenzen & Skill-Sets</h5>
                                    <h6>BLIND Wie ich mich seit 11 Jahren in der Branche weiterentwickelt habe.</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <a href="">
                            <img src="{{ asset('Frontend/assets/img/img03.jpg') }}" alt="">
                            <div class="service-overlay">
                                <div class="service-caption">
                                    <h5>Kernkompetenzen & Skill-Sets</h5>
                                    <h6>BLIND Wie ich mich seit 11 Jahren in der Branche weiterentwickelt habe.</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <a href="">
                            <img src="{{ asset('Frontend/assets/img/img04.jpg') }}" alt="">
                            <div class="service-overlay">
                                <div class="service-caption">
                                    <h5>Kernkompetenzen & Skill-Sets</h5>
                                    <h6>BLIND Wie ich mich seit 11 Jahren in der Branche weiterentwickelt habe.</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <a href="">
                            <img src="{{ asset('Frontend/assets/img/img05.jpg') }}" alt="">
                            <div class="service-overlay">
                                <div class="service-caption">
                                    <h5>Kernkompetenzen & Skill-Sets</h5>
                                    <h6>BLIND Wie ich mich seit 11 Jahren in der Branche weiterentwickelt habe.</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <a href="">
                            <img src="{{ asset('Frontend/assets/img/img01.jpg') }}" alt="">
                            <div class="service-overlay">
                                <div class="service-caption">
                                    <h5>Kernkompetenzen & Skill-Sets</h5>
                                    <h6>BLIND Wie ich mich seit 11 Jahren in der Branche weiterentwickelt habe.</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="heute-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 heute-sidebar">
                    <h4><span class="back-bg">2020 - heute</span></h4>
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
                            <h2>Account Manager Digital</h2>
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
                <img src="{{ asset('Frontend/assets/img/slick/01.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/02.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/01.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/02.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/01.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/02.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/01.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/02.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/01.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/02.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/01.jpg') }}" alt="">
                <img src="{{ asset('Frontend/assets/img/slick/02.jpg') }}" alt="">
            </div>
            <input type="range" min="0" max="100" id="slider">
        </div>
    </div>
    <div id="susbildung-section">
        <div class="col-5 box-1">
            <h2>Ausbildung</h2>
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
            <h2>Persönliche Daten & Sprachkenntnisse</h2>
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
                <li class="footer-item"><span class="material-icons">translate</span></li>
                <li class="footer-item"><i class="fab fa-linkedin-in"></i></li>
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
