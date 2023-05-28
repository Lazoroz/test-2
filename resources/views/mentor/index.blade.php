<x-app-layout>

    @foreach ($mentor as $m)
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 flex flex-col items-center bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $m->voornaam }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 flex flex-col items-center bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $m->klas }}
    </div>
    @endforeach
    
</x-app-layout>
