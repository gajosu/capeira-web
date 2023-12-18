@extends('layouts.app')
@section('content')
    <div class="relative bg-cover bg-center h-64" style="background-image: url('https://via.placeholder.com/1583x495');">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Capa oscura semitransparente -->
        <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center py-32 xl:py-40">
            <div class="w-full text-white">
                <h1 class="font-bold text-5xl xl:text-6xl">La Urbanización</h1>
            </div>
        </div>
    </div>
    <section class="text-white py-8" style="background-color: #00474eff;">
        <div class="container mx-auto px-4 flex flex-wrap items-center">
            <!-- Contact Info -->
            <div class="w-full px-4 mb-4 lg:mb-0">
                <div class="flex flex-wrap items-center">
                    <!-- Texto de la sección -->
                    <div class="w-full md:w-1/2 text-white p-8">
                        <h2 class="text-4xl font-bold mb-4">El Proyecto</h2>
                        <p class="mb-4">El Lago de Capeira se encuentra en los terrenos de la antigua hacienda Rosa
                            Elvira, a la
                            altura del kilómetro 23 de la vía a Daule, junto al Bosque Protector Bosqueira.</p>
                        <p class="mb-8">La primera urbanización ecológica de Guayaquil nace con el concepto de un
                            desarrollo
                            paulatino y a largo plazo y con el objetivo de preservar la flora y fauna.</p>
                        <button class="bg-yellow-400 text-green-700 font-bold py-2 px-4 rounded inline-flex items-center">
                            <span>Mira el video</span>
                        </button>
                    </div>
                    <!-- Imagen de la sección -->
                    <div class="w-full md:w-1/2">
                        <img src="/images/urbanización.jpg" alt="Vista de la urbanización"
                            class="h-auto object-cover rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Contact Info -->
    <div class="relative">
        <!-- Swiper -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 1"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 2"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/700x400" alt="Image 3"></div>
                <!-- ... -->
            </div>
            <!-- If you want pagination -->
            <div class="swiper-pagination"></div>

            <!-- If you want navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <section class="text-white py-8 ">
        <div class="container mx-auto px-4 flex flex-wrap items-center">
            <!-- Contact Info -->
            <div class="w-full px-4 mb-4 lg:mb-0">
                <div class="flex flex-wrap items-center">
                    <!-- Texto de la sección -->
                    <div class="w-full text-white p-8">
                        <h2 class="text-4xl font-bold mb-4  text-gray-800">Ubicación</h2>
                        <p class="flex items-center text-l  text-gray-800"><img class="h-10" src="./images/map.svg"> KM 23 VIA A DAULE</p>
                        <div id="map" class="w-full", style="height: 40rem;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
@endsection

@section('js')
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            grid: {
                fill: 'row',
                rows: 2,
            },
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
            // ... más parámetros si necesitas ...
        });
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

