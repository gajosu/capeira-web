@extends('layouts.app')
@section('content')
    <div class="relative bg-cover bg-center h-64" style="background-image: url('/images/banners/title_nosotros.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Capa oscura semitransparente -->
        <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center py-32 xl:py-40">
            <div class="w-full text-white">
                <h1 class="font-bold text-5xl xl:text-6xl">Nosotros</h1>
            </div>
        </div>
    </div>

    {{-- <section class="relative bg-cover bg-center" style="background-image: url('/images/banners/nosotros1.jpg');">

        <div class="container mx-auto flex justify-between items-center p-12">
            <!-- Contenido textual izquierdo -->
            <div class="text-white max-w-lg">
                <h2 class="text-5xl font-bold mb-6">Una idea, una meta</h2>
                <p class="text-2xl mb-4">"Construcción responsable para con el medio ambiente; brindando el mejor de los
                    lugares para vivir."</p>
                <p class="text-lg"></p>
            </div>
        </div>
    </section> --}}

    <section class="bg-green-700 text-white p-12 " style="background-color: #2e3029;">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div>
                    <div class="w-full text-white mb-8">
                        <h1 class="font-bold text-4xl xl:text-5xl" style="color: #94a08e;">Una idea, una meta</h1>
                        <p class="font-light text-lg xl:text-xl mb-4 italic">

                        </p>
                    </div>


                    <div class="w-full text-white mb-8">
                        <h4 class="text-xl md:text-2xl font-bold italic" style="color: #80c329ff;">"Construcción responsable para con el medio ambiente; brindando el mejor de los
                                lugares para vivir."</h4>
                        <p class="md:text-lg mt-8">Sabemos que el cuidado y protección de Capeira es un desafío. Se mantiene la flora
                            endémica y nativa del bosque seco tropical, de tal manera se preserva el hábitat de la fauna y avifauna
                            del lugar. Estamos seguros que los habitantes presentes y futuros, harán posible que podamos entregar a
                            las nuevas generaciones uno de los sitios más maravillosos de la zona costera del país.</p>
                    </div>


                </div>
                <div class="full-width grid grid-cols-1">
                    <img src="/images/banners/nosotros1.jpg" alt="Ave"
                                        class="object-cover h-full w-full rounded-lg shadow-lg">

                </div>
            </div>
        </div>
    </section>


    <section class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 items-center">
            <!-- Misión -->
            <div class="col-span-1 lg:col-span-1 bg-white p-4">
                <div class="mb-4">
                    <img src="/images/banners/nosotros2.jpg" alt="Naturaleza" class="w-full rounded">
                </div>
                <h2 class="text-3xl font-bold text-green-600 mb-2">Misión</h2>
                <p class="text-gray-600">
                    Construir, desarrollar y promover una urbanización ecológica, donde se conviva en armonía con la
                    naturaleza, creando conciencia ambiental entre los residentes y aportando a la conservación del planeta.
                </p>
            </div>

            <!-- Visión -->
            <div class="bg-white p-4">
                <h2 class="text-3xl font-bold text-green-600 mb-2">Visión</h2>
                <p class="text-gray-600 mb-4">
                    Ser la inmobiliaria pionera ofreciendo soluciones habitacionales en una urbanización donde se prioriza
                    la naturaleza y se construye respetando los parámetros naturales de la topografía para preservar las
                    especies endémicas de flora y fauna, reinventándonos acorde a las nuevas tendencias.
                </p>
                <div class="mb-4">
                    <img src="/images/banners/nosotros2.jpg" alt="Visión" class="w-full rounded">
                </div>
            </div>

            <!-- Columna de 40 años de trayectoria -->
            <div class="text-gray p-8">
                <div class="text-center mb-6">
                    <img src="/images/servicelogo.svg" alt="Trayectoria" class="w-full rounded">
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Responder oportunamente</h3>
                    <p class="text-md">
                        a las necesidades de los clientes cumpliendo sus expectativas
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Ofrecer excelencia en servicio</h3>
                    <p class="text-md">
                        con un amplio portafolio de productos acorde a las necesidades, gusto y presupuesto de nuestros
                        clientes.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Asesoría en tu compra</h3>
                    <p class="text-md">
                        del solar, construcción o vivienda, ofreciendo las mejores opciones y acceso al financiamiento.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="relative bg-cover bg-center"
        style="background-image: url('https://via.placeholder.com/1036x439'); height: 439px;">
        <div class="container mx-auto px-4 py-12 flex items-center">
            <div class="text-white">
                <h2 class="text-4xl font-bold mb-3">Una empresa familiar</h2>
                <p class="mb-3">Que nació en el año 1975; en sus inicios sus fundadores fueron: Joaquín Schwab, Jaime
                    Aspiazu Seminario, Avelino Arteaga y Sabino Hernández.</p>
                <p>Consecutivamente, el Dr. Sabino Hernández, amante de la naturaleza, destinó el área a la primera
                    urbanización ecológica de Guayaquil, con el concepto de un desarrollo paulatino y a largo plazo, con el
                    objetivo de preservar la flora y fauna.</p>
            </div>
        </div>
    </section> --}}

    <section class="text-white py-8" style="background-color: #00474e;">
        <div class="container mx-auto px-4 flex flex-wrap items-center">
            <!-- Contact Info -->
            <div class="w-full px-4 mb-4 lg:mb-0">
                <div class="flex flex-wrap items-center">
                    <!-- Texto de la sección -->
                    <div class="w-full text-white p-8">
                        <h2 class="text-4xl font-bold mb-4  text-white">Ubicación</h2>
                        <p class="flex items-center text-l  text-white"><img class="h-10" src="./images/map.svg"> KM 23
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
