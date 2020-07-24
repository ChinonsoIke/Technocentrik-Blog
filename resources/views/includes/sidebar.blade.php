<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 sider">
    <div class="sidebar">
        <div class="widget">
            <h2 class="widget-title">Recent Posts</h2>
            <div class="tech-news">
                @foreach ($articles as $article)
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="{{route('blog.show', $article->slug)}}">
                                <img src="{{asset('images/' . $article->featured_image)}}" alt="featured image" width=800 height=460 class="img-fluid">                            
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="{{route('blog.show', $article->slug)}}">{{$article->title}}</a></h4>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">
                @endforeach
            </div><!-- end videos -->
        </div><!-- end widget -->
    </div><!-- end sidebar -->
</div><!-- end col -->