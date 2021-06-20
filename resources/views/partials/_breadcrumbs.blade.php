<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if(Route::is('shop.index'))
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li>

        @elseif(Route::is('shop.show'))
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Shop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product</li>
        @endif
    </ol>
</nav>

