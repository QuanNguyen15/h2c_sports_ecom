<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    const PATH_VIEW = 'admins.products.';
    const PATH_UPLOAD = 'products';
    /**

     */
    public function index(Request $request)
    {
        $title = 'Quản lí sản phẩm';
        $cate = DB::table('categories')->get();
        $query = $request->input('query');
        $categoryID = $request->input('categoryID');
    
        // Bắt đầu truy vấn từ bảng 'product'
        $dataQuery = DB::table('product');
    
        // Thêm điều kiện tìm kiếm nếu có từ khóa query
        if ($query) {
            $dataQuery->where('name', 'LIKE', '%' . $query . '%');
        }
    
        // Thêm điều kiện lọc theo categoryID nếu có categoryID được chọn từ select box
        if ($categoryID) {
            $dataQuery->where('categoryID', $categoryID);
        }
    
        // Thực hiện truy vấn và lấy dữ liệu với phân trang
        $data = $dataQuery->orderBy('ID', 'desc')->paginate(5);
    
        return view(self::PATH_VIEW . 'index', compact('data', 'title', 'query', 'cate')) ;
     

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Quản lí sản phẩm';
        $category = DB::table('categories')->get();
        $brand = DB::table('brands')->get();
        return view(self::PATH_VIEW.__FUNCTION__,compact('title','category','brand'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'status' => 'required',
                'price' => 'required',
                'featured' => 'required',
                'categoryID' => 'required',
                'branchID' => 'required',
                'image' => 'required|image|max:2048|mimes:jpeg,png',
            ],
            [
                'name.required' => 'Tên không được để trống',
                'description.required' => 'Mô tả không được để trống',
                'status.required' => 'Trạng thái không được để trống',
                'price.required' => 'Giá không được để trống',
                'featured.required' => 'Sản phẩm nổi bật không được để trống',
                'categoryID.required' => 'Danh mục không được để trống',
                'branchID.required' => 'Chi nhánh không được để trống',
                'image.required' => 'Hình ảnh không được để trống',
                'image.image' => 'Tập tin tải lên phải là một hình ảnh',
                'image.max' => 'Kích thước của ảnh không được vượt quá 2MB',
                'image.mimes' => 'Tập tin tải lên phải là định dạng JPEG hoặc PNG',
            ]
        );
        // dd($request->all());
        $data = $request->except('image');
      
        if($request->hasFile('image')){
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }

       $product = DB::table('product')->insert(
        [
            'name' => $data["name"],
            'description' => $data["description"],
            'status' => $data["status"],
            'price' => $data["price"],
            'image' => $data["image"],
            'featured' => $data["featured"],
            'categoryID' => $data["categoryID"],
            'branchID' => $data["branchID"],
        ]
       );
      


        return back()->with('msg','Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id, Request $request)
    {
        $title = 'Quản lí sản phẩm';
      
        // dd($id);
        $product = DB::table('product')->where('ID',$id)->get()[0];
        $category = DB::table('categories')->where('ID',$product->categoryID)->get()[0];
        $brand = DB::table('brands')->where('ID',$product->branchID)->get()[0];
      
       
        return view(self::PATH_VIEW.__FUNCTION__, compact('title', 'category','product','brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, String $id)
    {
        $title = 'Quản lí sản phẩm';
        $category = DB::table('categories')->get();
        $brand = DB::table('brands')->get();
        $product = DB::table('product')->where('ID',$id)->get()[0];
        return view(self::PATH_VIEW.__FUNCTION__,compact('product','title','category','brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'status' => 'required',
                'price' => 'required',
                'featured' => 'required',
                'categoryID' => 'required',
                'branchID' => 'required',
               
            ],
            [
                'name.required' => 'Tên không được để trống',
                'description.required' => 'Mô tả không được để trống',
                'status.required' => 'Trạng thái không được để trống',
                'price.required' => 'Giá không được để trống',
                'featured.required' => 'Sản phẩm nổi bật không được để trống',
                'categoryID.required' => 'Danh mục không được để trống',
                'branchID.required' => 'Chi nhánh không được để trống',
               
            ]
        );

        
        $data = $request->except('image');
        

       
        $product = DB::table('product')->where('ID',$id)->get()[0];
       
        $oldPathImg = $product->image;
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'price' => $request->price,
            // 'image' => Storage::put(self::PATH_UPLOAD,$request->file('image')),
            'featured' => $request->featured,
            'categoryID' => $request->categoryID,
            'branchID' => $request->branchID,
        ];
        if($request->hasFile('image')){
            $data['image'] = Storage::put(self::PATH_UPLOAD,$request->file('image'));
        }
        
        $product = DB::table('product')->where('ID', $id)->update($data);

        if ($request->hasFile('image')) {
            Storage::delete($oldPathImg);
        }

        return back()->with('msg','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id, Request $request)
    {
        $product_img = DB::table('product')->find($id);
       
        $product = DB::table('product')->where('ID',$id)->delete();
        
        if (Storage::exists($product_img->image)|$request->hasFile('image')) {

            Storage::delete($product_img->image);
        }
        
        return back()->with('msg', 'Xóa thành công');
    }

    public function deleteMultiple(Request $request)
{
    $selectedProducts = $request->input('selected_products');

    foreach ($selectedProducts as $productId) {
        // Xóa sản phẩm
       
        $product = DB::table('product')->where('id', $productId)->delete();
    }

    return redirect()->back()->with('success', 'Đã xóa các sản phẩm được chọn.');
}
}
