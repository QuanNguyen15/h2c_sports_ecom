@extends('admin.layout.index')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <div class="mr-3">
            <form action="{{ route('san-pham.index') }}" method="get" class="form-inline">
                <select class="mr-2 form-control-sm form-control" name="categoryID" id="">
                    @foreach($cate as $cates)
                        <option value="{{ $cates->ID }}">{{ $cates->category }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-success">Lọc</button>
            </form>
        </div>
        <div>
            <form action="{{ route('san-pham.index') }}" method="get" class="form-inline">
                <input class="form-control-sm form-control mr-2" type="text" name="query" id="search-query" placeholder="Nhập từ khóa tìm kiếm...">
                <button type="submit" class="btn btn-success">Tìm kiếm</button>
            </form>
        </div>
    </div>
</div>
<div class="container mt-4" style="text-align: right;">
    <a href="{{ route('san-pham.create') }}" class="btn btn-primary">Thêm Sản phẩm</a>
</div>
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
                    <th></th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                    <th>featured</th>
                    <th>status</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <form action="{{ route('products.deleteMultiple') }}" method="post">
                    @csrf
                @foreach ($data as $item)
                    <tr>
                        <td>
                            <input type="checkbox" name="selected_products[]" value="{{ $item->ID }}">
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <img src="{{ \Storage::url($item->image) }}" alt="" width="50">
                        </td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->featured }}</td>
                        <td>
                            <a href="{{ route('san-pham.show', $item->ID) }}" class="btn btn-primary ">Chi tiết</a>
                            <a href="{{ route('san-pham.edit', $item->ID) }}" class="btn btn-info ">Sửa</a>
                        </td>
                    </tr>
                @endforeach
                <button type="submit" class="btn btn-danger">Xóa Sản Phẩm Đã Chọn</button>
            </form>
            </tbody>
        </table>
       
    {{ $data->links() }}
@endsection

