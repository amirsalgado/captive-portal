@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Dashboard del Administrador</h1>

    @if(session('message'))
    <p class="text-green-500">{{ session('message') }}</p>
    @endif

    @auth
    <form method="POST" action="{{ route('logout') }}" class="logout-button">
        @csrf
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Cerrar sesión</button>
    </form>
    @endauth

    <div class="card mt-6">
        <div class="card-body">
            <h5 class="text-xl font-semibold">Total de Visitas: {{ $stats['total_visits'] }}</h5>
            <p>Visitas de Hoy: {{ $stats['today_count'] }}</p>
            <p>Visitas Semanales: {{ $stats['weekly_count'] }}</p>
            <p>Visitas Mensuales: {{ $stats['monthly_count'] }}</p>
            <p>Visitas Anuales: {{ $stats['yearly_count'] }}</p>
        </div>
    </div>

    <div class="mt-6">
        <livewire:birthday-alerts />
    </div>
</div>
@endsection