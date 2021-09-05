@extends('Frontend.App.App')
@section('title', "About Me")
@section('content')
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3 py-5">
                    <h2 class="text-center">Get in Touch</h2>
                    <h5 class="text-center">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</h5>
                </div>
                <div class="col-md-6 offset-3">
                    @if(Session::has('message'))
                        <div class="alert alert-{{ session('type') }} alert-dismissible">
                            <h4><i class="icon fas fa {{ session('type') == 'success' ? 'fa-check-circle':'fa-ban' }}"></i> {{ Session::get('type') === 'success' ? 'Success':'Oops! something is wrong.' }}</h4>
                            {{ Session::get('message') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8 offset-2">
                    <form action="{{ route('contact') }}" method="post" id="SubmitMessage">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 name-or-email">
                                <label for="name" class="control-label text-center">Your Name</label>
                                <input type="text" class="form-control error_name @error('name') is-invalid @enderror" placeholder="Enter Your Name" id="name" name="name" value="{{ old('name') }}">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                <span id="error_name" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 name-or-email">
                                <label for="email" class="control-label">Email Address</label>
                                <input type="email" class="form-control error_email @error('email') is-invalid @enderror" placeholder="Enter Your Email" value="{{ old('email') }}" id="email" name="email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                <span id="error_email" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="subject" class="control-label">Subject</label>
                                <input type="text" class="form-control error_subject @error('subject') is-invalid @enderror" placeholder="Subject" value="{{ old('subject') }}" id="subject" name="subject">
                                @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                                <span id="error_subject" class="text-danger"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number" class="control-label">Phone</label>
                                <input type="number" class="form-control error_phone_number @error('phone_number') is-invalid @enderror" placeholder="Enter Number" value="{{ old('phone_number') }}" id="phone_number"
                                       name="phone_number">
                                @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                                <span id="error_phone_number" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" class="form-control error_message @error('message') is-invalid @enderror" id="message" cols="30" rows="10" placeholder="Enter Your Message">{{ old('message') }}</textarea>
                            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                            <span id="error_message" class="text-danger"></span>
                        </div>
                    </form>
                    <div class="py-2 text-center">
                        <button type="submit" class="btn btn-success send_message" {{--onclick="event.preventDefault(); document.getElementById('SubmitMessage').submit()"--}}>Send Message <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('JS')
    @if(Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}")
        </script>
    @endif
@endsection
