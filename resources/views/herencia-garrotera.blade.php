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
                            <h2>Herencia Garrotera</h2>
                        </div>
                        <div class="text">

                            <p style="text-align: justify;">
                              A escasos 17 km de Bucaramanga, Piedecuesta se conoce como el municipio con mayor proyección del área metropolitana. Su extensión territorial es de 344 kilómetros cuadrados; su geografía ofrece un sinnúmero de valles, mesetas, montañas y colinas, accidentes territoriales que presentan una variada climatología, pasando del radiante sol de pescadero a la neblina del páramo de Juan Rodríguez.<br><br>
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

        <p style="text-align: justify;">
          Fundada el 26 de julio de 1776 por iniciativa del padre José Ignacio Zabala y reconocida por su gran extensión rural (97 veredas) y la fertilidad de sus tierras, Piedecuesta basa gran parte de su economía en la agricultura con productos como mora, caña, hoja de tabaco, melón, cacao, limón tahití, entre otros.<br><br>
          Durante la época conocida como La Violencia en Colombia por las luchas entre liberales y conservadores, la mayoría de las familias de la Villa de San Carlos guardaban en sus casas garrotes, como armas de defensa. Esta tradición dio origen al nombre que algunos han dado a sus pobladores: Los Garroteros.
En 1943, el padre Josué Acosta Romero inauguró uno de los símbolos representativos de la villa que es la imagen de la Virgen de la Cantera, en el cerro del mismo nombre, debido a la fuerte devoción católica que ha caracterizado a la población. Así, contribuyó al reconocimiento del municipio en el ámbito nacional, principalmente porque allí se presentan diversos actos religiosos, con motivo de la Semana Santa, que atrae a millares de turistas de todo el país.

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
