<x-app-layout>
    <div class="py-12">
        
        <div class="bg-green-100 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-4">
            <a href="{{ route('notes.create') }}">Crear nueva nota</a>
        </div>

        <div class="flex justify-center flex-col items-center mb-10">
            <h1 class="text-orange-500 italic text-5xl mb-5">¡Hola vecina!</h1>
            <p>Echa un vistazo a lo que está pasando por el bloque.</p>
        </div>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
            
            
            <!-- contenedor de las notas -->
            <div class="columns-1 md:columns-3 gap-6 px-4">

                @foreach($notes as $note)

                <div class="break-inside-avoid mb-6 mx-auto bg-white border border-gray-950 overflow-hidden shadow-sm m-0 p-4 w-80 md:w-60">

                    <x-category-badge :category="$note->category" />

                    <h2 class="text-xl font-bold text-gray-800 mb-5">{{ $note->title }}</h2>

                    <p>{{ $note->description }}</p>
                    <div class="border-b border-gray-800 my-5"></div>
                    <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>