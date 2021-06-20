@extends('layouts.master')
@section('title', 'Cart')
@section('header-content')

    @include('partials._navbar')
    @include('partials._breadcrumbs')

@endsection

@section('main-content')

    <section id="product-img-w-details">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
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