@extends('master')

@section('navActive')
<nav class="nav nav-masthead justify-content-center float-md-end">
    <a class="nav-link active" href="/">Home</a>
    <a class="nav-link" href="/features">Features</a>
    <a class="nav-link" href="/contact">Contact</a>
</nav>
@endsection

@section('content')
<div class="px-5 mb-4 bg-dark rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Hello, business solutions here👋</h1>
        <p class="col-md-8 fs-4">Due to the rapid development of technology, we want to offer convenience for your business solutions. Which, we will provide convenience in the business that you have.</p>
        {{-- <button class="btn btn-primary btn-lg" type="button">Example button</button> --}}
    </div>
    </div>

    <div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div class="h-100 p-5 text-dark bg-light rounded-3">
        <h2>Our goal🎯</h2>
        <p>Establish a software that aims to spread your business to many clients with a wider range, practical, simple.</p>
        <a href="/features" class="btn btn-outline-secondary" type="button">See more features</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 p-5 bg-dark border rounded-3">
        <h2>Interested?</h2>
        <p>Good news if you are interested in our products, you can contact us by going to the contact menu.</p>
        <p>But if you are interested in following in our footsteps🐾, you can also join us and see the requirements in the contact menu.</p>
        <a href="/contact" class="btn btn-outline-light" type="button">Go to the contact page</a>
        </div>
    </div>
</div>
@endsection