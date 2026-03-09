<x-app-layout>
    <div class="py-20">
 

        <div class="flex justify-center flex-col items-center mb-6">
            <h1 class="text-orange-500 italic text-5xl mb-5">¡Hola vecina!</h1>
            <p>Echa un vistazo a lo que está pasando por el bloque.</p>
        </div>

        <!-- Filtro -->

        <div class="flex flex-wrap justify-center gap-2 mb-4 px-16">
            
            <a href="{{ route('notes.index') }}" class="px-3 py-1 rounded-full text-xs font-semibold bg-gray-200">
                Todo
            </a>
    
            @foreach($categories as $category)
                <a href="{{ route('notes.index', ['category' => $category->id]) }}" 
                class="px-3 py-1 rounded-full text-xs font-semibold {{ request('category') == $category->id ? 'bg-gray-800 text-white' : 'bg-gray-200' }}">
                    {{ $category->name }}
                </a>
            @endforeach
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
                    
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">{{ $note->user->name }}</span>

                        <span class="text-sm text-gray-500">
                            {{ $note->comments->count() }} <i class="fa-regular fa-comment"></i> 
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>