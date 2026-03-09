<x-app-layout>
    <div class="min-h-screen flex items-center justify-center py-28">
        <div class="bg-white border border-gray-950 shadow-sm p-6 w-96 md:w-[520px]">
            
            <div class="flex items-center justify-between mb-4">
                
                <!-- Badge categoría -->
                <div class="mb-4">
                    <x-category-badge :category="$note->category" />
                </div>

                <!-- Autor y fecha -->
                <p class="text-sm text-gray-500 mb-6">
                    Por {{ $note->user->name }} · {{ $note->created_at->format('d/m/Y') }}
                </p>
            </div>
            
            <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $note->title }}</h1>
            
            <p class="text-gray-700 mb-8">{{ $note->description }}</p>
            
            <div class="border-b border-gray-300 mb-6"></div>
            
            <!-- Comentarios -->
            <h2 class="text-sm font-bold text-gray-800 mb-4">Comentarios ({{ $comments->count() }})</h2>
            
            @if($comments->count() > 0)
                <div class="space-y-4 mb-6">
                    @foreach($comments as $comment)
                        <div class="bg-gray-50 p-3 rounded">
                            <p class="font-bold text-sm text-gray-800">{{ $comment->user->name }}</p>
                            <p class="text-gray-700">{{ $comment->content }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 text-sm mb-6">No hay comentarios aún. ¡Sé el primero!</p>
            @endif
            
            <!-- Formulario nuevo comentario -->
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="note_id" value="{{ $note->id }}">
                <input type="hidden" name="user_id" value="1">
                
                <div class="mb-4">
                    <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Añadir comentario:</label>
                    <textarea name="content" id="content" rows="3" class="w-full border border-gray-300 rounded p-2" placeholder="Escribe tu comentario..." required></textarea>
                </div>
                
                <div class="flex justify-between">
                    <a href="{{ route('notes.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Comentar</button>
                </div>
            </form>
            
        </div>
    </div>
</x-app-layout>