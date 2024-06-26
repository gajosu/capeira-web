@extends('layouts.app')
@section('content')
    <div class="relative bg-cover bg-center h-64" style="background-image: url('/images/banners/title-contact.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Capa oscura semitransparente -->
        <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center py-32 xl:py-40">
            <div class="w-full text-white">
                <h1 class="font-bold text-5xl xl:text-6xl">Contacto</h1>
                <p class="font-light">
                    Conoce lo que hace único a Capeira
                </p>
            </div>
        </div>
    </div>

    <section class="bg-green-700 text-white p-12 " style="background-color: #2e3029;">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <div class="w-full text-white mb-8">
                        <h1 class="font-bold text-4xl xl:text-5xl" style="color: #8ebc2a;">Llena el formulario</h1>
                        <p class="font-light text-lg xl:text-xl mb-4 italic">
                            y te enviaremos una cotización online
                        </p>
                    </div>

                    <div class="w-full">
                        <!-- Mostrar mensajes de éxito -->
                        @if(session('success'))
                            <div class="mb-6 p-4 bg-green-500 text-white rounded">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Mostrar errores de validación -->
                        @if($errors->any())
                            <div class="mb-6 p-4 bg-red-500 text-white rounded">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('contacto.store') }}" method="POST" id="contact-form">
                            @csrf
                            <div class="mb-6">
                                <input type="text" id="name" name="name" placeholder="Nombre Completo*" required
                                    class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="mb-6">
                                <input type="text" id="email" name="email" placeholder="email*" required
                                    class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="mb-6 md:flex md:space-x-4">
                                <div class="md:w-1/2">
                                    <input type="text" id="ci" name="ci" placeholder="cédula*" required
                                        class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                                </div>
                                <div class="md:w-1/2 mt-6 md:mt-0">
                                    <input type="text" id="telephone" name="telephone" placeholder="celular*" required
                                        class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                                </div>
                            </div>
                            <div class="mb-6">
                                <label for="valor_casa" class="block text-gray-700 text-base mb-2">Valor de la casa</label>
                                <select name="valor_casa" id="valor_casa"
                                    class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="Desde $145.000">Desde $145.000</option>
                                    <option value="Desde $165.000">Desde $165.000</option>
                                    <option value="Desde $200.000">Desde $200.000</option>
                                    <option value="Desde $250.000">Desde $250.000</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="plazo_compra" class="block text-gray-700 text-base mb-2">Plazo estimado de compra</label>
                                <select name="plazo_compra" id="plazo_compra"
                                    class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="Ahora">Ahora</option>
                                    <option value="3 meses">3 meses</option>
                                    <option value="6 meses">6 meses</option>
                                    <option value="12 meses">12 meses</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="contacto" class="block text-gray-700 text-base mb-2">Contáctame por</label>
                                <select name="contacto" id="contacto"
                                    class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="Whatsapp">Whatsapp</option>
                                    <option value="Email">Email</option>
                                    <option value="Llamada">Llamada</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="privacy" class="block text-gray-700 text-base mb-2">
                                    <input type="checkbox" id="privacy" name="privacy" required class="" />
                                    He leido y Acepto la <a href="#" class="text-green-700">Politica para uso y tratamiento de datos personales</a>
                                </label>
                            </div>
                            <div class="mb-6">
                                <button type="submit" class="text-white py-1 px-6 text-2xl">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="full-width grid grid-cols-1 md:order-first">
                    <div class="relative overflow-hidden ">
                        <!-- Swiper -->
                        <div class="models-swiper h-full w-full">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="/images/banners/contac_slider1.jpg" alt="Ave"
                                        class="object-cover h-full w-full rounded-lg shadow-lg">
                                </div>

                                <div class="swiper-slide">
                                    <img src="/images/banners/contac_slider2.jpg" alt="Ave"
                                        class="object-cover h-full w-full rounded-lg shadow-lg">
                                </div>
                            </div>
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
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            }
        });
    </script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var latitud = -2.0066442492465613; 
        var longitud =  -79.96592477531075;
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
