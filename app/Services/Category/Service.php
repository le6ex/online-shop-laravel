<?php

namespace App\Services\Category;

use App\Models\Category;
use Illuminate\Support\Str;

class Service
{
    public function create(array $data): Category
    {
        return Category::create($data);
    }
    public function update(Category $category, array $data): Category
    {
        $category->update($data);

        return $category;
    }

    public function delete(Category $category): void
    {
        $category->delete();
    }
}
