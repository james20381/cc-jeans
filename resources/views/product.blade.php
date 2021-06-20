@extends('layouts.master')
@section('title', $product->name)
@section('header-content')

    @include('partials._navbar')
    @include('partials._breadcrumbs')

@endsection

@section('main-content')

    <section id="product-img-w-details">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="#"><img src="{{ asset("/img/products/".$product->slug.".jpg") }}" class="img-fluid">
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="card mt-6 border-0" style="">
                        <div class="card-body">
                            <h5 class="card-title mb-5" style="font-size: 3rem; font-weight: 700;">{{ $product->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->details }}</h6>
                            <p class="card-text mb-3" style="font-weight: 700; font-size: 2rem;">{{ $product->presentPrice() }}</p>
                            <p class="card-text">{{ $product->longDescription }}</p>                           
                            <a class="btn btn-secondary btn-lg mt-5" href="#" role="button">Add to Cart</a>                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="might-also-like">
        <h1 class="text-center mb-8">You Might Also Like</h1>
        @include('partials._gallery')
    </section>

@endsection

@section('footer')

    <section id="footer">
        @include('partials._footer')
    </section>
    
@endsection