@extends('layouts.app')

@section('content')
<!-- Experience Hero Section -->
<section class="bg-gradient-to-r from-[#5C8281] to-[#82A98E] text-white py-20">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 tracking-tight" data-aos="fade-down">
                Pengalaman
            </h1>
            <p class="text-xl md:text-2xl text-white/80" data-aos="fade-up" data-aos-delay="300">
               Pengalaman kerja saya.
            </p>
        </div>
    </div>
</section>

<!-- Work Experience Timeline -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="relative">
            <!-- Timeline Line -->
            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-[#5C8281] to-[#B5CCA3]"></div>

            <!-- Timeline Items -->
            <div class="space-y-12">
                <!-- Experience 1 -->
                <div class="relative" data-aos="fade-up">
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-[#5C8281] rounded-full border-4 border-white animate-pulse"></div>
                    <div class="md:flex items-center">
                        <!-- Left Content (Date) -->
                        <div class="md:w-1/2 md:pr-8 md:text-right mb-4 md:mb-0" data-aos="fade-right">
                            <div class="bg-white p-6 rounded-lg shadow-md md:ml-auto md:mr-0 hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                                <h3 class="text-xl font-semibold text-gray-800">Senior Web Developer</h3>
                                <p class="text-[#5C8281] font-medium">PT. Tech Solutions</p>
                                <p class="text-gray-500">2021 - Sekarang</p>
                            </div>
                        </div>
                        <!-- Right Content (Description) -->
                        <div class="md:w-1/2 md:pl-8" data-aos="fade-left">
                            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Memimpin tim pengembangan untuk proyek-proyek berskala besar</span>
                                    </li>
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Mengimplementasikan arsitektur microservices menggunakan Laravel dan Docker</span>
                                    </li>
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Mengoptimasi performa aplikasi dan database</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience 2 -->
                <div class="relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-[#5C8281] rounded-full border-4 border-white animate-pulse"></div>
                    <div class="md:flex items-center">
                        <!-- Left Content (Date) -->
                        <div class="md:w-1/2 md:pr-8 md:text-right mb-4 md:mb-0" data-aos="fade-right">
                            <div class="bg-white p-6 rounded-lg shadow-md md:ml-auto md:mr-0 hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                                <h3 class="text-xl font-semibold text-gray-800">Web Developer</h3>
                                <p class="text-[#5C8281] font-medium">PT. Digital Kreasi</p>
                                <p class="text-gray-500">2019 - 2021</p>
                            </div>
                        </div>
                        <!-- Right Content (Description) -->
                        <div class="md:w-1/2 md:pl-8" data-aos="fade-left">
                            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Mengembangkan aplikasi web menggunakan Laravel dan Vue.js</span>
                                    </li>
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Mengintegrasikan berbagai API pihak ketiga</span>
                                    </li>
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Melakukan maintenance dan debugging pada aplikasi yang sudah ada</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience 3 -->
                <div class="relative" data-aos="fade-up" data-aos-delay="400">
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-[#5C8281] rounded-full border-4 border-white animate-pulse"></div>
                    <div class="md:flex items-center">
                        <!-- Left Content (Date) -->
                        <div class="md:w-1/2 md:pr-8 md:text-right mb-4 md:mb-0" data-aos="fade-right">
                            <div class="bg-white p-6 rounded-lg shadow-md md:ml-auto md:mr-0 hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                                <h3 class="text-xl font-semibold text-gray-800">Junior Web Developer</h3>
                                <p class="text-[#5C8281] font-medium">PT. Inovasi Digital</p>
                                <p class="text-gray-500">2018 - 2019</p>
                            </div>
                        </div>
                        <!-- Right Content (Description) -->
                        <div class="md:w-1/2 md:pl-8" data-aos="fade-left">
                            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Membantu pengembangan fitur-fitur baru pada aplikasi web</span>
                                    </li>
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Memperbaiki bug dan melakukan testing</span>
                                    </li>
                                    <li class="flex items-start transform hover:translate-x-2 transition-transform duration-300">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Berkolaborasi dengan tim desain untuk implementasi UI/UX</span>
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

<!-- Skills & Technologies -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Teknologi yang Dikuasai</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center" data-aos="zoom-in" data-aos-delay="0">
                <div class="bg-white rounded-full p-6 inline-block mb-4 shadow-md hover:shadow-lg hover:scale-110 transition-all duration-300">
                    <i class="fab fa-laravel text-4xl text-red-600"></i>
                </div>
                <h3 class="font-semibold">Laravel</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="bg-white rounded-full p-6 inline-block mb-4 shadow-md hover:shadow-lg hover:scale-110 transition-all duration-300">
                    <i class="fab fa-vuejs text-4xl text-green-600"></i>
                </div>
                <h3 class="font-semibold">Vue.js</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="400">
                <div class="bg-white rounded-full p-6 inline-block mb-4 shadow-md hover:shadow-lg hover:scale-110 transition-all duration-300">
                    <i class="fab fa-docker text-4xl text-blue-600"></i>
                </div>
                <h3 class="font-semibold">Docker</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="600">
                <div class="bg-white rounded-full p-6 inline-block mb-4 shadow-md hover:shadow-lg hover:scale-110 transition-all duration-300">
                    <i class="fab fa-git-alt text-4xl text-orange-600"></i>
                </div>
                <h3 class="font-semibold">Git</h3>
            </div>
        </div>
    </div>
</section>

<!-- Achievements -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Pencapaian</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="0">
                <div class="text-center mb-4">
                    <i class="fas fa-trophy text-4xl text-yellow-500 animate-bounce"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-4">Best Developer 2022</h3>
                <p class="text-gray-600 text-center">Penghargaan internal perusahaan untuk kontribusi terbaik dalam pengembangan produk.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center mb-4">
                    <i class="fas fa-certificate text-4xl text-blue-500 animate-spin-slow"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-4">Laravel Certified</h3>
                <p class="text-gray-600 text-center">Sertifikasi resmi dari Laravel sebagai Laravel Developer Expert.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center mb-4">
                    <i class="fas fa-award text-4xl text-purple-500 animate-pulse"></i>
                </div>
                <h3 class="text-xl font-semibold text-center mb-4">Project Excellence</h3>
                <p class="text-gray-600 text-center">Penghargaan untuk kepemimpinan proyek terbaik tahun 2021.</p>
            </div>
        </div>
    </div>
</section>
@endsection

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
</style>
