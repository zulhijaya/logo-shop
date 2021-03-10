<div class="px-5 sm:px-10 md:px-10 xl:px-64 mb-32">
    <h6 class="font-bitter font-bold text-center text-3xl md:text-4xl mb-5">Layanan Kami</h6>
    <div class="text-center text-base md:text-lg mb-12 leading-relaxed md:px-40">Pilihlah salah satu layanan kami sesuai kebutuhan Anda</div>
    <div class="flex flex-col lg:flex-row items-center justify-around text-sm md:text-base mb-10">
        <div class="bg-white p-8 h-full w-72 md:w-96 lg:w-72 rounded-xl border border-gray-300 hover:shadow-2xl transition-all duration-200 ease-in-out mb-5 lg:mb-0">
            <h6 class="font-semibold text-lg md:text-xl text-center mb-2">Desain Kemasan</h6>
            <p class="font-bitter text-blue-600 text-center text-3xl font-medium mb-10">Rp 300.000</p>
            <div class="mb-12">
                <div class="flex items-center mb-3">
                    <div class="mr-3">
                        <svg class="text-blue-600 w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>Waktu pengerjaan 3 hari</div>
                </div>
                <div class="flex items-center mb-3">
                    <div class="mr-3">
                        <svg class="text-blue-600 w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>Gratis revisi tanpa batas</div>
                </div>
                <div class="flex items-center">
                    <div class="mr-3">
                        <svg class="text-blue-600 w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>Gratis data master</div>
                </div>
            </div>
            <a 
                @if($name)
                href="https://wa.me/{{ $number }}?text=Halo,%20nama%20saya%20{{ $name }}.%20Saya%20ingin%20memesan%20Desain%20Kemasan."
                @else
                href="https://wa.me/{{ $number }}?text=Halo,%20saya%20ingin%20memesan%20Desain%20Kemasan."
                @endif
            >
                <button wire:click="{{ $customerName = '' }}" class="w-full text-sm ring-0 border border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 font-semibold rounded-md hover:text-white px-4 py-2 transition-all duration-200 ease-in-out">
                    KONFIRMASI PEMBAYARAN
                </button>
            </a>
        </div>
        <div class="bg-white p-8 h-full w-72 md:w-96 lg:w-72 rounded-xl border border-gray-300 hover:shadow-2xl transition-all duration-200 ease-in-out mb-5 lg:mb-0">
            <h6 class="font-semibold text-lg md:text-xl text-center mb-2">Desain Logo</h6>
            <p class="font-bitter text-blue-600 text-center text-3xl font-medium mb-10">Rp 350.000</p>
            <div class="mb-12">
                <div class="flex items-center mb-3">
                    <div class="mr-3">
                        <svg class="text-blue-600 w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>Waktu pengerjaan 3 hari</div>
                </div>
                <div class="flex items-center mb-3">
                    <div class="mr-3">
                        <svg class="text-blue-600 w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>Gratis revisi tanpa batas</div>
                </div>
                <div class="flex items-center">
                    <div class="mr-3">
                        <svg class="text-blue-600 w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>Gratis data master</div>
                </div>
            </div>
            <a 
                @if($name)
                href="https://wa.me/{{ $number }}?text=Halo,%20nama%20saya%20{{ $name }}.%20Saya%20ingin%20memesan%20Desain%20Logo."
                @else
                href="https://wa.me/{{ $number }}?text=Halo,%20saya%20ingin%20memesan%20Desain%20Logo."
                @endif
            >
                <button wire:click="{{ $customerName = '' }}" class="w-full text-sm ring-0 border border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 font-semibold rounded-md hover:text-white px-4 py-2 transition-all duration-200 ease-in-out">
                    KONFIRMASI PEMBAYARAN
                </button>
            </a>
        </div>

        <div class="bg-white p-8 h-full w-72 md:w-96 lg:w-72 rounded-xl border border-gray-300 hover:shadow-2xl transition-all duration-200 ease-in-out mb-5 lg:mb-0">
            <h6 class="font-semibold text-lg md:text-xl text-center mb-2">Desain IG Feeds</h6>
            <p class="font-bitter text-blue-600 text-center text-3xl font-medium mb-10">Rp 250.000</p>
            <div class="mb-12">
                <div class="flex items-center mb-3">
                    <div class="mr-3">
                        <svg class="text-blue-600 w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>Waktu pengerjaan 3 hari</div>
                </div>
                <div class="flex items-center mb-3">
                    <div class="mr-3">
                        <svg class="text-blue-600 w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>Gratis revisi 1 - 2 kali</div>
                </div>
                <div class="flex items-center">
                    <div class="mr-3">
                        <svg class="text-blue-600 w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>Gratis data master</div>
                </div>
            </div>
            <a 
                @if($name)
                href="https://wa.me/{{ $number }}?text=Halo,%20nama%20saya%20{{ $name }}.%20Saya%20ingin%20memesan%20Desain%20Instagram%20Feeds."
                @else
                href="https://wa.me/{{ $number }}?text=Halo,%20saya%20ingin%20memesan%20Desain%20Instagram%20Feeds."
                @endif
            >
                <button wire:click="{{ $customerName = '' }}" class="w-full text-sm ring-0 border border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 font-semibold rounded-md hover:text-white px-4 py-2 transition-all duration-200 ease-in-out">
                    KONFIRMASI PEMBAYARAN
                </button>
            </a>
        </div>

    </div>
    <div class="text-base md:text-lg leading-relaxed text-center md:px-10 lg:px-40">Setiap pesanan desain akan dikenakan biaya DP sebesar 10% dari total harga. DP tidak bisa diambil kembali oleh klien.</div>
</div>