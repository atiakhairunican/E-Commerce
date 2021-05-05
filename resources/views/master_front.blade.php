<!DOCTYPE html>
<html lang="en">
<head>
    @include('front_end_partials.head')
</head>
<body>
    <!-- start header section -->
    @include('front_end_partials.header')
    <!-- end header section -->

    @yield('content')

    <!-- start footer -->
    @include('front_end_partials.footer')
    <!-- end footer -->

    <!-- start javascript -->
    @include('front_end_partials.javascript')
    <!-- end javascript -->

    @stack('scripts')
</body>
</html>