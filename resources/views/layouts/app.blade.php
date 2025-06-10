<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kara - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        .animate-typing {
            overflow: hidden;
            white-space: nowrap;
            border-right: 2px solid;
            animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
        }
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: white }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="{{ route('home') }}" class="flex items-center py-4">
                            <span class="font-semibold text-gray-800 text-lg">KARA CODE</span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('home') }}" class="py-4 px-2 {{ request()->routeIs('home') ? 'text-blue-500 border-b-4 border-blue-500' : 'text-gray-500 hover:text-blue-500 hover:border-b-4 hover:border-blue-500' }} font-semibold transition duration-300">
                            Beranda
                        </a>
                        <a href="{{ route('about') }}" class="py-4 px-2 {{ request()->routeIs('about') ? 'text-blue-500 border-b-4 border-blue-500' : 'text-gray-500 hover:text-blue-500 hover:border-b-4 hover:border-blue-500' }} font-semibold transition duration-300">
                            Tentang
                        </a>
                        <a href="{{ route('education') }}" class="py-4 px-2 {{ request()->routeIs('education') ? 'text-blue-500 border-b-4 border-blue-500' : 'text-gray-500 hover:text-blue-500 hover:border-b-4 hover:border-blue-500' }} font-semibold transition duration-300">
                            Pendidikan
                        </a>
                        <a href="{{ route('experience') }}" class="py-4 px-2 {{ request()->routeIs('experience') ? 'text-blue-500 border-b-4 border-blue-500' : 'text-gray-500 hover:text-blue-500 hover:border-b-4 hover:border-blue-500' }} font-semibold transition duration-300">
                            Pengalaman
                        </a>
                        <a href="{{ route('projects') }}" class="py-4 px-2 {{ request()->routeIs('projects') ? 'text-blue-500 border-b-4 border-blue-500' : 'text-gray-500 hover:text-blue-500 hover:border-b-4 hover:border-blue-500' }} font-semibold transition duration-300">
                            Proyek
                        </a>
                        <a href="{{ route('contact') }}" class="py-4 px-2 {{ request()->routeIs('contact') ? 'text-blue-500 border-b-4 border-blue-500' : 'text-gray-500 hover:text-blue-500 hover:border-b-4 hover:border-blue-500' }} font-semibold transition duration-300">
                            Kontak
                        </a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3">
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="py-2 px-4 text-gray-500 hover:text-blue-500 transition duration-300">Dashboard</a>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="py-2 px-4 text-gray-500 hover:text-red-500 transition duration-300">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="py-2 px-4 text-blue-500 hover:text-blue-600 transition duration-300">Login</a>
                    @endauth
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button" aria-label="Menu">
                        <svg class="w-6 h-6 text-gray-500 hover:text-blue-500"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="hidden mobile-menu md:hidden">
            <ul class="pt-4 pb-3">
                <li><a href="{{ route('home') }}" class="block pl-4 py-2 text-sm {{ request()->routeIs('home') ? 'text-blue-500 bg-blue-50' : 'text-gray-500 hover:bg-blue-50' }}">Beranda</a></li>
                <li><a href="{{ route('about') }}" class="block pl-4 py-2 text-sm {{ request()->routeIs('about') ? 'text-blue-500 bg-blue-50' : 'text-gray-500 hover:bg-blue-50' }}">Tentang</a></li>
                <li><a href="{{ route('education') }}" class="block pl-4 py-2 text-sm {{ request()->routeIs('education') ? 'text-blue-500 bg-blue-50' : 'text-gray-500 hover:bg-blue-50' }}">Pendidikan</a></li>
                <li><a href="{{ route('experience') }}" class="block pl-4 py-2 text-sm {{ request()->routeIs('experience') ? 'text-blue-500 bg-blue-50' : 'text-gray-500 hover:bg-blue-50' }}">Pengalaman</a></li>
                <li><a href="{{ route('projects') }}" class="block pl-4 py-2 text-sm {{ request()->routeIs('projects') ? 'text-blue-500 bg-blue-50' : 'text-gray-500 hover:bg-blue-50' }}">Proyek</a></li>
                <li><a href="{{ route('contact') }}" class="block pl-4 py-2 text-sm {{ request()->routeIs('contact') ? 'text-blue-500 bg-blue-50' : 'text-gray-500 hover:bg-blue-50' }}">Kontak</a></li>
                @auth
                    <li><a href="{{ route('admin.dashboard') }}" class="block pl-4 py-2 text-sm text-gray-500 hover:bg-blue-50">Dashboard</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="block">
                            @csrf
                            <button type="submit" class="w-full text-left pl-4 py-2 text-sm text-gray-500 hover:bg-red-50">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="block pl-4 py-2 text-sm text-blue-500 hover:bg-blue-50">Login</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-inner mt-16">
        <div class="max-w-6xl mx-auto px-4 py-8">
            <div class="flex flex-col items-center">
                <div class="flex space-x-6 mb-4">
                    <a href="https://github.com/yourusername" target="_blank" rel="noopener noreferrer" class="text-gray-500 hover:text-gray-800 transition duration-300">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="https://linkedin.com/in/yourusername" target="_blank" rel="noopener noreferrer" class="text-gray-500 hover:text-gray-800 transition duration-300">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="https://instagram.com/yourusername" target="_blank" rel="noopener noreferrer" class="text-gray-500 hover:text-gray-800 transition duration-300">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
                <p class="text-gray-600 text-sm">
                    &copy; {{ date('Y') }} Reski Kara. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: false,
            mirror: true
        });

        // Mobile menu
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
