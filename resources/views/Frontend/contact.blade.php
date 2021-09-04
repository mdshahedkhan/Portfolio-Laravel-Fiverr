@extends('Frontend.App.App')
@section('title', "About Me")
@section('content')
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
                <h5>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</h5>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('contact') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name" class="control-label">Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" id="name" name="name">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="control-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="control-label">Subject</label>
                        <input type="email" class="form-control" placeholder="Subject" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                    </div>
                    <input type="submit" class="btn btn-download" value="Submit">
                </form>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </section>
@endsection
