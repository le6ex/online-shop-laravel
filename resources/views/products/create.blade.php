<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Create Product</h2>
    </x-slot>

    <div class="max-w-3xl mx-auto mt-6 bg-white p-6 rounded shadow">

        <form method="POST" action="{{ route('products.store') }}" class="space-y-4">
            @csrf

            <div>
                <label>Name</label>
                <input name="name" class="w-full border p-2 rounded">
            </div>

            <div>
                <label>Price</label>
                <input name="price" class="w-full border p-2 rounded">
            </div>

            <div>
                <label>Description</label>
                <textarea name="description" class="w-full border p-2 rounded"></textarea>
            </div>

            <div>
                <label>Category</label>
                <select name="category_id" class="w-full border p-2 rounded">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Save
            </button>
        </form>

    </div>
</x-app-layout>
