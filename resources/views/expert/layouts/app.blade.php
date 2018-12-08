<html>
    <head>
        <title>Expert - @yield('title')</title>

        @include('expert.includes.styleFiles')
    </head>
    <body>
            @include('expert.includes.navabar')
        <div class="container-fluid">
            
            
            @yield('content')
            
        </div>
        @include('expert.includes.footer')
        @include('expert.includes.scripts')
    </body>
</html>