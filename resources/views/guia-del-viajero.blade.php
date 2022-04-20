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
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>Guía de conducta</p>
                            <h2>del Viajero</h2>
                        </div>
                        <div class="text">

                            <p style="text-align: justify !important;">

                              Queremos que tu experiencia sea única y que respetes nuestra ciudad tanto como disfrutas de ella durante tu visita.<br><br>
</p>
                              <ul class="included-list clearfix" style="text-align:justify;">
                                <li>
                                  <b>MODERA EL RUIDO:</b> La naturaleza tiene sus propios sonidos. Respeta las actividades de la comunidad local, recuerda que hay personas a tu alrededor que posiblemente requieren silencio. Si los respetan, te lo agradecerán.
                                </li>
                                <li>
                                  <b>INFÓRMATE SOBRE EL MUNICIPIO:</b> Todos los lugares tienen su propia historia, naturaleza y cultura. Debes informarte para que tu conducta no produzca. Daños o perturbe sus actividades diarias.
                                </li>
                                <li>
                                  <b>CUIDA LOS RECURSOS NATURALES:</b> Utiliza el agua y la energía con moderación, recuerda que son recursos escasos y su consumo tiene gran impacto ambiental.
                                </li>
                                <li>
                                  <b>REDUCE, RECICLA, REUTILIZA:</b> Minimiza la generación de residuos, conservarlos hasta encontrar recipientes habilitados para su almacenamiento.
                                </li>
                                <li>
                                  <b>CONTAMINA MENOS, MUÉVETE MÁS:</b> Usa el sistema de transporte público, camina o conoce la ciudad en bicicleta. Así contribuyes a mejorar la calidad del aire de nuestra ciudad. ¡Es posible que conozcas lugares que jamás visitarías en otros medios de transporte.
                                </li>
                                <li>
                                  <b>CUIDA LA FLORA Y FAUNA:</b> Observa la fauna silvestre sin perturbarla, no sustraigas flores o plantas, ni compres productos elaborados a partir de especies en peligro.

                                </li>
                                <li>
                                  <b>DESCUBRE, DISFRUTA TRADICIONES, COSTUMBRES, GASTRONOMÍA Y CULTURA LOCAL:</b> En tu estadía apoya el pequeño comercio, las manifestaciones culturales y la artesanía local, con ello ayudas a conservar nuestras tradiciones, vives experiencias únicas y te llevas productos auténticos.
                                </li>
                                <li>
                                  <b>CUIDA NUESTRO PATRIMONIO CULTURAL Y NATURAL:</b> No destruyas, ensucies o alteren los elementos que hacen parte del patrimonio cultural y natural de la ciudad, recuerda que son nuestro pasado, presente y futuro.
                                </li>
                                <li>
                                  <b>TU MASCOTA ES TU RESPONSABILIDAD:</b> Asumen el compromiso de recoger los desechos de tu mascota, tener sus vacunas al día, si la raza lo requiere, recuerda que siempre debes llevarlo con traílla y bozal.
                                </li>
                                <li>
                                  <b>CUIDA A LOS NIÑOS, NIÑAS Y ADOLESCENTES:</b> Si observas algún caso de. Trabajo infantil y explotación sexual de niños, niñas y adolescentes, denuncia en la línea gratuita de emergencias 123.
                                </li>
                                <li>
                                  <b>CUMPLE LAS NORMAS:</b> Para que tengas una mejor experiencia en tu visita, conoce y cumple las señales de tránsito y de peatón y reacciona a las alarmas de emergencia.
                                </li>
                                <li>
                                  <b>SE AMABLE:</b> Queremos que seas un viajero amable, respetuoso con la población residente, comunidad étnica y LGBTI.
                                </li>
                                <li>
                                  <b>COMPRA FORMAL:</b> Dale preferencia a los Prestadores de Servicios Turísticos que se encuentren formalizados.
                                </li>
                              </ul>
                        </div>
                        <p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->

<!-- video-section -->
<section class="video-section centred" style="background-image: url({{ asset('/images/background/explora-piedecuesta-cascada.jpg') }});">
    <div class="auto-container">
        <div class="inner-box">
            <h2>Nos encanta recibirte, por eso te invitamos a disfrutar de Medellín de una forma responsable.</h2>
        </div>
    </div>
</section>
<!-- video-section end -->

@endsection
