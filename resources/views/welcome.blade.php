@php

use App\Models\Agency;

$agencies = Agency::all();

@endphp
@extends('layouts.base')

@section('main_content')

<!-- banner-section -->
        <section class="banner-section" style="background-image: url({{ asset('/images/banner/Explora_Piedecuesta.jpg') }});">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="content-box" style="margin-top:50px;">
                  <br><br><br>
                    <div class="form-inner" style="top:100px;">
                        <form action="index.html" method="post" class="booking-form clearfix">
                          <div class="form-group">
                              <div class="select-box">
                                  <select class="wide">
                                     <option data-display="Tipo de Plan">Tipo de Plan</option>
                                     <option value="1">Plan Alojamiento</option>
                                     <option value="2">Pasadía</option>
                                     <option value="3">Restaurante</option>
                                     <option value="4">Experiencia</option>
                                  </select>
                              </div>
                          </div>
                            <div class="form-group input-date">
                                <i class="far fa-angle-down"></i>
                                <input type="text" name="date" placeholder="Fecha" id="datepicker">
                            </div>
                            <div class="form-group">
                                <div class="select-box">
                                    <select class="wide">
                                       <option data-display="Cantidad de Personas">Cantidad de Personas</option>
                                       <option value="1">Plan para uno</option>
                                       <option value="2">Plan Pareja</option>
                                       <option value="3">Plan Familia</option>
                                       <option value="4">Plan Amigos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="message-btn">
                                <button type="submit" class="theme-btn"><i class="far fa-search"></i>Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- feature-section -->
        <section class="feature-section centred bg-color-1 sec-pad">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <p>Explora Piedecuesta</p>
                    <h2>Por qué conocer Piedecuesta?</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset('/images/shape/explora-piedecuesta-agencias-certificadas.jpg') }}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="icon-1"></i></div>
                                    <h4>+10 Agencias de Turismo Certificadas</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset('/images/shape/explora-piedecuesta-turismo-ecologico.jpg') }}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="icon-2"></i></div>
                                    <h4>100% Turismo Ecológico</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset('/images/shape/explora-piedecuesta-experiencia.jpg') }}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="icon-3"></i></div>
                                    <h4>10+ Años de Experiencia</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset('/images/shape/explora-piedecuesta-cadlidad.jpg') }}" alt="explora piedecuesta, turismo-calidad"></figure>
                                <div class="lower-content">
                                    <div class="icon-box"><i class="icon-4"></i></div>
                                    <h4>¡98% de nuestros visitantes Felices!</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->

        <!-- about-style-two -->
        <section class="about-style-two">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title">
                                    <p>UN RECORRIDO</p>
                                    <h2>TURÍSTICO CON OLOR A TABACO.</h2>
                                </div>
                                <div class="text">
                                    <p>Conozca el municipio de Piedecuesta, tenga en cuenta las recomendaciones para realizar el recorrido, consulte que lugares visitar y disfrute con nuestra amplia variedad gastronímica y cultural.

                                      </p>
                                </div>
                                <div class="btn-box">
                                    <a href="/fiestas-celebraciones" class="theme-btn">Más Información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_2">
                            <div class="image-box">
                                <div class="shape">
                                    <div class="shape-1" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                                    <div class="shape-2" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                                    <div class="shape-3" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                                </div>
                                <figure class="image"><img src="{{ asset('/images/resource/explora-piedecuesta-ruta-con-olor-a-tabaco.jpg') }}" alt="explora piedecuesta ruta con olor a tabaco, turismo"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-two end -->


        <section class="deals-style-two sec-pad" style="background-image: url(assets/images/background/deals-2.jpg);">
            <div class="auto-container">
                <div class="sec-title centred light">
                    <p>Planes Destacados</p>
                    <h2>Descubra los mejores planes de las empresas Garroteras</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                    <div class="single-deals-box">
                        <div class="inner-box">
                          <figure class="image-box"><img src="{{ asset('/images/resource/explora-piedecuesta-salto-del-mico-585-450.jpg') }}" alt="salto del mico"></figure>

                            <div class="content-box">
                                <span>DESTACADO</span>
                                <h3><a href="tour-details.html">Salto del Mico</a> <small>$60.000</small></h3>
                                <h4>ECO TOURS PIEDECUESTA</h4>
                                <p>Conozca una mágica caída de agua llamada el salto del Mico, a 3km de Piedecuesta.</p>
                                <div class="btn-box">
                                    <a href="tour-details.html" class="theme-btn">Más Información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-deals-box">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('/images/resource/explora-piedecuesta-ruta-tabaco-585-450.jpg') }}" alt="ruta del tabaco piedecuesta"></figure>
                            <div class="content-box">
                                <span>DESTACADO</span>
                                <h3><a href="tour-details.html">Ruta del Tabaco</a><small>$60.000</small></h3>
                                <h4>Turismo Piedecuesta</h4>
                                <p>Conozca en detalle la labor ancestral que enorgullese a los Piedecuestanos. </p>
                                <div class="btn-box">
                                    <a href="tour-details.html" class="theme-btn">Más Información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- deals-style-two end -->


        <!-- tour-section
        <section class="tour-section bg-color-1 sec-pad-2">
            <div class="auto-container">
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                  @foreach($agencies as $agency)
                    <div class="tour-block-one">
                      <div class="inner-box">
                          <figure class="image-box">
                              <img src="{{asset('/images/logo/'.$agency->logo)}}" alt="{{ $agency->name}}">
                              <a href="tour-details.html"><i class="fas fa-link"></i></a>
                          </figure>
                          <div class="lower-content">
                              <h4><a href="tour-details.html">{{ ucwords($agency->name) }}</a></h4>
                              <ul class="info clearfix">
                                  <li><i class="far fa-dot-circle-o"></i>
                                  @php
                                    switch($agency->type){
                                      case 0:
                                       echo "Agencia de Turismo";
                                      break;
                                      case 1:
                                       echo "Hotel";
                                       break;
                                       case 3:
                                        echo "Restaurante";
                                      break;
                                      default:
                                      echo "Agencia de Turismo";
                                      break;
                                    }
                                  @endphp
                                </li>
                              </ul>
                              <div class="btn-box">
                                  <a href="tour-details.html">Ver Planes</a>
                              </div>
                          </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section> -->



@endsection
