h3@extends('layout')
@section('content')
    <style type="text/css">
        .hizoom {
            position: relative;
            z-index: 10;
        }

        .hizoom .magnifier {
            box-sizing: border-box;
            border: 1px solid #999;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
            display: none;
            cursor: move;
        }

        .hizoom .small,
        .hizoom .big {
            position: absolute;
            border: 1px solid #ddd;
        }

        .hizoom .small {
            top: 0;
            left: 0;
            cursor: move;
        }

        .hizoom .big {
            overflow: hidden;
            display: none;
        }

        .hizoom .small img,
        .hizoom .big img {
            position: absolute;
            top: 0;
            left: 0;
        }

    </style>
    @foreach ($product_details as $key => $value)
        <div class="product-details">
            <!--product-details-->
            <div class="col-sm-4" style="border: 1px solid;">
                <div class="hizoom hi1">
                    <img src="{{ URL::to('/public/uploads/product/' . $value->product_image) }}" alt="">
                    <h3>ZOOM</h3>

                </div>
            </div>
            <div class="col-sm-7">
                <div class="product-information" style="border: 1px solid;">
                    <!--/product-information-->
                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                    <h2>{{ $value->product_name }}</h2>
                    <p>Mã ID: {{ $value->product_id }}</p>
                    <img src="images/product-details/rating.png" alt="" />

                    <form action="{{ URL::to('/save-cart') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $value->product_id }}"
                            class="cart_product_id_{{ $value->product_id }}">

                        <input type="hidden" value="{{ $value->product_name }}"
                            class="cart_product_name_{{ $value->product_id }}">

                        <input type="hidden" value="{{ $value->product_image }}"
                            class="cart_product_image_{{ $value->product_id }}">


                        <input type="hidden" value="{{ $value->product_price }}"
                            class="cart_product_price_{{ $value->product_id }}">

                        <span>
                            <span>{{ number_format($value->product_price, 0, ',', '.') . 'VNĐ' }}</span>

                            <label>Số lượng:</label>
                            <input name="qty" type="number" min="1" class="cart_product_qty_{{ $value->product_id }}"
                                value="1" />
                            <input name="productid_hidden" type="hidden" value="{{ $value->product_id }}" />
                        </span>
                        <input type="button" value="Thêm giỏ hàng" class="btn btn-primary btn-sm add-to-cart"
                            data-id_product="{{ $value->product_id }}" name="add-to-cart">
                    </form>

                    <p><b>Tình trạng:</b> Còn hàng</p>
                    <p><b>Điều kiện:</b> Mơi 100%</p>
                    <p><b>Nhóm sản phẩm:</b> {{ $value->brand_name }}</p>
                    <p><b>Danh mục:</b> {{ $value->category_name }}</p>
                    <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
                </div>
                <!--/product-information-->
            </div>
        </div>
        <!--/product-details-->

        <div class="category-tab shop-details-tab">
            <!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
                    <li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>

                    <li><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="details">
                    <p>{!! $value->product_desc !!}</p>

                </div>

                <div class="tab-pane fade" id="companyprofile">
                    <p>{!! $value->product_content !!}</p>


                </div>

                <div class="tab-pane fade" id="reviews">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut
                            aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                        <p><b>Write Your Review</b></p>

                        <form action="#">
                            <span>
                                <input type="text" placeholder="Your Name" />
                                <input type="email" placeholder="Email Address" />
                            </span>
                            <textarea name=""></textarea>
                            <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                            <button type="button" class="btn btn-default pull-right">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    @endforeach
    {{-- zoom --}}
    <script src="{{ asset('public/frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/hizoom.js') }}"></script>

    <script>
        $('.hi1').hiZoom({
            width: 320,
            height: 300,
            position: 'right'
        });
    </script>
@endsection
