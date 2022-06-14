<!doctype html>
<html lang="en">

@include('frontend.layout.head')

<body>


   <!-- Header -->

   @include('frontend.layout.header')

   <!-- end Header -->

   @yield('main-content')

   <!-- footer -->

   @include('frontend.layout.footer')

   <!-- end footer -->



    <!-- end main wrapper  -->

    @include('frontend.layout.foot')
</body>

</html>
