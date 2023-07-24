<div class="card col-12 col-md-6 justify-content-center">
    <div class="card-body">
        <div class="mb-5">
            <h5 class="card-title">Produto: {{ strtoupper($name) }}</h5>
            <p class="card-text">Descrição: {{ $description }}</p>
            <div class="my-2 text-end">
                <h6 class="card-title">Preço: @money($price)</h6>
                <h6 class="card-title">Quantidade em estoque: {{ $stored }}</h6>
            </div>
        </div>
        <div class="d-grid d-md-flex gap-2 justify-content-md-end">
            <x-button color="warning" buttontitle="Editar" onclick="location.href='{{ route('products.edit', $id) }}'"></x-button>
            <x-button_form
                type="submit"
                method="DELETE"
                color="danger" 
                buttontitle="Excluir"
                url="{{ route('products.destroy', $id) }}"
                ></x-button_form> 
        </div>
    </div>
</div>