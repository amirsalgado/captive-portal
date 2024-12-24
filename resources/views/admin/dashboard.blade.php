@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    {{-- Admin Header Section --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Dashboard del Administrador</h1>
        
        {{-- Session Message --}}
        @if(session('message'))
            <div x-data="{ show: true }" 
                 x-show="show" 
                 x-init="setTimeout(() => show = false, 3000)"
                 class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded"
                 role="alert">
                <p>{{ session('message') }}</p>
            </div>
        @endif

        {{-- Logout Button --}}
        @auth
            <form method="POST" action="{{ route('logout') }}" class="inline-block">
                @csrf
                <button type="submit" 
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition duration-150 ease-in-out">
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Cerrar sesión
                    </span>
                </button>
            </form>
        @endauth
    </div>

    {{-- Statistics Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        {{-- Total Visits Card --}}
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
            <h5 class="text-xl font-semibold text-gray-800 mb-4">Total de Visitas</h5>
            <p class="text-3xl font-bold text-blue-600">{{ number_format($stats['total_visits']) }}</p>
        </div>

        {{-- Today's Visits Card --}}
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
            <h5 class="text-xl font-semibold text-gray-800 mb-4">Visitas de Hoy</h5>
            <p class="text-3xl font-bold text-green-600">{{ number_format($stats['today_count']) }}</p>
        </div>

        {{-- Weekly Visits Card --}}
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
            <h5 class="text-xl font-semibold text-gray-800 mb-4">Visitas Semanales</h5>
            <p class="text-3xl font-bold text-purple-600">{{ number_format($stats['weekly_count']) }}</p>
        </div>

        {{-- Monthly Visits Card --}}
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
            <h5 class="text-xl font-semibold text-gray-800 mb-4">Visitas Mensuales</h5>
            <p class="text-3xl font-bold text-orange-600">{{ number_format($stats['monthly_count']) }}</p>
        </div>

        {{-- Yearly Visits Card --}}
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
            <h5 class="text-xl font-semibold text-gray-800 mb-4">Visitas Anuales</h5>
            <p class="text-3xl font-bold text-red-600">{{ number_format($stats['yearly_count']) }}</p>
        </div>
    </div>

    {{-- Birthday Alerts Section 
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Alertas de Cumpleaños</h2>
        <livewire:birthday-alerts />
    </div>--}}
</div>

{{-- @push('scripts')
<script>
    // Add any JavaScript needed for the dashboard
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize any dashboard features
    });
</script>
@endpush --}}

@push('styles')
<style>
    /* Add any custom styles needed for the dashboard */
    .stats-card {
        transition: transform 0.2s ease;
    }
    .stats-card:hover {
        transform: translateY(-2px);
    }
</style>
@endpush

@endsection
