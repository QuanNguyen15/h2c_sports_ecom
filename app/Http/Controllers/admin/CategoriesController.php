<?php

namespace App\Http\Controllers\admin;


use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{

    const PATH_VIEW = 'admins.categories.';
    public function index(Request $request)
    {
        $title = 'Quản lí danh mục';
        $query = $request->input('query');

        // Thực hiện tìm kiếm nếu có query
        if ($query) {
            $data = Categories::where('category', 'LIKE', '%' . $query . '%')->paginate(5);
        } else {
            $data = Categories::orderBy('ID', 'desc')->paginate(5);
        }
        return view(self::PATH_VIEW.__FUNCTION__,compact('data','title'));
    }

    public function create()
    {
        $title = 'Quản lí danh mục';
        return view(self::PATH_VIEW.__FUNCTION__,compact('title'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'category'  => 'required',
                'slug'  => 'required',

            ],
            [
                'category.required'  => 'Trường này không được để trống',
                'slug.required'  => 'Trường này không được để trống',

            ]
        );
        $data = $request->all();


        Categories::create($data);

        // dd($data);

        return back()->with('msg','Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories, string $id)
    {
        $title = 'Quản lí danh mục';

        $categories = DB::table('categories')->where('ID',$id)->get()[0];
        // dd($categories);
        return view(self::PATH_VIEW.__FUNCTION__,compact('categories','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'category'  => 'required',
                'slug'  => 'required',

            ],
            [
                'category.required'  => 'Trường này không được để trống',
                'slug.required'  => 'Trường này không được để trống',

            ]
        );


        $data = [
        'category' => $request->category,
        'slug'=> $request->slug,
        ];

        $cate = DB::table('categories')->where('ID', $id)->update($data);


        return back()->with('msg','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cate = DB::table('categories')->where('ID', $id)->delete();
        return back()->with('msg', 'Xóa thành công');
    }
}
