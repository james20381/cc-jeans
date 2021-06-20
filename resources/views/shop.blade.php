@extends('layouts.master')
@section('title', 'Shop')
@section('header-content')
   
        @include('partials._navbar')
        @include('partials._breadcrumbs')
        
@endsection

@section('main-content')

    <section id="products-imgs">
        @include('partials._gallery')
    </section>
    
@endsection

@section('footer')

    <section id="footer">
        @include('partials._footer')
    </section>
    
@endsection