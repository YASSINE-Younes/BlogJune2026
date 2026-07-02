<!DOCTYPE html>
<html lang="en">



<!--================START HEAD =================-->
@include('theme.partials.head')
<!--================END HEAD a =================-->


<body>
    <!--================Header Menu Area =================-->
    @include('theme.partials.header')
    <!--================Header Menu Area =================-->

    <main class="site-main">

        <!--================Hero Banner start =================-->
        @include('theme.partials.hero')
        <!--================Hero Banner end =================-->


     
        @yield('content')
     
    </main>

    <!--================ Start Footer Area =================-->
    @include('theme.partials.footer')
    <!--================ End Footer Area =================-->




    <!--================ Start scripts =================-->
    @include('theme.partials.scripts')
    <!--================ End scipts  =================-->

</body>

</html>
