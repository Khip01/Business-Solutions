@extends('master')

@section('navActive')
<nav class="nav nav-masthead justify-content-center float-md-end">
    <a class="nav-link" href="/">Home</a>
    <a class="nav-link active" href="/features">Features</a>
    <a class="nav-link" href="/contact">Contact</a>
</nav>
@endsection

@section('content')
<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="https://berita.99.co/wp-content/uploads/2021/10/pemandangan-alam-matahari.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
                <img src="App.jpg" alt="Application Dev" style="filter: brightness(45%); object-fit:cover">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Application Dev</h1>
                        <p>Solutions for developing business through Applications</p>
                        <p><a class="btn btn-lg btn-primary" href="#App">Check description</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
                <img src="Web.jpg" alt="Website Dev" style="filter: brightness(45%); object-fit:cover">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Website Designer</h1>
                        <p>With the support of the Website, your business can be accessed anywhere with the internet!</p>
                        <p><a class="btn btn-lg btn-primary" href="#Web">Check description</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
                <img src="Desktop.jpg" alt="Desktop Dev" style="filter: brightness(45%); object-fit:cover">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Desktop App Dev</h1>
                        <p>Desktop application used for businesses with computer devices</p>
                        <p><a class="btn btn-lg btn-primary" href="#Desktop">Check description</a></p>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
  
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
  
    <div class="container marketing">
    
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" id="imgPembukaInspirasi" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
    
                <h2>Inspiration Opener</h2>
                <p>Opening new paths for the ease and smoothness of your business inspiration</p>
                {{-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> --}}
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" id="imgPeluangUsaha" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
    
                <h2>Business Support</h2>
                <p>With our business clients easily obtain information</p>
                {{-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> --}}
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" id="imgPenangananMasalah" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
    
                <h2>Handling problems</h2>
                <p>Handling problems with bugs / errors in the program swiftly</p>
                {{-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> --}}
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    
    
        <!-- START THE FEATURETTES -->
    
        <hr class="featurette-divider" id="App">
    
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">The first feature, there are <span class="text-muted">application developer</span></h2>
                <p class="lead">For this problem we give you a solution by building a mobile based software so that clients can access it anywhere with a network connection.</p>
            </div>
            <div class="col-md-5">
                {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>  --}}
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" id="img1" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></svg> 
            </div>
        </div>
    
        <hr class="featurette-divider" id="Web">
    
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">The second is the <span class="text-muted">website designer</span></h2>
                <p class="lead">The second solution if you are interested in sharing information about your business easily and practically is that we will design the web according to what you requested. So that clients can open it anywhere through the link you provide.</p>
            </div>
            <div class="col-md-5 order-md-1">
                {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> --}}
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" id="img2" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
            </div>
        </div>
    
        <hr class="featurette-divider" id="Desktop">
    
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">The last one is <span class="text-muted">desktop developer</span></h2>
                <p class="lead">For those of you who are interested in trying a computer or desktop-based business, you can try our service on this one. Because desktop applications will be able to reach clients who only use desktops or computers.</p>
            </div>
            <div class="col-md-5">
                {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>   --}}
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" id="img3" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>  
            </div>
        </div>
    
        <hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
    </div><!-- /.container -->
</main>
@endsection