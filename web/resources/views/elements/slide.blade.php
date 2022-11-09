<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<style type="text/css">
    .text:hover {
        transform: scale(1.2);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    .text {
        color: #fff;
        position: absolute;
        top: 10px;
    }

    .abc,
    .abc::after {
        width: 250px;
        height: 70px;
        font-size: 32px;
        font-family: 'Bebas Neue', cursive;
        background: linear-gradient(45deg, transparent 5%, #FF013C 5%);
        border: 0;
        color: #fff;
        letter-spacing: 3px;
        line-height: 80px;
        box-shadow: 5px 0px 0px #00E6F6;
        outline: transparent;
        position: relative;
    }

    .abc::after {
        --slice-0: inset(50% 50% 50% 50%);
        --slice-1: inset(80% -6px 0 0);
        --slice-2: inset(50% -6px 30% 0);
        --slice-3: inset(10% -6px 85% 0);
        --slice-4: inset(40% -6px 43% 0);
        --slice-5: inset(80% -6px 5% 0);

        content: 'AVAILABLE NOW';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, transparent 3%, #00E6F6 3%, #00E6F6 5%, #FF013C 5%);
        text-shadow: -3px -3px 0px #F8F005, 3px 3px 0px #00E6F6;
        clip-path: var(--slice-0);
    }

    .abc:hover::after {
        animation: 1s glitch;
        animation-timing-function: steps(2, end);
    }

    @keyframes glitch {
        0% {
            clip-path: var(--slice-1);
            transform: translate(-20px, -10px);
        }

        10% {
            clip-path: var(--slice-3);
            transform: translate(10px, 10px);
        }

        20% {
            clip-path: var(--slice-1);
            transform: translate(-10px, 10px);
        }

        30% {
            clip-path: var(--slice-3);
            transform: translate(0px, 5px);
        }

        40% {
            clip-path: var(--slice-2);
            transform: translate(-5px, 0px);
        }

        50% {
            clip-path: var(--slice-3);
            transform: translate(5px, 0px);
        }

        60% {
            clip-path: var(--slice-4);
            transform: translate(5px, 10px);
        }

        70% {
            clip-path: var(--slice-2);
            transform: translate(-10px, 10px);
        }

        80% {
            clip-path: var(--slice-5);
            transform: translate(20px, -10px);
        }

        90% {
            clip-path: var(--slice-1);
            transform: translate(-10px, 0px);
        }

        100% {
            clip-path: var(--slice-1);
            transform: translate(0);
        }
    }

    .portfolio-menu>.btn {
        font-size: 14px;
        font-weight: 700;
        color: #000000;
        background-color: transparent;
        padding: 0 15px;
        text-transform: uppercase;
    }

    .portfolio-menu>.btn:hover,
    .portfolio-menu>.btn.active {
        color: #0a1bff;
        box-shadow: none;
    }

    .section_heading {
        margin-bottom: 50px;
        position: relative;
        z-index: 1;
        margin-top: 100px;
    }

    .section_heading h2 {
        font-size: 48px;
        margin-bottom: 0;
        text-transform: uppercase;
    }

    .section_heading.text-left {
        text-align: left !important;
    }

</style>

<div class="container" style="border-bottom: 1px solid rgb(0, 0, 0);margin-left: 9%">
    <div class="row">
        <div class="col-sm-12">
            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-carousel" data-slide-to="1"></li>
                    <li data-target="#slider-carousel" data-slide-to="2"></li>
                    <li data-target="#slider-carousel" data-slide-to="3"></li>
                    <li data-target="#slider-carousel" data-slide-to="4"></li>
                    <li data-target="#slider-carousel" data-slide-to="5"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <button class="abc" style="position: absolute;margin-top: 320px;margin-left: 680px;"
                            onclick="window.location.href='{{ URL::to('/danh-muc-san-pham/Nước%20Hoa') }}'">Khám Phá
                            Ngay</button>
                        <a class="image" href="{{ URL::to('/product') }}"><img
                                src="{{ asset('public/frontend') }}/images/hoa3.jpg" style="height: 441px;width: 100%"
                                alt=""></a>
                    </div>
                    <div class="item">
                        <button class="abc" style="position: absolute;margin-top: 320px;margin-left: 10px;"
                            onclick="window.location.href='{{ URL::to('/danh-muc-san-pham/Đồng%20Hồ') }}'">Khám Phá
                            Ngay</button>
                        <img src="{{ asset('public/frontend') }}/images/dongho1.jpg" style="height:441px;width: 100%"
                            class="girl img-responsive" alt="" />
                    </div>
                    <div class="item">
                        <button class="abc" style="position: absolute;margin-top: 200px;margin-left: 420px;"
                            onclick="window.location.href='{{ URL::to('/danh-muc-san-pham/Túi%20Xách') }}'">Khám Phá
                            Ngay</button>
                        <img src="{{ asset('public/frontend') }}/images/tui.jpg" style="height:441px;width: 100%"
                            class="girl img-responsive" alt="" />
                    </div>
                    <div class="item">
                        <button class="abc" style="position: absolute;margin-top: 300px;margin-left: 420px;"
                            onclick="window.location.href='{{ URL::to('/danh-muc-san-pham/Women') }}'">Khám Phá
                            Ngay</button>
                        <img src="{{ asset('public/frontend') }}/images/ao.jpg" style="height:441px;width: 100%"
                            class="girl img-responsive" alt="">
                    </div>
                    <div class="item">
                        <button class="abc" style="position: absolute;margin-top: 100px;margin-left: 30px;"
                            onclick="window.location.href='{{ URL::to('/product') }}'">Khám Phá Ngay</button>
                        <img src="{{ asset('public/frontend') }}/images/son.jpg" style="height:441px;width: 100%"
                            class="girl img-responsive" alt="">
                    </div>
                    <div class="item">
                        <button class="abc" style="position: absolute;margin-top: 220px;margin-left: 1px;"
                            onclick="window.location.href='{{ URL::to('/product') }}'">Khám Phá Ngay</button>
                        <img src="{{ asset('public/frontend') }}/images/trangsuc1.png"
                            style="height:441px;width: 100%" class="girl img-responsive" alt="" />
                    </div>

                </div>

            </div>


        </div>
    </div>
</div>
<section class="new_arrivals_area section_padding_100_0 clearfix">

    <div class="col-sm-3"></div>
    <div class="col-sm-6 text-center" style="margin-top: 50px">
        @foreach ($brand as $key => $brand)

            <div class="col-sm-2" style="width: 90px">
                <div class="karl-projects-menu mb-100">
                    <div class="text-center portfolio-menu" data-aos="zoom-in-right" data-wow-delay="0.5s">
                        {{-- <button class="btn active" data-filter="*">ALL</button>
            <button class="btn" data-filter=".women">WOMAN</button>
            <button class="btn" data-filter=".man">MAN</button>
            <button class="btn" data-filter=".access">ACCESSORIES</button>
            <button class="btn" data-filter=".shoes">shoes</button>
            <button class="btn" data-filter=".kids">KIDS</button> --}}
                        <button class="btn" data-filter=".{{ $brand->brand_name }}"
                            style="font-size: 14px"
                            onclick="window.location.href='{{ URL::to('/thuong-hieu-san-pham/' . $brand->brand_slug) }}'">{{ $brand->brand_name }}</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-sm-3"></div>
</section>
