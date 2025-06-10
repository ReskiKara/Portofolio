@extends('layouts.app')

@section('content')
<!-- About Hero Section -->
<section class="relative min-h-[80vh] bg-gradient-to-br from-[#5A827E] via-[#8DB0AB] to-[#BFCEC9] text-white overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute w-[500px] h-[500px] bg-[#F1F2DC] rounded-full opacity-10 -top-48 -right-24 animate-blob"></div>
        <div class="absolute w-[400px] h-[400px] bg-[#5A827E] rounded-full opacity-10 bottom-0 -left-20 animate-blob animation-delay-2000"></div>
        <div class="absolute w-96 h-96 bg-[#8DB0AB] rounded-full opacity-10 top-1/2 left-1/3 animate-blob animation-delay-4000"></div>
    </div>

    <!-- Main Content -->
    <div class="relative max-w-7xl mx-auto px-4 py-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Content - Profile Image -->
            <div class="relative" data-aos="fade-right">
                <!-- Profile Image Container -->
                <div class="relative mx-auto w-[300px] h-[300px] md:w-[400px] md:h-[400px]">
                    <!-- Decorative Rings -->
                    <div class="absolute inset-0 rounded-full border-2 border-[#F1F2DC]/20 animate-spin-slow"></div>
                    <div class="absolute inset-4 rounded-full border-2 border-[#F1F2DC]/20 animate-spin-slow-reverse"></div>
                    <div class="absolute inset-8 rounded-full border-2 border-[#F1F2DC]/20 animate-spin-slow"></div>
                    
                    <!-- Profile Image -->
                    <div class="absolute inset-12 overflow-hidden rounded-full border-4 border-[#F1F2DC]/30 shadow-2xl">
                        <img src="{{asset('images/profile.jpg')}}" 
                             alt="Profile" 
                             class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 bg-[#F1F2DC] text-[#5A827E] p-4 rounded-2xl shadow-lg transform rotate-6 animate-float">
                        <i class="fas fa-code text-2xl"></i>
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-[#F1F2DC] text-[#5A827E] p-4 rounded-2xl shadow-lg transform -rotate-6 animate-float animation-delay-2000">
                        <i class="fas fa-mobile-alt text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Right Content - Text -->
            <div class="text-center md:text-left space-y-6" data-aos="fade-left">
                <div class="space-y-4">
                    <h4 class="text-[#F1F2DC] text-lg font-medium tracking-wide animate-fade-in-up">
                        Tentang Saya
                    </h4>
                   
                    <div class="h-1 w-20 bg-[#F1F2DC] mx-auto md:mx-0 animate-fade-in-up animation-delay-600"></div>
                </div>

                <p class="text-lg text-[#F1F2DC]/90 max-w-xl animate-fade-in-up animation-delay-900">
                     Saya seorang Web Developer dengan passion dalam menciptakan solusi digital yang inovatif dan user-friendly. 
                    Dengan pengalaman lebih dari 3 tahun, saya fokus pada pengembangan aplikasi web modern menggunakan 
                    teknologi terkini.
                    Dengan latar belakang di bidang Teknik Informatika, saya telah mengembangkan berbagai proyek web 
                    menggunakan teknologi modern seperti Laravel, React, dan Vue.js.
                </p>


                <div class="flex flex-wrap gap-6 justify-center md:justify-start animate-fade-in-up animation-delay-1200">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 rounded-full bg-[#F1F2DC]/10 flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-[#F1F2DC]"></i>
                        </div>
                        <span>Makassar, Indonesia</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 rounded-full bg-[#F1F2DC]/10 flex items-center justify-center">
                            <i class="fas fa-envelope text-[#F1F2DC]"></i>
                        </div>
                        <span>reskykara@gmail.com</span>
                    </div>
                </div>

                <div class="flex gap-4 justify-center md:justify-start animate-fade-in-up animation-delay-1500">
                    <a href="#skills" class="px-6 py-3 bg-[#F1F2DC] text-[#5A827E] rounded-full font-semibold hover:bg-white transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center group">
                        Lihat Skills
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#contact" class="px-6 py-3 border-2 border-[#F1F2DC] text-[#F1F2DC] rounded-full font-semibold hover:bg-[#F1F2DC] hover:text-[#5A827E] transition-all duration-300 transform hover:scale-105">
                        Hubungi Saya
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 overflow-hidden leading-[0]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L0,320Z"></path>
        </svg>
    </div>
</section>

<style>
@keyframes blob {
    0% {
        transform: translate(0px, 0px) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
    100% {
        transform: translate(0px, 0px) scale(1);
    }
}

@keyframes fade-in-up {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0% {
        transform: translateY(0px) rotate(6deg);
    }
    50% {
        transform: translateY(-20px) rotate(6deg);
    }
    100% {
        transform: translateY(0px) rotate(6deg);
    }
}

@keyframes spin-slow {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

@keyframes spin-slow-reverse {
    from {
        transform: rotate(360deg);
    }
    to {
        transform: rotate(0deg);
    }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animate-fade-in-up {
    animation: fade-in-up 1s ease-out forwards;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-spin-slow {
    animation: spin-slow 20s linear infinite;
}

.animate-spin-slow-reverse {
    animation: spin-slow-reverse 15s linear infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

.animation-delay-300 {
    animation-delay: 300ms;
}

.animation-delay-600 {
    animation-delay: 600ms;
}

.animation-delay-900 {
    animation-delay: 900ms;
}

.animation-delay-1200 {
    animation-delay: 1200ms;
}

.animation-delay-1500 {
    animation-delay: 1500ms;
}
</style>

<!-- Main Content -->


<!-- Skills Section -->
<section class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Keahlian Teknis</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Frontend -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="flip-left" data-aos-delay="0">
                <h3 class="text-xl font-semibold mb-4">Frontend Development</h3>
                <ul class="space-y-3">
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        HTML5 & CSS3
                    </li>
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        JavaScript (ES6+)
                    </li>
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        React.js
                    </li>
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        Tailwind CSS
                    </li>
                </ul>
            </div>

            <!-- Backend -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="flip-left" data-aos-delay="200">
                <h3 class="text-xl font-semibold mb-4">Backend Development</h3>
                <ul class="space-y-3">
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        PHP & Laravel
                    </li>
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        MySQL
                    </li>
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        RESTful APIs
                    </li>
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        Version Control (Git)
                    </li>
                </ul>
            </div>

            <!-- Other Skills -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="flip-left" data-aos-delay="400">
                <h3 class="text-xl font-semibold mb-4">Soft Skills</h3>
                <ul class="space-y-3">
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        Problem Solving
                    </li>
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        Team Collaboration
                    </li>
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        Project Management
                    </li>
                    <li class="flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        Communication
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Education Background -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Latar Belakang Pendidikan</h2>
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="0">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                    <h3 class="text-xl font-semibold">Universitas Hasanuddin</h3>
                    <span class="text-gray-500">2022 - Sekarang</span>
                </div>
                <p class="text-gray-600 mb-4">Sarjana Teknik Informatika</p>
                <p class="text-gray-600">
                    IPK: 3.85<br>
                    Fokus pada pengembangan aplikasi web dan mobile.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                    <h3 class="text-xl font-semibold">SMK 1 torut</h3>
                    <span class="text-gray-500">2020 - 2022</span>
                </div>
                <p class="text-gray-600">
                    Jurusan TKJ<br>
                    Aktif dalam klub komputer dan Informatika.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Interests Section -->
<section class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Minat & Hobi</h2>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
            <div class="text-center" data-aos="zoom-in" data-aos-delay="0">
                <div class="bg-white rounded-full p-6 inline-block mb-4 shadow-md hover:shadow-lg hover:scale-110 transition-all duration-300">
                    <i class="fas fa-code text-4xl text-[#5A827E]"></i>
                </div>
                <h3 class="font-semibold">Coding</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="bg-white rounded-full p-6 inline-block mb-4 shadow-md hover:shadow-lg hover:scale-110 transition-all duration-300">
                    <i class="fas fa-book text-4xl text-[#5A827E]"></i>
                </div>
                <h3 class="font-semibold">Membaca</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="400">
                <div class="bg-white rounded-full p-6 inline-block mb-4 shadow-md hover:shadow-lg hover:scale-110 transition-all duration-300">
                    <i class="fas fa-camera text-4xl text-[#5A827E]"></i>
                </div>
                <h3 class="font-semibold">Fotografi</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="600">
                <div class="bg-white rounded-full p-6 inline-block mb-4 shadow-md hover:shadow-lg hover:scale-110 transition-all duration-300">
                    <i class="fas fa-music text-4xl text-[#5A827E]"></i>
                </div>
                <h3 class="font-semibold">Musik</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="800">
                <div class="bg-white rounded-full p-6 inline-block mb-4 shadow-md hover:shadow-lg hover:scale-110 transition-all duration-300">
                    <i class="fas fa-plane text-4xl text-[#5A827E]"></i>
                </div>
                <h3 class="font-semibold">Traveling</h3>
            </div>
        </div>
    </div>
</section>
@endsection 