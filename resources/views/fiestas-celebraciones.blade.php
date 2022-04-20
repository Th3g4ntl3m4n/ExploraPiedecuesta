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
                            <h2>Fiestas y Celebraciones</h2>
                        </div>
                        <div class="text">
                          <h3>SEMANA SANTA</h3><br>
                            <p style="text-align: justify;">
                            Piedecuesta celebra la Semana Santa de acuerdo al calendario religioso, durante la jornada se desarrollan diversas actividades para conmemorar la pasión, muerte y resurrección de Jesucristo, es de las cuatro celebraciones más originales del país, dada la diversidad de las ceremonias religiosas y culturales, el arraigo de las tradiciones (nazarenos y cirineos) y el fervor de los participantes y pobladores. </p>
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
                        <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-semana-santa.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>

        <p style="text-align: justify;">
          Su organización está a cargo de la corporación Semana Santa de Piedecuesta, entidad afiliada a la Red Internacional de Cofradías y Juntas de la Semana Santa de España e Hispanoamérica. Recibe alrededor de 30 mil feligreses cada año. El lugar en donde se realiza es en el parque La Libertad del municipio de Piedecuesta, donde cientos de familias se reúnen a compartir y conmemorar este acto representativo.
              </p>
    </div>
</section>
<!-- about-style-two end -->

<!-- video-section -->
<section class="video-section centred" style="background-image: url({{ asset('/images/background/explora-piedecuesta-tabaco.jpg') }});">
    <div class="auto-container">
        <div class="inner-box">
            <h2>FERIA NACIONAL DE LA MORA Y EL TABACO</h2>
            <p>Del 26 junio al 1 de julio</p>
        </div>
    </div>
</section>
<!-- video-section end -->
<!-- about-style-two -->
<section class="about-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="text">
                          <h3>FERIA NACIONAL DE LA MORA Y EL TABACO</h3><br>
                            <p style="text-align: justify;">
                              Del 26 junio al 1 de julio se realizan las ferias del municipio de Piedecuesta llevadas a cabo en el parque principal donde se realizan desfile de carrozas, feria ganadera, desfile quino, festivales de humor, presentación de las candidatas Señorita Piedecuesta y el objetivo del festival es que los moreros promocionen la cadena productiva con la elaboración no solo de dulces si no de vinos, entre otros subderivados.     </p>                       </div>
                                Es una de las experiencias más exitosas del municipio y donde los empresarios y campesinos pueden dar a conocer sus productos y generar ingresos.
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
                      <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-festival-de-la-mora.jpg') }}" alt=""></figure>
                  </div>
              </div>
          </div>

        </div>
        <br>
        <p style="text-align: justify;">
         Es un espacio para mostrar la calidad de uno de los productos que más se cosecha en el municipio, se busca generar nuevas alianzas con los empresarios para crear canales de comercialización
              </p>
    </div>
</section>
<!-- about-style-two end -->
<!-- video-section -->
<section class="video-section centred" style="background-image: url({{ asset('/images/background/explora-piedecuesta-piedecuestaneidad.jpg') }});">
    <div class="auto-container">
        <div class="inner-box">
            <h2>FESTIVAL DE LA PIEDECUESTANEIDAD</h2>
            <p>Última semana antes del 26 de julio</p>
        </div>
    </div>
</section>
<!-- video-section end -->

<!-- about-style-two -->
<section class="about-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="text">
                          <h3>FESTIVAL DE LA PIEDECUESTANEIDAD</h3><br>
                            <p style="text-align: justify;">
                              Es un evento donde se recalca el sentido de pertenencia por lo que se tiene, es un proyecto que busca recalcar los aspectos tradicionales tales como los bailes, costumbres, tradiciones y también un festival donde se busca resaltar los valores del pueblo, se celebra la última semana antes del 26 de julio y la duración es de aproximadamente una semana, el lugar en donde se lleva a caboacabo es en el parque principal "La Libertad" Este evento busca rescatar la música ancestral, folklore, gastronomía y la educación y uno de los principales objetivos de este festival es dar a entender a la población el desarrollo que ha tenido el municipio de Piedecuesta a través de los años.  </p>
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
                      <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-semana-piedecuestaneidad.jpg') }}" alt=""></figure>
                  </div>
              </div>
          </div>

        </div>
        <br>
    </div>
</section>
<!-- about-style-two end -->

<!-- video-section -->
<section class="video-section centred" style="background-image: url({{ asset('/images/background/explora-piedecuesta-festival-de-la-tigra.jpg') }});">
    <div class="auto-container">
        <div class="inner-box">
            <h2>FESTIVAL DE LA TIGRA</h2>
        </div>
    </div>
</section>
<!-- video-section end -->

<!-- about-style-two -->
<section class="about-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="text">
                          <h3>FESTIVAL DE LA TIGRA</h3><br>
                            <p style="text-align: justify;">
                              El festival de la tigra nació en 2017 con el fin de crear espacios culturales para la formación de público crítico en Piedecuesta, Santander. Entendiendo el arte como expresión de las comunidades y como herramienta de visibilizaciónvisibilizarían y transformación de sus realidades, el festival se establece como un proceso territorial para el fortalecimiento de iniciativas de organizaciones desde la cultura, el trabajo comunitario y la visibilizaciónizarían de problemáticas y alternativas locales. Algunas de las actividades que se realizan durante el evento son: conciertos, talleres de escritura, lenguaje, cine, improvisación y agendas pedagógicas.
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
                      <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-festival-de-la-tigra.jpg') }}" alt=""></figure>
                  </div>
              </div>
          </div>

        </div>
        <br>
    </div>
</section>
<!-- about-style-two end -->

@endsection
