<x-layouts.layout title="Adicionando Produto">
    <x-breadcrumb title="Cadastro de produto"></x-breadcrumb>
        <x-product_form 
            url="{{ route('products.store') }}" 
            method="post" 
            buttontitle="Adicionar"
            name="{{ old('name') }}"
            price="{{ old('price') }}"
            stored="{{ old('stored') }}"
            description="{{ old('description') }}"
            >
        </x-product_form>
</x-layouts.layout>
