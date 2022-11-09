@extends('admin_layout')
@section('admin_content')
<div class="content-wrapper">
    <div class="container-fluid">
    <div class="table-agile-info">
        <div class="panel panel-default"style="margin-top: 50px">
            <div class="panel-heading text-center">
                <h3 style="color: rgb(255, 255, 255)">LIỆT KÊ ĐƠN HÀNG</h3>
            </div>
            <div class="row w3-res-tb">



            </div>
            <div class="table-responsive" >
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <table class="table table-striped b-t b-light" id="table"style="color: #212529;
                background-color:#85c9ea ">
                    <thead>
                        <tr>

                            <th>Thứ tự</th>
                            <th>Mã đơn hàng</th>
                            <th>Ngày tháng đặt hàng</th>
                            <th>Tình trạng đơn hàng</th>

                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($order as $key => $ord)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <td><i>{{ $i }}</i></label></td>
                                <td>{{ $ord->order_code }}</td>
                                <td>{{ $ord->created_at }}</td>
                                <td>
                                    @if ($ord->order_status == 1)
                                        Đơn hàng mới
                                    @else
                                        Đã xử lý
                                    @endif
                                </td>


                                <td>
                                    <a href="{{ URL::to('/view-order/' . $ord->order_code) }}" class="active styling-edit"
                                        ui-toggle-class="">
                                        <i class="fa fa-eye text-success text-active"></i></a>

                                    <a onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng này ko?')"
                                        href="{{ URL::to('/delete-order/' . $ord->order_code) }}" class="active styling-edit"
                                        ui-toggle-class="">
                                        <i class="fa fa-times text-danger text"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {!!$order->links()!!}
          </ul>
        </div>
      </div>
    </footer> --}}

        </div>
    </div>
    </div>
</div>
@endsection
