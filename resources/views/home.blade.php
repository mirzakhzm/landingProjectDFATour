@extends('header-footer')

@section('content')
    <!-- HERO SECTION -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 via-white to-indigo-50">
        <div class="container mx-auto px-25 flex flex-col-reverse md:flex-row items-center gap-10">
            <!-- Text & CTA -->
            <div class="w-full md:w-1/2 text-left lg:px-15">
                <h1 class="text-3xl md:text-4xl font-extrabold leading-tight text-gray-900 mb-5">
                    Nikmati Destinasi<br>
                    <span class="text-indigo-600">Impian Anda</span><br>
                    Bersama DFA Tour & Travel
                </h1>
                <p class="text-gray-600 text-sm md:text-base mb-6 max-w-lg text-justify">
                    Dream For Adventure Tour & Travel menyediakan layanan perjalanan wisata terbaik ke berbagai
                    destinasi populer di Indonesia. Mulai dari Bali, Yogyakarta, dan Malang, kami siap membantu Anda
                    merencanakan liburan yang tak terlupakan.
                </p>
                <!-- Center button on mobile only -->
                <div class="flex justify-center md:justify-start">
                    <a href="#"
                        class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-full shadow-md transition duration-300 transform hover:scale-105">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
            <!-- Image -->
            <div class="w-full md:w-1/2 flex justify-center ">
                <img src="{{ asset('images/asset_1.jpg') }}" alt="Tumpak Sewu Waterfall"
                    class="rounded-xl shadow-2xl sm:max-w-xs md:max-w-xs lg:max-w-sm object-cover transition transform hover:scale-105 duration-300">
            </div>
        </div>
    </section>
    <!-- END HERO -->

    <!-- PAKET UNGGULAN -->
    <section class="py-20 bg-white px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <span
                    class="text-indigo-600 font-semibold inline-block px-4 py-1 rounded-full bg-indigo-100 text-sm">Penawaran
                    Terbaik</span>
                <h2 class="text-3xl font-bold mt-3 text-gray-800">Paket Unggulan Kami</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Paket Wisata -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/paket_bali.jpg') }}" alt="Paket Wisata" class="w-full h-100 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Kunjungan Wisata</h3>
                        <p class="text-gray-600 text-sm mb-4 text-justify">Paket wisata menyenangkan ke berbagai destinasi
                            populer
                            dengan layanan lengkap dan jadwal perjalanan yang fleksibel.</p>
                    </div>
                </div>

                <!-- Study Tour -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/paket_yogya.jpg') }}" alt="Study Tour" class="w-full h-100 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Study Tour</h3>
                        <p class="text-gray-600 text-sm mb-4 text-justify">Program edukatif untuk pelajar yang menggabungkan
                            wisata
                            dan pembelajaran di tempat bersejarah dan budaya Indonesia.</p>
                    </div>
                </div>

                <!-- Family Gathering -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/paket_family.jpg') }}" alt="Family Gathering"
                        class="w-full h-100 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Family Gathering</h3>
                        <p class="text-gray-600 text-sm mb-4 text-justify">Paket spesial untuk mempererat kebersamaan
                            keluarga
                            melalui kegiatan seru, outbond, dan suasana alam yang menyegarkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PAKET -->

    <!-- LAYANAN KAMI -->
    <section class="py-20 bg-gray-50 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <span class="text-indigo-600 font-semibold inline-block px-4 py-1 rounded-full bg-indigo-100 text-sm">Apa
                    yang Anda Dapatkan</span>
                <h2 class="text-3xl font-bold mt-3 text-gray-800">Layanan Terbaik dari Kami</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Card -->
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl border border-gray-100 text-center transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-bus text-indigo-600 text-5xl mb-5"></i>
                    <h3 class="text-xl font-semibold mb-2">Transportasi Nyaman</h3>
                    <p class="text-gray-600 text-sm">Armada bersih dan terawat dengan sopir profesional.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl border border-gray-100 text-center transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-hotel text-indigo-600 text-5xl mb-5"></i>
                    <h3 class="text-xl font-semibold mb-2">Akomodasi Hotel</h3>
                    <p class="text-gray-600 text-sm">Penginapan berkualitas dan strategis sesuai paket.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl border border-gray-100 text-center transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-user-tie text-indigo-600 text-5xl mb-5"></i>
                    <h3 class="text-xl font-semibold mb-2">Pemandu Wisata</h3>
                    <p class="text-gray-600 text-sm">Pemandu ramah dan berpengalaman siap membantu Anda.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl border border-gray-100 text-center transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-utensils text-indigo-600 text-5xl mb-5"></i>
                    <h3 class="text-xl font-semibold mb-2">Makanan Ringan</h3>
                    <p class="text-gray-600 text-sm">Nikmati sajian yang kami sediakan selama
                        perjalanan wisata.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl border border-gray-100 text-center transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-calendar-check text-indigo-600 text-5xl mb-5"></i>
                    <h3 class="text-xl font-semibold mb-2">Jadwal Fleksibel</h3>
                    <p class="text-gray-600 text-sm">Penjadwalan perjalanan yang fleksibel sesuai kebutuhan.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl border border-gray-100 text-center transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-headset text-indigo-600 text-5xl mb-5"></i>
                    <h3 class="text-xl font-semibold mb-2">Dukungan 24/7</h3>
                    <p class="text-gray-600 text-sm">Tim kami siap membantu Anda kapan pun selama perjalanan.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END LAYANAN -->

    <!-- TENTANG KAMI -->
    <section class="py-20 bg-white px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <span
                    class="text-indigo-600 font-semibold inline-block px-4 py-1 rounded-full bg-indigo-100 text-sm">Tentang
                    Kami</span>
                <h2 class="text-3xl font-bold mt-3 text-gray-800">Partner Terpercaya Perjalanan Wisata Anda</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/tim_dfa.png') }}" alt="Tentang Kami"
                        class="rounded-xl shadow-lg max-w-md w-full object-cover transition transform hover:scale-105 duration-300">
                </div>
                <div class="flex flex-col justify-center">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">DFA Tour & Travel</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed text-justify">
                        Kami adalah penyedia layanan tour & travel yang berkomitmen untuk memberikan pengalaman
                        perjalanan terbaik bagi Anda. Dengan pengalaman lebih dari 3 tahun, kami telah melayani ribuan
                        pelanggan dengan paket wisata yang menarik dan layanan yang profesional.
                    </p>
                    <p class="text-gray-600 mb-6 leadaing-relaxed text-justify">
                        Di DFA Tour & Travel, kami percaya bahwa liburan bukan hanya sekadar rekreasi, tetapi juga momen
                        tak terlupakan bersama keluarga, teman, atau bahkan untuk perjalanan pribadi. Oleh karena itu,
                        kami selalu berusaha memastikan setiap detail perjalanan Anda direncanakan dengan matang dan
                        dilaksanakan secara maksimal.
                    </p>
                    <div class="flex justify-center md:justify-start">
                        <a href="#"
                            class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-full shadow-md transition duration-300 transform hover:scale-105">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TENTANG KAMI -->
@endsection
