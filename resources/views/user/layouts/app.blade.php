<html>
    <head>
        <title>Agriculture - @yield('title')</title>

        @include('user.includes.styleFiles')
    </head>
    <body>
            @include('user.includes.navabar')
        <div class="container-fluid">
            
            
            @yield('content')
            
        </div>
        @include('user.includes.footer')
        @include('user.includes.scripts')
    </body>
</html>