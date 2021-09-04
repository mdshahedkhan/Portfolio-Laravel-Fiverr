@extends('Frontend.App.App')

@section('title', "About Me")
@section('content')
    <section id="about-me">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2>{{ $AboutMe->name }}</h2>
                    <h4><span class="text-highlight">{{ $AboutMe->short_story }}</span></h4>
                    <h5>{{ $AboutMe->about_me }}</h5>
                    <a href="{{ $AboutMe->download_resume }}" class="btn btn-download" download>Download CV</a>
                </div>
                <div class="col-md-5 col-sm-12 offset-md-1">
                    <img src="{{ asset('Frontend/video-banner.jpg') }}" alt="" class="rounded-3">
                </div>
            </div>
        </div>
    </section>
@endsection
