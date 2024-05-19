@extends('admin.layout.index')
@section('content')

     <div class="mt-2">
        @if (\Session::has('msg'))
        <div class="alert alert-success ">
            {{ \Session::get('msg') }}
        </div>
        @endif
     </div>
    <table class="table">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng tiền</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $detail)
            <tr>
                
                <td>{{ isset($products[$index]) ? $products[$index]->name : 'N/A' }}</td>
                <td>
                    {{-- Hiển thị ảnh --}}
                    <img src="{{ isset($products[$index]) ? \Storage::url($products[$index]->image) : 'N/A' }}" alt="" width="50">
                </td>
                <td>{{ $detail->quantity }}</td> {{-- Hiển thị số lượng --}}
                <td>{{ isset($products[$index]) ? $products[$index]->price : 'N/A' }}</td>
                <td>{{ $detail->quantity * (isset($products[$index]) ? $products[$index]->price : 0) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('admins.order') }}"><<- Trở về</a>
@endsection
