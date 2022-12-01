@extends('master')


@section('navActive')
<nav class="nav nav-masthead justify-content-center float-md-end">
    <a class="nav-link" href="/">Home</a>
    <a class="nav-link" href="/features">Features</a>
    <a class="nav-link active" href="/contact">Contact</a>
</nav>
@endsection


@section('content')
<main>
    <div class="row g-1 align-items-center py-5">
        <div class="col-md-6">
            <h1>Cooperate with us 🤝</h1>
            <p class="fs-5 col-md-8">Want to work with me and doubt my abilities? See the CV I have</p>
            
            <div class="mb-5">
                <a href="" class="btn btn-warning btn-lg px-4">Download CV</a>
            </div>
        </div>
        <div class="col-md-6" style="padding-left: 15%">
            <div class="card border-warning mb-3" style="max-width: 18rem; color:black">
                <div class="card-header">About our posters</div>
                <div class="card-body">
                    <p class="card-text"><img src="Poster.png" alt="Our poster" class="rounded mx-auto d-block img-fluid"></p>
                </div>
            </div>
        </div>
    </div>
        
    <hr class="col-3 col-md-2 my-5">
    
    <div class="row g-5">
        <div class="col-md-6">
            <h2>Starting our project</h2>
            <p>Want to start creating a project with us? let us know by Email. <br>Ask price? please ask directly, we will try to serve you well. 🙌</p>
            <ul class="icon-list list-group list-group-flush">
                <li class="list-group-item list-group-item-warning" ><a rel="noopener" target="_blank">aakhifathallah24@gmail.com</a></li>
            </ul>
        </div>
    
        <div class="col-md-6">
            <h2>Want to join us?</h2>
            <p>Would you like to join us and go through some projects together? See some of the following requirements. 🧐</p>
            <ul style="list-style-type: disc">
                <li><a href="" class="text-decoration-none">View requirements</a></li>
                <li><a href="" class="text-decoration-none">Contact us</a></li>
            </ul>
        </div>
    </div>
</main>
@endsection