{{-- @extends('admin_layout')
@section('admin_content')
    <section id="form">
        <!--form-->
        <div class="container">
            <div class="row">
                <h2 style="margin-top: 50px ">Mail Thông báo Đặt Hàng thành công: <?php if (isset($name)) {
    echo $name;
}
?>
                </h2><br>
                <div class="col-sm-12 col-sm-offset-1">
                    <div class="login-form">
                        <!--login form-->
                        <form action="{{ URL::to('/send-mail') }}" method="GET">
                            {{ csrf_field() }}
                            <input type="text" name="email_account"
                                style="background-color:rgba(131, 160, 163, 0.781) ;margin-top:100px;margin-left:100px;color:rgb(0, 0, 0);width: 350px;"
                                placeholder="Nhập Email Người nhận" />
                            <button type="submit" style="width: 70px" class="btn-danger">Gửi</button>
                        </form>

                    </div>
                    <!--/login form-->
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>

            </div>
        </div>
    </section>
    <!--/form-->

@endsection --}}
