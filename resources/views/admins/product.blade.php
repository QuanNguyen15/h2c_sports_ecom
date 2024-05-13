@extends('admin.layout.index')
@section('content')
    <div>
        <form action="">
            <div class="d-flex justify-content-end">
                <div>
                    <select name="category" class="form-control">
                        <option value="" selected>--Chọn mục--</option>
                        <option value="">Quần áo đá bóng</option>
                        <option value="">Giày đá bóng</option>
                        <option value="">Phụ kiện đá bóng</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-success ms-2">Lọc</button>
                </div>
            </div>
        </form>
    </div>
@endsection
