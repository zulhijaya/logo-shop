<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Shop</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splide-default.min.css') }}">

    
    <style>
        .bg-backdrop { 
            background-color: rgba(0, 0, 0, .5);
        }
    </style>

    @livewireStyles
</head>
<body class="font-inter">
    <section name="header" class="p-5 sm:px-10 md:px-10 lg:px-16 xl:px-64 mb-16 md:mb-32">
        <div class="flex items-center">
            <img src="{{ asset('img/logo-shop.png') }}" class="w-28 md:w-48 mr-2" alt="Logo Shop">
            <img src="{{ asset('img/bulu.png') }}" class="w-9 md:w-14" alt="Logo Shop">
        </div>
    </section>

    {{ $slot }}

    <footer class="text-center py-5 text-sm md:text-base">© 2021 Logo Shop. All rights reserved.</footer>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
    <script>
        new Splide( '.splide', {
            type: 'loop',
            arrows: false,
            autoplay: true,
            interval: 3000,
            pauseOnHover: false,
            pauseOnFocus: false
        } ).mount();
    </script>

    @livewireScripts
</body>
</html>