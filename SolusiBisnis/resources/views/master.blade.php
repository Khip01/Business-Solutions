<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solusi Bisnis - Khip01</title>
    <link rel="shortcut icon" type="image/x-icon" href="solusiBisnis96.png" />
    <script src="https://kit.fontawesome.com/9d380c9d89.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .nav-masthead .nav-link {
        padding: .25rem 0;
        font-weight: 700;
        color: rgba(255, 255, 255, .5);
        background-color: transparent;
        border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link + .nav-link {
        margin-left: 1rem;
        }

        .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
        }


        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        }

        @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
        }
    </style>

    <link href="carousel.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <main>
    <div class="container">
        {{-- <header class="pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <i class="fas fa-comments-dollar me-2 text-white"></i>
            <span class="fs-4 text-white">Solusi Bisnis</span>
        </a>
        
        </header> --}}

        <header class="pb-5 mb-4 border-bottom">
            <div>
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none float-md-start mb-0">
                    <i class="fas fa-comments-dollar me-2 text-white"></i>
                    <span class="fs-4 text-white">Solusi Bisnis</span>
                </a>
                @yield('navActive')
                {{-- Koenten for navActive --}}
                {{-- <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Contact</a>
                </nav> --}}
            </div>
        </header>       

        @yield('content')

        <footer class="pt-3 mt-4 text-muted border-top text-center">
        - &copy; 2022 
        - Made with Bootstrap <i class="fab fa-bootstrap"></i> 
        - Laravel <i class="fab fa-laravel"></i>  
        - Solusi Bisnis Team -
        </footer>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>