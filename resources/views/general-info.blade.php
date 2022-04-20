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
<section class="about-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>Piedecuesta</p>
                            <h2>Información General</h2>
                        </div>
                        <div class="text">

                            <p style="text-align: justify;">
                              <b>Gentilicio:</b> 	Piedecuestano, -a.<br><br>
                              <b>Cantidad de Habitantes:</b> 186 167 hab.<br><br>
                              <b>Clima:</b>
                              Piedecuesta cuenta con un clima privilegiado, y es realmente común escuchar a viajeros nacionales e internacionales expresar que es uno de los climas más agradables del país, esto se debe a que se caracteriza por no ser ni muy caliente, ni muy frío, con una temperatura promedio entre 20°C y 23°C.<br><br>

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
                        <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-ciudad-garrotera.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>

        <p style="text-align: justify;">Nuestra recomendación es venir preparados para la impredecibilidad de un clima subtropical húmedo caracterizada por un ambiente templado con lluvias frecuentes durante todo el año, por lo que traer en la maleta una chaqueta impermeable y un par de botas no estaría mal, así como por supuesto ropa liviana y fresca para los días soleados, que son casi todos.
    </i>.
              </p>
    </div>
</section>
<!-- about-style-two end -->

<!-- video-section -->
<section class="video-section centred" style="background-image: url({{ asset('/images/background/explora-piedecuesta-cascada.jpg') }});">
    <div class="auto-container">
        <div class="inner-box">
            <h2>Tener en cuenta</h2>
            <p>Para visitar estos sitios se sugiere contar con la compañía de un guía certificado.</p>
        </div>
    </div>
</section>
<!-- video-section end -->

@endsection
