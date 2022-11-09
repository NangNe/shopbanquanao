@extends('layout')
@section('content')
    <style type="text/css">
        .containerr {
            position: relative;
            min-width: 1100px;
            min-height: 550px;
            display: flex;
        }

        .containerr .contacinfo {
            position: absolute;
            top: 40px;
            width: 350px;
            height: calc(100% - 150px);
            background: #a1b3e7;
            z-index: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 20px 20px rgba(0, 0, 0, 0.2);
        }

        .containerr .contacinfo h2 {
            color: rgb(47, 0, 255);
            font-size: 28px;
            font-weight: 500;
        }

        .containerr .contacinfo .info {
            position: relative;
            margin: 0;
        }

        .containerr .contacinfo .info li {
            position: relative;
            list-style: none;
            display: flex;
            margin: 20px 0;
            cursor: pointer;
            align-items: flex-start;
        }

        .containerr .contacinfo .info li span:nth-child(1) {
            width: 30px;
            min-width: 30px;
        }

        .containerr .contacinfo .info li span:nth-child(1) img {
            max-width: 100%;
            filter: invert(1);
            opacity: 0.5;
        }

        .containerr .contacinfo .info li span:nth-child(2) {
            color: #fff;
            margin-left: 10px;
            font-weight: 300;
            opacity: 0.5;
        }

        .containerr .contacinfo .info li span:nth-child(1),
        .containerr .contacinfo .info li span:nth-child(2) {
            opacity: 1;
        }

        .containerr .contactForm {
            position: absolute;
            padding: 70px 50px;
            background: #fff;
            margin-left: 150px;
            padding-left: 250px;
            width: calc(100%-150px);
            height: 100%;
            box-shadow: 0 50px 50px rgba(0, 0, 0, 0.5);
        }

        .containerr .contactForm h2 {
            color: royalblue;
            font-size: 24px;
            font-weight: 500;
            font-family: cursive;
        }

        .containerr .contactForm .formBox {
            position: relative;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-top: 30px;
        }

        .containerr .contactForm .formBox .inputBox {
            position: relative;
            margin: 0 0 35px 0;
        }

        .containerr .contactForm .formBox .inputBox .w50 {
            width: 47%;
        }

        .containerr .contactForm .formBox .inputBox .w100 {
            width: 100% !important;
        }

        .containerr .contactForm .formBox input,
        .containerr .contactForm .formBox textarea {
            width: 100%;
            padding: 5px 0;
            resize: none;
            font-size: 18px;
            font-weight: 200;
            color: #333;
            border: 1PX;
            border-bottom: 1px solid#777;
            outline: none;
        }

        .containerr .contactForm .formBox textarea {
            min-height: 120px;
        }

        .containerr .contactForm .formBox input:focus~span,
        .containerr .contactForm .formBox textarea:focus~span,
        .containerr .contactForm .formBox input:valid~span,
        .containerr .contactForm .formBox textarea:valid~span {
            font-size: 18px;
            font-weight: 300;
            letter-spacing: 1px;
            color: rgb(47, 0, 255);
        }

        .containerr .contactForm .formBox .inputBox input[type="submit"] {
            position: relative;
            cursor: pointer;
            background: #2f00ff;
            color: #fff;
            max-width: 150px;
            padding: 12px;
        }

    </style>
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Contact <strong>Us</strong></h2>
                </div>
                <div class="col-sm-6">
                    <h4 style=" color: rgb(0, 0, 0) ">Bản đồ</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.4803283096035!2d108.23513251468306!3d15.988492288930836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421a761e40ff21%3A0x3718426f5183f41a!2zOTAgUGjhuqFtIMSQ4bupYyBOYW0sIEhvw6AgUXXDvSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1635515397786!5m2!1svi!2s"
                        width="1020" height="450" style="border:0;margin-left: 55px" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>

            <div class="containerr" style="margin-top: 50px;border-top: 1px solid black; margin-bottom: 100px ">
                <div class="contacinfo" style="margin-top: 50px">
                    <div>
                        <h2>CONTACT INFO</h2>
                        <ul class="info">
                            <li>
                                <a style="color: maroon;font-size: 25px;font-family: cursive;" href="home.html">NKV
                                    Fashion</a>
                            </li>
                            <li>
                                <span>Mail:nvnang.20it1@vku.udn.vn</span>
                            </li>
                            <li>
                                <span>Hotline:0352893091</span>
                            </li>
                            <li>
                                <p>Adress:90 Phạm Đức Nam</span>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="contactForm">
                    <h2>SEND A MESSAGE</h2>
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>Fist Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>Email</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>Phone Numbers</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="" required></textarea>
                            <span>Write your Message here...</span>
                        </div>
                        <div class="inputBox w100">

                            <input type="submit" value="Send">
                        </div>
                    </div>
                </div>
            </div>

        @endsection
