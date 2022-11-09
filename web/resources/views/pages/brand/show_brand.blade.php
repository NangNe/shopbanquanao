

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
        box-shadow:
            0 2.8px 2.2px rgba(71, 71, 71, 0.034),
            0 6.7px 5.3px rgba(85, 85, 85, 0.048),
            0 12.5px 10px rgba(80, 80, 80, 0.06),
            0 22.3px 17.9px rgba(83, 83, 83, 0.072),
            0 41.8px 33.4px rgba(95, 95, 95, 0.086),
            0 100px 80px rgba(63, 63, 63, 0.12);

        min-height: 200px;
        width: 200px;
        margin: 10px auto;
        background: white;
        border-radius: 5px;

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

        @foreach ($brand_name as $key => $name)

            <h2 class="title text-center">{{ $name->brand_name }}</h2>

        @endforeach
        @foreach ($brand_by_id as $key => $product)
            <a href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_slug) }}">
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

                                    <div class="reandom" style="margin-bottom: 50px;">
                                        <a class="image"
                                            href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_slug) }}">
                                            <img src="{{ URL::to('public/uploads/product/' . $product->product_image) }}"
                                                style="height: 250px;width: 100%" alt="" data-aos="zoom-in-left">
                                        </a>
                                        <div class="textbox">
                                            {{ number_format($product->product_price) . ' ' . 'VNĐ' }}<br>
                                            {{ $product->product_name }}<br>
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
        <div class="col-sm-12 text-right text-center-xs">
            <ul class="pagination">

                <li>{{ $brand_by_id->appends(['sort' => 'product_id'])->links() }}</li>


            </ul>
        </div>
    </div>
    <!--features_items-->
    {{-- <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$brand_by_id->links()!!}
                      </ul> --}}

    <!--/recommended_items-->
@endsection
