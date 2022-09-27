<!DOCTYPE html>
<html lang="en">
@include('mbm.pms.backend.layouts.head')
<body>
    <!------------------------------------------------------------------------------------------------>
    @include('mbm.pms.backend.layouts.pre-loader')
    <!-- WRAPPER ------------------------------------------------------------------------------------->
    <div id="app">
        <!-- Wrapper Start -->
        <div class="wrapper">
            <!------------------------------------------------------------------------------------------------>
            @include('mbm.pms.backend.menus.left-menu')
            <!------------------------------------------------------------------------------------------------>
            <!-- Page Content  -->
            <div id="content-page" class="content-page">
                @include('mbm.pms.backend.menus.header-menu')
                <!------------------------------------------------------------------------------------------------>
                <main class="">
                  <div id="main-body" class="container-fluid">
                    @yield('main-content')
                  </div>
                </main>
                <!------------------------------------------------------------------------------------------------>
                @include('mbm.pms.backend.layouts.footer')
            </div>
            <div class="app-loader">
                <i class="fa fa-spinner fa-spin"></i>
            </div>
        </div>
        <!-- END WRAPPER --------------------------------------------------------------------------------->
    </div>
    <!------------------------------------------------------------------------------------------------>
    @include('mbm.pms.backend.layouts.script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('page-script')
    @include('mbm.pms.backend.layouts.toster-script')
    @include('mbm.pms.backend.layouts.tools')
</body>

</html>
