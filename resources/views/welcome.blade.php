@extends('layouts.master')

@section('header-content')
   
    @include('partials._navbar')    
    @include('partials._carousel')
    <div id="carousel-blue-base" class="mb-7"></div>
  
@endsection

@section('main-content')

    <section  id="gallery-section" style="position: relative;">
        <div id="section-2-anchor" style="position: absolute; top: -8rem; left: 0; height: 6rem; width: 100%;"></div>        
        <div class="container mb-8 text-center">                
            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary btn-lg">Featured</button>
                <button type="button" class="btn btn-secondary btn-lg">On Sale</button>                               
            </div>            
        </div>        
        @include('partials._gallery')
        <div class="container text-center mb-8">
            <a class="btn btn-secondary btn-lg" href="{{ route('shop.index') }}" role="button">View More Products</a> 
        </div> 
    </section>

    <section id="about">
        <div id="section-3-anchor" style="position: absolute; top: -2rem; left: 0; height: 6rem; width: 100%;"></div>
        <div class="container">
            <div class="jumbotron text-white text-center">
                <h1 class="display-4 mb-5">About Us</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sed sunt, repellendus corrupti repudiandae adipisci.</p>
                <hr class="my-4">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati, veniam.</p>
                <a class="btn btn-secondary btn-lg mt-5" href="#" role="button">Learn More</a>
            </div>
        </div>
    </section>

    <section id="" class="vh-100" style="position: relative;">
            
    </section>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.949 7.063" height="26.694" width="26.262"><g><path d="M.114 7.006l3.36-6.72 3.36 6.72h0" fill="none" stroke="#fff" stroke-width=".255"/></g></svg>
    </a>

@endsection

@section('footer')

    <section id="footer">
        @include('partials._footer')
    </section>
    
@endsection


