<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 sider">
    <div class="sidebar">
        <div class="widget">
            <h2 class="widget-title">Tech News</h2>
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

        <div class="widget">
            <h2 class="widget-title">Tech Hacks</h2>
            <div class="blog-list-widget">
                <div class="list-group">
                    @foreach ($articles as $article)
                        <a href="{{route('blog.show', $article->slug)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="w-100 justify-content-between">
                                <img src="{{asset('images/' . $article->featured_image)}}" alt="Featured image" class="img-fluid float-left">
                                <h5 class="mb-1">{{$article->title}}</h5>
                                <small>{{$article->created_at}}</small>
                                <small>{{$article->category->name}}</small>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div><!-- end blog-list -->
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Recent Reviews</h2>
            <div class="blog-list-widget">
                <div class="list-group">
                    @foreach ($articles as $article)
                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="w-100 justify-content-between">
                                <img src="{{asset('images/' . $article->featured_image)}}" alt="Featured image" class="img-fluid float-left">
                                <h5 class="mb-1">{{$article->title}}</h5>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div><!-- end blog-list -->
        </div><!-- end widget -->
    </div><!-- end sidebar -->
</div><!-- end col -->