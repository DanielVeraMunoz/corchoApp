<x-app-layout>
    <div x-data="{ resolverOpen: {{ session()->has('resolver') || request('resolver') === 'open' ? 'true' : 'false' }} }" class="min-h-screen flex items-center justify-center py-28">
        <div class="bg-white border border-gray-950 shadow-sm p-6 w-96 md:w-[520px]">
            <div class="flex items-center justify-between mb-4">
                <!-- Badge categoría -->
                <div class="mb-4">
                    <x-category-badge :category="$note->category" />
                </div>
                <!-- Autor y fecha -->
                <div class="flex items-center">
                    <p class="text-sm text-gray-500 mb-6">Por&nbsp;</p>
                    <a href="{{ route('users.show', $note->user->id) }}" class="text-sm text-orange-500 mb-6">
                        {{ $note->user->name }}
                    </a>
                    <p class="text-sm text-gray-500 mb-6">&nbsp;· {{ $note->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
            <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $note->title }}</h1>
            <p class="text-gray-700 mb-5">{{ $note->description }}</p>

            @if($note->event_date)
                <p class="text-sm text-gray-500 mb-4">
                    {{ \Carbon\Carbon::parse($note->event_date)->format('d/m/Y H:i') }}
                </p>
            @endif

            <div class="border-b border-gray-300 mb-6"></div>
            <!-- Comentarios -->
            <h2 class="text-sm font-bold text-gray-800 mb-4">Comentarios ({{ $comments->count() }})</h2>
            @if($comments->count() > 0)
                <div class="space-y-4 mb-6">
                    @foreach($comments as $comment)
                        <div class="bg-gray-50 p-3 rounded">
                            <p class="font-bold text-sm text-gray-800">
                                {{ $comment->user->name }}
                                @if($comment->user->id === $note->user_id)
                                    <span class="text-xs text-orange-500">(autor/a)</span>
                                @endif
                            </p>
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
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <div class="mb-4">
                    <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Añadir comentario:</label>
                    <textarea name="content" id="content" rows="3" class="w-full border border-gray-300 rounded p-2" placeholder="Escribe tu comentario..." required></textarea>
                </div>
                <div class="flex justify-between items-center">
                    <!-- Resolver - a la izquierda (solo si es autor) -->
                    @if(auth()->id() === $note->user_id)
                        <button @click="resolverOpen = true" type="button" class="border-2 border-orange-500 text-orange-500 px-4 py-2 rounded font-bold hover:bg-orange-50">
                            Resolver
                        </button>
                    @else
                        <div></div>
                    @endif
                    <!-- Volver + Comentar -->
                    <div class="flex gap-2">
                        <a href="{{ route('notes.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Comentar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal resolver -->
        <div x-show="resolverOpen" x-transition.opacity style="display: none;" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg w-full max-w-md mx-4">
                <h2 class="text-xl font-bold text-gray-800 mb-4">¿A quién quieres agradecer?</h2>
                
                @forelse($commentUsers as $user)
                    <div class="flex justify-between items-center p-3 border-b border-gray-200">
                        <div>
                            <span class="font-bold text-gray-800">{{ $comment->user->name }}</span>
                            @if($comment->user->id === $note->user_id)
                                <span class="text-xs text-orange-500">(autor/a)</span>
                            @endif
                        </div>
                        <form action="{{ route('thanks.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="note_id" value="{{ $note->id }}">
                            <input type="hidden" name="recipient_id" value="{{ $comment->user->id }}">
                            <button type="submit">
                                <i class="{{ $thanks->contains('recipient_id', $comment->user->id) ? 'fa-solid' : 'fa-regular' }} fa-heart text-2xl {{ $thanks->contains('recipient_id', $comment->user->id) ? 'text-orange-500' : 'text-gray-400' }}"></i>
                            </button>
                        </form>
                    </div>
                @empty
                    <p class="text-gray-500">No hay comentarios para agradecer.</p>
                @endforelse

                <form action="{{ route('notes.update', $note->id) }}" method="POST" class="mt-4">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="is_completed" value="1">
                    <button type="submit" class="w-full bg-gray-800 text-white py-2 rounded font-bold">
                        Cerrar nota
                    </button>
                </form>
                <button @click="resolverOpen = false" class="mt-3 w-full text-gray-500 text-center">
                    Volver
                </button>
            </div>
        </div>
    </div>
</x-app-layout>