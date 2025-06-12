@extends('layouts.app')

@section('content')
<!-- Contact Hero Section -->
<section class="bg-gradient-to-r from-[#5C8281] to-[#82A98E] text-white py-20">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up" data-aos-delay="200">Hubungi Saya</h1>
            <p class="text-xl max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="400">Mari berkolaborasi untuk menciptakan solusi digital yang inovatif.</p>
        </div>
    </div>
</section>

<<!-- Contact Information -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-2xl font-bold mb-8 text-[#5d827f]">Kirim Pesan</h2>
                <form class="space-y-6">
                    <div class="transform transition-all duration-300 hover:translate-y-[-2px]">
                        <label for="name" class="block text-sm font-medium text-[#5d827f] mb-1">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-[#84a991] rounded-md focus:ring-[#5d827f] focus:border-[#5d827f] transition-all duration-300 focus:shadow-lg" required>
                    </div>
                    <div class="transform transition-all duration-300 hover:translate-y-[-2px]">
                        <label for="email" class="block text-sm font-medium text-[#5d827f] mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-[#84a991] rounded-md focus:ring-[#5d827f] focus:border-[#5d827f] transition-all duration-300 focus:shadow-lg" required>
                    </div>
                    <div class="transform transition-all duration-300 hover:translate-y-[-2px]">
                        <label for="subject" class="block text-sm font-medium text-[#5d827f] mb-1">Subjek</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-[#84a991] rounded-md focus:ring-[#5d827f] focus:border-[#5d827f] transition-all duration-300 focus:shadow-lg" required>
                    </div>
                    <div class="transform transition-all duration-300 hover:translate-y-[-2px]">
                        <label for="message" class="block text-sm font-medium text-[#5d827f] mb-1">Pesan</label>
                        <textarea id="message" name="message" rows="6" class="w-full px-4 py-2 border border-[#84a991] rounded-md focus:ring-[#5d827f] focus:border-[#5d827f] transition-all duration-300 focus:shadow-lg" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#5d827f] text-white px-6 py-3 rounded-md font-semibold hover:bg-[#84a991] transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-2xl font-bold mb-8 text-[#5d827f]">Informasi Kontak</h2>
                <div class="space-y-8">
                    <!-- Location -->
                    <div class="flex items-start transform transition-all duration-300 hover:translate-x-2">
                        <div class="flex-shrink-0">
                            <div class="bg-[#b6cca5] rounded-full p-3 animate-bounce-slow">
                                <i class="fas fa-map-marker-alt text-xl text-[#5d827f]"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold mb-1 text-[#5d827f]">Lokasi</h3>
                            <p class="text-[#5d827f]">
                                Jl. Perintis Kemerdekaan<br>
                                Makassar, Sulawesi Selatan<br>
                                Indonesia
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start transform transition-all duration-300 hover:translate-x-2">
                        <div class="flex-shrink-0">
                            <div class="bg-[#b6cca5] rounded-full p-3 animate-pulse">
                                <i class="fas fa-envelope text-xl text-[#5d827f]"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold mb-1 text-[#5d827f]">Email</h3>
                            <p class="text-[#5d827f]">
                                reskykara@gmail.com<br>
                                kara@gmail.com
                            </p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start transform transition-all duration-300 hover:translate-x-2">
                        <div class="flex-shrink-0">
                            <div class="bg-[#b6cca5] rounded-full p-3 animate-shake">
                                <i class="fas fa-phone text-xl text-[#5d827f]"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold mb-1 text-[#5d827f]">Telepon</h3>
                            <p class="text-[#5d827f]">
                                +62 085 2410 68441<br>
                                +62 098 7654 321
                            </p>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-lg font-semibold mb-4 text-[#5d827f]">Media Sosial</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-[#b6cca5] p-3 rounded-full text-[#5d827f] hover:bg-[#84a991] transition-all duration-300 transform hover:scale-110 hover:rotate-12">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                            <a href="#" class="bg-[#b6cca5] p-3 rounded-full text-[#5d827f] hover:bg-[#84a991] transition-all duration-300 transform hover:scale-110 hover:rotate-12">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            <a href="#" class="bg-[#b6cca5] p-3 rounded-full text-[#5d827f] hover:bg-[#84a991] transition-all duration-300 transform hover:scale-110 hover:rotate-12">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="#" class="bg-[#b6cca5] p-3 rounded-full text-[#5d827f] hover:bg-[#84a991] transition-all duration-300 transform hover:scale-110 hover:rotate-12">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Map Section -->
<section class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-bold mb-8 text-center" data-aos="fade-up">Lokasi</h2>
        <div class="bg-white p-4 rounded-lg shadow-md transform transition-all duration-300 hover:shadow-xl" data-aos="zoom-in">
            <!-- Replace with actual map embed code -->
            <div class="aspect-w-16 aspect-h-9">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7475296277337!2d119.49335661476867!3d-5.139495996262576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee329d5f6fb8b%3A0x3f5c6c5e03db7d0b!2sUniversitas%20Hasanuddin!5e0!3m2!1sid!2sid!4v1647827037951!5m2!1sid!2sid"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-bold mb-8 text-center" data-aos="fade-up">Pertanyaan Umum</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <!-- FAQ Item 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md transform transition-all duration-300 hover:shadow-xl hover:scale-[1.02]" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-lg font-semibold mb-2">Bagaimana cara memulai proyek dengan Anda?</h3>
                <p class="text-gray-600">
                    Anda dapat menghubungi saya melalui form kontak di atas atau mengirim email langsung. 
                    Kita akan mendiskusikan kebutuhan proyek Anda dan merencanakan langkah selanjutnya.
                </p>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md transform transition-all duration-300 hover:shadow-xl hover:scale-[1.02]" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-lg font-semibold mb-2">Berapa lama waktu pengerjaan proyek?</h3>
                <p class="text-gray-600">
                    Waktu pengerjaan tergantung pada kompleksitas proyek. Setelah berdiskusi, 
                    saya akan memberikan estimasi waktu yang lebih akurat.
                </p>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md transform transition-all duration-300 hover:shadow-xl hover:scale-[1.02]" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-lg font-semibold mb-2">Apakah Anda menerima proyek jangka panjang?</h3>
                <p class="text-gray-600">
                    Ya, saya menerima proyek jangka panjang dan dapat bekerja secara full-time 
                    maupun part-time sesuai kebutuhan klien.
                </p>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md transform transition-all duration-300 hover:shadow-xl hover:scale-[1.02]" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-lg font-semibold mb-2">Apakah Anda menyediakan layanan maintenance?</h3>
                <p class="text-gray-600">
                    Ya, saya menyediakan layanan maintenance dan support untuk memastikan 
                    aplikasi Anda tetap berjalan dengan optimal.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
.animate-bounce-slow {
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

.animate-shake {
    animation: shake 1s infinite;
}

@keyframes shake {
    0%, 100% {
        transform: rotate(-5deg);
    }
    50% {
        transform: rotate(5deg);
    }
}
</style>
@endsection 