<figure>
    <div class="container">           
        <div class="row mb-7">
            @foreach($products as $product)
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <div class="card border-0">
                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ asset("/img/products/".$product->slug.".jpg") }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>  
                        <p class="card-text">{{ $product->mediumDescription }}</p>
                        <p class="card-text"><small class="text-muted">{{ $product->presentPrice() }}</small></p>
                    </div></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</figure>