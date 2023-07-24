<x-layouts.layout title="Produto">
    <x-breadcrumb title="Visualização de produto"></x-breadcrumb>
    <div class="row justify-content-center">
        <x-card
            id="{{ $id }}"
            name="{{ $name }}"
            price="{{ $price }}"
            stored="{{ $stored }}"
            description="{{ $description }}"
        ></x-card>
    </div>
</x-layouts.layout>