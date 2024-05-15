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
                <th>Họ tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Tài khoản</th>
                <th>Mật khẩu</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->full_name }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->birth }}</td>
                    <td>{{ $item->phone_num }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->account }}</td>
                    <td>{{ $item->password }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <form action="{{ route('admins.destroy', $item->ID) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button class="btn btn-danger " onclick="return confirm('bạn có chắc muốn xóa')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection

