<form method="post" class="d-grid" action="{{ $url }}">
    @csrf
    @isset($method)
        @method($method)
    @endisset
    <x-button 
        type="{{ $type }}" 
        color="{{ $color }}"
        buttontitle="{{ $buttontitle }}"
        >
    </x-button>
</form>
