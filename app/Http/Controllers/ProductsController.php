<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::query()->orderBy('name')->get();
        $successMessage = session('message.success');
        return view('products.index')
            ->with('products', $products)
            ->with('successMessage', $successMessage);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $produto = Product::create($request->all());
        return to_route('products.index')
            ->with('message.success', "Produto: \"{$produto->name}\" adicionado com sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show')
            ->with('id', $product->id)
            ->with('name', $product->name)
            ->with('price', $product->price)
            ->with('description', $product->description)
            ->with('stored', $product->stored);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit')
            ->with('id', $product->id)
            ->with('name', $product->name)
            ->with('price', $product->price)
            ->with('description', $product->description)
            ->with('stored', $product->stored);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product, StoreProductRequest $request)
    {
        $product->fill($request->all());
        $product->save();
        return to_route('products.index')
            ->with('message.success', "Produto: \"{$product->name}\" atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index')
            ->with('message.success', "Produto: \"{$product->name}\" excluído com sucesso!");
    }
}
