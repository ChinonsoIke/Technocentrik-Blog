@extends('layouts.bloglayout')

@section('title', 'Technocentrik | Home')

@section('content')
    @foreach ($posts as $post)
        <div class="blog-list clearfix">
            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="{{route('blog.show', $post->slug)}}l" title="">
                            <img src="{{asset('images/' . $post->featured_image)}}" alt="featured image" width=500 height=600 class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="{{route('blog.show', $post->slug)}}">{{$post->title}}</a></h4>
                    <p>{{substr(strip_tags($post->body), 0, 300)}}{{strlen(strip_tags($post->body)) > 300 ? "[...]" : ""}}</p>
                    <!-- <small class="firstsmall">{{$post->category}}</small> -->
                    <small>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</small>
                    <small>by {{$post->author ?? ""}}</small>
                    <a href="{{route('blog.show', $post->slug)}}" class="btn btn-primary">Read more</a>
                </div><!-- end meta -->
            </div><!-- end blog-box -->
        </div>

        <hr class="invis">
    @endforeach
@endsection