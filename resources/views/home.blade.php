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
<div class="relative bg-cover bg-left md:bg-center  h-screen" style="background-image: url('/images/background.webp');">
    <div class="container mx-auto px-4 h-full flex items-end">
        <div class="pb-10 text-white">
            <h1 class="text-4xl mb-3">
                <span class="block text-2xl md:text-3xl font-bold" style="color: #b2bfab;">SOMOS LA ÚNICA</span>
                <span class="block text-4xl md:text-6xl font-bold">URBANIZACIÓN<br>ECOLÓGICA</span>
            </h1>
            <p class="mb-6 max-w-md">La primera urbanización que promueve un estilo de vida ecológico con actividades familiares comunitarias.</p>
            <a href="{{ route('urbanizacion') }}" class="button-with-line light-green">
                Conoce más
            </a>
        </div>
    </div>
</div>


<!-- py-12 px-4 bg1 -->

<section class="py-12 px-4 bg1">
    <div class="container mx-auto my-12 p-8 md:flex md:justify-between items-center text-justify">
        <!-- Textual content -->
        <div class="md:w-1/2 mb-6 md:mb-0">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center title-with-line">Nosotros</h2>
            <h3 class="text-5xl mb-4  titulo-con-linea italic md:max-w-xs" style="color: #00494e"> "Custodios del Bosque"</h3>
            <p class="text-gray-600 mb-6 md:max-w-md">
                Una empresa que vive en esta reserva ecológica un desarrollo paulatino y sostenible a largo
                plazo con el objetivo de preservar la flora y fauna del bosque seco tropical.
            </p>
            <a href="{{ route('nosotros') }}" class="button-with-line green">
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

                        <div class="text-2xl md:text-3xl md:max-w-lg mb-4 titulo-con-linea italic cita-casa-modelo bitter mb-8">"Diseños de viviendas personalizados
                            adecuados a su forma y pendiente."</div>

                        <a href="{{ route('nuestros-disenos') }}" class="button-with-line blue">Conoce más</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de Casa Modelo 2 -->
            <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-8">
                <div class="flex flex-wrap -mx-4 px-4"">
                    <img class="rounded-lg rounded-3xl" src="/images/banners/casa1.jpg" alt="Casa Modelo 2"
                        class="w-full h-auto">
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">El equilibrio perfecto entre conservar la flora y fauna, la
                            construcción responsable con el ambiente, adecuadas a los gustos y
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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 services mb-8">
            <!-- Servicio 1 -->
            <div class="flex items-center">
                <img src="/images/service4.svg" alt="Atención Personalizada" class="mr-4">
                <span class="bitter">Atención<br>Personalizada</span>
            </div>
            <!-- Servicio 2 -->
            <div class="flex items-center">
                <img src="/images/service5.svg" alt="Venta de Solares" class="mr-4">
                <span class="bitter">Venta de<br>Viviendas y Solares</span>
            </div>
            <!-- Servicio 3 -->
            <div class="flex items-center">
                <img src="/images/service6.svg" alt="Diseño y Construcción" class="mr-4">
                <span class="bitter">Diseño y<br>Construcción</span>
            </div>

            <!-- Servicio 3 -->
            <div class="flex items-center">
                <img src="/images/service7.svg" alt="Diseño y Construcción" class="mr-4">
                <span class="bitter">Asesoria<br>Financiera y Legal</span>
            </div>
        </div>

        <a href="{{ route('servicios') }}" class="mt-6 button-with-line">
            Conoce más
        </a>
</section>

<!-- Contact Section -->
<section class="contact-bg text-white ">
    <div class="container mx-auto flex flex-wrap items-stretch">
        <!-- Contact Info -->
        <div class="w-full lg:w-1/2 px-4 mb-4 lg:mb-0 px-4 py-8">
            <div class="flex items-center">
                <h2 class="text-4xl mb-6 text-center title-with-line title-with-line-second-color">Contacto</h2>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div class="w-full mt-4 sm:mt-0">
                    <h3 class="font-bold text-xl"> Urbanización</h3>
                    <p class="flex items-center text-xs"><img class="h-10" src="./images/map.svg"> Km 23 vía a Daule</p>
                    <p class="flex items-center text-xs mt-3"><img class="h-10" src="./images/telf.svg"> +5939 999 892266<br>+593 992 852229<br>serviciosalcliente@capeira.com</p>
                </div>
                <div class="w-full mt-4 sm:mt-0">
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
        <div class="w-full lg:w-1/2 px-4 flex flex-col justify-center px-10 py-10" style="background: #0d5541">
            <div class="text-center">
                <span class="text-sm md:text-lg  tracking-wider" style="color: #8ebc2a;">Suscríbete</span>
                <h2 class="text-2xl md:text-4xl font-bold mt-2 mb-4">Desvela lo mejor de vivir <br>en el paraíso</h2>
                <hr class="w-1/2 border-1 border-white mx-auto mb-7">
                <a href="{{ route('contacto') }}" class="btn-verde2 py-4 px-7 rounded-full text-lg font-medium transition duration-300 ease-in-out">
                    Cotiza con nosotros
                </a>
            </div>
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
