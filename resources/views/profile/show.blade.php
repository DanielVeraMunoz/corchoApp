<x-app-layout>
    <div class="min-h-screen flex items-center justify-center py-24">
        <div class="bg-white border border-gray-950 shadow-sm p-6 w-full max-w-md">
            
            <!-- Header: Avatar + Nombre -->
            <div class="text-center mb-6">
                <div class="bg-orange-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 text-2xl font-bold">
                    {{ substr($user->name, 0, 1) }}
                </div>
                <h1 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h1>
                @if($user->floor || $user->door)
                    <p class="text-gray-500">Piso {{ $user->floor }}, Puerta {{ $user->door }}</p>
                    <p class="text-gray-500">Comunidad: {{ $user->community->name }}</p>
                @endif
            </div>
            
            <!-- Separador -->
            <div class="border-b border-gray-300 mb-6"></div>
            
            <!-- Gracias recibidos -->
            <h2 class="text-xl font-bold text-gray-800 mb-4">
                <i class="fa-solid fa-heart text-orange-500"></i> Gracias recibidos ({{ $thanksReceived->count() }})
            </h2>
            
            @if($thanksReceived->count() > 0)
                <div class="space-y-3">
                    @foreach($thanksReceived as $thank)
                        <div class="bg-orange-50 p-3 rounded border border-gray-200">
                            <p class="text-sm">
                                <a href="{{ route('users.show', $thank->user->id) }}" class="text-orange-500 font-bold hover:underline">
                                    {{ $thank->user->name }}
                                </a>
                                le dio las gracias en
                                <a href="{{ route('notes.show', $thank->note->id) }}" class="text-orange-500 hover:underline">
                                    "{{ $thank->note->title }}"
                                </a>
                            </p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500">No ha recibido ningún gracias todavía.</p>
            @endif
            
            <!-- Volver -->
            <div class="mt-6">
                <a href="javascript:history.back()" class="block text-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
            
        </div>
    </div>
</x-app-layout>