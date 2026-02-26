<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Notas</h1>
            @foreach ($notes as $note)
            <div>
                <h2>{{ $note->title }}</h2>
                <p>{{ $note->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>