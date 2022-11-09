@extends('admin_layout')
@section('admin_content')
<div class="content-wrapper">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="margin-top: 30px">
            <section class="panel">
                <div class="panel-heading text-center">
                    <h3 style="color: rgb(255, 255, 255)">THÊM VẬN CHUYỂN</h3>
                </div>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body"style="margin-left: 20%;margin-right: 20%">

                    <div class="position-center">
                        <form>
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputPassword1">Chọn thành phố</label>
                                <select name="city" id="city" class="form-control input-sm m-bot15 choose city">

                                    <option value="">--Chọn tỉnh thành phố--</option>
                                    @foreach ($city as $key => $ci)
                                        <option value="{{ $ci->matp }}">{{ $ci->name_city }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Chọn quận huyện</label>
                                <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                    <option value="">--Chọn quận huyện--</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Chọn xã phường</label>
                                <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                    <option value="">--Chọn xã phường--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phí vận chuyển</label>
                                <input type="text" name="fee_ship" class="form-control fee_ship" id="exampleInputEmail1"
                                    placeholder="Tên danh mục">
                            </div>

                            <button type="button" name="add_delivery" class="btn btn-info add_delivery">Thêm phí vận
                                chuyển</button>
                        </form>
                    </div>

                    <div id="load_delivery">

                    </div>

                </div>
            </section>

        </div>
    </div>
    </div>
    @endsection
