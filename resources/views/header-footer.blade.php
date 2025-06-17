<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DFA Tour & Travel - Nikmati Liburan Impian Anda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-white text-gray-800">

    <!-- HEADER -->
    <header>
        <nav id="navbar" class="bg-white p-3 font-main fixed top-0 left-0 w-full z-50 transition-shadow">
            <div class="container mx-auto px-8">
                <!-- Flex Container untuk seluruh baris -->
                <div class="flex justify-between items-center h-16">
                    <!-- Logo - Selalu di kiri -->
                    <a href="{{ url('/') }}" class="flex items-center space-x-2 flex-shrink-0">
                        <img src="{{ asset('images/logo_dfa.png') }}" alt="Logo DFA Tour & Travel"
                            class="h-12 transition-transform hover:scale-110">
                        <span class="md:text-md lg:text-xl font-bold text-indigo-700 whitespace-nowrap">DFA Tour &
                            Travel</span>
                    </a>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex justify-center flex-grow md:text-sm lg:text-base">
                        <div class="flex md:space-x-3 lg:space-x-8 py-1">
                            <a href="{{ url('/') }}"
                                class="{{ request()->is('/') ? 'text-indigo-700 font-bold' : 'text-gray-500 hover:text-black transition' }}">Beranda</a>
                            <a href="{{ url('/packages') }}"
                                class="{{ request()->is('packages') ? 'text-indigo-700 font-bold' : 'text-gray-500 hover:text-black transition' }}">Paket
                                Kami</a>
                            <a href="{{ url('/about-us') }}"
                                class="{{ request()->is('about-us') ? 'text-indigo-700 font-bold' : 'text-gray-500 hover:text-black transition' }}">Tentang
                                Kami</a>
                            <a href="{{ url('/contact') }}"
                                class="{{ request()->is('contact') ? 'text-indigo-700 font-bold' : 'text-gray-500 hover:text-black transition' }}">Kontak</a>
                            <a href="{{ url('/faqs') }}"
                                class="{{ request()->is('faqs') ? 'text-indigo-700 font-bold' : 'text-gray-500 hover:text-black transition' }}">Faqs</a>
                        </div>
                    </div>

                    <!-- Mobile Hamburger Button - Di kanan -->
                    <div class="md:hidden flex items-center">
                        <button id="menu-toggle" class="text-gray-500 focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu - Centered -->
                <div id="mobile-menu" class="hidden md:hidden mt-2 space-y-2 pb-5 text-center whitespace-nowrap">
                    <a href="{{ url('/') }}"
                        class="block px-4 py-2 text-gray-500 hover:text-black transition">Beranda</a>
                    <a href="{{ url('/packages') }}"
                        class="block px-4 py-2 text-gray-500 hover:text-black transition">Paket Kami</a>
                    <a href="{{ url('/about-us') }}"
                        class="block px-4 py-2 text-gray-500 hover:text-black transition">Tentang Kami</a>
                    <a href="{{ url('/contact') }}"
                        class="block px-4 py-2 text-gray-500 hover:text-black transition">Kontak</a>
                    <a href="{{ url('/faqs') }}"
                        class="block px-4 py-2 text-gray-500 hover:text-black transition">Faqs</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- END HEADER -->

    @yield('content')

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white py-16 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 lg:gap-15 gap-10">
                <!-- About -->
                <div class="space-y-4">
                    <a href="{{ url('/') }}" class="flex items-center space-x-2">
                        <img src="{{ asset('images/logo_dfa.png') }}" alt="Logo"
                            class="h-10 grayscale hover:grayscale-0 transition">
                        <span class="text-lg font-semibold">DFA Tour & Travel</span>
                    </a>
                    <p class="text-gray-400 text-sm">Jelajahi destinasi impianmu bersama kami. Pengalaman tak
                        terlupakan dimulai di sini.</p>
                </div>

                <!-- Navigasi -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Navigasi</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="/" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="/packages" class="hover:text-white transition">Paket Kami</a></li>
                        <li><a href="/about-us" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="/contact" class="hover:text-white transition">Kontak</a></li>
                        <li><a href="/faqs" class="hover:text-white transition">Faqs</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak Kami</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="/contact" class="hover:text-white transition">Alamat</a></li>
                        <li><a href="/contact" class="hover:text-white transition">Nomor Telepon</a></li>
                        <li><a href="/contact" class="hover:text-white transition">Email</a></li>
                    </ul>
                </div>

                <!-- Sosial Media -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4 text-xl">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i
                                class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-gray-700 my-8">
            <p class="text-center text-gray-500 text-sm">&copy; {{ date('Y') }} DFA Tour & Travel. All rights
                reserved.</p>
        </div>
    </footer>
    <!-- END FOOTER -->

    <script>
        // Toggle mobile menu
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });

        // Navbar shadow on scroll
        window.addEventListener("scroll", function() {
            const navbar = document.getElementById("navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("shadow-md");
            } else {
                navbar.classList.remove("shadow-md");
            }
        });
    </script>

</body>

</html>
