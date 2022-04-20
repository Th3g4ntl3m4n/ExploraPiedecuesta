@php

use App\Models\Agency;

$agencies = Agency::all();

@endphp
@extends('layouts.base')

@section('main_content')

<!-- banner-section -->
        <section class="banner-section" style="background-image: url({{ asset('/images/banner/explora-piedecuesta-turismo-background.jpg') }});">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Explora <br />Piedecuesta</h2>
                    <p>¡Descubra su siguiente aventura en este hermoso municipio!</p>
                    <div class="form-inner">
                        <form action="index.html" method="post" class="booking-form clearfix">
                          <div class="form-group">
                              <div class="select-box">
                                  <select class="wide">
                                     <option data-display="Travel Type">Tipo de Plan</option>
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
                                       <option data-display="Travel Type">Cantidad de Personas</option>
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
                                <figure class="image-box"><img src="{{ asset('/images/resource/feature-1.jpg') }}" alt=""></figure>
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
                                <figure class="image-box"><img src="{{ asset('/images/resource/feature-2.jpg') }}" alt=""></figure>
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
                                <figure class="image-box"><img src="{{ asset('/images/resource/feature-3.jpg') }}" alt=""></figure>
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
                                <figure class="image-box"><img src="{{ asset('/images/resource/feature-4.jpg') }}" alt=""></figure>
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

        <!-- tour-section -->
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
        </section>



@endsection
