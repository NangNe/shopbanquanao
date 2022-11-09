@extends('layout')
@section('content')
    <style type="text/css">
        /* mờ nền */
        .image:hover {
            opacity: 0.5;
        }

        /* Sản phẩm */
        .reandom {
            position: relative;
            overflow: hidden;

        }

        .reandom .textbox {
            color: rgb(0, 0, 0);
            text-align: center;
            font-size: 13px;

            font-weight: bold;
            width: 210px;
            height: 74px;
            position: absolute;
            top: 0;
            left: 0;
            margin-top: -120px;
            border-radius: 5px;
            /* background-color: rgba(190, 190, 190, 0.75); */

        }

        .reandom:hover {
            transform: scale(1.1);
        }

        .reandom:hover .textbox {
            margin-top: 125px;

        }

        .reandom .text {
            padding: 0;
        }

        .reandom .textbox {
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

    </style>
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Kết quả tìm kiếm</h2>
        @foreach ($search_product as $key => $product)
            {{-- <div class="col-sm-3">
                            <div class="product-image-wrapper">
                             <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                            <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Xem Thử</a>
                                        </div>
                                      
                                </div>
                            </a>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}

            <a href="{{ URL::to('/chi-tiet/' . $product->product_slug) }}">
                <div class="col-sm-1" style="width: 230px">
                    <div class="product-image-wrapper">

                        <div class="single-products">
                            <div class="productinfo text-center">
                                <form>
                                    @csrf
                                    <input type="hidden" value="{{ $product->product_id }}"
                                        class="cart_product_id_{{ $product->product_id }}">
                                    <input type="hidden" value="{{ $product->product_name }}"
                                        class="cart_product_name_{{ $product->product_id }}">
                                    <input type="hidden" value="{{ $product->product_image }}"
                                        class="cart_product_image_{{ $product->product_id }}">
                                    <input type="hidden" value="{{ $product->product_price }}"
                                        class="cart_product_price_{{ $product->product_id }}">
                                    <input type="hidden" value="1" class="cart_product_qty_{{ $product->product_id }}">
                                    {{-- <a href="{{ URL::to('/chi-tiet/' . $product->product_slug) }}">
                                        <img src="{{ URL::to('public/uploads/product/' . $product->product_image) }}"
                                            alt="" />
                                        <h2>{{ number_format($product->product_price, 0, ',', '.') . ' ' . 'VNĐ' }}</h2>
                                        <p>{{ $product->product_name }}</p>


                                    </a>
                                    <input type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart"
                                        data-id_product="{{ $product->product_id }}" name="add-to-cart"> --}}
                                    <div class="reandom" style="margin-bottom: 50px;">
                                        <a class="image"
                                            href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_slug) }}"><img
                                                src="{{ URL::to('public/uploads/product/' . $product->product_image) }}"
                                                style="height: 250px;width: 100%" alt="" data-aos="zoom-in-left"></a>
                                        <div class="textbox">
                                            {{ number_format($product->product_price) . ' ' . 'VNĐ' }}<br>
                                            {{ $product->product_name }}<br>
                                            {{-- <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a> --}}
                                            <button type="button" class="btn btn-default add-to-cart"
                                                data-id_product="{{ $product->product_id }}" name="add-to-cart">Thêm Giỏ
                                                Hàng</button>
                                            <div class="choose">
                                                <ul class="nav nav-pills nav-justified">
                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                                                    <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </a>

        @endforeach
    </div>
    <!--features_items-->
    <!--/recommended_items-->
@endsection
