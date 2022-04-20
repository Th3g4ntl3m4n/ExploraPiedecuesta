@php

use App\Models\Agency;

$agencies = Agency::all();

@endphp
@extends('layouts.base')

@section('main_content')

<!-- Page Title -->
<section class="page-title centred" style="background-image:  url({{ asset('/images/banner/banner-registro-explora-piedecuesta.jpg') }});">
    <div class="auto-container">
        <div class="content-box">
            <h1>La Ciudad Garrotera</h1>
        </div>
    </div>
</section>
<!-- about-style-two -->

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
                            <h2>¿Cómo llegar?</h2>
                        </div>
                        <div class="text">

                            <p style="text-align: justify;">
                              Hay 3 maneras de llegar desde Aeropuerto Bucaramanga (BGA) hasta Piedecuesta en taxi, autobús o en coche.
                              <br>
                              Nuestra recomendación es venir preparados para la impredecibilidad de un clima subtropical húmedo caracterizada por un ambiente templado con lluvias frecuentes durante todo el año, por lo que traer en la maleta una chaqueta impermeable y un par de botas no estaría mal, así como por supuesto ropa liviana y fresca para los días soleados, que son casi todos.
                            </p>
                        </div>
                        <p>
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
                        <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-como-llegar.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    <br>
    <div class="mapouter" ><div class="gmap_canvas"><iframe width="1024" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=piedecuesta&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1024px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1024px;}</style></div></div>
    </div>
</section>
<!-- about-style-two end -->

@endsection
