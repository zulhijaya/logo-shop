<div>
    <x-logo-slider></x-logo-slider>

    <x-form-pemesanan></x-form-pemesanan>

    <x-layanan-kami :number="$adminNumber" :name="$customerName"></x-layanan-kami>
    
    <x-whatsapp :number="$adminNumber"></x-whatsapp>

    <script>
        window.addEventListener('failed', function() {
            const failed = document.querySelector('.failed');
            failed.classList.remove('hidden');
            setTimeout(() => {
                failed.classList.add('hidden');
            }, 5000);
        });

        window.addEventListener('success', function() {
            const success = document.querySelector('.success');
            success.classList.remove('hidden');
            setTimeout(() => {
                success.classList.add('hidden');
            }, 10000);
        });
    </script>
</div>
