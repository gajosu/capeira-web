@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<!-- <div class="relative bg-white">
    <img src="https://via.placeholder.com/1200x600?text=Hero+Image" alt="Urbanización Ecológica" class="w-full h-auto">
    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
      <div class="text-center text-white">
        <h1 class="text-5xl font-bold mb-4">SOMOS LA ÚNICA URBANIZACIÓN ECOLÓGICA</h1>
        <p class="mb-4">La primera urbanización que promueve un estilo de vida ecológico con actividades familiares comunitarias.</p>
        <a href="#" class="inline-block bg-green-500 text-white py-2 px-4 rounded">Conoce más</a>
      </div>
    </div>
  </div> -->

<!-- Banner Principal con Imagen de Fondo y Texto Alineado a la Izquierda y Abajo -->
<div class="relative bg-cover bg-center h-screen" style="background-image: url('/images/background.webp');">
    <div class="absolute bottom-0 left-0 p-10">
        <h1 class="text-4xl text-white font-bold mb-3">SOMOS LA ÚNICA URBANIZACIÓN ECOLÓGICA</h1>
        <p class="text-white mb-6">La primera urbanización que promueve un estilo de vida ecológico con actividades
            familiares comunitarias.</p>
        <a href="{{ route('urbanizacion') }}" class="button-with-line">
            Conoce más
        </a>
    </div>
</div>

<!-- py-12 px-4 bg1 -->

<section class="py-12 px-4 bg1">
    <div class="container mx-auto my-12 p-8 md:flex md:justify-between items-center text-justify">
        <!-- Textual content -->
        <div class="md:w-1/2 mb-6 md:mb-0">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center title-with-line">Nosotros</h2>
            <h3 class="text-4xl font-bold mb-4  titulo-con-linea"> "Custodios del Bosque"</h3>
            <p class="text-gray-600 mb-6 md:max-w-md">
                Una empresa familiar que vive en esta reserva ecológica un desarrollo paulatino y sostenible a largo
                plazo con el objetivo de preservar la flora y fauna del bosque seco tropical.
            </p>
            <a href="{{ route('nosotros') }}" class="button-with-line">
                Conoce más
            </a>
        </div>

        <!-- Image gallery -->
        <div class="grid grid-cols-1 md:grid-cols-2 md:w-1/2 gap-4">
            <div class="md:row-span-2 mb-4 md:mb-0">
                <img src="/images/banners/banner_1.png" alt="Actividades"
                    class="object-cover w-full h-full rounded-lg shadow-lg" />
            </div>
            <div>
                <img src="/images/banners/banner_2.jpg" alt="Bosque"
                    class="object-cover w-full h-full rounded-lg shadow-lg" />
            </div>
            <div>
                <img src="/images/banners/banner_3.jpg" alt="Ave"
                    class="object-cover w-full h-full rounded-lg shadow-lg" />
            </div>
        </div>
    </div>
</section>


<!-- Casas Modelo Section -->
<section class="bg-white py-12 px-4">
    <div class="container mx-auto">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center title-with-line">Casas modelo</h2>
        <div class="flex flex-wrap -mx-4">
            <!-- Tarjeta de Casa Modelo 1 -->
            <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-8">
                <div class="overflow-hidden">
                    <img class="rounded-lg rounded-3xl"src="/images/banners/casa2.jpg" alt="Casa Modelo 1"
                        class="w-full h-auto">
                    <div class="p-6">

                        <div class="text-4xl font-bold mb-4 titulo-con-linea italic cita-casa-modelo">"Diseños de viviendas personalizados
                            adecuados a su forma y pendiente."</div>

                        <a href="{{ route('casas-modelo') }}" class="button-with-line">Conoce más</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de Casa Modelo 2 -->
            <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-8">
                <div class="flex flex-wrap -mx-4">
                    <img class="rounded-lg rounded-3xl" src="/images/banners/casa1.jpg" alt="Casa Modelo 2"
                        class="w-full h-auto">
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">El equilibrio perfecto entre conservar la flora y fauna, la
                            construcción responsable y diseños de viviendas personalizadas adecuadas a los gustos y
                            necesidades de nuestros clientes.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Servicios Section -->
<section class="py-12 px-4 bg1">
    <div class="container mx-auto">
        <!-- Título de la sección con la línea personalizada -->
        <div class="flex items-center mb-6">
            <h2 class="text-3xl font-semibold text-gray-800 title-with-line">Servicios</h2>
        </div>

        <!-- Grid para los servicios -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 services">
            <!-- Servicio 1 -->
            <div class="flex items-center">
                <img src="/images/service4.svg" alt="Atención Personalizada" class="mr-4">
                <span class="font-semibold">Atención<br>Personalizada</span>
            </div>
            <!-- Servicio 2 -->
            <div class="flex items-center">
                <img src="/images/service5.svg" alt="Venta de Solares" class="mr-4">
                <span class="font-semibold">Venta de<br>Solares</span>
            </div>
            <!-- Servicio 3 -->
            <div class="flex items-center">
                <img src="/images/service6.svg" alt="Diseño y Construcción" class="mr-4">
                <span class="font-semibold">Diseño y<br>Construcción</span>
            </div>

            <!-- Servicio 3 -->
            <div class="flex items-center">
                <img src="/images/service7.svg" alt="Diseño y Construcción" class="mr-4">
                <span class="font-semibold">Asesoria<br>Financiera</span>
            </div>
        </div>

        <a href="{{ route('servicios') }}" class="mt-6 button-with-line">
            Conoce más
        </a>
</section>

<!-- Contact Section -->
<section class="contact-bg text-white py-8">
    <div class="container mx-auto px-4 flex flex-wrap items-center">
        <!-- Contact Info -->
        <div class="w-full lg:w-2/3 px-4 mb-4 lg:mb-0">
            <div class="flex items-center">
                <h2 class="text-4xl mb-6 text-center title-with-line title-with-line-second-color">Contacto</h2>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <!-- Contact Details -->
                <div class="w-full sm:w-1/2">
                    <h3 class="font-bold text-xl">Oficina Principal</h3>
                    <p class="flex items-center text-xs"><img class="h-10" src="./images/map.svg"> Victor Manuel Rendon 920 y Lorenzo de Garaicoa</p>
                    <p class="flex items-center text-xs"><img class="h-10" src="./images/calendar.svg"> Lunes a Viernes<br />9:00 a 17:00</p>
                    <p class="flex items-center text-xs"><img class="h-10" src="./images/telf.svg"> +593 4 2566046</p>
                </div>
                <div class="w-full sm:w-1/2">
                    <h3 class="font-bold text-xl"> Punto de Venta</h3>
                    <p class="flex items-center text-xs"><img class="h-10" src="./images/map.svg"> Parque Empresarial Colón, Edificio Empresarial 1 Mezanine oficina 5</p>
                    <p class="flex items-center text-xs"><img class="h-10" src="./images/calendar.svg"> Previa cita</p>
                </div>
                <div class="w-full sm:w-1/2 mt-4 sm:mt-0">
                    <h3 class="font-bold text-xl"> Urbanización</h3>
                    <p class="flex items-center text-xs"><img class="h-10" src="./images/map.svg"> Km 23 vía a Daule</p>
                    <p class="flex items-center text-xs"><img class="h-10" src="./images/telf.svg"> +5939 999 892266<br>+593 992 852229</p>
                </div>
                <div class="w-full sm:w-1/2 mt-4 sm:mt-0">
                    <h3 class="font-bold text-xl">Para más información</h3>
                    <!-- Social Icons Placeholder -->
                    <div class="flex space-x-4 mt-3">
                        <a href="https://www.instagram.com/lagodecapeira/" target="_blank" class="text-green-500"><img class="h-7" src="./images/ig_icon_white.svg"></a>
                        <a href="https://www.facebook.com/ElLagoDeCapeira" target="_blank" class="text-green-500"><img class="h-7" src="./images/fb_icon_white.svg"></a>
                        <a href="https://api.whatsapp.com/send/?phone=593999892266&text&type=phone_number&app_absent=0" class="text-green-500"><img class="h-7" src="./images/ws_icon_white.svg"></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Suscribe Section -->
        <div class="w-full lg:w-1/3 px-4 flex flex-col justify-start px-10 p-10 rounded-xl" style="background: #0d5541ff">
            <div class="">
                <h2 class="text-2xl font-bold">Suscríbete</h2>
            </div>
            <p class="mt-4 mb-8">Desvela lo mejor de vivir en el paraíso</p>
            <a href="{{ route('contacto') }}" class="btn-verde">Cotiza con nosotros</a>
        </div>
    </div>
</section>
@endsection

@section('css')
    <style>
        header {
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
@endsection
