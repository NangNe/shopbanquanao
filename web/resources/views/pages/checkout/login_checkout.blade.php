@extends('layout')
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->

    <style type="text/css">
        .panel-login {
            border-color: #ccc;
            -webkit-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
        }

        .panel-login>.panel-heading {
            color: #00415d;
            background-color: #fff;
            border-color: #fff;
            text-align: center;
        }

        .panel-login>.panel-heading a {
            text-decoration: none;
            color: #666;
            font-weight: bold;
            font-size: 15px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }

        .panel-login>.panel-heading a.active {
            color: #029f5b;
            font-size: 18px;
        }

        .panel-login>.panel-heading hr {
            margin-top: 10px;
            margin-bottom: 0px;
            clear: both;
            border: 0;
            height: 1px;
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
            background-image: -moz-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
            background-image: -ms-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
        }

        .panel-login input[type="text"],
        .panel-login input[type="email"],
        .panel-login input[type="password"] {
            height: 45px;
            border: 1px solid #ddd;
            font-size: 16px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }

        .panel-login input:hover,
        .panel-login input:focus {
            outline: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-color: #ccc;
        }

        .btn-login {
            background-color: #59B2E0;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #59B2E6;
        }

        .btn-login:hover,
        .btn-login:focus {
            color: #fff;
            background-color: #53A3CD;
            border-color: #53A3CD;
        }

        .forgot-password {
            text-decoration: underline;
            color: #888;
        }

        .forgot-password:hover,
        .forgot-password:focus {
            text-decoration: underline;
            color: #666;
        }

        .btn-register {
            background-color: #1CB94E;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #1CB94A;
        }

        .btn-register:hover,
        .btn-register:focus {
            color: #fff;
            background-color: #1CA347;
            border-color: #1CA347;
        }

        .row0 {
            box-shadow: 0px 4px 8px 0px #5c5c5c;
            border-radius: 1px
        }

        .logo1 {
            width: 200px;
            height: 100px;
            margin-top: 20px;
            margin-left: -10px
        }

        .image {
            width: 500px;
            height: 320px;
            margin-top: 60px;
        }

        .border-line {
            border-right: 1px solid #cac8c8
        }

        .social-buttons {
            margin-top: 50px;
            margin-left: 170px;
            margin-bottom: 70px;
        }

        .neo-button {
            width: 40px;
            height: 40px;
            outline: 0;
            cursor: pointer;
            color: #fff;
            font-size: 15px;
            border: none;
            margin-right: 10px;
            border-radius: 6px;
            background: #ffffff;
            box-shadow: -6px 6px 12px #979797, 6px -6px 12px #929292
        }

        .neo-button:active {
            border-radius: 6px;
            background: #ffffff;
            box-shadow: inset -6px 6px 12px #b4b4b4, inset 6px -6px 12px #cccccc
        }


        .fa-linkedin {
            color: #0077b5
        }

        .fa-google {
            color: #dc4e41
        }

        .fa-youtube {
            color: #cd201f
        }

    </style>
    {{-- <section id="form"><!--form--> --}}

    <div class="container" style=" margin-top: 50px ;margin-bottom: 60px" data-wow-delay="1s">
        <div class="row row0">
            <div class="col-lg-6" data-aos="fade-up-left">
                <div class="card1 pb-5">
                    <div class="row"> <img src="{{ asset('public/frontend') }}/images/logo3.png"
                            class="logo1"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img
                            src="https://i.imgur.com/uNGdWHi.png" class="image" style="margin-left: 20px"> </div>
                </div>
            </div>
            <div class="col-md-6 " data-aos="fade-right" data-wow-delay="0.5s">
                <div class="row">
                    <h2>Chào Mừng Bạn Đến Với NKV-Fashion</h2>
                    <div class="panel panel-login">

                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" action="{{ URL::to('/login-customer') }}" method="POST"
                                        role="form" style="display: block;">
                                        {{ csrf_field() }}
                                        <div class="form-group"
                                            style="box-shadow: rgba(25,25,25,.04) 0 0 1px 0,rgba(0,0,0,.1) 0 3px 4px 0;">
                                            <input type="text" name="email_account" class="form-control"
                                                placeholder="Username" value="">
                                        </div>
                                        <div class="form-group" style="box-shadow: rgba(25,25,25,.04) 0 0 1px 0,rgba(0,0,0,.1) 0 3px 4px 0;
                   border-radius: 1px">
                                            <input type="password" name="password_account" class="form-control"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" class="" name="remember">
                                            <label style="margin-top: 15px" for="remember"> Remember Me</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input style="box-shadow: 0px 4px 8px 0px #5c5c5c;
                      border-radius: 1px" type="submit" name="login-submit" tabindex="4" class="form-control btn btn-login"
                                                        value="Log In">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class=" col-sm-6 text-center">
                                                        <a href="{{ URL::to('/quen-mat-khau') }}" tabindex="5"
                                                            class="forgot-password">Forgot Password?</a>
                                                    </div>
                                                    <div class="col-sm-6 text-center">
                                                        <b style="color: red">Đăng nhập với tư cách </b><a
                                                            href="{{ URL::to('/admin') }}"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-person-circle"
                                                                viewBox="0 0 16 16">
                                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                            </svg> Admin </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="social-buttons"> <button class="neo-button"><i
                                                    style="  color: #3b5998" class="fa fa-facebook fa-1x"></i> </button>
                                            <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>
                                            <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button>
                                            <button class="neo-button"><i class="fa fa-youtube fa-1x"></i> </button>
                                            <button class="neo-button"><i style=" color: #55acee"
                                                    class="fa fa-twitter fa-1x"></i> </button>
                                        </div>
                                    </form>
                                    <form id="register-form" action="{{ URL::to('/add-customer') }}" method="POST"
                                        role="form" style="display: none;">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" name="customer_name" class="form-control"
                                                placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="customer_email" class="form-control"
                                                placeholder="Email Address" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="customer_password" class="form-control"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="customer_phone" class="form-control"
                                                placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" class="form-control btn btn-register"
                                                        value="Register Now">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- </section><!--/form--> --}}

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    @endsection
