<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categories
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('categories.create') }}"
               class="bg-blue-500 text-white px-4 py-2 rounded">
                + Create Category
            </a>

            <div class="mt-4 bg-white shadow overflow-hidden rounded-lg">
                <table class="w-full">
                    <thead>
                        <tr class="border-b">
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Name</th>
                            <th class="p-3 text-left">Slug</th>
                            <th class="p-3 text-left">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($categories as $category)
                            <tr class="border-b">
                                <td class="p-3">{{ $category->id }}</td>
                                <td class="p-3">{{ $category->name }}</td>
                                <td class="p-3">{{ $category->slug }}</td>
                                <td class="p-3 flex gap-2">



                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
