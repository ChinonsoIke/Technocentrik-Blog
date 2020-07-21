<header class="tech-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">techno<strong>Centrik</strong></a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="{{ Request::is('/') ? 'nav-link active' :  'nav-link' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Request::is('/blog') ? 'nav-link active' :  'nav-link' }}" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Request::is('/contact') ? 'nav-link active' :  'nav-link' }}" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->