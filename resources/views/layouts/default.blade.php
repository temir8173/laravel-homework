<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>

    <header class="row">
        <div class="container">
            @include('includes.header')
        </div>
    </header>


            @yield('content')


    <footer class="row">
        <div class="container">
            @include('includes.footer')
        </div>
    </footer>

</body>
</html>