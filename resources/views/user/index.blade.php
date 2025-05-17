<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Recipe Results for "{{ $query }}"
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="GET" action="{{ route('user.index') }}">
                <input name="query" type="text" placeholder="Search recipes..." value="{{ $query }}" class="border p-2 rounded">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
            </form>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                @foreach ($recipes['results'] as $recipe)
                    <div class="border rounded p-4 shadow">
                        <h3 class="text-lg font-bold">{{ $recipe['title'] }}</h3>
                        <img src="{{ $recipe['image'] }}" alt="{{ $recipe['title'] }}" class="w-full mt-2 rounded">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
