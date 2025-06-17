@extends('header-footer')

@section('content')
    <!-- FAQ Section -->
    <section class="py-35 bg-gray-50">
        <div class="w-full px-15 mx-auto">
            <div class="text-left mb-10">
                <span class="text-indigo-600 font-semibold inline-block px-4 py-1 rounded-full bg-indigo-100 text-sm">
                    Pertanyaan yang Sering Diajukan
                </span>
                <h2 class="text-3xl font-bold mt-3 text-gray-800">Temukan jawaban seputar layanan kami</h2>
            </div>

            <div class="space-y-6 max-w-4xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="w-full text-left px-6 py-4 font-semibold text-gray-800 focus:outline-none flex justify-between items-center toggle-faq">
                        Apa saja layanan yang ditawarkan oleh DFA Tour & Travel?
                        <svg class="faq-icon w-5 h-5 transition-transform duration-300 transform rotate-0" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Kami menawarkan berbagai layanan seperti wisata nusantara, study tour, family gathering, ziarah
                            wali, serta sewa kendaraan eksklusif. Setiap layanan dirancang untuk memberikan pengalaman
                            terbaik bagi pelanggan.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="w-full text-left px-6 py-4 font-semibold text-gray-800 focus:outline-none flex justify-between items-center toggle-faq">
                        Bagaimana cara memesan paket tour?
                        <svg class="faq-icon w-5 h-5 transition-transform duration-300 transform rotate-0" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Anda bisa menghubungi kami melalui halaman kontak atau langsung mengunjungi kantor kami. Tim
                            kami akan membantu proses pemesanan mulai dari pemilihan paket hingga konfirmasi pembayaran.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="w-full text-left px-6 py-4 font-semibold text-gray-800 focus:outline-none flex justify-between items-center toggle-faq">
                        Apakah bisa melakukan perubahan jadwal perjalanan?
                        <svg class="faq-icon w-5 h-5 transition-transform duration-300 transform rotate-0" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Ya, perubahan jadwal dapat dilakukan dengan syarat dan ketentuan tertentu. Harap menghubungi tim
                            kami minimal 7 hari sebelum tanggal keberangkatan untuk memproses perubahan tersebut.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="w-full text-left px-6 py-4 font-semibold text-gray-800 focus:outline-none flex justify-between items-center toggle-faq">
                        Apakah ada garansi uang kembali?
                        <svg class="faq-icon w-5 h-5 transition-transform duration-300 transform rotate-0" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Kami menyediakan kebijakan refund sesuai dengan ketentuan yang berlaku. Detail refund akan
                            diinformasikan saat proses pemesanan atau sesuai dengan kebijakan pembatalan masing-masing
                            paket.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="w-full text-left px-6 py-4 font-semibold text-gray-800 focus:outline-none flex justify-between items-center toggle-faq">
                        Apakah semua biaya sudah termasuk dalam paket?
                        <svg class="faq-icon w-5 h-5 transition-transform duration-300 transform rotate-0" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Setiap detail biaya akan dijelaskan secara transparan pada deskripsi paket. Umumnya, biaya tiket
                            masuk objek wisata, akomodasi, transportasi, dan makan sudah termasuk, kecuali disebutkan lain.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script untuk Toggle FAQ -->
    <script>
        document.querySelectorAll('.toggle-faq').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('.faq-icon');

                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });
    </script>
@endsection
