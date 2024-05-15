@extends('admin.layout.index')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="shadow-lg p-3 mb-5 bg-body rounded w-50">
            <h1 class="text-center">Thêm sản phẩm</h1>
            @if (\Session::has('msg'))
                <div class="alert alert-success ">
                    {{ \Session::get('msg') }}
                </div>
            @endif
            <form action="{{ route('san-pham.update',$product->ID) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div>
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" name="name" id="" class="form-control " value="{{ $product->name }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="price">Giá</label>
                    <input type="number" name="price" id="" class="form-control " value="{{ $product->price }}">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="featured">Đặc sắc</label>
                    <input type="number" name="featured" id="" class="form-control " value="{{ $product->featured }}">
                    @error('featured')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="image">Ảnh</label>
                    <input type="file" name="image" id="" class="form-control"  value="{{ $product->image }}" >
                    <img src="{{ \Storage::url($product->image) }}" alt="" width="50"><br>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="status">Trạng thái</label>
                    <input type="text" name="status" id="" class="form-control " value="{{ $product->status }}">
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="categoryID">Danh mục sản phẩm</label>
                    <select name="categoryID" id="" class="form-control ">
                      
                        @foreach ($category as $categories)
                            <option @if($categories->ID == $product->categoryID) selected @endif value="{{ $categories->ID }}">{{ $categories->category }}</option>
                        @endforeach
                    </select>
                    @error('categoryID')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="branchID">Hiệu</label>
                    <select name="branchID" id="" class="form-control ">
                     
                        @foreach ($brand as $brands)
                            <option @if($brands->ID == $product->branchID) selected @endif value="{{ $brands->ID }}">{{ $brands->brand }}</option>
                        @endforeach
                    </select>
                    @error('branchID')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="description">Mô tả</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $product->description }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-2">
                    <a href="{{ route('san-pham.index') }}" class="btn btn-danger ">Quay lại</a>
                    <button class="btn btn-primary ">Đăng</button>
                </div>
            </form>
        </div>
    </div>
@endsection
