    @include('partials.header')

    <!-- =============================================== -->

    @include('partials.sidebar')

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @yield('content')

    </div>
    <!-- /.content-wrapper -->

    @include('partials.footer')