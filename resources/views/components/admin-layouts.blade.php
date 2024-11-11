<!DOCTYPE html>
<html lang="en">
@include('admin_includes.head')
<body>
     <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <div id="main-wrapper">

        @include('admin_includes.header')

        @include('admin_includes.sidebar')

        <div class="content-body">
            {{ $slot }}
        </div>

         <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>

    @include('admin_includes.scripts')
    
</body>
</html>