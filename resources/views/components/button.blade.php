<button 
    @isset($submit)type="{{ $submit }}"@endisset 
    @isset($color)class="btn btn-{{ $color }}"@endisset 
    @isset($onclick)onclick="{{ $onclick }}"@endisset
    >
    @isset($buttontitle){{ $buttontitle }}@endisset
</button>