@extends('admin.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-right">
            <form action="{{ route('danh-muc.index') }}" method="get" class="form-inline justify-content-end">
                <input class="form-control-sm form-control mr-2" type="text" name="query" id="search-query" placeholder="Nhập từ khóa tìm kiếm...">
                <button type="submit" class="btn btn-success">Tìm kiếm</button>
            </form>
        </div>
    </div>
</div>
    <a href="{{ route('danh-muc.create') }}" class="btn btn-primary ">Thêm danh mục</a>
     <div class="mt-2">
        @if (\Session::has('msg'))
        <div class="alert alert-success ">
            {{ \Session::get('msg') }}
        </div>
        @endif
     </div>
    <table class="table ">
        <thead>
            <tr>
               
                <th>Danh mục</th>
                <th>Slug</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                  
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->slug }}</td>
                    
                    <td>
                        <form action="{{  route('danh-muc.destroy',$item->ID) }}" method="POST">
                            @csrf
                            @method('DELETE')
                           
                            <a href="{{  route('danh-muc.edit',$item->ID) }}" class="btn btn-info ">Sửa</a>
                            <button class="btn btn-danger " onclick="return confirm('bạn có chắc muốn xóa')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
