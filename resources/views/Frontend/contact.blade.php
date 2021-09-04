@extends('Frontend.App.App')
@section('title', "About Me")
@section('content')
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center offset-3 py-5">
                    <h2>Contact Us</h2>
                    <h5>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</h5>
                </div>
               {{-- @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif--}}
                @if(Session::has('message'))
                    <div class="alert alert-{{ session('type') }} alert-dismissible">
                        <h4><i class="icon fas fa {{ session('type') == 'success' ? 'fa-check-circle':'fa-ban' }}"></i> {{ Session::get('type') === 'success' ? 'Success':'Oops! something is wrong.' }}</h4>
                        {{ Session::get('message') }}
                    </div>
                @endif

                <form action="{{ route('contact') }}" method="post" id="SubmitMessage">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6 name-or-email">
                            <label for="name" class="control-label">Your Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name" id="name" name="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 name-or-email">
                            <label for="email" class="control-label">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" id="email" name="email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="control-label">Subject</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" id="subject" name="subject">
                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </form>

                <div class="py-2">
                    <input type="submit" class="btn btn-success" value="Submit" onclick="event.preventDefault(); document.getElementById('SubmitMessage').submit()">
                </div>
            </div>
        </div>
    </section>
@endsection
