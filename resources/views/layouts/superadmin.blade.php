<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/nazox/layouts/vertical/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 May 2021 18:44:21 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Dashboard | Nazox - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/admin/')}}/images/favicon.ico">

    <!-- jquery.vectormap css -->
    <link href="{{asset('assets/admin/')}}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{asset('assets/admin/')}}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('assets/admin/')}}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/admin/')}}/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/admin/')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/admin/')}}/css/app-dark.min.css" rel="stylesheet" type="text/css" />
    @yield('css')
</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/admin/')}}/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{asset('assets/admin/')}}/images/logo-dark.png" alt="" height="20">
                                </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/admin/')}}/images/logo-sm-light.png" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{asset('assets/admin/')}}/images/logo-light.png" alt="" height="20">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="ri-menu-2-line align-middle"></i>
                </button>


            </div>

            <div class="d-flex">


                <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{asset('assets/admin/')}}/images/users/avatar-2.jpg"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ml-1">Kevin</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="ri-user-line align-middle mr-1"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle mr-1"></i> My Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right mt-1">11</span><i class="ri-settings-2-line align-middle mr-1"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle mr-1"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle mr-1 text-danger"></i> Logout</a>
                    </div>
                </div>


            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="{{route('superadmin.dashboard')}}" class="waves-effect">
                            <i class="ri-dashboard-line"></i><span class="badge badge-pill badge-success float-right">3</span>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('superadmin.general.setting')}}" class=" waves-effect">
                            <i class="ri-calendar-2-line"></i>
                            <span>General Setting</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('superadmin.ticket.management')}}" class=" waves-effect">
                            <i class="ri-chat-1-line"></i>
                            <span>Ticket Management</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('superadmin.product.management')}}" class=" waves-effect">
                            <i class="ri-chat-1-line"></i>
                            <span>Product Management</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-store-2-line"></i>
                            <span>Ecommerce</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ecommerce-products.html">Products</a></li>
                            <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                            <li><a href="ecommerce-orders.html">Orders</a></li>
                            <li><a href="ecommerce-customers.html">Customers</a></li>
                            <li><a href="ecommerce-cart.html">Cart</a></li>
                            <li><a href="ecommerce-checkout.html">Checkout</a></li>
                            <li><a href="ecommerce-shops.html">Shops</a></li>
                            <li><a href="ecommerce-add-product.html">Add Product</a></li>
                        </ul>
                    </li>



                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

               @yield('superadmin')

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Nazox.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('assets/admin/')}}/libs/jquery/jquery.min.js"></script>
<script src="{{asset('assets/admin/')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/admin/')}}/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('assets/admin/')}}/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('assets/admin/')}}/libs/node-waves/waves.min.js"></script>


<!-- jquery.vectormap map -->
<script src="{{asset('assets/admin/')}}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('assets/admin/')}}/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

<!-- Required datatable js -->
<script src="{{asset('assets/admin/')}}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/admin/')}}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="{{asset('assets/admin/')}}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets/admin/')}}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="{{asset('assets/admin/')}}/js/app.js"></script>


@yield('js')


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('layouts.message')
</body>

<!-- Mirrored from themesdesign.in/nazox/layouts/vertical/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 May 2021 18:45:21 GMT -->
</html>
