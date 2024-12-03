<div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-xl font-semibold mb-4">Cumpleaños de Hoy</h2>    
    
    {{-- Display birthday alerts with better styling --}}
    @if($birthdayClients->isEmpty())
        <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg">
            <p class="text-gray-600">No hay cumpleaños hoy.</p>
        </div>
    @else
        <ul class="space-y-3">
            @foreach($birthdayClients as $client)
                <li class="flex items-center justify-between p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="flex items-center space-x-3">
                        <span class="text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 2a1.5 1.5 0 00-1.5 1.5v13a1.5 1.5 0 001.5 1.5h4a1.5 1.5 0 001.5-1.5v-13A1.5 1.5 0 0012 2H8z"/>
                            </svg>
                        </span>
                        <span class="text-gray-700 font-medium">{{ e($client->full_name) }}</span>
                    </div>
                    <a href="tel:{{ e($client->phone_number) }}" 
                       class="text-blue-600 hover:text-blue-800 transition-colors"
                       title="Llamar">
                        {{ e($client->phone_number) }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    {{-- Add refresh button --}}
    <div class="mt-4 text-center">
        <button 
            onclick="window.location.reload()"
            class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
            </svg>
            Actualizar
        </button>
    </div>
</div>
