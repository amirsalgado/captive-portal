<div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-xl font-semibold mb-4">Cumpleaños de Hoy</h2>

    @if($birthdayClients->isEmpty())
        <p class="text-gray-700">No hay cumpleaños hoy.</p>
    @else
        <ul>
            @foreach($birthdayClients as $client)
                <li class="text-gray-700">{{ $client->full_name }} - {{ $client->phone_number }}</li>
            @endforeach
        </ul>
    @endif
</div>