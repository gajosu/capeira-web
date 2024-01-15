@extends('layouts.app')
@section('content')
    <div class="relative bg-cover bg-top h-64" style="background-image: url('/images/banners/title-servicios.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Capa oscura semitransparente -->
        <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center py-32 xl:py-40">
            <div class="w-full text-white">
                <h1 class="font-bold text-5xl xl:text-6xl">Servicios</h1>
                <p class="font-light">
                    Somos inmobiliaria y urbanización.
                </p>
            </div>
        </div>
    </div>


    <section class="py-12 px-4" style="background-color: #2e3029;">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <!-- Tarjeta de Casa Modelo 2 -->
                <div class="w-full">

                    <h2
                    class="text-5xl font-semibold text-white text-left">
                    Inmobiliaria</h2>

                    <p
                    class="text-white text-lg mb-6 text-left">
                    ¿Qué Ofrecemos?</p>

                    <!-- Contact Info -->
                    <div class="relative overflow-hidden">
                        <!-- Swiper -->
                        <div class="models-swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                   
                                    <img src="/images/banners/casas-modelo-1.png" alt="Image 1">
                                </div>
                                <div class="swiper-slide">
         
                                    <img src="/images/banners/casas-modelo-1.png" alt="Image 1">
                                </div>
                                <div class="swiper-slide">
                    
                                    <img src="/images/banners/casas-modelo-1.png" alt="Image 1">
                                </div>

                            </div>
                            <!-- If you want pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If you want navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 px-4 bg1">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold text-gray-800 mb-2 text-center title-with-line">
                Obras entregadas</h2>
            <p class="mb-6 lg:w-1/2">Conoce nuestras obras cargadas de elegancia arquitectónica, donde el diseño innovador se une a la tierra creando espacios inspiradores, cautivantes y modernos; creando una comunidad ecológica</p>
            <div class="flex flex-wrap -mx-4">
                <!-- Tarjeta de Casa Modelo 2 -->
                <div class="w-full">

                    <!-- Contact Info -->
                    <div class="relative overflow-hidden">
                        <!-- Swiper -->
                        <div class="obras-swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider1.jpg"
                                        alt="Image 1"></div>
                                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider2.jpg"
                                        alt="Image 1"></div>
                                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider3.jpg"
                                        alt="Image 1"></div>
                                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider4.jpg"
                                        alt="Image 1"></div>
                                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider5.jpg"
                                        alt="Image 1"></div>
                                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider6.jpg"
                                        alt="Image 1"></div>

                            </div>
                            <!-- If you want pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If you want navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white py-8 ">
        <div class="container mx-auto px-4 flex flex-wrap items-center">
            <!-- Contact Info -->
            <div class="w-full px-4 mb-4 lg:mb-0">
                <div class="flex flex-wrap items-center">
                    <!-- Texto de la sección -->
                    <div class="w-full text-white p-8">
                        <h2 class="text-4xl font-bold mb-4  text-gray-800">Ubicación</h2>
                        <p class="flex items-center text-l  text-gray-800"><img class="h-10" src="./images/map.svg"> KM 23
                            VIA A DAULE</p>
                        <div id="map" class="w-full", style="height: 40rem;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
@endsection
@section('js')
    <script>
        var modelsSwiper = new Swiper('.models-swiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var obrasSwiper = new Swiper('.obras-swiper', {
            slidesPerView: 2.25,
            spaceBetween: 0,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        })
    </script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var latitud = -2.005319;
        var longitud = -79.958861;
        // Inicializar el mapa y establecer la vista y el zoom inicial
        var map = L.map('map').setView([latitud, longitud], 13);

        // Añadir las capas de OpenStreetMap al mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Añadir un marcador en la ubicación deseada
        var marker = L.marker([latitud, longitud]).addTo(map);
    </script>
@endsection
