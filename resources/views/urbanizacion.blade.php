@extends('layouts.app')
@section('content')
    <div class="relative bg-cover bg-center h-64" style="background-image: url('/images/banners/title_urbanizacion.jpg');">
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
                            Elvira, a la altura del kilómetro 23 de la vía a Daule, junto al Bosque Protector Bosqueira.</p>
                        <p class="mb-8">La primera urbanización ecológica de Guayaquil nace con el concepto de un
                            desarrollo paulatino, a largo plazo y con el objetivo de preservar la flora y fauna.</p>
                        <button id="videoButton" class="bg-yellow-400 text-black font-bold py-2 px-4 rounded inline-flex items-center">
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
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider1.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider7.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider3.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider4.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider5.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider8.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider9.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider10.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider11.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider12.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider13.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="/images/banners/urbanizacion_slider6.jpg" alt="Image 1"></div>
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
                        <p class="flex items-center text-l  text-gray-800"><img class="h-10" src="./images/map.svg"> KM 23
                            VIA A DAULE</p>
                        <div id="map" class="w-full", style="height: 40rem;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="videoModal"
        class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center opacity-0 pointer-events-none">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-3xl mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div class="modal-content py-4 text-left px-6">
                <!-- Título -->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">La magia de El Lago de Capeira</p>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 18 18">
                            <path
                                d="M14.53 3.47a.75.75 0 00-1.06 0L9 7.94 4.53 3.47a.75.75 0 10-1.06 1.06L7.94 9l-4.47 4.47a.75.75 0 101.06 1.06L9 10.06l4.47 4.47a.75.75 0 001.06-1.06L10.06 9l4.47-4.47a.75.75 0 000-1.06z" />
                        </svg>
                    </div>
                </div>

                <!-- Contenido -->
                <div class="my-5">
                    <iframe id="youtubeVideo" class="w-full h-64 md:h-96" src="" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        .modal {
            transition: opacity 0.25s ease;
            z-index: 999;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
    </style>
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
        var latitud = -2.0066442492465613;
        var longitud = -79.96592477531075;
        // Inicializar el mapa y establecer la vista y el zoom inicial
        var map = L.map('map').setView([latitud, longitud], 15);

        // Añadir las capas de OpenStreetMap al mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Añadir un marcador en la ubicación deseada
        var marker = L.marker([latitud, longitud]).addTo(map);
    </script>

    <script>
        // Get elements
        const videoButton = document.getElementById('videoButton');
        const videoModal = document.getElementById('videoModal');
        const youtubeVideo = document.getElementById('youtubeVideo');
        const modalClose = document.querySelector('.modal-close');

        // Open modal
        videoButton.addEventListener('click', () => {
            videoModal.classList.remove('opacity-0', 'pointer-events-none');
            videoModal.classList.add('opacity-100');
            youtubeVideo.src = 'https://www.youtube.com/embed/DhMkrC5Px8s';
        });

        // Close modal
        modalClose.addEventListener('click', () => {
            videoModal.classList.add('opacity-0', 'pointer-events-none');
            videoModal.classList.remove('opacity-100');
            youtubeVideo.src = '';
        });

        // Close modal when clicking outside of it
        videoModal.addEventListener('click', (e) => {
            if (e.target === videoModal || e.target.classList.contains('modal-overlay')) {
                videoModal.classList.add('opacity-0', 'pointer-events-none');
                videoModal.classList.remove('opacity-100');
                youtubeVideo.src = '';
            }
        });
    </script>
@endsection
