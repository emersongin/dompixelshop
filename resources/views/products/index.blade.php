<x-layouts.layout title="Catálogo de Produtos">
    @isset($successMessage)
        <div class="alert alert-success" role="alert">
            {{ $successMessage }}
        </div>
    @endisset
    <div class="my-3 d-flex justify-content-between align-items-center">
        <x-button color="primary" buttontitle="Adicionar Produto" onclick="location.href='{{ route('products.create') }}'"></x-button>
    </div>
    <div class="list-group">
        @if (count($products))
            @foreach ($products as $product)
                <div class="row border p-2 bg-white">
                    <div class="col-12 col-md-9 align-self-center my-1 m-md-0">
                        <a href="/products/{{$product->id}}" class="text-decoration-none link-dark">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>{{ strtoupper($product->name) }}</div>
                                <div class="d-flex justify-content-between align-items-center gap-3">
                                    <div>preço: @money($product->price)</div>
                                    <div>estoque: {{ $product->stored }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end mt-3 mb-1 m-md-0 gap-1">
                        <x-button color="warning" buttontitle="Editar" onclick="location.href='{{ route('products.edit', $product->id) }}'"></x-button>
                        <x-button_form
                            type="submit"
                            method="DELETE"
                            color="danger" 
                            buttontitle="Excluir"
                            url="{{ route('products.destroy', $product->id) }}"
                            ></x-button_form> 
                    </div>
                </div>
            @endforeach
        @else
            ainda não existem produtos!
        @endif
    </div>
</x-layouts.layout>
