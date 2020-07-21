@extends('layouts.bloglayout')

@section('title', 'Technocentrik | Blog')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h1>{{$post->title}}</h1>
        <h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
        <img src="{{asset('images/' . $post->featured_image)}}" alt="featured_image" width= 800 height= 400>
        <p>{!!$post->body!!}</p>
        <hr>
        <p>Posted in: {{$post->category->name}}</p>
    </div>
</div>

<div class="row">
    <div class="col-md-10 col-md-offset-1" id="comment-form">
        <form action="{{route('comments.store', $post->id)}}" method="POST" class="comment-form">
            @csrf
            <h3>Drop a Comment</h3>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="name" placeholder="Name:" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" placeholder="Email:" class="form-control">
                </div>

                <div class="col-md-12">
                    <textarea name="comment" placeholder="Comment:" class="form-control" cols="30" rows="5"></textarea>

                    <input type="submit" class="btn btn-success btn-block">
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h3>{{count($post->comments)}} Comments</h3>
        @foreach ($post->comments as $comment)
            <div class="comment">
                <div class="author-info">
                    <img src="{{"https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email)))}}" class="author-image">
                    <div class="author-name">
                        <h4>{{$comment->name}}</h4>
                        <p class="comment-time">{{date('F nS, Y - g:i', strtotime($comment->created_at))}}</p>
                    </div>
                </div>
                <div class="comment-content">
                    {{$comment->comment}}
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection