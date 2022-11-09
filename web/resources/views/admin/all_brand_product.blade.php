@extends('admin_layout')
@section('admin_content')
    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> --}}

    

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-xl-center">Liệt Kê Nhóm Sản Phẩm</h5>
                            
                            <div class="table-responsive">
                                <?php
                                    $message = Session::get('message');
                                    if ($message) {
                                        echo '<span class="text-alert">' . $message . '</span>';
                                        Session::put('message', null);
                                    }
                                ?>
                                
                                <table class="table table-striped" id="table"style="color: #212529;
                                background-color:#85c9ea ">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <label class="i-checks m-b-none">
                                                    <input type="checkbox"><i></i>
                                                </label>
                                            </th>
                                            <th scope="col">Tên Nhóm</th>
                                            <th scope="col">Brand Slug</th>
                                            <th scope="col">Hiển Thị</th>
                                            <th scope="col" style="width:30px;"></th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        {{-- <th>Tổng nhóm</th> --}}
                                        @foreach ($all_brand_product as $key => $brand_pro)
                                        
                                            <tr>
                                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                                <td>{{ $brand_pro->brand_name }}</td>
                                                <td>{{ $brand_pro->brand_slug }}</td>
                                                <td><span class="text-ellipsis">
                                                    <?php
                                                    if($brand_pro->brand_status==0){
                                                    ?>
                                                    <a href="{{ URL::to('/active-brand-product/' . $brand_pro->brand_id) }}"><span
                                                            class="fa-thumb-styling fa fa-thumbs-down" style="color: black"></span></a>
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <a href="{{ URL::to('/unactive-brand-product/' . $brand_pro->brand_id) }}"><span
                                                            class="fa-thumb-styling fa fa-thumbs-up" style="color: black"></span></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </span></td>
                
                                                <td>
                                                    <a href="{{ URL::to('/edit-brand-product/' . $brand_pro->brand_id) }}"
                                                        class="active styling-edit" ui-toggle-class="">
                                                        <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')"
                                                        href="{{ URL::to('/delete-brand-product/' . $brand_pro->brand_id) }}"
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
