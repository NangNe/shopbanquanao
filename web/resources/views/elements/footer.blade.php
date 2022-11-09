<style type="text/css">
    /*
  =========================================================================================
                                    Social Icons
  =========================================================================================
  */

        
    #headerwrap {
    background: url('{{ asset('public/frontend') }}/images/guccii.jfif') no-repeat center top;
    margin-top: 60px;
    padding-top: 140px;
    text-align: center;
    background-attachment: relative;
    background-position: center center;
    min-height: 600px;
    width: 100%;

    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }

    #headerwrap h1 {
    margin-top: 60px;
    font-size: 80px;
    color: rgb(0 255 31);
    font-family: 'FontAwesome';
    box-shadow: 0px 4px 8px 0px #5c5c5c;
        border-radius: 1px
    
    }

    #headerwrap h3 {
    font-size: 20px;
    color: rgb(0, 0, 0);
    }
    .round-btn {
        display: inline;
        height: 40px;
        width: 40px;
        background: #fff;
        border-radius: 50%;
        float: left;
        margin: 15px 8px;
        box-shadow: 2px 2px 5px 0px rgb(82, 0, 67);
        border: 1px solid;
        /*border: 1px solid #622657;*/
    }

    .round-btn a {
        display: block !important;
        padding: 7px 12px;
        font-size: 18px;
        border-radius: 50%;
    }

    .round-btn .icon {
        padding: 3px;
    }

    .round-btn .icon img {
        height: 24px;
        width: 32px;
        margin-top: 6px;
    }

    .btn-facebook a {
        color: #3b5998;
        padding: 8px 13px;
    }

    .btn-linkedin a {
        color: #007bb6;
    }

    .btn-twitter a {
        color: #1c9deb;
    }

    .btn-instagram a {
        color: #dd3f5c;
    }

    .btn-whatsapp a {
        color: #155E54;
    }

    .btn-envelop a {
        color: #D6403A;
        font-size: 15px;
        padding: 9px 12px;
    }

    .standard_header .standard_social_links {
        margin-left: 1rem;
    }

    /*
  =========================================================================================
                                    footer
  =========================================================================================
  */

    .footer-wrap {
        padding-top: 43px;
        background-size: cover;
        /* background-image: url({{ asset('public/frontend') }}/images/bg.jpg); */
        background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url({{ asset('public/frontend') }}/images/bg.jpg) center center no-repeat;
    }

    .footer-wrap h3 {
        color: rgb(172, 172, 172);
        font-size: 19px;
        text-transform: uppercase;
        margin-bottom: 25px;
    }

    .footer-wrap p {
        font-size: 15px;
        line-height: 24px;
        color: #ffffff;

    }

    .footer-wrap p a {
        color: rgb(255, 255, 255);
        text-decoration: underline;
        font-style: italic;
    }

    .footer-wrap p a:hover {
        text-decoration: none;
        color: #ffffff;
    }

    .footer-links li a {
        font-size: 16px;
        line-height: 30px;
        color: rgb(255, 255, 255);
        text-decoration: none;
    }


    .footer-links li:before {
        content: "\f105";
        font-family: 'FontAwesome';
        padding-right: 10px;
        color: rgb(255, 255, 255);
    }

    .footer-category li a {
        font-size: 16px;
        line-height: 30px;
        color: rgb(255, 255, 255);
        text-decoration: none;
    }

    .footer-category li:before {
        content: "\f105";
        font-family: 'FontAwesome';
        padding-right: 10px;
        color: #ffffff;
    }

    .address {

        color: #ffffff;
        font-size: 14px;
        position: relative;
        padding-left: 30px;
        line-height: 30px;
    }

    .address:before {
        content: "\f277";
        font-family: 'FontAwesome';
        position: absolute;
        top: 0;
        left: 0;
    }

    .info a {

        color: #ffffff;
        font-size: 14px;
        line-height: 30px;
        font-weight: normal;
    }

    .fa-phone:before {
        content: "\f095";
    }

    .info a {

        color: #ffffff;
        font-size: 14px;
        line-height: 30px;
        font-weight: normal;
    }

    .fa-fax:before {
        content: "\f1ac";
    }

    .copyright {
        border-top: 1px solid #111;
        font-size: 14px;
        color: rgb(255, 255, 255);
        padding-top: 15px;
        text-align: center;
        padding-bottom: 15px;
        background: rgb(0, 0, 0);
    }

    footer .second_class {
        border-bottom: 1px solid rgb(0, 0, 0);
        padding-bottom: 25px;
    }

    footer .first_class {
        padding-bottom: 21px;
        border-bottom: 1px solid rgb(0, 0, 0);
    }

    footer .first_class p,
    footer .first_class h3 {
        margin: 0 0;

    }

    footer {
        background: rgb(15, 15, 15);
    }

    footer .newsletter input[type="text"] {
        width: 100%;
        background: #fff;
        color: #333;
        border: 1px solid rgb(255, 255, 255);
        padding: 14px 20px;
        border-radius: 50px;
        margin-top: 30px;
    }

    .newsletter .newsletter_submit_btn {
        background: #fff;
        position: absolute;
        right: 30px;
        border: 0;
        top: 46px;
        font-size: 17px;
        color: rgb(255, 255, 255);
    }


    footer .second_class_bdr {
        padding-top: 25px;
        border-top: 1px solid rgb(255, 255, 255);
    }

    .second_class_bdr ul li a:hover {
        background: none;
        color: #0400ff;
    }

    footer .btn-facebook a {
        padding: 6px 14px !important;
    }

    footer .btn-envelop a {
        color: #D6403A;
        font-size: 15px;
        padding: 12px 12px;
    }

    footer .round-btn a {
        padding: 6px 12px;
    }

    footer .round-btn {
        box-shadow: 2px 2px 5px 0px #222 !important;
    }

    footer .round-btn {
        margin: 15px 4px;
    }

    footer dl,
    ol,
    ul {
        padding-left: 5px;
    }

    footer li {
        list-style: none;
    }

    @media(max-width:768px) {
        .footer-wrap h3 {
            margin-top: 27px;
        }

        footer .round-btn {
            margin: 15px 4px;
        }
    }

    @media(max-width:320px) {
        .copyright {
            font-size: 13px;
        }
    }

</style>
<footer>
    <div id="headerwrap"data-aos="zoom-in-down">
        <div class="container">
          <div class="row centered">
            <div class="col-lg-12">
              <h1 data-aos="fade-up">GUCCI</h1>
              <h3 data-aos="flip-down">Contact| gucci@example.com</h3>
              <button class="abc" data-aos="flip-up" style="position: absolute;margin-top: 120px;margin-left: 400px;"
                            onclick="window.location.href='https://en.wikipedia.org/wiki/Gucci#:~:text=Gucci%20was%20founded%20in%201921,of%20the%20company%20by%201993.'">XEM THÊM</button>
            </div>
            <!--/.col-lg-12 -->
          </div>
          <!--/.row -->
        </div>
        <!--/.container -->
      </div>
      <!--/.#headerwrap -->
    <div class="footer-wrap">
        <div class="container first_class" data-aos="fade-up-left">
            <div class="row">
                <div class="col-md-4 col-sm-6 text-center">
                    <h1><span style="color: red">N</span><span style="color: rgba(217, 255, 0, 0.781)">K</span><span
                            style="color: rgb(27, 19, 143)">V</span><span
                            style="color: rgb(255, 255, 255)">-Fashion</span></h1>
                    <p style="color: rgb(214, 214, 214)">Get all the latest information on Triedge Services, Events,
                        Jobs
                        and Fairs. Sign up for our newsletter today.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <form class="newsletter">
                        <input type="text" placeholder="Email Address">
                        <button style="color: black" class="newsletter_submit_btn" type="submit"><i
                                class="fa fa-paper-plane"></i></button>
                    </form>

                </div>
                <div class="col-md-4 col-sm-6" style="margin-top: 20px">
                    <div class="col-md-12">
                        <div class="standard_social_links">
                            <div>
                                <li class="round-btn btn-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="round-btn btn-linkedin"><a href="#"><i class="fab fa-linkedin-in"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="round-btn btn-twitter"><a href="#"><i class="fab fa-twitter"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="round-btn btn-instagram"><a href="#"><i class="fab fa-instagram"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="round-btn btn-whatsapp"><a href="#"><i class="fab fa-whatsapp"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="round-btn btn-envelop"><a href="#"><i class="fa fa-envelope"
                                            aria-hidden="true"></i></a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3 style="text-align: right;">Stay Connected</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="second_class" data-aos="fade-right">
            <div class="container second_class_bdr">
                <div class="row">
                    <div class="col-md-3 col-sm-6">

                        <div class="footer-logo"> <a href="{{ URL::to('/') }}"><img
                                    src="{{ asset('public/frontend') }}/images/gucci2.png" alt=""
                                    style="width:260px;height:150px;"></a>
                        </div>
                        <p>Your one-stop career platform to find Jobs, Internships, Professional Trainings, Projects,
                            and Volunteering Opportunities.</p>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <h3>Policies</h3>
                        <ul class="footer-links">
                            <li><a href="#">Terms of Use</a></li>

                            <li><a href="#">Privecy Policy</a></li>

                            <li><a href="#">Refund Policy</a></li>

                            <li><a href="#">Billing System</a></li>


                            <li><a href="#">Ticket System</a></li>

                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <h3>About Shopper</h3>
                        <ul class="footer-category">
                            <li><a href="#">Company Information</a></li>

                            <li><a href="#">Careers</a></li>

                            <li><a href="#">Store Location</a></li>

                            <li><a href="#">Affillate Program</a></li>

                            <li><a href="#">Copyright</a></li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <h3>Service</h3>
                        <ul class="footer-links">
                            <li><a href="#">Online Help</a></li>

                            <li><a href="#">Contact Us</a></li>

                            <li><a href="#">Order Status</a></li>

                            <li><a href="#">Change Location</a></li>

                            <li><a href="#">FAQ’s</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <span><i class="wrap_foot_lg"></i></span><span class="wrap_fk_img"><img
                                src="{{ asset('public/frontend') }}/images/gucci.gif" alt=""
                                style="width:260px;height:150px;"></span>
                    </div>

                </div>

            </div>
        </div>

        <div class="row">

            <div class="container-fluid" style="width: 1700px">
                <div class="copyright"> Copyright 2019 | All Rights Reserved by TRIEDGE Solutions Pvt. Ltd.</div>
            </div>

        </div>
    </div>

</footer>

<!--footer end-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Font Awesome 5 links-->
<script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>
