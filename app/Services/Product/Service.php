<?php

namespace App\Services\Product;



use App\Models\Product;



class Service
{
    public function create(array $data): Product
    {

        return Product::create($data);
    }

    public function store()
    {

    }

    public function update(Product $product, array $data): Product
    {
        $product->update($data);

        return $product;
    }

    public function delete(Product $product): bool
    {
        return $product->delete();
    }


}
