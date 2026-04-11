<x-app-layout>
    <x-slot name="header">
        <h2>Edit Category</h2>
    </x-slot>

    <div class="py-6 max-w-xl mx-auto">

        <form method="POST" action="{{ route('categories.update', $category) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <input type="text" name="name"
                       value="{{ $category->name }}"
                       class="w-full border rounded p-2">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="text" name="slug"
                       value="{{ $category->slug }}"
                       class="w-full border rounded p-2">
                @error('slug')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button class="bg-green-500 text-white px-4 py-2 rounded">
                Update
            </button>

        </form>

    </div>
</x-app-layout>