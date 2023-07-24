<x-layouts.layout title="Editando Produto">
    <x-breadcrumb title="Edição de produto"></x-breadcrumb>
    <x-product_form 
        url="{{ route('products.update', $id) }}" 
        method="PUT"
        buttontitle="Atualizar" 
        name="{{ $name }}" 
        price="{{ $price }}" 
        description="{{ $description }}" 
        stored="{{ $stored }}">
    </x-product_form>
</x-layouts.layout>