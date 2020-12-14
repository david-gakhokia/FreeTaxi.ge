<!DOCTYPE html>
<html lang="ge">
 
    <!-- start Head Area -->
    @include('layout.head')
    <!-- End Head Area -->

<body>
    <div class="preloader" style="display: none;"></div><!-- /.preloader -->
    <div class="page-wrapper">
        <!-- start Header Area -->
        @include('layout.header')
        <!-- End Header Area -->

        <!-- Start Main Content  -->
        @yield('content')
        <!-- // End Main Content  -->

        <!-- start Footer Area -->
        @include('layout.footer')
        <!-- End Footer Area -->


        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- /.scroll-to-top -->
    </div><!-- /.page-wrapper -->

        <!-- start js Area -->
        @include('layout.js')
        <!-- End js Area -->
</body>
</html>