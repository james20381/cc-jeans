<!DOCTYPE html>
<html lang="en">
<head>

    @include('partials._head')

</head>
<body id="page-top">

    <header>

        @yield('header-content')

    </header>

    <main>

        @yield('main-content')

    </main>

    <footer>

        @yield('footer')
        
    </footer>

    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>
