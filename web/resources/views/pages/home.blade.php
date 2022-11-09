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
            margin-top: 130px;

        }

        .reandom .text {
            padding: 0;
        }

        .reandom .textbox {
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        h2 {
            color: #000;
            font-size: 26px;
            font-weight: 300;
            text-align: center;
            text-transform: uppercase;
            position: relative;
            margin: 30px 0 80px;
        }

        h2 b {
            color: #ffc000;
        }

        h2::after {
            content: "";
            width: 100px;
            position: absolute;
            margin: 0 auto;
            height: 4px;
            background: rgba(0, 0, 0, 0.2);
            left: 0;
            right: 0;
            bottom: -20px;
        }

        .carousel1 {
            margin: 50px auto;
            padding: 0 70px;
        }

        .carousel1 .carousel-item1 {
            min-height: 330px;
            text-align: center;
            overflow: hidden;
        }

        .carousel1 .carousel-item1 .img-box {
            height: 160px;
            width: 100%;
            position: relative;
        }

        .carousel1 .carousel-item1 img {
            max-width: 100%;
            max-height: 100%;
            display: inline-block;
            position: absolute;
            bottom: 0;
            margin: 0 auto;
            left: 0;
            right: 0;
        }

        .carousel1 .carousel-item1 h4 {
            font-size: 18px;
            margin: 10px 0;
        }

        .carousel1 .carousel-item1 .btn {
            color: #333;
            border-radius: 0;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: bold;
            background: none;
            border: 1px solid #ccc;
            padding: 5px 10px;
            margin-top: 5px;
            line-height: 16px;
        }

        .carousel1 .carousel-item1 .btn:hover,
        .carousel .carousel-item .btn:focus {
            color: #fff;
            background: #000;
            border-color: #000;
            box-shadow: none;
        }

        .carousel1 .carousel-item1 .btn i {
            font-size: 14px;
            font-weight: bold;
            margin-left: 5px;
        }

        .carousel1 .thumb-wrapper {
            text-align: center;
        }

        .carousel1 .thumb-content {
            padding: 15px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            height: 100px;
            width: 40px;
            background: none;
            margin: auto 0;
            background: rgba(0, 0, 0, 0.2);
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 30px;
            position: absolute;
            top: 50%;
            display: inline-block;
            margin: -16px 0 0 0;
            z-index: 5;
            left: 0;
            right: 0;
            color: rgba(0, 0, 0, 0.8);
            text-shadow: none;
            font-weight: bold;
        }

        .carousel-control-prev i {
            margin-left: -3px;
        }

        .carousel-control-next i {
            margin-right: -3px;
        }

        .carousel1 .item-price {
            font-size: 13px;
            padding: 2px 0;
        }

        .carousel1 .item-price strike {
            color: #999;
            margin-right: 5px;
        }

        .carousel1 .item-price span {
            color: #86bd57;
            font-size: 110%;
        }

        .carousel1 .carousel1-indicators {
            bottom: -50px;
        }

    </style>

    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Sản phẩm mới nhất</h2>

        @foreach ($all_product as $key => $product)

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

                                {{-- <a class="hovertext" href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" title="{{number_format($product->product_price).' '.'VNĐ'}}{{$product->product_name}}" ><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}"  style="height: 250px;width: 100%"  alt=""></a> --}}

                                {{-- <a class="image" href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}"  style="height: 250px;width: 100%"  alt=""></a> --}}

                                <div class="reandom" style="margin-bottom: 50px;">
                                    <a class="image"
                                        href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_slug) }}"><img
                                            src="{{ URL::to('public/uploads/product/' . $product->product_image) }}"
                                            style="height: 250px;width: 100%" alt="" data-aos="zoom-in-left"
                                            data-wow-delay="0.5s"></a>
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
        @endforeach
        <div class="col-sm-12 text-right text-center-xs">
            <ul class="pagination">

                <li>{{ $all_product->appends(['sort' => 'product_id'])->links() }}</li>


            </ul>
        </div>
    </div>

    <div class="container" style="margin-bottom: 50px;" ;>
        <div class="row">
            <div class="col-sm-12" style=" box-shadow: 0px 4px 8px 0px #5c5c5c;
                border-radius: 1px">
                <h2>Trending <b>Products</b></h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    {{-- <div id="slider-carousel" class="carousel slide" data-ride="carousel"> --}}
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>

                    <div class="carousel-inner" style="margin-bottom: 20px">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <a href=""><img
                                                    src="http://localhost:8080/shoplaravelbai43/public/uploads/product/a515.jpg"
                                                    style="width: 266px;height: 381px" class="img-fluid" alt=""
                                                    data-aos="zoom-in-right" data-wow-delay="0.5s"> </a>
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Thun Nữ</h4>
                                            <p class="item-price"><strike>200.000 VND</strike> <span>100,000 VNĐ</span>
                                            </p>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <a href=""><img
                                                    src="http://localhost:8080/shoplaravelbai43/public/uploads/product/z316.jpg"
                                                    style="width: 266px;height: 381px" class="img-fluid" alt=""
                                                    data-aos="zoom-in-right" data-wow-delay="0.5s"></a>
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Thun Đôi</h4>
                                            <p class="item-price"><strike>200,000 VNĐ</strike> <span>150,000 VNĐ</span>
                                            </p>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <a href=""><img src="{{ URL::to('public/frontend/images/1.jpg') }}"
                                                    class="img-fluid" alt="" data-aos="zoom-in-right"
                                                    data-wow-delay="0.5s"></a>
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Thun Đôi</h4>
                                            <p class="item-price"><strike>200,000 VNĐ</strike> <span>150,000 VNĐ</span>
                                            </p>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <a href=""><img src="{{ URL::to('public/frontend/images/1.jpg') }}"
                                                    class="img-fluid" alt="" data-aos="zoom-in-right"
                                                    data-wow-delay="0.5s"></a>
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Nikon DSLR</h4>
                                            <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <a href=""><img src="{{ URL::to('public/frontend/images/1.jpg') }}"
                                                    class="img-fluid" alt="" data-aos="zoom-in-right"
                                                    data-wow-delay="0.5s"> </a>
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Apple iPad</h4>
                                            <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img src="{{ URL::to('public/frontend/images/1.jpg') }}"
                                                class="img-fluid" alt="" data-aos="zoom-in-right"
                                                data-wow-delay="0.5s">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Sony Headphone</h4>
                                            <p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img src="{{ URL::to('public/frontend/images/1.jpg') }}"
                                                class="img-fluid" alt="" data-aos="zoom-in-right"
                                                data-wow-delay="0.5s">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Macbook Air</h4>
                                            <p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img src="{{ URL::to('public/frontend/images/1.jpg') }}"
                                                class="img-fluid" alt="" data-aos="zoom-in-right"
                                                data-wow-delay="0.5s">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Nikon DSLR</h4>
                                            <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@endsection
