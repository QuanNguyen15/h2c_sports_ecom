@extends('admin.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-right">
            <form action="{{ route('user.search') }}" method="post" class="form-inline justify-content-end">
                @csrf
                <input class="form-control-sm form-control mr-2" type="date" name="query" id="search-query" placeholder="Nhập từ khóa tìm kiếm...">
                <button type="submit" class="btn btn-success">Tìm kiếm</button>
            </form>
        </div>
    </div>
</div>

<div class="d-flex">
    <form action="{{ route('user.search') }}" method="post">
        @csrf
       <input type="text" name="status" id="" hidden value="0" >
        <button class="btn btn-warning" type="submit">Đơn đang xử lí</button>
    </form>
    <form action="{{ route('user.search') }}" method="post" class="mx-2">
        @csrf
       <input type="text" name="status" id="" hidden value="1">
        <button class="btn btn-success" type="submit">Đơn đã duyệt</button>
    </form>
    <form action="{{ route('user.search') }}" method="post">
        @csrf
       <input type="text" name="status" id="" hidden value="2" >
        <button class="btn btn-danger" type="submit">Đơn đã hủy</button>
    </form>
</div>

    <table class="table text-center">
        <thead>
            <tr>
                <th>Ngày/Tháng</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Ghi chú</th>
                <th>Tổng tiền</th>
                <th>Phương thức thanh toán</th>
                <th>Trạng thái đơn</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item)
                <tr>

                    
                    <td>{{ $item->created_at }}</td>

                    <td>{{ isset($shippingData[$index]) ? $shippingData[$index]->full_name : 'N/A' }}</td>
                    <td>{{ isset($shippingData[$index]) ? $shippingData[$index]->phone_num : 'N/A' }}</td>
                    <td>{{ isset($shippingData[$index]) ? $shippingData[$index]->email : 'N/A' }}</td>
                    <td>{{ isset($shippingData[$index]) ? $shippingData[$index]->address : 'N/A' }}</td>
                    <td>{{ isset($shippingData[$index]) ? $shippingData[$index]->note : 'N/A' }}</td>
                    <td>{{ $item->total_pay }}</td>
                    <td>{{ $item->pay_method }}</td>


                    <td>
                        @if ($item->status == 0)
                            <p>Đang xử lí</p>
                        @elseif($item->status == 1)
                            <p>Đơn đã duyệt</i></p>
                        @elseif ($item->status == 2)
                            <p>Đơn đã hủy</i></p>
                        @endif
                    </td>
                    <td class="d-flex gap-2">
                        <form action="{{ route('orders.update', $item->ID) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="number" name="status" id="" value="1" hidden>
                            <button class="btn btn-success" type="submit">Duyệt</button>
                        </form>
                        <form action="{{ route('orders.update', $item->ID) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="number" name="status" id="" value="2" hidden>
                            <button class="btn btn-danger" type="submit">Hủy</button>
                        </form>
                        <a class="btn btn-primary" href="{{ route('admins.order.show', $item->ID) }}">Chi tiết</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
