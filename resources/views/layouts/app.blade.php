<?php
$menuItems = [
    [
        'label' => 'Inicio',
        'name' => 'home',
        'url' => route('home'),
    ],
    [
        'label' => 'La Urbanización',
        'name' => 'urbanizacion',
        'url' => route('urbanizacion'),
    ],
    [
        'label' => 'Nosotros',
        'name' => 'nosotros',
        'url' => route('nosotros'),
    ],
    [
        'label' => 'Casas modelos',
        'name' => 'casas-modelo',
        'url' => route('casas-modelo'),
    ],
    [
        'label' => 'Servicios',
        'name' => 'servicios',
        'url' => route('servicios'),
    ],
    [
        'label' => 'Contacto',
        'name' => 'contacto',
        'url' => route('contacto'),
    ],
];

// check if is current page
$currentRoute = request()->route()->getName();
$menuItems = collect($menuItems)->map(function ($item) use ($currentRoute) {
    $item['current'] = $item['name'] === $currentRoute;
    return $item;
})->all();

?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? "{$title} - " : ''}}El Lago de Capira{{ isset($title2) ? " - {$title2}" : ''}}</title>
    <!-- Coloca aquí el enlace a Tailwind CSS -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,500;0,600;1,500&family=Lato&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @yield('css')
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!-- Header -->
    <!-- Header -->
    <header class="w-full z-10">
        <nav class="bg-white py-4 shadow-md">
            <div class="max-w-7xl mx-auto px-4 pt-4 pb-4 flex justify-between items-center">
                <!-- Botón del menú móvil -->
                <button id="mobile-menu-button" class="md:hidden p-2 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Logo y enlace al inicio para escritorio -->
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="/images/logo.svg" alt="CAPEIRA" class="h-14 mr-3">
                </a>

                <!-- Menú móvil (oculto por defecto) -->
                <div id="mobile-menu" class="fixed inset-0 transform -translate-x-full bg-green-900 p-5 opacity-0 transition-all duration-300 ease-in-out" style="z-index: 9999;">
                    <!-- Logo y enlace al inicio para móvil -->
                    <div class="flex justify-between items-center">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <img src="/images/logo_green.svg" alt="CAPEIRA" class="h-14 mr-3">
                        </a>
                        <button id="close-menu-button" class="p-2 focus:outline-none">
                            <svg class="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="#80c329ff">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <!-- Enlaces del menú móvil -->
                    <div class="mt-8 mobile-menu-nav">
                        @foreach ($menuItems as $item)
                            <a href="{{ $item['url'] }}"
                                class="block px-3 py-2 text-base font-medium text-white {{ $item['current'] ? 'active' : '' }}">{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                    <!-- Redes sociales -->
                    <div class="absolute bottom-0 left-0 mb-4 flex justify-center w-full">
                        <a href="https://www.facebook.com/ElLagoDeCapeira" target="_blank" class="text-white hover:bg-green-700 p-2 rounded-md">
                            <img src="/images/fb_icon_green.svg" class="h-7" alt="Facebook">
                        </a>
                        <a href="https://www.instagram.com/lagodecapeira/" target="_blank" class="text-white hover:bg-green-700 p-2 rounded-md">
                            <img src="/images/ig_icon_green.svg" class="h-7" alt="Instagram">
                        </a>
                        <a href="https://api.whatsapp.com/send/?phone=593999892266&text&type=phone_number&app_absent=0" target="_blank" class="text-white hover:bg-green-700 p-2 rounded-md">
                            <img src="/images/ws_icon_green.svg" class="h-7" alt="Twitter">
                        </a>
                    </div>
                </div>
                <!-- Navegación principal para escritorio -->
                <ul class="hidden md:flex space-x-10">
                    @foreach ($menuItems as $item)
                        <li>
                            <a href="{{ $item['url'] }}"
                            class="text-base text-gray-500 hover:text-gray-900 {{ $item['current'] ? 'text-green-700 font-bold border-b-2 border-green-700' : '' }}">{{ $item['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <!-- Iconos de redes sociales -->
                <div class="flex items-center space-x-4">
                    <a href="https://www.facebook.com/ElLagoDeCapeira" target="_blank" class="text-gray-500 hover:text-gray-900">
                        <img src="/images/fb_icon.svg" class="h-7" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/lagodecapeira/" target="_blank" class="text-gray-500 hover:text-gray-900">
                        <img src="/images/ig_icon.svg" class="h-7" alt="Instagram">
                    </a>
                </div>
            </div>
        </nav>
    </header>


    @yield('content')


    <!-- Footer -->
    <footer class="text-white py-4" style="background-color: #1f3930;">
        <div
            class="container mx-auto px-4 flex flex-col items-center justify-between text-center sm:flex-row sm:text-left sm:items-end">


            <!-- Centered logo with navigation links stacked on mobile, inline on desktop -->
            <div class="flex-1 flex flex-col items-center justify-center">
                <img src="/images/logo_white.svg" alt="CAPEIRA" class="h-14 mb-3">
                <nav class="w-full sm:w-auto ">
                    <ul
                        class="flex flex-col sm:flex-row sm:items-center justify-center space-y-2 sm:space-y-0 sm:space-x-4">

                        @foreach ($menuItems as $item)
                            <li><a href="{{ $item['url'] }}"
                                    class="text-sm text-white hover:text-green-500">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>

            <!-- Contact icons centered on mobile, right-aligned on desktop -->
            <div class="w-full mb-3 sm:mb-0 sm:w-auto sm:flex sm:items-end md:order-first ">
                <p class="text-sm"><br>&copy;2023 EL LAGO DE CAPEIRA</p>
            </div>
            <!-- Copyright text centered on mobile, left-aligned on desktop -->
            <div class="w-full mb-3 sm:mb-0 sm:w-auto sm:flex sm:items-end ">
                <p class="text-sm">Todos los derechos reservados KONEKTIS</p>
            </div>
        </div>
    </footer>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    @yield('js')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            // Toggle mobile menu
            menuButton.addEventListener('click', function () {
                mobileMenu.classList.toggle('opacity-100');
                mobileMenu.classList.toggle('translate-x-0');
                mobileMenu.classList.toggle('-translate-x-full');
            });

            // Close mobile menu
            document.getElementById('close-menu-button').addEventListener('click', function () {
                mobileMenu.classList.toggle('opacity-100');
                mobileMenu.classList.toggle('translate-x-0');
                mobileMenu.classList.toggle('-translate-x-full');
            })
        });
    </script>

</body>

</html>
