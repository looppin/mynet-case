<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/common/backend/vendors/feather/feather.css">
    <link rel="stylesheet" href="/common/backend/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/common/backend/vendors/css/vendor.bundle.base.css">
    @yield('css')
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <script src="https://kit.fontawesome.com/bd3db7c109.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/common/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/common/backend/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/common/backend/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/common/backend/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/common/backend/images/favicon.png" />

    {{--    Alertify --}}
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!--
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>


</head>
<body>/common/backend/
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="{{route('admin.index')}}"><img src="/common/backend/images/mynet-logo.png" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="{{route('admin.index')}}"><img src="/common/backend/images/logo-mini.png" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="/common/backend/images/faces/face28.jpg" alt="profile"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="{{route('user.edit',Auth::user()->id)}}">
                            <i class="ti-settings text-primary"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="{{route('admin.logout')}}">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.index')}}">
                        <i class="icon-grid menu-icon"></i>
                        <span class="menu-title">Ana Sayfa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class=" menu-icon fa fa-address-book"></i>
                        <span class="menu-title">Kişiler</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('person.index')}}">Listele</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('person.create')}}">Yeni Ekle</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
           @yield('content')
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. <a href="https://www.berksoroglu.com/" target="_blank">Berk Soroğlu</a> tarafından Mynet için hazırlanmıştır. Tüm hakları saklıdır.</span>

                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="/common/backend/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/common/backend/vendors/chart.js/Chart.min.js"></script>
<script src="/common/backend/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="/common/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="/common/backend/js/dataTables.select.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/common/backend/js/off-canvas.js"></script>
<script src="/common/backend/js/hoverable-collapse.js"></script>
<script src="/common/backend/js/template.js"></script>
<script src="/common/backend/js/settings.js"></script>
<script src="/common/backend/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="/common/backend/js/dashboard.js"></script>
<script src="/common/backend/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->

@yield('js')

@if(session()->has('success'))
    <script>alertify.success('{{ session('success') }}')</script>
@endif

@if(session()->has('error'))
    <script>alertify.error('{{ session('error') }}')</script>
@endif

@foreach($errors->all() as $error)
    <script>alertify.error('{{ $error }}')</script>
@endforeach

</body>

</html>

