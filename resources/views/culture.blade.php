@php

use App\Models\Agency;

$agencies = Agency::all();

@endphp
@extends('layouts.base')

@section('main_content')

<!-- Page Title -->
<section class="page-title centred" style="background-image:  url({{ asset('/images/banner/banner-cultura-explora-piedecuesta.jpg') }});">
    <div class="auto-container">
        <div class="content-box">
            <h1>Cultura</h1>
        </div>
    </div>
</section>
<!-- about-style-two -->
<section class="about-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>Piedecuesta</p>
                            <h2>Cultura, Recorrido Espiritual</h2>
                        </div>
                        <div class="text">
                            <p>Conoce la valiosa arquitectura del municipio visitando las iglesías que conforman su casco urbano.<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                <div class="image_block_2">
                    <div class="image-box">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                            <div class="shape-3" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                        </div>
                        <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-recorrido-espiritual.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->

<!-- video-section -->
<section class="video-section centred" style="background-image: url({{ asset('/images/background/explora-piedecuesta-cerro-de-la-cantera-background.jpg') }});">
    <div class="auto-container">
        <div class="inner-box">
            <h2>Cerro de la Cantera</h2>
            <p>Desde allí la vista es incomparable.  Una grata caminata que no puedes perderte. <small>Se requiere guía.</small></p>
        </div>
    </div>
</section>
<!-- video-section end -->

@endsection
