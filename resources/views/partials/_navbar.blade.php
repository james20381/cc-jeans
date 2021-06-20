<nav class="fixed-top">
    <div id="nav-extension">
        <ul class="" id="nav-extension-ul">
            <li class="nav-extension-li px-3"><a href="#">Stores</a></li>
            <li class="nav-extension-li px-3"><a href="#">FAQ's</a></li>
            <li class="nav-extension-li px-3"><a href="#">Newsletter</a></li>
            <li class="nav-extension-li px-3"><a href="#">Contact</a></li>
        </ul>
    </div>  
    <div id="mainNav" class="navbar navbar-expand-lg navbar-light bg-light shadow">       
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-weight: bold;">CC Jeans
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.307 15.967" height="60.347" width="61.635"><g><g><g><path d="M13.21 15.853L.133 8.323 13.192.76z" fill="#162d50" stroke="#000" stroke-width=".132"/><path d="M16.308 12.553l-14.512.03L9.026 0z" fill="#f46036"/></g></g><path d="M10.273 9.935L8.94 9.252l-1.318.709.24-1.478L6.78 7.45l1.478-.23.65-1.348.675 1.336 1.483.2-1.062 1.056z" fill="#fff"/></g></svg>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @if (Route::is('welcome'))
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#section-2-anchor">Featured</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#section-3-anchor">About Us</a>
                </li> 
                @else
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('welcome') }}">Home</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('cart.index') }}">Cart</a>
                </li>          
                @endif               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                    </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('shop.index') }}">All Products</a>
                    <a class="dropdown-item" href="#">Men's</a>
                    <a class="dropdown-item" href="#">Women's</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </li>                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>    
    </div>
</nav>
