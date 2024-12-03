@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard del Administrador</h1>

        <div class="card">
            <div class="card-body">
                <h5>Total de Visitas: {{ $stats['total_visits'] }}</h5>
                <p>Visitas de Hoy: {{ $stats['today_count'] }}</p>
                <p>Visitas Semanales: {{ $stats['weekly_count'] }}</p>
                <p>Visitas Mensuales: {{ $stats['monthly_count'] }}</p>
                <p>Visitas Anuales: {{ $stats['yearly_count'] }}</p>
            </div>
        </div>
    </div>
@endsection
