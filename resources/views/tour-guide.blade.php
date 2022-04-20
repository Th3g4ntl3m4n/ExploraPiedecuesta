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
            <h1>Directorio de Guías Turísticos</h1>
        </div>
    </div>
</section>

<!-- team-section -->
<section class="team-section  sec-pad bg-color-1 centred">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-femenino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Rocio Badillo Hurtado</h5>
                            <span class="designation">3182390176</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-femenino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>María José Correa Villamizar</h5>
                            <span class="designation">3118221438</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-femenino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Adriana Esperanza Correa Méndez</h5>
                            <span class="designation">3187285675</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-masculino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Jovany Ramírez Morales</h5>
                            <span class="designation">3115685472</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-masculino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Ángel Leónel Arenas Monsalve</h5>
                            <span class="designation">3172120104</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-femenino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Liliana Sánchez Dulcey</h5>
                            <span class="designation">3232082172</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-femenino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>María Helena Sánchez </h5>
                            <span class="designation">3103455823</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-masculino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Edison López López</h5>
                            <span class="designation">3162674446</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-femenino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Marisol Pérez Guevara </h5>
                            <span class="designation">3125219165</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-femenino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Johanna Katherine Solano Delgado</h5>
                            <span class="designation">3186384427</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-masculino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Joel Alberto Barraza Ramirez</h5>
                            <span class="designation">3115853037</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-masculino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Armando Flórez Delgado</h5>
                            <span class="designation">3125116053</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                      <figure class="image-box"><img src="{{asset('/images/team/guia-turistico-masculino.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <h5>Jhosep Javier Flórez Vera</h5>
                            <span class="designation">3163223715</span>
                            <span class="designation">Guía Turístico</span>
                            <!--<ul class="social-links clearfix">
                                <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- team-section end -->

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
