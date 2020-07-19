<!DOCTYPE html>
<html lang="en">
<head>
    @include("includes.head")
</head>
<body>
    @include("includes.header")
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    @include("includes.footer")
</body>
</html>