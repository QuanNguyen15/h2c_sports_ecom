@extends('admin.layout.index')
@section('content')
<div class="d-flex justify-content-center">
    <div class="shadow-lg p-3 mb-5 bg-body rounded w-50 ">
      <div>
        <h1 class="text-center">Thêm danh mục sản phẩm</h1>
        @if (\Session::has('msg'))
            <div class="alert alert-success ">
                {{ \Session::get('msg') }}
            </div>
        @endif
        <form action="{{ route('danh-muc.update',$categories->ID) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- <input type="number" name="ID" id="" value="{{ $categories->ID }}"> --}}
            <div>
                <label for="category">Tên danh mục</label>
                <input type="text" name="category" id="" class="form-control " value="{{ $categories->category }}">
                @error('category')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div>
                <label for="slug">slug</label>
                <input type="text" name="slug" id="" class="form-control " value="{{ $categories->slug }}">
                @error('slug')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="mt-2">
                <a href="{{ route('danh-muc.index') }}" class="btn btn-danger ">Quay lại</a>
                <button class="btn btn-primary ">Đăng</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection
