@extends('layout.home')

@section('title', 'About')

@section('content')
<!-- Intro -->
<section class="section-wrap intro pb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mb-50">
                <h2 class="intro-heading">Bandung, Indonesia</h2>
                <p>{{$about->deskripsi}}</p>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <p>Hanya Menjual Item Original            
                    </p>
            </div>
        </div>
        <hr class="mb-0">
    </div>
</section> <!-- end intro -->

<!-- Promo Section -->
<section class="section-wrap promo-bg" style="background-image:url(/front/img/promo_2_bg.jpg);">
    <div class="container text-center">
        <div class="table-box">
            <h2 class="heading-frame white">The best ideas</h2>
        </div>
    </div>
</section> <!-- end promo section -->

<!-- Testimonials -->
<section class="section-wrap testimonials">
        <div id="owl-testimonials" class="owl-carousel owl-theme owl-dark-dots text-center">
            @foreach ($testimonies as $testimony)
            <div class="item">
                <div class="testimonial">
                    <p class="testimonial-text">{{$testimony->deskripsi}}</p>
                    <span>{{$testimony->nama_testimoni}}</span>
                </div>
            </div>
            @endforeach
        </div>
</section> <!-- end testimonials -->
@endsection
