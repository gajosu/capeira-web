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


    {{-- <section class="py-12 px-4" style="background-color: #2e3029;">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full text-white">
                    <h1 class="font-bold text-4xl xl:text-5xl">Inmobiliaria</h1>
                    <p class="font-light text-lg xl:text-xl mb-4">
                        ¿Que ofrecemos?
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="bg-green-700 text-white p-12 " style="background-color: #2e3029;">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div>
                    <div class="w-full text-white mb-8">
                        <h1 class="font-bold text-4xl xl:text-5xl" style="color: #8ebc2a;">Inmobiliaria</h1>
                        <p class="font-light text-lg xl:text-xl mb-4 italic">
                            ¿Qué ofrecemos?
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-15">

                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">1.</span> Atención Personalizada</h4>
                            <p class="md:text-lg">mediante un equipo interdisciplinario, ofreciendo la mejor asesoría a
                                nuestros clientes.</p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">2.</span> Diseño y Construcción</h4>
                            <p class="md:text-lg">Personalizamos tu casa acorde a tus necesidades y gustos.</p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">3.</span> Venta de Solares</h4>
                            <p class="md:text-lg">ya sean viviendas por estrenar o gestión de nuevos proyectos de vivienda.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">4.</span> Asesoría Financiera</h4>
                            <p class="md:text-lg">tanto para construcción o compra de su bien inmueble.</p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">5.</span> Diseño de interiores</h4>
                            <p class="md:text-lg">Conceptualización, personalización y asesoría para la imagen de tu casa.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">6.</span> Urbanismo y paisajismo</h4>
                            <p class="md:text-lg">Viviendas y espacios que propician estilos de vida más conscientes en
                                favor del ambiente.</p>
                        </div>

                    </div>
                </div>
                <div class="full-width grid grid-cols-1">
                    <div class="relative overflow-hidden ">
                        <!-- Swiper -->
                        <div class="service1-swiper h-full w-full">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="/images/banners/servicios_slider1.jpg" alt="Ave"
                                        class="object-cover h-full w-full rounded-lg shadow-lg">
                                </div>

                                <div class="swiper-slide">
                                    <img src="/images/banners/servicios_slider2.jpg" alt="Ave"
                                        class="object-cover h-full w-full rounded-lg shadow-lg">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-green-700 text-white p-12 " style="background-color: #00474e;">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div>
                    <div class="w-full text-white mb-8">
                        <h1 class="font-bold text-4xl xl:text-5xl" style="color: #8ebc2a;">Lago Capeira</h1>
                        <p class="font-light text-lg xl:text-xl mb-4 italic pt-3">
                            ¿Qué ofrece la urbanización?
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-15">
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">1.</span> Vivir en armonía</h4>
                            <p class="md:text-lg">Con vastas áreas verdes, rodeado de cerros, flora y fauna nativa y
                                endémica.</p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">2.</span> Guardianía</h4>
                            <p class="md:text-lg">Ingreso único, seguridad 24 horas, con sistema de sticker para los
                                vehículos.</p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">3.</span> Al aire libre</h4>
                            <p class="md:text-lg">Capilla, gimnasio, parque infantil frente al lago para los más pequeños y
                                una mini tienda-supermercado.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">4.</span> Amplios solares</h4>
                            <p class="md:text-lg">viviendas cómodas, amplias, con grandes jardines. 50% construcción 50%
                                áreas verdes.</p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">5.</span> Vistas panorámicas</h4>
                            <p class="md:text-lg">Algunos solares comparten con canales naturales de aguas lluvias o
                                espacios verdes nativos.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">6.</span> Microclima</h4>
                            <p class="md:text-lg">Aire es limpio con clima más fresco debido a la abundante vegetación.</p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">7.</span> Canales</h4>
                            <p class="md:text-lg">de agua lluvia milenarios por lo tanto nunca se inunda.</p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">8.</span> Calles</h4>
                            <p class="md:text-lg">Para realizar ejercicios, caminar, trotar, andar en bicicleta, pasear con
                                las mascotas, etc.</p>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">9.</span> Relación calidad precio</h4>
                            <p class="md:text-lg">Los solares en Capeira son de 3 a 4 veces más grandes que en otros
                                lugares
                                de la ciudad.</p>
                        </div>

                        <div>
                            <h4 class="text-xl md:text-2xl font-bold" style="color: #94a08e;"><span
                                    style="color: #8ebc2a;">10.</span> Comunidades ecológicas</h4>
                            <p class="md:text-lg">Grupo Ecoapeira: educación ambiental<br>
                                Grupo Scout N° 3 "Custodios del Bosque"</p>
                        </div>

                    </div>

                </div>
                <div class="full-width grid grid-cols-1 md:order-first">
                    <div class="relative overflow-hidden">
                        <!-- Swiper -->
                        <div class="service2-swiper h-full w-full">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="/images/banners/servicios_slider3.jpg" alt="Ave"
                                        class="object-cover h-full w-full rounded-lg shadow-lg">
                                </div>

                                <div class="swiper-slide ">
                                    <img src="/images/banners/servicios_slider4.jpg" alt="Ave"
                                        class="object-cover h-full w-full rounded-lg shadow-lg">
                                </div>

                                <div class="swiper-slide ">
                                    <img src="/images/banners/contac_slider2.jpg" alt="Ave"
                                        class="object-cover h-full w-full rounded-lg shadow-lg">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
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
                        <p class="flex items-center text-l  text-gray-800"><img class="h-10" src="./images/map.svg"> KM
                            23
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
        new Swiper('.service1-swiper', {
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
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            }
        });

        setTimeout(function () {
            new Swiper('.service2-swiper', {
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
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                }
            });
        }, 1000);


    </script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var latitud = -2.005204609880833;
        var longitud =  -79.96236590779709;
        // Inicializar el mapa y establecer la vista y el zoom inicial
        var map = L.map('map').setView([latitud, longitud], 15);

        // Añadir las capas de OpenStreetMap al mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Añadir un marcador en la ubicación deseada
        var marker = L.marker([latitud, longitud]).addTo(map);
    </script>
@endsection
