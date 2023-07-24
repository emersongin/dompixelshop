<div class="row justify-content-center">
    <form method="post" action="{{ $url }}" class="row col-12 col-md-6 g-3">
        @csrf
        @isset($method)
            @method($method)
        @endisset
        <div class="form-floating col-12">
            <input type="text" class="form-control" id="name" name="name" placeholder="informe o nome do produto" @isset($name)value="{{ $name }}"@endisset required>
            <label for="name" class="mx-1">Nome do produto</label>
        </div>
        <div class="form-floating col-md-6">
            <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" max="9999999999999" placeholder="informe o preço do produto" @isset($price)value="{{ $price }}"@endisset required>
            <label for="price" class="mx-1">Preço do produto</label>
        </div>
        <div class="form-floating col-md-6">
            <input type="number" class="form-control" id="stored" name="stored" min="0" max="9999" placeholder="informe o estoque mínimo" @isset($stored)value="{{ $stored }}"@endisset required>
            <label for="stored" class="mx-1">Quantidade em estoque</label>
        </div>
        <div class="form-floating col-12">
            <textarea class="form-control" placeholder="informe a descrição do produto" id="description" name="description" style="height: 100px">@isset($description){{ $description }}@endisset</textarea>
            <label for="description" class="mx-1">Descrição do produto</label>
        </div>
        <div class="d-grid d-md-flex gap-2 justify-content-md-end">
            <x-button type="submit" color="primary" buttontitle="{{ $buttontitle }}"></x-button>
        </div>
    </form>
</div>