@extends('layouts.app')

@section('content')
<!-- Projects Hero Section -->
<!-- Projects Hero Section -->
<section class="bg-gradient-to-r from-[#5C8281] to-[#82A98E] text-white py-20">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight" data-aos="fade-down">
                Proyek
            </h1>
            <p class="text-2xl md:text-3xl text-white/80" data-aos="fade-up" data-aos-delay="300">
                Koleksi Karya Terbaik dan Proyek yang telah saya kerjakan.
            </p>
        </div>
    </div>
</section>


<!-- Projects Grid Section -->
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
            <button class="px-6 py-2 rounded-full bg-white/70 backdrop-blur border border-blue-300 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300 active">
                Semua
            </button>
            <button class="px-6 py-2 rounded-full bg-white/70 backdrop-blur border border-blue-300 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                Web
            </button>
            <button class="px-6 py-2 rounded-full bg-white/70 backdrop-blur border border-blue-300 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                Mobile
            </button>
            <button class="px-6 py-2 rounded-full bg-white/70 backdrop-blur border border-blue-300 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                Data Science
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
            <div class="group bg-white/70 backdrop-blur-md rounded-2xl border border-blue-200 shadow-md hover:shadow-lg transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $loop->index * 200 }}">
                <div class="relative overflow-hidden rounded-t-2xl">
                    <img src="{{ Storage::url($project->image) }}"
                         alt="{{ $project->title }}"
                         class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-700/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-6">
                            <h3 class="text-white font-bold text-xl">{{ $project->title }}</h3>
                            <p class="text-blue-100 mt-2">{{ Str::limit($project->description, 100) }}</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach(explode(',', $project->technologies) as $tech)
                        <span class="px-3 py-1 bg-white/50 backdrop-blur text-blue-700 text-sm rounded-full transition-colors duration-300 hover:bg-blue-300 hover:text-white">
                            {{ trim($tech) }}
                        </span>
                        @endforeach
                    </div>

                    <div class="flex space-x-4">
                        @if($project->url)
                        <a href="{{ $project->url }}"
                           target="_blank"
                           class="text-blue-700 hover:text-blue-500 font-semibold flex items-center transform hover:translate-x-1 transition-transform duration-300">
                            <i class="fas fa-external-link-alt mr-2"></i> Demo
                        </a>
                        @endif

                        @if($project->github_url)
                        <a href="{{ $project->github_url }}"
                           target="_blank"
                           class="text-blue-500 hover:text-blue-700 font-semibold flex items-center transform hover:translate-x-1 transition-transform duration-300">
                            <i class="fab fa-github mr-2"></i> Code
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-blue-500 text-lg">Belum ada proyek yang ditambahkan.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center" data-aos="fade-up">
            {{ $projects->links() }}
        </div>
    </div>
</section>
@endsection
