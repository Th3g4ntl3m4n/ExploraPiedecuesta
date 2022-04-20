@php

use App\Models\Agency;

$agencies = Agency::all();

@endphp
@extends('layouts.base')

@section('main_content')

<!-- Page Title -->
<section class="page-title centred" style="background-image: url({{ asset('/images/banner/explora-piedecuesta-turismo-background.jpg') }});">
    <div class="auto-container">
        <div class="content-box">
            <h1>Galería</h1>
            <p>Descubre Piedecuesta</p>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- gallery-section -->
<section class="gallery-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                <div class="gallery-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('/images/gallery/explora-piedecuesta-chicamocha-turismo.jpg') }}" alt=""></figure>
                        <div class="view-btn"><a href="{{ asset('/images/gallery/explora-piedecuesta-chicamocha-turismo.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="icon-Plus"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                <div class="gallery-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('/images/gallery/explora-piedecuesta-mora-turismo.jpg') }}" alt=""></figure>
                        <div class="view-btn"><a href="{{ asset('/images/gallery/explora-piedecuesta-mora-turismo.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="icon-Plus"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                <div class="gallery-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('/images/gallery/explora-piedecuesta-parque-principal-turismo.jpg') }}" alt=""></figure>
                        <div class="view-btn"><a href="{{ asset('/images/gallery/explora-piedecuesta-parque-principal-turismo.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="icon-Plus"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                <div class="gallery-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('/images/gallery/explora-piedecuesta-salto-del-duende-turismo.jpg') }}" alt=""></figure>
                        <div class="view-btn"><a href="{{ asset('/images/gallery/explora-piedecuesta-salto-del-duende-turismo.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="icon-Plus"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                <div class="gallery-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('/images/gallery/explora-piedecuesta-tabaco-turismo.jpg') }}" alt=""></figure>
                        <div class="view-btn"><a href="{{ asset('/images/gallery/explora-piedecuesta-tabaco-turismo.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="icon-Plus"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                <div class="gallery-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('/images/gallery/explora-piedecuesta-vino-mora-turismo.jpg') }}" alt=""></figure>
                        <div class="view-btn"><a href="{{ asset('/images/gallery/explora-piedecuesta-vino-mora-turismo.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="icon-Plus"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                <div class="gallery-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/gallery/gallery-7.jpg" alt=""></figure>
                        <div class="view-btn"><a href="assets/images/gallery/gallery-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-Plus"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery-section end -->



@endsection
