<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Lago de Capira</title>
    <!-- Coloca aquí el enlace a Tailwind CSS -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,500;0,600;1,500&family=Lato&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    @yield('css')
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!-- Header -->
    <header class="w-full z-10">
        <nav class="bg-white py-4 shadow-md">
            <div class="max-w-7xl mx-auto px-4 pt-4 pb-4 flex justify-between items-center">
                <!-- Logo y enlace al inicio -->
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="/images/logo.svg" alt="CAPEIRA" class="h-14 mr-3">
                </a>
                <!-- Navegación principal -->
                <div class="hidden md:flex space-x-10">
                    <a href="{{ route('home') }}" class="text-base text-gray-500 hover:text-gray-900">Inicio</a>
                    <a href="{{ route('urbanizacion') }}" class="text-base text-gray-500 hover:text-gray-900">La Urbanización</a>
                    <a href="{{ route('nosotros') }}" class="text-base text-gray-500 hover:text-gray-900">Nosotros</a>
                    <a href="{{ route('casas-modelo') }}" class="text-base text-gray-500 hover:text-gray-900">Casas Modelo</a>
                    <a href="{{ route('servicios') }}" class="text-base text-gray-500 hover:text-gray-900">Servicios</a>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">Contacto</a>
                </div>
                <!-- Iconos de redes sociales -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-500 hover:text-gray-900">
                        <img src="/images/fb_icon.svg" class="h-7" alt="Facebook">
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900">
                        <img src="/images/ig_icon.svg" class="h-7" alt="Instagram">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-green-900 text-white py-4">
        <div class="container mx-auto px-4 flex flex-wrap items-center justify-center mb-5">
            <div class="flex items-center">
                <img src="/images/logo_white.svg" alt="CAPEIRA" class="h-14 mr-3">
            </div>
        </div>
        <div class="container mx-auto px-4 flex flex-wrap items-center justify-between">
            <div class="flex items-center">
                <p class="text-sm">&copy;2023 EL LAGO DE CAPEIRA</p>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ route('home') }}" class="text-sm text-white hover:text-green-500">Inicio</a>
                <a href="{{ route('urbanizacion') }}" class="text-sm text-white hover:text-green-500">La Urbanización</a>
                <a href="{{ route('nosotros') }}" class="text-sm text-white hover:text-green-500">Nosotros</a>
                <a href="{{ route('casas-modelo') }}" class="text-sm text-white hover:text-green-500">Casas Modelo</a>
                <a href="{{ route('servicios') }}" class="text-sm text-white hover:text-green-500">Servicios</a>
            </div>
            <div class="flex items-center">
                <a href="#" class="text-white hover:text-green-500">
                    <img src="path_to_your_telephone_icon" alt="Teléfono" class="h-5 w-5">
                </a>
                <a href="#" class="text-white hover:text-green-500">
                    <img src="path_to_your_whatsapp_icon" alt="WhatsApp" class="h-5 w-5">
                </a>
                <a href="#" class="text-white hover:text-green-500">
                    <img src="path_to_your_email_icon" alt="Email" class="h-5 w-5">
                </a>
            </div>
        </div>
    </footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

@yield('js')
</body>
</html>
