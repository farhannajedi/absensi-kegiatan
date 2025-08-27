@extends('layouts.main')

<!-- for animation -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

@section('content')

<!-- Custom CSS for home index -->
<style>
.carousel-item img {
    height: 400px;
    object-fit: cover;
}

/* efek shadow title */
.shadow-title {
    text-shadow: 0 0 5px #00f, 0 0 10px #00f, 0 0 20px #00f;
}

/* efek teks */
.shadow-text {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff;
}

.carousel-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3));
}

.carousel-caption {
    z-index: 2;
    text-align: center;
}

.carousel-caption h1 {
    font-size: 3rem;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);
}

.carousel-caption p {
    font-size: 1.3rem;
    max-width: 600px;
}

.btn {
    font-size: 1.2rem;
    padding: 12px 24px;
    border-radius: 50px;
}
</style>

<!-- kontent carousel image -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active position-relative">
            <img src="{{ asset('images/bugatti-tourbillon-3840x2160-17187.jpg') }}" class="d-block w-100" alt="Bugatti">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                <h1 class="fw-bold text-uppercase animate__animated animate__fadeInDown shadow-title">Bugatti Tourbillon
                </h1>
                <p class="lead animate__animated animate__fadeInUp shadow-text"><b>
                        Hypercar dengan desain futuristik dan performa luar biasa.</b></p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item position-relative">
            <img src="{{ asset('images/ferrari-sf-25-8k-3840x2160-21456.jpg') }}" class="d-block w-100" alt="Ferrari">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                <h1 class="fw-bold text-uppercase animate__animated animate__fadeInDown shadow-title">Ferrari SF-25</h1>
                <p class="lead animate__animated animate__fadeInUp shadow-text">
                    <b>Ferrari dikenal dengan warna khas merah (Rosso Corsa), yang telah menjadi identitas ikonik di
                        dunia
                        motorsport.</b>
                </p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item position-relative">
            <img src="{{ asset('images/rml-p39-porsche-991-3840x2160-19340.jpeg') }}" class="d-block w-100"
                alt="Porsche 991">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                <h1 class="fw-bold text-uppercase animate__animated animate__fadeInDown shadow-title">Porsche 991 GT3 RS
                </h1>
                <p class="lead animate__animated animate__fadeInUp shadow-text">
                    <b>991 GT3 RS menjadi salah satu Porsche paling dicari, dengan mesin naturally aspirated 4.0L
                        NA.</b>
                </p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@endsection