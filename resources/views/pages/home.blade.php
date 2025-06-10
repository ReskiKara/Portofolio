@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen bg-gradient-to-br from-[#5A827E] via-[#8DB0AB] to-[#BFCEC9] text-white overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute w-96 h-96 bg-[#F1F2DC] rounded-full opacity-10 -top-20 -left-20 animate-blob"></div>
        <div class="absolute w-96 h-96 bg-[#5A827E] rounded-full opacity-10 top-40 right-20 animate-blob animation-delay-2000"></div>
        <div class="absolute w-96 h-96 bg-[#8DB0AB] rounded-full opacity-10 bottom-20 left-32 animate-blob animation-delay-4000"></div>
    </div>

    <!-- Main Content -->
    <div class="relative max-w-7xl mx-auto px-4 py-32 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between">
        <!-- Left Content -->
        <div class="text-center md:text-left md:w-1/2 space-y-8">
            <div class="space-y-4">
                <p class="text-[#F1F2DC] text-lg font-medium tracking-wide animate-fade-in-up" data-aos="fade-up">
                    👋 Halo, Saya
                </p>
                <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight animate-fade-in-up animation-delay-300" data-aos="fade-up" data-aos-delay="200">
                    Reski Kara
                </h1>
                <div class="relative h-20 overflow-hidden">
                    <div class="absolute animate-slide-up">
                        <p class="text-2xl md:text-3xl font-bold text-[#F1F2DC] py-4">Mobile Developer</p>
                        <p class="text-2xl md:text-3xl font-bold text-[#F1F2DC] py-4">Data Scientist</p>
                        <p class="text-2xl md:text-3xl font-bold text-[#F1F2DC] py-4">UI/UX Designer</p>
                        <p class="text-2xl md:text-3xl font-bold text-[#F1F2DC] py-4">Mobile Developer</p>
                    </div>
                </div>
            </div>
            
            <p class="text-lg text-[#F1F2DC]/90 max-w-xl animate-fade-in-up animation-delay-600" data-aos="fade-up" data-aos-delay="400">
                Mengubah ide menjadi solusi digital yang inovatif. Spesialis dalam pengembangan aplikasi mobile dan analisis data.
            </p>
            
            <div class="flex flex-wrap gap-4 justify-center md:justify-start animate-fade-in-up animation-delay-900" data-aos="fade-up" data-aos-delay="600">
                <a href="#contact" class="px-8 py-4 bg-[#F1F2DC] text-[#5A827E] rounded-full font-semibold hover:bg-white transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center group">
                    Hubungi Saya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#projects" class="px-8 py-4 border-2 border-[#F1F2DC] text-[#F1F2DC] rounded-full font-semibold hover:bg-[#F1F2DC] hover:text-[#5A827E] transition-all duration-300 transform hover:scale-105 flex items-center group">
                    Lihat Proyek
                    <i class="fas fa-project-diagram ml-2 transform group-hover:rotate-12 transition-transform"></i>
                </a>
            </div>

            <!-- Social Links -->
            <div class="flex gap-6 justify-center md:justify-start text-[#F1F2DC] animate-fade-in-up animation-delay-1200" data-aos="fade-up" data-aos-delay="800">
                <a href="#" class="hover:text-white transform hover:scale-125 transition-all duration-300">
                    <i class="fab fa-github text-2xl"></i>
                </a>
                <a href="#" class="hover:text-white transform hover:scale-125 transition-all duration-300">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="#" class="hover:text-white transform hover:scale-125 transition-all duration-300">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
            </div>
        </div>

        <!-- Right Content - Animated Illustration -->
        <div class="hidden md:block md:w-1/2 relative animate-float" data-aos="fade-left" data-aos-delay="1000">
            <div class="relative w-full aspect-square">
                <!-- Decorative Elements -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-64 h-64 bg-[#F1F2DC] rounded-full opacity-20 animate-pulse"></div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-48 h-48 bg-[#5A827E] rounded-full opacity-20 animate-ping"></div>
                </div>
                <!-- Profile Image -->
                <img src="{{ asset('images/profile.png') }}" alt="Reski Kara" class="relative z-10 w-96 h-96 object-cover rounded-full border-4 border-[#F1F2DC]/30 shadow-2xl transform hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 overflow-hidden leading-[0]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="relative">
            <path fill="#F1F2DC" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L0,320Z"></path>
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

@keyframes slide-up {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-160px);
    }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animate-fade-in-up {
    animation: fade-in-up 1s ease-out forwards;
}

.animate-slide-up {
    animation: slide-up 8s infinite;
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
</style>

<!-- Skills Section -->
<section class="py-24 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-center mb-16 text-slate-800" data-aos="fade-up">Keahlian</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-10">
            @foreach ([
                ['icon' => 'fab fa-python', 'label' => 'Python'],
                ['icon' => 'fas fa-code', 'label' => 'C/C++'],
                ['icon' => 'fab fa-html5', 'label' => 'HTML5'],
                ['icon' => 'fab fa-css3-alt', 'label' => 'CSS3'],
                ['icon' => 'fab fa-js', 'label' => 'JavaScript'],
                ['icon' => 'fab fa-php', 'label' => 'PHP'],
            ] as $index => $skill)
            <div class="text-center" data-aos="flip-left" data-aos-delay="{{ $index * 100 }}">
                <div class="bg-white rounded-2xl p-6 shadow-lg inline-block mb-4 hover:scale-110 transition-transform duration-300">
                    <i class="{{ $skill['icon'] }} text-5xl text-[#5A827E]"></i>
                </div>
                <h3 class="font-semibold text-lg text-slate-700">{{ $skill['label'] }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="bg-gradient-to-b from-slate-50 to-white py-24">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-center mb-16 text-slate-800" data-aos="fade-up">Proyek Unggulan</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $loop->index * 200 }}">
                <img src="{{ Storage::url($project->image) }}"
                     alt="{{ $project->title }}"
                     class="w-full h-52 object-cover hover:scale-105 transition-transform duration-300">
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-3 text-slate-800">{{ $project->title }}</h3>
                    <p class="text-slate-600 mb-4">{{ Str::limit($project->description, 100) }}</p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach(explode(',', $project->technologies) as $tech)
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-sm rounded-full hover:bg-indigo-200 transition-colors duration-300">
                            {{ trim($tech) }}
                        </span>
                        @endforeach
                    </div>

                    <div class="flex space-x-4">
                        @if($project->url)
                        <a href="{{ $project->url }}"
                           target="_blank"
                           class="text-indigo-600 hover:text-indigo-800 font-semibold flex items-center transform hover:translate-x-1 transition-transform duration-300">
                            <i class="fas fa-external-link-alt mr-2"></i> Demo
                        </a>
                        @endif

                        @if($project->github_url)
                        <a href="{{ $project->github_url }}"
                           target="_blank"
                           class="text-slate-600 hover:text-slate-800 font-semibold flex items-center transform hover:translate-x-1 transition-transform duration-300">
                            <i class="fab fa-github mr-2"></i> Code
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-slate-500 text-lg">Belum ada proyek yang ditambahkan.</p>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('projects') }}"
               class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium rounded-full text-white  bg-[#F1F2DC] hover:bg-[#5A827E] transform hover:scale-105 transition-all duration-300 shadow-lg">
                Lihat Semua Proyek
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-24 bg-gradient-to-br from-[#5A827E] via-[#8DB0AB] to-[#BFCEC9]">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-center mb-16 text-white" data-aos="fade-up">Hubungi Saya</h2>
        <div class="grid md:grid-cols-2 gap-10">
            <div data-aos="fade-right">
                <h3 class="text-2xl font-semibold mb-6 text-white">Informasi Kontak</h3>
                <div class="space-y-5 text-[#F1F2DC]">
                    <p class="flex items-center hover:text-white transition-colors">
                        <i class="fas fa-envelope text-[#F1F2DC] mr-3"></i> reskykara@gmail.com
                    </p>
                    <p class="flex items-center hover:text-white transition-colors">
                        <i class="fas fa-phone text-[#F1F2DC] mr-3"></i> +62 852 4106 8441
                    </p>
                    <p class="flex items-center hover:text-white transition-colors">
                        <i class="fas fa-map-marker-alt text-[#F1F2DC] mr-3"></i> Makassar, Indonesia
                    </p>
                </div>
                <div class="mt-10">
                    <h3 class="text-2xl font-semibold mb-6 text-white">Media Sosial</h3>
                    <div class="flex space-x-6 text-3xl text-[#F1F2DC]">
                        <a href="#" class="hover:text-white transition-colors transform hover:scale-125">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="hover:text-white transition-colors transform hover:scale-125">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="hover:text-white transition-colors transform hover:scale-125">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left">
                <form class="space-y-6 bg-[#F1F2DC]/10 backdrop-blur-sm p-8 rounded-2xl shadow-lg border border-[#F1F2DC]/20">
                    <div>
                        <label for="name" class="block text-sm font-medium text-[#F1F2DC] mb-2">Nama</label>
                        <input type="text" id="name" name="name"
                               class="w-full px-4 py-3 bg-[#F1F2DC]/10 border border-[#F1F2DC]/20 rounded-lg text-white placeholder-[#F1F2DC]/50 focus:ring-[#F1F2DC] focus:border-[#F1F2DC] transition duration-300">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-[#F1F2DC] mb-2">Email</label>
                        <input type="email" id="email" name="email"
                               class="w-full px-4 py-3 bg-[#F1F2DC]/10 border border-[#F1F2DC]/20 rounded-lg text-white placeholder-[#F1F2DC]/50 focus:ring-[#F1F2DC] focus:border-[#F1F2DC] transition duration-300">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-[#F1F2DC] mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5"
                                  class="w-full px-4 py-3 bg-[#F1F2DC]/10 border border-[#F1F2DC]/20 rounded-lg text-white placeholder-[#F1F2DC]/50 focus:ring-[#F1F2DC] focus:border-[#F1F2DC] transition duration-300"></textarea>
                    </div>
                    <button type="submit"
                            class="w-full bg-[#F1F2DC] text-[#5A827E] px-6 py-3 rounded-lg font-semibold hover:bg-white transform hover:scale-105 transition-all duration-300 shadow-lg">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
