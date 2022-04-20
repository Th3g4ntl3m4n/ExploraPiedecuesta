@php

use App\Models\Agency;

$agencies = Agency::all();

@endphp
@extends('layouts.base')

@section('main_content')

<!-- Page Title -->
<section class="page-title centred" style="background-image:  url({{ asset('/images/banner/banner-naturaleza-explora-piedecuesta.jpg') }});">
    <div class="auto-container">
        <div class="content-box">
            <h1>Naturaleza</h1>
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
                            <p>¿Qué visitar?</p>
                            <h2>Salto del Mico</h2>
                        </div>
                        <div class="text">
                            <p style="text-align:justify;">Es una cascada que está ubicada en la zona rural del municipio de Piedecuesta en la vereda Mesitas de San Javier en la zona rural, sus aguas puras y vírgenes es lo que caracteriza este atractivo; el paso para llegar hasta la cascada tiene un valor de $3.000 pesos y regularmente es visitada por turistas tanto nacionales como extranjeros, la quebrada es administrada y cuidada por la señora Virgelina Martines.<br>
                              <br>
                            <b>¿Cómo llegar?</b> Tomar vía destapada a la derecha del peaje en la meso de los santos, seguir hasta la bifurcación y hacer un cruce hacia la derecha, siguiendo hasta llegar a la finca El Retiro y está aproximadamente a unos 15 minutos en vehículo y 1 hora a pie.

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
                        <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-naturaleza-1.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
            <p style="text-align:justify;">
              </p>
        </div>
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

<!-- about-style-two -->
<section class="about-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>¿Qué visitar?</p>
                            <h2>Salto del Duende</h2>
                        </div>
                        <div class="text">
                            <p style="text-align:justify;">El salto del duende está ubicado en la Mesa de los Santos y hace parte de la gran cadena montañosa del cañón del Chicamocha, es una pared de roca sedimentaria de corte vertical que forma un despeñadero de más de 70 metros de profundidad, llamadas las rocas o peñas del conde, a donde llegan dos caídas de agua de pobre caudal de la quebrada la Honda que usualmente se pueden observar en época de invierno. La roca está descubierta casi sin vegetación, pero en la profundidad del salto se puede observar una tupida vegetación arbórea característica del bosque ripario. Desde allí se puede observar el paisaje que forma la hoya del río Sogamoso y el cañón de la Purnia.
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
                        <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-naturaleza-1.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
            <p style="text-align:justify;">
              <b>¿Cómo llegar?</b> Del parque principal de Piedecuesta toma la carrera 6 hacia la calle 10 y sigue derecho hasta llegar a la vía principal que conduce hasta San Gil, conduce 3 km hasta llegar a la Y, se toma la vía derecha que conduce hasta el municipio de los Santos, se conduce 18km por esa vía hasta llegar a la estación de policía mesa de los Santos, se gira a mano derecha y se recorre aproximadamente 4 km.
              </p>
        </div><br><br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>¿Qué visitar?</p>
                            <h2>Cascada del Encanto</h2>
                        </div>
                        <div class="text">
                            <p style="text-align:justify;"> Esta cascada se encuentra localizada en la parte baja del municipio de Piedecuesta dentro de la zona rural, se encuentra a 1040 metros sobre el nivel del mar, esta cascada cuenta con 10 metros de altura y en ella se puede encontrar un tobogán natural. Su propietaria es la señora Graciela Pabón, en el lugar cuenta con una señalización básica y un parqueo a la par. Se tiene estimado que los días domingos ingresan entre 200 y 300 personas aproximadamente. </p><br>
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
                        <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-naturaleza-1.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
            <p style="text-align:justify;">
              <b>¿Cómo llegar?</b> En la vía de Bucaramanga hacia Piedecuesta toma la estación de La Españolita pase el puente y se debe tomar la primera vía hacia el oriente.  De todas formas, por ahí hay carteles que le van indicando, relájese. Se puede llegar en moto o caminando. Desde la estación de metrolínea llamada La Españolita durará caminando 40 minutos hasta llegar a la cascada. Para ingresar a la Cascada deberá pagar COP $2.000 por adulto y COP $500 por niño.
            </p>
        </div>
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

<!-- about-style-two -->
<section class="about-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>¿Qué visitar?</p>
                            <h2>cascada del Ensueño</h2>
                        </div>
                        <div class="text">
                            <p style="text-align:justify;">Es un pozo natural que se encuentra ubicado en la vereda la mata del municipio de Piedecuesta en la parte rural, en un lugar único y especial en Santander, maravilloso para todo aquel que lo visita, limpio y accesible, las personas que acuden buscan tranquilidad y conectarse con la naturaleza y viven una experiencia integral al conocer el lugar y disfrutar de la vivencia en su totalidad. El agua es supremamente cristalina y fría, en su alrededor se aprecian paisajes increíbles y el silencio ayuda a conectarse aún más con las maravillas que nos ofrece esta cascada.  El lugar ha sido visitado por turistas de Costa Rica, Perú, Alemania y Argentina. En el lugar se ofrecen desayunos y almuerzos y el horario de atención es de 6:00 AM a 6:00 PM. Sus propietarios son la señora Maritza Valle y José Larrota.
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
                        <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-naturaleza-1.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
            <p style="text-align:justify;">
              <b>¿Cómo llegar?</b> En la vía que conduce de Bucaramanga hacia Piedecuesta se llega hasta la estación de La Españolita pase el puente y se debe tomar la primera vía hacia el oriente. Allí se encontrarán las indicaciones para llegar a la Cascada. Muy cerca se encuentra la cascada el Encanto. Se puede llegar en moto o caminando. Desde la estación de metrolínea llamada La Españolita durará caminando 40 minutos hasta llegar a la cascada. Para ingresar a la Cascada deberá pagar COP $2.500 por adulto y COP $500 por niño.
            </p>
        </div><br><br>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>¿Qué visitar?</p>
                            <h2>Cascada el Caney</h2>
                        </div>
                        <div class="text">
                            <p style="text-align:justify;"> Se encuentra ubicada en la vereda El Cobre de la zona rural del municipio de Piedecuesta, a unos 40 minutos del centro principal. Tiene unos 30 metros de altura, tiene como especialidad su hermosa e imponente cascada, el valor de ingreso está en aproximadamente $2.000 pesos por persona y su horario de atención es de 7:00 AM a 6:00 PM.
                            <br> <br> <b>¿Cómo llegar?</b> Primero debe dirigirse al municipio de Piedecuesta, cuando se encuentre ahí ubique el puente de Cabecera del Llano y suba por el acueducto hacia las montañas orientales. En el camino deberá pasar por la casa de la señora Tránsito y pedirle permiso para continuar, unos metros más adelante encontrará esta hermosa cascada llamada Cascada El Caney o El Diablo.
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
                        <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-naturaleza-1.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->

@endsection
