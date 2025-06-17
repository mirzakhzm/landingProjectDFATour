@extends('header-footer')

@section('content')
    <section class="py-35 bg-white px-6">
        <div class="w-full px-15 mx-auto">
            <div class="text-left mb-10">
                <span class="text-indigo-600 font-semibold inline-block px-4 py-1 rounded-full bg-indigo-100 text-sm">
                    Hubungi Kami
                </span>
                <h2 class="text-3xl font-bold mt-3 text-gray-800">Kontak DFA Tour & Travel</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10 px-4 md:px-8 lg:px-12">
                <!-- Form Kontak -->
                <div class="flex flex-col justify-center">
                    <form action="#" method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
                            <input type="text" id="name" name="name" required
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-full shadow-md transition duration-300 transform hover:scale-105">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Informasi Kontak -->
                <div class="flex flex-col justify-center text-gray-600 md:text-sm lg:text-base space-y-4 md:space-y-6">
                    <h3 class="text-2xl md:text-3xl font-semibold text-gray-800">Informasi Kontak</h3>
                    <p class="leading-relaxed text-justify">
                        Kami siap membantu Anda dengan pertanyaan atau kebutuhan perjalanan Anda. Hubungi kami melalui salah
                        satu saluran berikut:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-indigo-600 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+62 8810 2568 3561</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-indigo-600 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>dfatour.id@gmail.com</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-indigo-600 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Jl. Rahman Hakim 81-G RT 12 RW 05, Cemandi, Sidoarjo - 61253</span>
                        </div>
                    </div>
                    <p class="leading-relaxed text-justify">
                        Kami beroperasi Senin - Jumat, 08.00 - 16.00 WIB. Silakan hubungi kami untuk informasi lebih lanjut
                        atau kunjungi kantor kami.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
