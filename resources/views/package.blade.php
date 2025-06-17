@extends('header-footer')

@section('content')
    <!-- PAKET UNGGULAN -->
    <section class="pb-20 pt-35 bg-white px-6">
        <div class="w-full px-15 mx-auto">
            <div class="text-left mb-10">
                <span class="text-indigo-600 font-semibold inline-block px-4 py-1 rounded-full bg-indigo-100 text-sm">
                    Layanan DFA Tour & Travel Lainnya
                </span>
                <h2 class="text-3xl font-bold mt-3 text-gray-800">Paket Yang Tersedia</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Paket Wisata -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/paket_bali.jpg') }}" alt="Paket Wisata" class="w-full h-100 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Paket Wisata</h3>
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

                <!-- Ziarah Wali -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/paket_ziarah.jpg') }}" alt="Ziarah Wali" class="w-full h-100 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Ziarah Wali</h3>
                        <p class="text-gray-600 text-sm mb-4 text-justify">
                            Paket perjalanan religi mengunjungi makam para Wali dengan fasilitas lengkap dan
                            pemandu profesional.
                        </p>

                    </div>
                </div>

                <!-- Antar Jemput Bandara -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/paket_bandara.jpg') }}" alt="Antar Jemput Bandara"
                        class="w-full h-100 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Antar Jemput Bandara</h3>
                        <p class="text-gray-600 text-sm mb-4 text-justify">
                            Layanan antar jemput bandara yang nyaman dan tepat waktu untuk mendukung perjalanan Anda secara
                            efisien dan aman.
                        </p>

                    </div>
                </div>

                <!-- Sewa Bus, Elf Long & Hiace -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/paket_kendaraanBesar.jpg') }}" alt="Sewa Bus, Elf Long & Hiace"
                        class="w-full h-100 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Sewa Kendaraan Kapasitas Besar</h3>
                        <p class="text-gray-600 text-sm mb-4 text-justify">
                            Penyewaan bus, Elf long, dan Hiace dengan kapasitas besar untuk rombongan wisata, study tour,
                            atau keperluan perusahaan.
                        </p>

                    </div>
                </div>

                <!-- Sewa Mobil + Driver -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/paket_mobil.jpg') }}" alt="Sewa Mobil + Driver"
                        class="w-full h-100 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Sewa Mobil + Driver</h3>
                        <p class="text-gray-600 text-sm mb-4 text-justify">
                            Layanan sewa mobil lengkap dengan driver berpengalaman untuk perjalanan pribadi, dinas, atau
                            wisata harian.
                        </p>
                    </div>
                </div>
                    <!-- Sewa Mobil VVIP -->
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <img src="{{ asset('images/paket_mobilVvip.jpg') }}" alt="Sewa Mobil VVIP"
                            class="w-full h-100 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Sewa Mobil VVIP</h3>
                            <p class="text-gray-600 text-sm mb-4 text-justify">
                                Nikmati kenyamanan dan kemewahan dengan layanan sewa mobil VVIP untuk perjalanan eksklusif
                                dan berkelas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- END PAKET -->
@endsection
