<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.head')

</head>

<body class="theme-color-three">

    <div class="page-wrapper">

    <!-- Header Area -->
@include('frontend.layouts.header')
    <!-- Header Area End -->

@yield('content')

    <!-- Footer Area -->
@include('frontend.layouts.footer')
    <!-- Footer Area -->
    </div>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-arrow-1"></span></div>


@include('frontend.layouts.script')


</body>
</html>
