@extends('layouts.seclayout')

@section('title', 'Technocentrik | Contact Us')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 contact-form">
                <form method="POST" action="/contact">
                    @csrf
                    <h1 class="text-center">Contact Us</h1>
                    <p class="text-center">Get in touch with us with any enquiries you have.</p>
                    <input class="form-control" name="name" type="text" placeholder="Enter your name:">
                    <input class="form-control" name="email" type="text" placeholder="Enter E-mail:">
                    <input class="form-control" name="subject" type="text" placeholder="Enter Message Subject:">
                    <textarea name="message" class="form-control" rows="10" cols="50" placeholder="Message..." ></textarea>
                    
                    <input type="submit" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
@endsection