@extends('admin_layout')
@section('admin_content')
   <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-xl-center">Liệt Kê Danh Mục Sản Phẩm</h5>
                            <div class="table-responsive">
                                <?php
                                    $message = Session::get('message');
                                    if ($message) {
                                        echo '<span class="text-alert">' . $message . '</span>';
                                        Session::put('message', null);
                                    }
                                ?>
                                <table class="table table-striped" id="table" style="color: #212529;
                                background-color:#85c9ea ">
                                    <thead>
                                        <tr>
                                            <th style="width:20px;">
                                                <label class="i-checks m-b-none">
                                                    <input type="checkbox"><i></i>
                                                </label>
                                            </th>
                                            <th>Tên danh mục</th>
                                            <th>Slug</th>
                                            <th>Hiển thị</th>
                
                                            <th style="width:30px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_category_product as $key => $cate_pro)
                                            <tr>
                                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                                </td>
                                                <td>{{ $cate_pro->category_name }}</td>
                                                <td>{{ $cate_pro->slug_category_product }}</td>
                                                <td><span class="text-ellipsis">
                                                        <?php
                                                            if($cate_pro->category_status==1){
                                                        ?>
                                                        <a href="{{ URL::to('/unactive-category-product/' . $cate_pro->category_id) }}"><span
                                                                class="fa-thumb-styling fa fa-thumbs-up" style="color: black"></span></a>
                                                        <?php
                                                            }else{
                                                        ?>
                                                        <a href="{{ URL::to('/active-category-product/' . $cate_pro->category_id) }}"><span
                                                                class="fa-thumb-styling fa fa-thumbs-down" style="color: black"></span></a>
                                                        <?php
                                                            }
                                                        ?>
                                                    </span></td>
                
                                                <td>
                                                    <a href="{{ URL::to('/edit-category-product/' . $cate_pro->category_id) }}"
                                                        class="active styling-edit" ui-toggle-class="">
                                                        <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')"
                                                        href="{{ URL::to('/delete-category-product/' . $cate_pro->category_id) }}"
                                                        class="active styling-edit" ui-toggle-class="">
                                                        <i class="fa fa-times text-danger text"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
