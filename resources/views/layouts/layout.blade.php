<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>SACHIO</title>
    <style>
        * {
            outline: solid 1px green;
            outline: solid 1px transparent;
        }

        .align-center {
            align-self: center;
        }
    </style>
    @yield('css')
</head>

<body>
    <div class="page ">
        <header class="page-header sticky-top">
            @include('layouts.navbar')
        </header><!-- end page wrapper -->
        <main class="page-content">
            @yield('content')


        </main><!-- end page content -->

        @include('layouts.stay_connected_with_us')

        <footer class="page-footer">
            @include('layouts.footbar')
        </footer><!-- end page footer -->
    </div><!-- end page -->
    <script src="assets/js/script.js"></script>
    <script>
       $('#nav-home').addClass('active');
   </script>
    @yield('scripts')
</body>

</html>
