<x-app-layout>
    <div class="py-40 flex flex-col items-center justify-center">
        <h1 class="text-orange-500 text-6xl font-bold mb-4">404</h1>
        <h2 class="text-gray-800 text-2xl mb-6">Ups, esta página no existe</h2>
        <p class="text-gray-600 mb-8">La vecina no ha encontrado lo que buscabas...</p>
        <a href="{{ route('notes.index') }}" class="bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition">
            Volver al tablón
        </a>
    </div>
</x-app-layout>