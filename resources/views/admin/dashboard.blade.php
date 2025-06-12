@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-semibold mb-6">Dashboard Admin</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card Projects -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold mb-4">Projects</h2>
                        <p class="text-gray-600 mb-4">Kelola project portfolio Anda</p>
                        <div class="space-y-2">
                            <a href="{{ route('admin.projects.create') }}" class="block w-full bg-green-500 text-white text-center px-4 py-2 rounded hover:bg-green-600">
                                Tambah Project
                            </a>
                            <a href="{{ route('admin.projects.index') }}" class="block w-full bg-blue-500 text-white text-center px-4 py-2 rounded hover:bg-blue-600">
                                Lihat Semua
                            </a>
                        </div>
                    </div>

                    <!-- Card Profile -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold mb-4">Profil</h2>
                        <p class="text-gray-600 mb-4">Perbarui informasi profil Anda</p>
                        <a href="#" class="block w-full bg-blue-500 text-white text-center px-4 py-2 rounded hover:bg-blue-600">
                            Edit Profil
                        </a>
                    </div>
                </div>

                <!-- Logout Button -->
                <div class="mt-6">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 