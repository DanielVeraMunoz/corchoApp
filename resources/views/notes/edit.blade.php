<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Editar nota</h1>
            
            <form action="{{ route('notes.update', $note->id) }}" method="POST" class="bg-green-100 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-4">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" 
                    class="block text-gray-700 text-sm font-bold mb-2">Título:</label>
                    
                    <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                    <textarea name="description" id="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                </div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
            </form>

        </div>
    </div>
</x-app-layout>