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
            <h1>Senderismo</h1>
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
                            <h2>Parque natural y regional el Rasgón</h2>
                        </div>
                        <div class="text">
                            <p style="text-align:justify;">Es un ecosistema de bosque húmedo y de alta montaña, ubicada en la parte alta del municipio de Piedecuesta donde podrás disfrutar de aire puro, diversa naturaleza, gozar de un clima perfecto y es una zona importante de conservación porque en ella se encuentran los nacimientos de los ríos Frío y Oro que abastecen de agua a Bucaramanga.
                                <br>
                              <br>
                            <b>¿Cómo llegar?</b> La Corporación Autónoma Regional para la Defensa de la Meseta de Bucaramanga, CDMB, es la encargada de su administración, recomienda viajar por la vía a Cúcuta y tomar la ruta que se deriva del kilómetro 40 hacia el corregimiento de Sevilla. Desde este desvío a la entrada de la reserva hay 10 kilómetros de carretera destapada, pero hasta allá llegan vehículos.
                           
                            <p style="text-align:justify;">  Para solicitar el permiso de visita, debe enviar una carta a la oficina de Recursos Naturales de la CDMB ubicada en la carrera 23 No. 37- 63, a nombre de David Cárdenas, director de Educación Ambiental.                           
                            Usted deberá explicar el motivo y fecha de su visita, cuántas personas lo acompañarán, con sus respectivas identificaciones y cuántos días planean quedarse. Este trámite debe hacerlo con ocho días de anticipación, como mínimo.
                            Allí, le asignan un guía que le acompañará en la visita. </p>

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
                            <h2>Senderismo Umpala</h2>
                            
                        </div>
                        <div class="text">
                        <p style="text-align:justify;">Santander está lleno de lugares con un pasado lleno de pujanza y gente trabajadora que ha contribuido con el desarrollo del departamento. Umpalá es uno de los corregimientos que con el paso del tiempo se ha transformado y ahora es reconocido por sus bellos paisajes y por sus senderos hechos para realizar senderismo y tomarnos un momento para disfrutar de la tranquilidad y armonía que nos ofrece. Los invitamos a conocer uno de tantos caminos por recorrer para realizar ejercicio y disfrutar de la compañía de su familia o amigos ¡Camine nos echamos una pateada por esta joda tan linda que tiene nuestra tierrita!</p>
                        </div>
                        <div class="text">
                            <h2>¿Donde Esta ubucado?</h2>
                            
                            <p style="text-align:justify;">
                            Umpalá es un pequeño caserío a sólo 30 minutos del caso urbano de Piedecuesta Piedecuesta, muy cerca de Pescadero. El sitio está ubicado a 49 kilómetros al sur de Bucaramanga, por la salida que lleva a San Gil o a Bogotá.
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
              <b>¿Cómo llegar?</b> Si va en bus diríjase a Cootranscuesta, empresa transportadora ubicada en la carrera 14 N° 8 - 34, barrio San Rafael, en Piedecuesta. Allí debe tomar un jeep que lo llevará hasta el Balneario Quince Letras, por COP $5.000 (por persona), luego bájese y eche pata.
            Duración del recorrido de la caminata: 2 horas
            Dificultad: moderado alto
              </p>

              <br>
              <p style="text-align:justify;">
              <b>¿Y la caminata?</b> Para llegar, debe ir en carro (sea en transporte público o propio) a un sitio llamado Balneario “Quince Letras”, que queda poco antes de llegar al lecho del río Chicamocha. Desde allí se realiza el recorrido a pie, se toma un desvío a mano izquierda para empezar a caminar por la ruta destapada donde se encontrará con un río en el que podrá echarse un bañito. Luego se sube hasta el Alto de Las Cabras para posteriormente descender la montaña y llegar al corregimiento. <br> Cabe resaltar que Umpalá se encuentra en medio de dos pliegues de montaña sobre el cañón del Chicamocha. Para devolvernos existe una salida a la vía nacional continuando por el pueblo. El camino está bien señalado, pero si necesita otra guía puede preguntar a los habitantes de la zona.

              
              <br>
              <p style="text-align:justify;">
              <b>Recomendaciones</b><br>
              No llegar trasnochado.<br>
              Llevar ropa, zapatos, blusa (ojalá manga larga) , sombrero y demás insumos de protección corporal cómodos.<br>
              Morral con un litro de agua como mínimo, un refrigerio para media mañana, frutas ricas en potasio, papeletas de sales orales para en caso de rehidratación.<br>
              Recoger los residuos que genera y guardarlos dentro de su morral<br>
              Tener alguna preparación física para caminar montaña en rangos entre 2 a 4 horas.<br>


 
 
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
