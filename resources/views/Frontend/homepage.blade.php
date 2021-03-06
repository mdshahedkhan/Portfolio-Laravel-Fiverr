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
