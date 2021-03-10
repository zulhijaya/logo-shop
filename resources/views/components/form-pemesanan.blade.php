<div class="px-5 sm:px-10 lg:px-16 xl:px-64 py-10 mb-32">
    <h6 class="font-bitter font-bold text-center text-3xl md:text-4xl mb-5">Form Pemesanan</h6>
    <div class="text-center text-sm md:text-lg leading-relaxed mb-12 md:px-40">Silahkan isi form dibawah ini dengan benar untuk memesan logo.</div>
    <form wire:submit.prevent="sendFormPemesanan" class="text-sm md:text-base">
        @csrf
        <div class="mb-16">
            <h6 class="font-semibold text-base md:text-lg mb-2">Identitas Anda</h6>
            <p class="text-sm md:text-base leading-6">Isilah form berikut agar kami bisa mengenal Anda dan bisa menghubungi Anda</p>
            <hr class="border-t my-4 md:my-5">
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">1</div>
                <div class="w-full">
                    <label class="block mb-2">Nama pemesan</label>
                    <input type="text" wire:model.defer="form.name" class="border @error('form.name') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="masukkan nama lengkap Anda">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">2</div>
                <div class="w-full">
                    <label class="block mb-2">Nomor handphone</label>
                    <input type="number" wire:model.defer="form.phone_number" class="border @error('form.phone_number') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="masukkan nomor handphone Anda">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">3</div>
                <div class="w-full">
                    <label class="block mb-2">Email</label>
                    <input type="text" wire:model.defer="form.email" class="border @error('form.email') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="contoh : logoshop@gmail.com">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">4</div>
                <div class="w-full">
                    <label class="block mb-2">Alamat lengkap</label>
                    <input type="text" wire:model.defer="form.address" class="border @error('form.address') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="masukkan alamat lengkap Anda">
                </div>
            </div>
        </div>

        <div class="leading-6">
            <h6 class="font-semibold text-base md:text-lg mb-2">Desain Logo Anda</h6>
            <p class="text-sm md:text-base leading-6">Isilah form berikut untuk membantu kami membuat logo yang terbaik buat Anda. Semua data wajib Anda isi.</p>
            <hr class="border-t my-4 md:my-5">
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">1</div>
                <div class="w-full">
                    <label class="block mb-2">Apa nama logo anda? Pastikan nama untuk logo anda belum dimiliki orang lain</label>
                    <input type="text" wire:model.defer="form.question_1" class="border @error('form.question_1') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="contoh : Logo Shop">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">2</div>
                <div class="w-full">
                    <label class="block mb-2">Tuliskan tagline untuk logo Anda</label>
                    <input type="text" wire:model.defer="form.question_2" class="border @error('form.question_2') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="tuliskan tagline logo Anda">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">3</div>
                <div class="w-full">
                    <label class="block mb-2">Tuliskan tata cara penulisan besar dan kecilnya huruf pada logo Anda</label>
                    <textarea wire:model.defer="form.question_3" class="border @error('form.question_3') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="pemakaian huruf besar atau kecil dalam menuliskan logo Anda"></textarea>
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">4</div>
                <div class="w-full">
                    <label class="block mb-2">Bisnis Anda bergerak dibidang apa?</label>
                    <textarea wire:model.defer="form.question_4" class="border @error('form.question_4') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="contoh : Kesehatan, UKM, Salon Kecantikan, dll"></textarea>
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">5</div>
                <div class="w-full">
                    <label class="block mb-2">Jenis produk atau layanan apa yang Anda sediakan?</label>
                    <textarea wire:model.defer="form.question_5" class="border @error('form.question_5') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="aktivitas apa yang dikerjakan oleh bisnis Anda"></textarea>
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">6</div>
                <div class="w-full">
                    <label class="block mb-2">Dimana sajakah logo ini akan Anda terapkan?</label>
                    <textarea wire:model.defer="form.question_6" class="border @error('form.question_6') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="contoh : di depan kantor, di depan toko, dicetak di baju, dll"></textarea>
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">7</div>
                <div class="w-full">
                    <label class="block mb-2">Siapa target market Anda?</label>
                    <textarea wire:model.defer="form.question_7" class="border @error('form.question_7') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="contoh : anak-anak, remaja, dewasa, karyawan, dll"></textarea>
                </div>
            </div>
            <div class="flex items-start mb-10">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">8</div>
                <div class="w-full">
                    <label class="block mb-2">Kesan apa untuk logo Anda?</label>
                    <input type="text" wire:model.defer="form.question_8" class="border @error('form.question_8') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="contoh : ceria, mewah, formal, smart, dll">
                </div>
            </div>
            <div class="flex items-start mb-10">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">9</div>
                <div class="w-full">
                    <label class="block mb-5">Manakah logo dibawah ini yang Anda sukai?</label>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-y-10">
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/dompet.png') }}" class="w-24 h-24 md:w-32 md:h-32 mb-5">
                            <p class="mb-5">Logo diatas teks</p>
                            <input type="radio" wire:model.defer="form.question_9" name="logo" class="@error('form.question_9') border border-red-600 @enderror rounded h-5 w-5" value="Logo diatas teks">
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/prizer.png') }}" class="w-24 h-24 md:w-32 md:h-32 mb-5">
                            <p class="mb-5">Logo sejajar teks</p>
                            <input type="radio" wire:model.defer="form.question_9" name="logo" class="@error('form.question_9') border border-red-600 @enderror rounded h-5 w-5" value="Logo sejajar teks">
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/longue.png') }}" class="w-24 h-24 md:w-32 md:h-32 mb-5">
                            <p class="mb-5 text-center">Logo dan teks menyatu</p>
                            <input type="radio" wire:model.defer="form.question_9" name="logo" class="@error('form.question_9') border border-red-600 @enderror rounded h-5 w-5" value="Logo dan teks menyatu">
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/boba-gemes.png') }}" class="w-24 h-24 md:w-32 md:h-32 mb-5">
                            <p class="mb-5">Emblem</p>
                            <input type="radio" wire:model.defer="form.question_9" name="logo" class="@error('form.question_9') border border-red-600 @enderror rounded h-5 w-5" value="Emblem">
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/fayot.png') }}" class="w-24 h-24 md:w-32 md:h-32 mb-5">
                            <p class="mb-5">Teks saja</p>
                            <input type="radio" wire:model.defer="form.question_9" name="logo" class="@error('form.question_9') border border-red-600 @enderror rounded h-5 w-5" value="Teks saja">
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/raja-kurma.png') }}" class="w-24 h-24 md:w-32 md:h-32 mb-5">
                            <p class="mb-5">Teks custom</p>
                            <input type="radio" wire:model.defer="form.question_9" name="logo" class="@error('form.question_9') border border-red-600 @enderror rounded h-5 w-5" value="Teks custom">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-start mb-10">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">10</div>
                <div class="w-full">
                    <label class="block mb-5">Manakah jenis font yang Anda sukai?</label>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/script.jpg') }}" class="w-24 h-24 md:w-48 md:h-48">
                            <input type="radio" wire:model.defer="form.question_10" name="font" class="@error('form.question_10') border border-red-600 @enderror rounded h-5 w-5" value="Script">
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/montserrat.jpg') }}" class="w-24 h-24 md:w-48 md:h-48">
                            <input type="radio" wire:model.defer="form.question_10" name="font" class="@error('form.question_10') border border-red-600 @enderror rounded h-5 w-5" value="Montserrat">
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/block.jpg') }}" class="w-24 h-24 md:w-48 md:h-48">
                            <input type="radio" wire:model.defer="form.question_10" name="font" class="@error('form.question_10') border border-red-600 @enderror rounded h-5 w-5" value="Block">
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/decorative.jpg') }}" class="w-24 h-24 md:w-48 md:h-48">
                            <input type="radio" wire:model.defer="form.question_10" name="font" class="@error('form.question_10') border border-red-600 @enderror rounded h-5 w-5" value="Decorative">
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/lobster.jpg') }}" class="w-24 h-24 md:w-48 md:h-48">
                            <input type="radio" wire:model.defer="form.question_10" name="font" class="@error('form.question_10') border border-red-600 @enderror rounded h-5 w-5" value="Lobster">
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/serif.jpeg') }}" class="w-24 h-24 md:w-48 md:h-48">
                            <input type="radio" wire:model.defer="form.question_10" name="font" class="@error('form.question_10') border border-red-600 @enderror rounded h-5 w-5" value="Serif">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">11</div>
                <div class="w-full">
                    <label class="block mb-2">Apakah ada element atau gambar khusus yang ingin Anda tampilkan di dalam logo Anda? Tuliskan element atau gambar jika ada</label>
                    <input type="text" wire:model.defer="form.question_11" class="border @error('form.question_11') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="jelaskan element atau gambar jika ada">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">12</div>
                <div class="w-full">
                    <label class="block mb-2">Apakah ada element atau gambar yang tidak boleh ada di dalam logo Anda? Tuliskan element atau gambar jika ada</label>
                    <input type="text" wire:model.defer="form.question_12" class="border @error('form.question_12') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="jelaskan element atau gambar jika ada">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">13</div>
                <div class="w-full">
                    <label class="block mb-2">Warna apa yang Anda inginkan?</label>
                    <input type="text" wire:model.defer="form.question_13" class="border @error('form.question_13') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="contoh : merah, biru, kuning, dll">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">14</div>
                <div class="w-full">
                    <label class="block mb-2">Warna apa yang tidak Anda sukai?</label>
                    <input type="text" wire:model.defer="form.question_14" class="border @error('form.question_14') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="contoh : merah, biru, kuning, dll">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">15</div>
                <div class="w-full">
                    <label class="block mb-2">Berapa banyak warna yang Anda inginkan ada di dalam logo?</label>
                    <input type="text" wire:model.defer="form.question_15" class="border @error('form.question_15') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="jumlah warna pada logo Anda">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">16</div>
                <div class="w-full">
                    <label class="block mb-2">Sebutkan model atau logo yang Anda sukai</label>
                    <input type="text" wire:model.defer="form.question_16" class="border @error('form.question_16') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="contoh : ceria, mewah, formal, smart, dll">
                </div>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center text-xs md:text-sm mt-1 md:mt-px justify-center text-white mr-3 md:mr-4 bg-blue-600 text-center rounded-full w-4 h-4 md:w-5 md:h-5">17</div>
                <div class="w-full">
                    <label class="block mb-2">Apakah ada informasi tambahan yang dapat membantu kami? Tuliskan jika ada</label>
                    <textarea type="text" rows="6" wire:model.defer="form.question_17" class="border @error('form.question_17') border-red-600 @else border-gray-300 @enderror leading-6 focus:border-blue-600 w-full rounded focus:placeholder-gray-400 text-sm md:text-base" placeholder="Tuliskan informasi tambahan Anda yang bisa membantu kami"></textarea>
                </div>
            </div>
        </div>

        
        <div class="text-sm md:text-base text-justify leading-relaxed mt-10 mb-10">
            Jika Anda sudah mengisi semua form dengan benar, silahkan klik tombol dibawah ini untuk memesan Logo Anda. Kemudian pilih salah satu Layanan Kami sesuai kebutuhan Anda untuk mengkonfirmasi pembayaran.
        </div>

        <div class="flex justify-end">
            <button type="submit" class="text-sm ring-0 border border-blue-600 text-blue-600 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 font-semibold rounded-md hover:text-white px-4 py-2 transition-all duration-200 ease-in-out">
                PESAN SEKARANG
            </button>
        </div>

        <div wire:loading.flex class="fixed z-50 inset-0 bg-backdrop flex items-center justify-center">
            <div class="bg-white w-4/5 sm:w-3/5 md:w-1/2 lg:w-2/5 xl:w-1/3 p-5 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-12 h-12 lg:w-20 lg:h-20" style="margin: auto; background: none; display: block; shape-rendering: auto;" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <circle cx="84" cy="50" r="10" fill="#2563eb">
                        <animate attributeName="r" repeatCount="indefinite" dur="0.2777777777777778s" calcMode="spline" keyTimes="0;1" values="10;0" keySplines="0 0.5 0.5 1" begin="0s"></animate>
                        <animate attributeName="fill" repeatCount="indefinite" dur="1.1111111111111112s" calcMode="discrete" keyTimes="0;0.25;0.5;0.75;1" values="#2563eb;#000000;#059669;#dc2626;#2563eb" begin="0s"></animate>
                    </circle>
                    <circle cx="16" cy="50" r="10" fill="#2563eb">
                        <animate attributeName="r" repeatCount="indefinite" dur="1.1111111111111112s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;10;10;10" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="0s"></animate>
                        <animate attributeName="cx" repeatCount="indefinite" dur="1.1111111111111112s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="0s"></animate>
                    </circle>
                    <circle cx="50" cy="50" r="10" fill="#dc2626">
                        <animate attributeName="r" repeatCount="indefinite" dur="1.1111111111111112s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;10;10;10" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.2777777777777778s"></animate>
                        <animate attributeName="cx" repeatCount="indefinite" dur="1.1111111111111112s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.2777777777777778s"></animate>
                    </circle>
                    <circle cx="84" cy="50" r="10" fill="#059669">
                        <animate attributeName="r" repeatCount="indefinite" dur="1.1111111111111112s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;10;10;10" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.5555555555555556s"></animate>
                        <animate attributeName="cx" repeatCount="indefinite" dur="1.1111111111111112s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.5555555555555556s"></animate>
                    </circle>
                    <circle cx="16" cy="50" r="10" fill="#000000">
                        <animate attributeName="r" repeatCount="indefinite" dur="1.1111111111111112s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;10;10;10" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.8333333333333333s"></animate>
                        <animate attributeName="cx" repeatCount="indefinite" dur="1.1111111111111112s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.8333333333333333s"></animate>
                    </circle>
                </svg>
                <div class="text-center text-base md:text-lg leading-relaxed">Sedang mengirim, mohon tunggu...</div>
            </div>
        </div>

        <div class="success hidden fixed z-50 inset-0 bg-backdrop flex items-center justify-center">
            <div class="bg-white w-4/5 sm:w-2/3 lg:w-1/2 xl:w-1/3 p-5 rounded-xl">
                <div class="flex items-center justify-center mb-5">
                    <svg class="text-blue-600 w-12 h-12 md:w-16 md:h-16 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <div class="text-center text-base md:text-lg font-semibold">Berhasil terkirim!</div>
                </div>
                <div class="text-center text-base md:text-lg leading-relaxed">
                    Silahkan pilih salah satu Layanan Kami sesuai kebutuhan Anda untuk konfirmasi pembayaran
                </div>
            </div>
        </div>

        <div class="failed hidden fixed z-50 inset-0 bg-backdrop flex items-center justify-center">
            <div class="bg-white w-4/5 sm:w-2/3 lg:w-1/2 xl:w-1/3 p-5 rounded-xl">
                <div class="flex items-center justify-center mb-5">
                    <svg class="text-red-600 w-12 h-12 md:w-16 md:h-16 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                      </svg>
                    <div class="text-center text-base md:text-lg font-semibold">Terjadi kesalahan!</div>
                </div>
                <div class="text-center text-base md:text-lg leading-relaxed">
                    Pastikan Anda telah mengisi semua data dengan benar.
                </div>
            </div>
        </div>
    </form>
</div>