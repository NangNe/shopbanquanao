@extends('admin_layout')
@section('admin_content')

    <section class="wrapper">
        <!-- //market-->
        <div class="content-wrapper">
                <!--Start Dashboard Content-->


                <style type="text/css">
                    .wrapper {
                        display: inline-block;
                        margin-top: 10px;
                        padding: 15px;
                        width: 100%;
                    }

                    .market-update-block.clr-block-2 {
                        background: #ff0033;
                        box-shadow: 0px 4px 8px 0px #5c5c5c;
            border-radius: 1px
                    }

                    .market-update-block.clr-block-2:hover {
                        background-color: yellow;

                    }

                    .market-update-block.clr-block-1:hover {
                        background-color: yellow;

                    }

                    .market-update-block.clr-block-3:hover {
                        background-color: yellow;

                    }

                    .market-update-block.clr-block-4:hover {
                        background-color: yellow;

                    }

                    .market-update-block.clr-block-1 {
                        background: #53d769;
                        box-shadow: 0px 4px 8px 0px #5c5c5c;
            border-radius: 1px
                    }

                    .market-update-block.clr-block-4 {
                        background: #2a2727;
                        box-shadow: 0px 4px 8px 0px #5c5c5c;
            border-radius: 1px
                    }

                    .market-update-block {
                        padding: 2em 2em;
                    }

                    .market-update-block.clr-block-3 {
                        background: #147efb;
                        box-shadow: 0px 4px 8px 0px #5c5c5c;
            border-radius: 1px
                    }

                </style>
                <div class="row">
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-2" onclick="window.location.href='{{ URL::to('/all-product') }}'">
                            <div class="col-md-12 market-update-left">
                                <p style="font-size: 25px" class="text-white mb-0">{{ $count_product }} <span
                                        class="float-right"><i class="fa fa-product-hunt fa-2x"></i></span></p>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p style="font-size: 16px" class="mb-0 text-white small-font">Total Product<span
                                        class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-1" onclick="window.location.href='{{ URL::to('/manage-order') }}'">
                            <div class="col-md-12 market-update-left">
                                <p style="font-size: 25px" class="text-white mb-0">{{ $count_order }} <span
                                        class="float-right"><i class="fa fa-shopping-cart fa-2x"></i></span></p>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p style="font-size: 16px" class="mb-0 text-white small-font">Total Orders<span
                                        class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-3" onclick="window.location.href='{{ URL::to('/list-coupon') }}'">
                            <div class="col-md-12 market-update-left">
                                <p style="font-size: 25px" class="text-white mb-0">{{ $count_coupon }} <span
                                        class="float-right"><i class="fa fa-bolt fa-2x"></i></span></p>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p style="font-size: 16px" class="mb-0 text-white small-font">Total Coupon<span
                                        class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-4" onclick="window.location.href='{{ URL::to('/all-customer') }}'">
                            <div class="col-md-12 market-update-left">
                                <p style="font-size: 25px" class="text-white mb-0">{{ $count_user }} <span
                                        class="float-right"><i class="fa fa-user fa-2x"></i></span></p>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p style="font-size: 16px" class="mb-0 text-white small-font">Total User<span
                                        class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                            </div>

                        </div>
                    </div>
                </div>
            
            </div>
        </div>

     
    @endsection
