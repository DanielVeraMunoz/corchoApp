<x-app-layout>
    <div class="min-h-screen flex items-center justify-center py-12">
        <div class="bg-white border border-gray-950 shadow-sm p-6 w-96">
            
            <h1 class="text-xl font-bold text-gray-800 mb-5 text-center">Crear nota</h1>
            
            <form action="{{ route('notes.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Título:</label>
                    <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded p-2" required>
                </div>
                
                <div class="mb-4">
                    <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Categoría:</label>
                    <select name="category_id" id="category_id" class="w-full border border-gray-300 rounded p-2" required>
                        <option value="">Selecciona una categoría</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                    <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 rounded p-2" required></textarea>
                </div>
                
                <div class="flex justify-between">
                    <a href="{{ route('notes.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Publicar</button>
                </div>
            </form>
            
        </div>
    </div>
</x-app-layout>