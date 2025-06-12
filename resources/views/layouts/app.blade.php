<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
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
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-[#5A827E]">
                        Kara<span class="text-[#8DB0AB]">Code</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#5A827E] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-[#5A827E] font-semibold' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-[#5A827E] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'text-[#5A827E] font-semibold' : '' }}">
                        About
                    </a>
                    <a href="{{ route('experience') }}" class="text-gray-700 hover:text-[#5A827E] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('experience') ? 'text-[#5A827E] font-semibold' : '' }}">
                        Experience
                    </a>
                    <a href="{{ route('education') }}" class="text-gray-700 hover:text-[#5A827E] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('education') ? 'text-[#5A827E] font-semibold' : '' }}">
                        Education
                    </a>
                    <a href="{{ route('projects') }}" class="text-gray-700 hover:text-[#5A827E] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('projects') ? 'text-[#5A827E] font-semibold' : '' }}">
                        Projects
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-[#5A827E] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-[#5A827E] font-semibold' : '' }}">
                        Contact
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button type="button" onclick="toggleMobileMenu()" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-[#5A827E] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#5A827E]" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="hidden md:hidden bg-white" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#5A827E] block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-[#5A827E] font-semibold' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-[#5A827E] block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'text-[#5A827E] font-semibold' : '' }}">
                    About
                </a>
                <a href="{{ route('experience') }}" class="text-gray-700 hover:text-[#5A827E] block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('experience') ? 'text-[#5A827E] font-semibold' : '' }}">
                    Experience
                </a>
                <a href="{{ route('education') }}" class="text-gray-700 hover:text-[#5A827E] block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('education') ? 'text-[#5A827E] font-semibold' : '' }}">
                    Education
                </a>
                <a href="{{ route('projects') }}" class="text-gray-700 hover:text-[#5A827E] block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('projects') ? 'text-[#5A827E] font-semibold' : '' }}">
                    Projects
                </a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-[#5A827E] block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'text-[#5A827E] font-semibold' : '' }}">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Add padding to account for fixed navbar -->
    <div class="pt-16">
        @yield('content')
    </div>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
            mirror: true
        });

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
