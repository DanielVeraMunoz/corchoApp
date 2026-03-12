<x-app-layout>

    <div class="py-20 bg-orange-50 min-h-screen flex  sm:justify-center items-center pt-6 sm:pt-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-gray-950 shadow-sm p-6 w-96 md:w-[520px]">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("Hola de nuevo, " . auth()->user()->name . "!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
