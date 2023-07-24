<x-layout title="Editando Produto">
    <x-breadcrumb title="Edição de produto"></x-breadcrumb>
    <x-product-form 
        url="{{ route('products.update', $id) }}" 
        method="PUT"
        buttontitle="Atualizar" 
        name="{{ $name }}" 
        price="{{ $price }}" 
        description="{{ $description }}" 
        stored="{{ $stored }}">
    </x-product-form>
</x-layout>