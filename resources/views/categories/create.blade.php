<x-app-layout>
    <x-slot name="header">
        <h2>Create Category</h2>
    </x-slot>

    <div class="py-6 max-w-xl mx-auto">

        <form method="POST" action="{{ route('categories.store') }}" class="space-y-4">
            @csrf

            <div>
                <input type="text" name="name" placeholder="Name"
                       class="w-full border rounded p-2">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                Save
            </button>

        </form>

    </div>
</x-app-layout>
