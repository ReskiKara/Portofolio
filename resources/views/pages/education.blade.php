@extends('layouts.app')

@section('content')
<!-- Education Hero Section -->
<section class="bg-gradient-to-r from-[#5C8281] to-[#82A98E] text-white py-20">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up" data-aos-delay="200">Pendidikan</h1>
            <p class="text-xl max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="400">Perjalanan akademik dan pencapaian pendidikan.</p>
        </div>
    </div>
</section>

<!-- Education Timeline -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="relative">
            <!-- Timeline Line -->
            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-[#5C8281] to-[#B5CCA3]"></div>

            <!-- Timeline Items -->
            <div class="space-y-12">
                <!-- Education 1 -->
                <div class="relative" data-aos="fade-up">
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-[#5C8281] rounded-full border-4 border-white animate-pulse"></div>
                
                    <div class="md:flex items-center">
                        <!-- Left Content -->
                        <div class="md:w-1/2 md:pr-8 md:text-right mb-4 md:mb-0" data-aos="fade-right" data-aos-delay="200">
                            <div class="bg-white p-6 rounded-lg shadow-md md:ml-auto md:mr-0 hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                                <h3 class="text-xl font-semibold text-gray-800">Universitas Hasanuddin</h3>
                                <p class="text-green-600 font-medium">Sarjana Teknik Informatika</p>
                                <p class="text-gray-500">2022 - sekarang</p>
                            </div>
                        </div>
                        <!-- Right Content -->
                        <div class="md:w-1/2 md:pl-8" data-aos="fade-left" data-aos-delay="400">
                            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                                <p class="text-gray-600 mb-4">IPK: 3.80</p>
                                <h4 class="font-semibold mb-2">Pencapaian:</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 animate-bounce"></i>
                                        <span>Juara 1 Kompetisi Programming Tingkat Universitas</span>
                                    </li>
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 animate-bounce"></i>
                                        <span>Ketua Divisi Web Development</span>
                                    </li>
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 animate-bounce"></i>
                                        <span>Asisten Laboratorium Pemrograman </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Education 2 -->
                <div class="relative" data-aos="fade-up">
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-[#5C8281] rounded-full border-4 border-white animate-pulse"></div>
                
                    <div class="md:flex items-center">
                        <!-- Left Content -->
                        <div class="md:w-1/2 md:pr-8 md:text-right mb-4 md:mb-0" data-aos="fade-right" data-aos-delay="200">
                            <div class="bg-white p-6 rounded-lg shadow-md md:ml-auto md:mr-0 hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                                <h3 class="text-xl font-semibold text-gray-800">SMK 1 Torut</h3>
                                <p class="text-green-600 font-medium">Jurusan TKJ</p>
                                <p class="text-gray-500">2019 - 2022</p>
                            </div>
                        </div>
                        <!-- Right Content -->
                        <div class="md:w-1/2 md:pl-8" data-aos="fade-left" data-aos-delay="400">
                            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                                <h4 class="font-semibold mb-2">Pencapaian:</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 animate-bounce"></i>
                                        <span>Ketua Klub Komputer</span>
                                    </li>
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 animate-bounce"></i>
                                        <span>Juara 2 Olimpiade Sains Komputer Tingkat Kota</span>
                                    </li>
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3 animate-bounce"></i>
                                        <span>Peserta Aktif Ekstrakurikuler Robotika</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications -->
<section class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Sertifikasi</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Certification 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300" data-aos="flip-left" data-aos-delay="100">
                <div class="text-center mb-4">
                    <i class="fas fa-certificate text-4xl text-blue-600 animate-spin-slow"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-2">Laravel Certified Developer</h3>
                <p class="text-gray-500 text-center mb-4">2022</p>
                <p class="text-gray-600 text-center">Sertifikasi resmi dari Laravel sebagai Laravel Developer Expert.</p>
            </div>

            <!-- Certification 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300" data-aos="flip-left" data-aos-delay="200">
                <div class="text-center mb-4">
                    <i class="fas fa-certificate text-4xl text-green-600 animate-spin-slow"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-2">AWS Certified Cloud Practitioner</h3>
                <p class="text-gray-500 text-center mb-4">2021</p>
                <p class="text-gray-600 text-center">Sertifikasi dasar AWS untuk cloud computing dan layanan AWS.</p>
            </div>

            <!-- Certification 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300" data-aos="flip-left" data-aos-delay="300">
                <div class="text-center mb-4">
                    <i class="fas fa-certificate text-4xl text-yellow-600 animate-spin-slow"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-2">Google Analytics Certified</h3>
                <p class="text-gray-500 text-center mb-4">2020</p>
                <p class="text-gray-600 text-center">Sertifikasi untuk analisis data website dan pengoptimalan SEO.</p>
            </div>
        </div>
    </div>
</section>

<!-- Training & Courses -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Pelatihan & Kursus</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Course 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-aos="zoom-in-up" data-aos-delay="100">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i class="fas fa-laptop-code text-3xl text-blue-600 animate-pulse"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold mb-2">Advanced Web Development Bootcamp</h3>
                        <p class="text-gray-500 mb-2">Udemy - 2021</p>
                        <p class="text-gray-600">Pelatihan intensif pengembangan web modern dengan fokus pada MERN stack dan best practices.</p>
                    </div>
                </div>
            </div>

            <!-- Course 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i class="fas fa-mobile-alt text-3xl text-blue-600 animate-pulse"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold mb-2">Mobile App Development</h3>
                        <p class="text-gray-500 mb-2">Dicoding - 2020</p>
                        <p class="text-gray-600">Pembelajaran pengembangan aplikasi mobile dengan React Native dan Flutter.</p>
                    </div>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-aos="zoom-in-up" data-aos-delay="300">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i class="fas fa-database text-3xl text-blue-600 animate-pulse"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold mb-2">Database Design & Management</h3>
                        <p class="text-gray-500 mb-2">Coursera - 2020</p>
                        <p class="text-gray-600">Kursus mendalam tentang desain database, optimasi, dan manajemen data.</p>
                    </div>
                </div>
            </div>

            <!-- Course 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i class="fas fa-paint-brush text-3xl text-blue-600 animate-pulse"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold mb-2">UI/UX Design Fundamentals</h3>
                        <p class="text-gray-500 mb-2">Google Digital Garage - 2019</p>
                        <p class="text-gray-600">Pembelajaran dasar-dasar desain antarmuka dan pengalaman pengguna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.animate-spin-slow {
    animation: spin 3s linear infinite;
}

@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.animate-bounce {
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(-10%);
        animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
    }
    50% {
        transform: translateY(0);
        animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
    }
}
</style>
@endsection 