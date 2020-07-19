@extends('layouts.bloglayout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 md-offset-2">
                <form method="POST" action="/contact">
                    @csrf
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