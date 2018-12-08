<html>
<head>
    <title>Admin - @yield('title')</title>

    @include('admin.includes.styleFiles')
</head>
<body id="page-top">
    @include('admin.includes.navbar')
    <div class="" id="wrapper">
        @include('admin.includes.sidebar')

        @yield('content')
    </div>
    <!-- Sticky Footer -->
    <footer class="page-footer teal ">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
          </div>
      </div>
  </footer>
  @include('admin.includes.scriptFiles')
</body>
</html>