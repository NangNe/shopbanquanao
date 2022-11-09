<style type="text/css">
    .box {
        width: 400px;
        margin-left: 10px;
    }

    .container-2 {
        width: 400px;
        vertical-align: middle;
        white-space: nowrap;
        position: relative;
    }

    .container-2 input#search {
        width: 50px;
        height: 50px;

        background: #ffffff;
        border: 1px solid #000000;
        font-size: 11pt;
        float: left;
        color: #000000;
        padding-left: 50px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        color: rgb(0, 0, 0);

        -webkit-transition: width .55s ease;
        -moz-transition: width .55s ease;
        -ms-transition: width .55s ease;
        -o-transition: width .55s ease;
        transition: width .55s ease;

    }

    .container-2 input#search::-webkit-input-placeholder {
        color: #65737e;
    }

    .container-2 input#search:-moz-placeholder {
        /* Firefox 18- */
        color: #65737e;
    }

    .container-2 input#search::-moz-placeholder {
        /* Firefox 19+ */
        color: #65737e;
    }

    .container-2 input#search:-ms-input-placeholder {
        color: #65737e;
    }

    .container-2 .icon {
        position: absolute;
        top: 50%;
        margin-left: 12px;
        margin-top: 12px;
        z-index: 1;
        color: #494949;

    }

    /* ANIMATION EFFECTS */
    .container-2 input#search:focus,
    .container-2 input#search:active {
        outline: none;

    }

    .container-2:hover input#search {
        outline: none;
        width: 300px;
        height: 50px;
    }

    .container-2:hover .icon {
        color: #000000;
    }

</style>


<marquee width="87%" direction="left" height="20px">
    <p style="color: black"><b>----- Gucci brand - The power symbol of the world fashion village ----- Complimentary
            Premium Express Shipping Within 2-3 Business Days ----- Gucci brand - The power symbol of the world fashion
            village ----- Complimentary Premium Express Shipping Within 2-3 Business Days ----- </b></p>
</marquee>
<header id="header">
    <!--header-->
    <div class="header_top" data-aos="fade-right">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +0352893091</a></li>
                            <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope"></i>
                                    nvnang.20it1@vku.udn.vn</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/hinangne.3091"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/nang.nkv/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle" data-aos="fade-left">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="btn-group">
                        <div class="logo pull-left" style="margin-top: 3px">
                            <a href="{{ URL::to('/') }}"><img src="{{ asset('public/frontend') }}/images/gucci1.png"
                                    alt="" style="width:160px;height:40px;"></a>
                        </div>
                        {{-- <div class="btn-group" style="margin-left: 10px">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div> --}}


                    </div>
                </div>
                <div class="col-sm-4">
                    <form action="{{ URL::to('/tim-kiem') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="box">
                            <div class="container-2">
                                <span class="icon"><i class="fa fa-search fa-2x" style="height: 40px;
                                    width: 40px;"></i></span>
                                <input type="search" id="search" name="keywords_submit"
                                    placeholder="  Type to search..." />
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-sm-6">

                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav" style="margin-top: 5px; margin-right: 10px">

                            <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){ 
                                 ?>
                            <li><a href="{{ URL::to('/checkout') }}"><i class="fa fa-cc-visa fa-lg"></i> Thanh
                                    toán</a>
                            </li>

                            <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>
                            <li><a href="{{ URL::to('/payment') }}"><i class="fa fa-crosshairs fa-lg"></i> Thanh
                                    toán</a></li>
                            <?php 
                                }else{
                                ?>
                            <li><a href="{{ URL::to('/login-checkout') }}"><i class="fa fa-cc-visa fa-lg"></i>
                                    Thanh
                                    toán</a></li>
                            <?php
                                 }
                                ?>


                            <li><a href="{{ URL::to('/gio-hang') }}"><i
                                        class="fa fa-shopping-cart fa-lg"></i>{{-- Giỏ hàng --}}</a>
                            </li>
                            <?php
                                   $customer_id = Session::get('customer_id');
                                   //$customer_name = Session::get('customer_name');
                                   if($customer_id!=NULL){ 
                                 ?>
                            <li><a href="{{ URL::to('/logout-checkout') }}"><i class=" fa fa-sign-in fa-lg"></i> Đăng xuất
                                </a></li>
                            <li><a href="{{ URL::to('/taikhoan') }}"><i class=" fa fa-user fa-lg"></i>Profile
                                {{--     {{ Session::get('customer_name') }}  --}}</a></li>
                                    


                            <?php
                            }else{
                                 ?>
                            <li><a href="{{ URL::to('/login-checkout') }}"><i
                                        class="fa fa-lock fa-lg"></i>{{-- Đăng nhập --}}</a>
                            </li>
                            <?php 
                             }
                                 ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom" id="myHeader">
        <!--header-bottom-->
        <div class="container ">
            <div class="row">
                <div class="col-sm-12">
                    {{-- <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div> --}}
                    <div class="mainmenu pull-left" style="margin-left: 20%;">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li style="padding-top:15px"><a href="{{ URL::to('/trang-chu') }}"
                                    class="active">Home</a></li>
                            {{-- <li class="dropdown" style="padding-top:15px"><a
                                    href="{{ URL::to('/product') }}">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::to('/product') }}">Sản phẩm</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Cặp%20Đôi') }}">Đồ Đôi</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Women') }}">Đồ Nữ</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/MEN') }}">Đồ Nam</a></li>
                                    <li><a href="{{ URL::to('/show-cart') }}">Cart</a></li>
                                    <li><a href="{{ URL::to('/login-checkout') }}">Login</a></li>
                                </ul>
                            </li> --}}
                            <li class="dropdown" style="padding-top:15px"><a
                                    href="#">Đồ Nam<i
                                        class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Áo%20Nam') }}">Áo</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Quần') }}">Quần </a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Túi%20Xách') }}">Túi Xích</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Giày%20Nam') }}">Giày</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Phụ%20kiện%20Nam') }}">Phụ Kiện</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" style="padding-top:15px"><a
                                    href="#">Đồ Nữ<i
                                        class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Áo%20Nữ') }}">Áo</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Váy') }}">Dress </a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Túi%20Xách') }}">Túi Xích</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Giày%20nữ') }}">Giày</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Phụ%20kiện') }}">Phụ Kiện</a></li>
                                </ul>
                            </li>
                            <div class="logo pull-left">
                                <a href="{{ URL::to('/') }}"><img
                                        src="{{ asset('public/frontend') }}/images/logo3.png" alt=""
                                        style="width:160px;height:50px;"></a>
                            </div>
                            <li class="dropdown" style="padding-top:15px"><a
                                    href="{{ URL::to('/thuong-hieu-san-pham/Trang%20Sức') }}">Trang Sức<i
                                        class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Nhẫn') }}">Nhẫn</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Dây%20chuyền') }}">Dây Chuyền </a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Vòng%20Tay') }}">Vòng Tay</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Bông%20Tai') }}">Hoa Tai</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" style="padding-top:15px"><a
                                    href="#">Sắc Đẹp<i
                                        class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Nước%20Hoa%20Nam') }}">Nước Hoa Nam</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Nước%20Hoa') }}">Nước Hoa Nữ</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Son') }}">Son Môi</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Đồ%20Đôi') }}">Đồ Đôi</a></li>
                                </ul>
                            </li>
                            <li style="padding-top:15px"><a href="{{ URL::to('/contact') }}">Liên hệ</a></li>
                            {{-- <li style="padding-top:15px"><a href="{{ URL::to('/contact') }}">Giới thiệu</a></li> --}}

                        </ul>
                    </div>
                </div>
                {{-- <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div> --}}

            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<!--/header-->
