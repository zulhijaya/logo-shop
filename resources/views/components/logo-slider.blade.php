<div class="px-5 sm:px-10 md:px-10 lg:px-32 xl:px-80 mb-32">
    <div class="relative h-72 w-full sm:w-96 md:w-97-width md:h-97-height lg:h-logoslider-height lg:w-logoslider-width mx-auto rounded-2xl">
        <div class="z-50 absolute w-full">
            <div class="flex items-center bg-black border-t border-l border-r border-gray-900 h-4 md:h-6 w-full rounded-t-xl md:rounded-t-2xl px-4 md:px-6">
                <div class="rounded-full w-1 h-1 md:w-2 md:h-2 bg-red-500 mr-1 md:mr-2"></div>
                <div class="rounded-full w-1 h-1 md:w-2 md:h-2 bg-yellow-500 mr-1 md:mr-2"></div>
                <div class="rounded-full w-1 h-1 md:w-2 md:h-2 bg-green-500"></div>
            </div>
            <div class="bg-gray-300 border-b border-l border-r border-gray-600 h-1 md:h-2 w-full"></div>
        </div>
        <div class="z-30 absolute w-full h-full">
            <div class="bg-white flex items-center justify-center w-full h-full rounded-xl md:rounded-2xl border border-gray-900">
                <img src="{{ asset('img/bg-logo.png') }}" class="h-44 w-56 sm:h-56 sm:w-72 md:w-96 md:h-72 lg:w-logo-bg-width lg:h-logo-bg-height">
            </div>
        </div>
        <div class="z-30 absolute w-full h-full">
            <div class="splide rounded-2xl flex items-center justify-center w-full h-full">
                <div class="splide__track">
                    <li class="splide__list p-5">
                        <ul class="splide__slide">
                            <img src="{{ asset('img/alocare.jpeg') }}" class="z-50 w-40 h-40 md:w-72 md:h-72 mx-auto">
                        </ul>
                        <ul class="splide__slide">
                            <img src="{{ asset('img/lobster.jpeg') }}" class="z-50 w-40 h-40 md:w-72 md:h-72 mx-auto">
                        </ul>
                        <ul class="splide__slide">
                            <img src="{{ asset('img/alocare.jpeg') }}" class="z-50 w-40 h-40 md:w-72 md:h-72 mx-auto">
                        </ul>
                    </li>
                </div>
            </div>
        </div>
        <div class="hidden md:block absolute bottom-0 left-0 -ml-14 mt-10">
            <img src="{{ asset('img/biru-kiri.png') }}">
            <img src="{{ asset('img/merah-kiri.png') }}" class="-mt-24 -ml-7 mb-5">
            <img src="{{ asset('img/hijau-kuning-kiri.png') }}" class="-ml-6">
        </div>
        <div class="hidden md:block absolute bottom-0 right-0 -mr-28 mt-10">
            <img src="{{ asset('img/biru-kanan.png') }}">
            <img src="{{ asset('img/pasangan-biru-kanan.png') }}" class="-mt-40 ml-3">
            <div class="-mt-8">
                <img src="{{ asset('img/merah-kanan.png') }}">
                <img src="{{ asset('img/pasangan-merah-kanan.png') }}" class="-mt-28 ml-3">
            </div>
            <img src="{{ asset('img/hijau-kanan.png') }}" class="-mt-6 mb-5">
            <img src="{{ asset('img/hijau-kuning-kanan.png') }}" class="-ml-12">
        </div>
    </div>
    <hr class="border-t border-black">
</div>