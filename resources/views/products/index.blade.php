<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold">Products</h2>

            <a href="{{route('products.create')}}"
               class="bg-blue-500 text-white px-4 py-2 rounded">
                + Create
            </a>
        </div>
    </x-slot>

    <div class="max-w-6xl mx-auto mt-6 bg-white p-6 rounded shadow">

        <table class="w-full border border-gray-200">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-3 border">#</th>
                    <th class="p-3 border">Name</th>
                    <th class="p-3 border">Price</th>
                    <th class="p-3 border">Category</th>
                    <th class="p-3 border">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($products as $product)
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">{{ $product->id }}</td>
                        <td class="p-3 border">{{ $product->name }}</td>
                        <td class="p-3 border">
                            {{ number_format($product->price, 2) }}
                        </td>
                        <td class="p-3 border">
                            {{ $product->category->name ?? '-' }}
                        </td>

                        <td class="p-3 border flex gap-2">
                            <a href="{{route('products.edit',$product->id)}}"
                               class="bg-yellow-400 px-3 py-1 rounded">
                                Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('products.destroy', $product) }}">
                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 text-white px-3 py-1 rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-3 text-center text-gray-500">
                            No products yet
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</x-app-layout>
