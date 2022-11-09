@extends('admin_layout')
@section('admin_content')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
   

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-xl-center">Liệt Kê Sản Phẩm</h5>
                            <div class="table-responsive">
                                <?php
                                    $message = Session::get('message');
                                    if ($message) {
                                        echo '<span class="text-alert">' . $message . '</span>';
                                        Session::put('message', null);
                                    }
                                ?>
                                
                                <table class="table table-striped" id="table"style="color: #212529;
                                background-color: #85c9ea ">
                                    <thead>
                                        <tr>
                                            <th style="width:20px;">
                                                <label class="i-checks m-b-none">
                                                    <input type="checkbox"><i></i>
                                                </label>
                                            </th>
                                            <th>Tên sản phẩm</th>
                                            <th>Slug</th>
                                            <th>Giá</th>
                                            <th>Hình sản phẩm</th>
                                            <th>Danh mục</th>
                                            <th>Nhóm</th>
                    
                                            <th>Hiển thị</th>
                    
                                            <th style="width:30px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_product as $key => $pro)
                                            <tr>
                                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                                <td>{{ $pro->product_name }}</td>
                                                <td>{{ $pro->product_slug }}</td>
                                                <td>{{ $pro->product_price }}</td>
                                                <td><img src="public/uploads/product/{{ $pro->product_image }}" height="100" width="100"></td>
                                                <td>{{ $pro->category_name }}</td>
                                                <td>{{ $pro->brand_name }}</td>
                    
                                                <td><span class="text-ellipsis">
                                                        <?php
                                                            if($pro->product_status==0){
                                                        ?>
                                                        <a href="{{ URL::to('/unactive-product/' . $pro->product_id) }}"><span
                                                                class="fa-thumb-styling fa fa-thumbs-up" style="color: black"></span></a>
                                                        <?php
                                                            }else{
                                                        ?>
                                                        <a href="{{ URL::to('/active-product/' . $pro->product_id) }}"><span
                                                                class="fa-thumb-styling fa fa-thumbs-down" style="color: black"></span></a>
                                                        <?php
                                                        }
                                                        ?>
                                                    </span></td>
                    
                                                <td>
                                                    <a href="{{ URL::to('/edit-product/' . $pro->product_id) }}" class="active styling-edit"
                                                        ui-toggle-class="">
                                                        <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')"
                                                        href="{{ URL::to('/delete-product/' . $pro->product_id) }}"
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





    {{-- <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#table').DataTable();
    } );

    </script> --}}
@endsection
