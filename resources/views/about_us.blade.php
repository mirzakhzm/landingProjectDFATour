    @extends('header-footer')

    @section('content')
        <section class="py-35 bg-white px-6">
            <div class="w-full px-15 mx-auto">
                <div class="text-left mb-5">
                    <span
                        class="text-indigo-600 font-semibold inline-block px-4 py-1 rounded-full bg-indigo-100 text-sm">Tentang
                        Kami</span>
                    <h2 class="text-3xl font-bold mt-3 text-gray-800">Kenali Kami Lebih Dekat</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10 px-4 md:px-8 lg:px-12">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/tim_dfa.png') }}" alt="Tentang Kami"
                            class="rounded-xl shadow-2xl w-full max-w-[500px] sm:max-w-[500px] md:max-w-[450px] lg:max-w-[600px] object-cover transition-transform hover:scale-105 duration-300">
                    </div>
                    <div class="flex flex-col justify-center text-gray-600 md:text-sm lg:text-base space-y-4 md:space-y-6">
                        <h3 class="text-2xl md:text-3xl font-semibold text-gray-800">DFA Tour & Travel</h3>
                        <p class="leading-relaxed text-justify">
                            Kami adalah penyedia layanan tour & travel yang berkomitmen untuk memberikan pengalaman
                            perjalanan terbaik bagi Anda. Dengan pengalaman lebih dari 3 tahun, kami telah melayani ribuan
                            pelanggan dengan paket wisata yang menarik dan layanan yang profesional.
                        </p>
                        <p class="leading-relaxed text-justify">
                            Di DFA Tour & Travel, kami percaya bahwa liburan bukan hanya sekadar rekreasi, tetapi juga momen
                            tak terlupakan bersama keluarga, teman, atau bahkan untuk perjalanan pribadi. Oleh karena itu,
                            kami selalu berusaha memastikan setiap detail perjalanan Anda direncanakan dengan matang dan
                            dilaksanakan secara maksimal.
                        </p>
                        <p class="leading-relaxed text-justify">
                            Kami menyediakan berbagai paket perjalanan mulai dari wisata nusantara, study tour, family
                            gathering,
                            ziarah wali, hingga layanan sewa kendaraan eksklusif. Semua layanan kami didukung oleh tim
                            profesional dan ramah, yang siap membantu Anda mulai dari perencanaan hingga perjalanan selesai.
                        </p>
                        <p class="leading-relaxed text-justify">
                            Kepuasan dan kenyamanan pelanggan adalah prioritas utama kami. Bersama DFA Tour & Travel,
                            nikmati
                            perjalanan tanpa khawatir dan ciptakan kenangan indah yang sulit dilupakan.
                        </p>
                    </div>
                </div>

            </div>
        </section>
    @endsection
