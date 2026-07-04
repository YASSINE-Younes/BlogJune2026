<!DOCTYPE html>
<html lang="en">



<!--================START HEAD =================-->
@include('theme.partials.head')
<!--================END HEAD a =================-->


<body>
    <!--================Header Menu Area =================-->
    @include('theme.partials.header')
    <!--================Header Menu Area =================-->

 
           @yield('content')

    <!--================ Start Footer Area =================-->
    @include('theme.partials.footer')
    <!--================ End Footer Area =================-->




    <!--================ Start scripts =================-->
    @include('theme.partials.scripts')
    <!--================ End scipts  =================-->

</body>

</html>
