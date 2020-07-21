@extends('layouts.seclayout')

@section('title', 'Technocentrik | About Us')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 contact-form">
                <h1>About Technocentrik</h1>
                <p>Technocentrik is a technology blog commited to keeping you abreast with the happenings in the technology industry in Africa and accross the globe.</p>
                <p>Content published on our blog include, but are not limited to news, reviews, tutorials, and DIY tech hacks.</p><br>

                <h3>MEET OUR TEAM</h3>
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{asset('images/nonso_img.jpeg')}}" alt="member img" width=175 height=175>
                        <h5>Chinonso Ikewelugo</h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection