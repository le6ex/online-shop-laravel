<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Edit product</h2>
    </x-slot>

    <div class="max-w-3xl mx-auto mt-6 bg-white p-6 rounded shadow">

        <form method="POST" action="{{ route('products.update', $product) }}" class="space-y-4">
            @csrf
            @method('PUT')
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
            @if ($errors->any())
                <div style="color:red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                Save
            </button>
        </form>

    </div>
</x-app-layout>
