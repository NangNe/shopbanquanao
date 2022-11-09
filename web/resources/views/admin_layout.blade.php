<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NKV-Fashion ADMIN</title>
    <!-- loader-->
    <link href="{{ asset('public/backend/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('public/backend/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('public/backend/images/logo.png') }}">
    {{-- <link rel="icon" href="{{ asset('public/backend/images/favicon.ico') }}" type="image/x-icon"> --}}
    <!-- Vector CSS -->
    <!-- <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" /> -->
    <!-- simplebar CSS-->

    <link href="{{ asset('public/backend/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('public/backend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('public/backend/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('public/backend/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('public/backend/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('public/backend/css/app-style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <script src="{{ asset('public/backend/js/jquery2.0.3.min.js') }}"></script>
    {{-- <script src="{{ asset('public/backend/js/raphael-min.js') }}"></script>
    <script src="{{ asset('public/backend/js/morris.js') }}"></script> --}}

</head>

<body class="bg-theme bg-theme1">
    <section id="container">
        <!-- Start wrapper-->
        <div id="wrapper">

            <!--Start sidebar-wrapper-->
            <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
                <div class="brand-logo">
                    <a href="{{ URL::to('/dashboard') }}">
                        <img src="{{ asset('public/backend/images/logo1.png') }}" class="logo-icon"
                            alt="logo icon" style="width: 100px;height: 50px;">
                        <h5 class="logo-text">ADMIN</h5>
                    </a>
                </div>
                <ul class="sidebar-menu ">
                    <li class="sidebar-header">MAIN NAVIGATION</li>
                    <li>
                        <a href="{{ URL::to('/dashboard') }}">
                            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu">
                        <a href="javascript:showThongKeDonHang()">
                            <i class="fa fa-folder-o"></i>
                            <span>Thống kê Đơn hàng</span>
                            <i class="fa fa-plus" style="margin-left: 20px;" aria-hidden="true"></i>
                        </a>
                        <ul class="sidebar-menu menus thong-ke-don-hang-menus" style="display: none;">
                            <li><a href="{{ URL::to('/manage-order') }}">Quản lý đơn hàng</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-menu">
                        <a href="javascript:showMaGiamGia()">
                            <i class="fa fa-bolt"></i>
                            <span>Mã giảm giá</span>
                            <i class="fa fa-plus" style="margin-left: 70px;" aria-hidden="true"></i>
                        </a>
                        <ul class="sidebar-menu menus ma-giam-gia-menus" style="display: none;">
                            <li><a href="{{ URL::to('/insert-coupon') }}">Quản lý mã</a></li>
                            <li><a href="{{ URL::to('/list-coupon') }}">Liệt kê mã</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-menu">
                        <a href="javascript:showVanchuyen()">
                            <i class="fa fa-ambulance"></i>
                            <span>Vận chuyển</span>
                            <i class="fa fa-plus" style="margin-left: 75px;" aria-hidden="true"></i>
                        </a>
                        <ul class="sidebar-menu menus van-chuyen-menus" style="display: none;">
                            <li><a href="{{ URL::to('/delivery') }}">Quản lý vận chuyển</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-menu">
                        <a href="javascript:showDanhmuc()">
                            <i class="fa fa-list-ul"></i>
                            <span>Danh mục sản phẩm</span>
                            <i class="fa fa-plus" style="margin-left: 12px;" aria-hidden="true"></i>
                        </a>
                        <ul class="sidebar-menu menus danh-muc-menus" style="display: none;">
                            <li><a href="{{ URL::to('/add-category-product') }}">Thêm danh mục</a></li>
                            <li><a href="{{ URL::to('/all-category-product') }}">Liệt kê danh mục</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-menu">
                        <a href="javascript:showThuonghieu()">
                            <i class="fa fa-list-ul"></i>
                            <span>Nhóm sản phẩm</span>
                            <i class="fa fa-plus " style="margin-left: 40px;" aria-hidden="true"></i>
                        </a>
                        <ul class="sidebar-menu menus thuong-hieu-menus" style="display: none;">
                            <li><a href="{{ URL::to('/add-brand-product') }}">Thêm nhóm sản phẩm</a></li>
                            <li><a href="{{ URL::to('/all-brand-product') }}">Liệt kê nhóm</a>
                            </li>

                        </ul>
                    </li>

                    <li class="sidebar-menu">
                        <a href="javascript:showSanpham()">
                            <i class="fa fa-book"></i>
                            <span>Sản phẩm</span>
                            <i class="fa fa-plus" style="margin-left: 86px;" aria-hidden="true"></i>
                        </a>
                        <ul class="sidebar-menu menus san-pham-menus" style="display: none;">
                            <li><a href="{{ URL::to('/add-product') }}">Thêm sản phẩm</a></li>
                            <li><a href="{{ URL::to('/all-product') }}">Liệt kê sản phẩm</a></li>

                        </ul>
                    </li>
                    <li class="sidebar-menu">
                        <a href="javascript:showCustomer()">
                            <i class="fa fa-user"></i>
                            <span>User</span>
                            <i class="fa fa-plus" style="margin-left: 124px;" aria-hidden="true"></i>
                        </a>
                        <ul class="sidebar-menu menus customer-menus" style="display: none;">
                            <li><a href="{{ URL::to('/all-customer') }}">Liệt kê User</a></li>

                        </ul>
                    </li>
                </ul>

            </div>

            <header class="topbar-nav">
                <nav class="navbar navbar-expand fixed-top">
                    <ul class="navbar-nav mr-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link toggle-menu" href="javascript:void();">
                                <i class="icon-menu menu-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form class="search-bar">
                                <input type="text" class="form-control" placeholder="Enter keywords">
                                <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                            </form>
                        </li>
                    </ul>

                    <ul class="navbar-nav align-items-center right-nav-link">
                        <li class="nav-item dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                                data-toggle="dropdown" href="javascript:void();">
                                <i class="fa fa-envelope-open-o"></i></a>
                        </li>
                        <li class="nav-item dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                                data-toggle="dropdown" href="javascript:void();">
                                <i class="fa fa-bell-o"></i></a>
                        </li>
                        <li class="nav-item language">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                                data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                                <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                                <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                                <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                                <span class="user-profile"><img src="{{ asset('public/backend/images/logo.jpg') }}"
                                        class="img-circle" alt="user avatar"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item user-details">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="{{ asset('public/backend/images/logo.jpg') }}"
                                                    alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-2 user-title">NangNKV</h6>
                                                <p class="user-subtitle">nvnang.20it1@vku.udn.vn</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><a href="{{ URL::to('/logout') }}"><i
                                            class="icon-power mr-2"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>

            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
            <!--End Back To Top Button-->

            <!--Start footer-->
            <footer class="footer">
                <div class="container">
                    <div class="text-center">
                        Copyright © 2021 Dashtreme Admin
                    </div>
                </div>
            </footer>
            <!--End footer-->

            <!--start color switcher-->
            <div class="right-sidebar">
                <div class="switcher-icon">
                    <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
                </div>
                <div class="right-sidebar-content">

                    <p class="mb-0">Gaussion Texture</p>
                    <hr>

                    <ul class="switcher">
                        <li id="theme1"></li>
                        <li id="theme2"></li>
                        <li id="theme3"></li>
                        <li id="theme4"></li>
                        <li id="theme5"></li>
                        <li id="theme6"></li>
                    </ul>

                    <p class="mb-0">Gradient Background</p>
                    <hr>

                    <ul class="switcher">
                        <li id="theme7"></li>
                        <li id="theme8"></li>
                        <li id="theme9"></li>
                        <li id="theme10"></li>
                        <li id="theme11"></li>
                        <li id="theme12"></li>
                        <li id="theme13"></li>
                        <li id="theme14"></li>
                        <li id="theme15"></li>
                    </ul>

                </div>
            </div>
            <!--end color switcher-->

        </div>
        <section id="main-content">
            <section class="wrapper">
                @yield('admin_content')
            </section>
            <!-- footer -->
            {{-- <div class="footer">
            <div class="wthree-copyright" style="margin-bottom: 10px">
                <p>© 2021 | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div> --}}
            <!-- / footer -->
        </section>
    </section>
    <!--End wrapper-->
</body>
<script src="{{ asset('public/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/backend/js/popper.min.js') }}"></script>
<script src="{{ asset('public/backend/js/bootstrap.min.js') }}"></script>

<!-- simplebar js -->
<script src="{{ asset('public/backend/js/simplebar.js') }}"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('public/backend/js/sidebar-menu.js') }}"></script>
<!-- loader scripts -->

<!-- Custom scripts -->
<script src="{{ asset('public/backend/js/app-script.js') }}"></script>
<!-- Chart js -->

{{-- <script src="{{ asset('public/backend/js/Chart.min.js') }}"></script> --}}

<!-- Index js -->
{{-- <script src="{{ asset('public/backend/js/index.js') }}"></script> --}}


{{-- cũ --}}

<script src="{{ asset('public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('public/backend/js/scripts.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ asset('public/backend/js/jquery.scrollTo.js') }}"></script>
<script src="{{ asset('public/backend/ckeditor/ckeditor.js') }}"></script>


<script type="text/javascript">
    $(document).ready(function() {

        fetch_delivery();

        function fetch_delivery() {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{ url('/select-feeship') }}',
                method: 'POST',
                data: {
                    _token: _token
                },
                success: function(data) {
                    $('#load_delivery').html(data);
                }
            });
        }
        $(document).on('blur', '.fee_feeship_edit', function() {

            var feeship_id = $(this).data('feeship_id');
            var fee_value = $(this).text();
            var _token = $('input[name="_token"]').val();
            // alert(feeship_id);
            // alert(fee_value);
            $.ajax({
                url: '{{ url('/update-delivery') }}',
                method: 'POST',
                data: {
                    feeship_id: feeship_id,
                    fee_value: fee_value,
                    _token: _token
                },
                success: function(data) {
                    fetch_delivery();
                }
            });

        });
        $('.add_delivery').click(function() {

            var city = $('.city').val();
            var province = $('.province').val();
            var wards = $('.wards').val();
            var fee_ship = $('.fee_ship').val();
            var _token = $('input[name="_token"]').val();
            // alert(city);
            // alert(province);
            // alert(wards);
            // alert(fee_ship);
            $.ajax({
                url: '{{ url('/insert-delivery') }}',
                method: 'POST',
                data: {
                    city: city,
                    province: province,
                    _token: _token,
                    wards: wards,
                    fee_ship: fee_ship
                },
                success: function(data) {
                    fetch_delivery();
                }
            });


        });
        $('.choose').on('change', function() {
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            // alert(action);
            //  alert(matp);
            //   alert(_token);

            if (action == 'city') {
                result = 'province';
            } else {
                result = 'wards';
            }
            $.ajax({
                url: '{{ url('/select-delivery') }}',
                method: 'POST',
                data: {
                    action: action,
                    ma_id: ma_id,
                    _token: _token
                },
                success: function(data) {
                    $('#' + result).html(data);
                }
            });
        });
    })
</script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.replace('ckeditor3');
    CKEDITOR.replace('id4');
</script>

<!-- calendar -->
<script type="text/javascript" src="{{ asset('public/backend/js/monthly.js') }}"></script>
<script type="text/javascript">
    $(window).load(function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch (window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }
        $('#table').DataTable(); //datatableJS
    });
</script>

<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>




<script type="text/javascript">
    function showThongKeDonHang() {
        $('.thong-ke-don-hang-menus').show()
        $('.ma-giam-gia-menus').hide()
        $('.van-chuyen-menus').hide()
        $('.danh-muc-menus').hide()
        $('.san-pham-menus').hide()
        $('.thuong-hieu-menus').hide()
        $('.customer-menus').hide()
        // an may cai khac
    }

    function showMaGiamGia() {
        $('.ma-giam-gia-menus').show()
        $('.thong-ke-don-hang-menus').hide()
        $('.van-chuyen-menus').hide()
        $('.danh-muc-menus').hide()
        $('.san-pham-menus').hide()
        $('.thuong-hieu-menus').hide()
        $('.customer-menus').hide()
    }

    function showVanchuyen() {
        $('.van-chuyen-menus').show()
        $('.ma-giam-gia-menus').hide()
        $('.thong-ke-don-hang-menus').hide()
        $('.danh-muc-menus').hide()
        $('.san-pham-menus').hide()
        $('.thuong-hieu-menus').hide()
        $('.customer-menus').hide()
    }

    function showDanhmuc() {
        $('.danh-muc-menus').show()
        $('.ma-giam-gia-menus').hide()
        $('.thong-ke-don-hang-menus').hide()
        $('.van-chuyen-menus').hide()
        $('.san-pham-menus').hide()
        $('.thuong-hieu-menus').hide()
        $('.customer-menus').hide()
    }

    function showSanpham() {
        $('.san-pham-menus').show()
        $('.ma-giam-gia-menus').hide()
        $('.thong-ke-don-hang-menus').hide()
        $('.van-chuyen-menus').hide()
        $('.danh-muc-menus').hide()
        $('.thuong-hieu-menus').hide()
        $('.customer-menus').hide()
    }

    function showThuonghieu() {
        $('.thuong-hieu-menus').show()
        $('.ma-giam-gia-menus').hide()
        $('.thong-ke-don-hang-menus').hide()
        $('.van-chuyen-menus').hide()
        $('.danh-muc-menus').hide()
        $('.san-pham-menus').hide()
        $('.customer-menus').hide()
    }

    function showCustomer() {
        $('.customer-menus').show()
        $('.thuong-hieu-menus').hide()
        $('.ma-giam-gia-menus').hide()
        $('.thong-ke-don-hang-menus').hide()
        $('.van-chuyen-menus').hide()
        $('.danh-muc-menus').hide()
        $('.san-pham-menus').hide()

    }
</script>

</html>
