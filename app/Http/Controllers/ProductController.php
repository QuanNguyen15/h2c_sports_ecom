<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\product;


class ProductController extends Controller
{
    //
    public function Hien_Thi_San_Pham(){
    //      $product = DB::select('SELECT

    //      p.name,

    //      p.price,
    //      p.image,
    //      p.status,
    //      c.category

    //  FROM
    //      product p
    //  inner JOIN
    //      categories c ON p.categoryID = c.ID;')->paginate(15);
    //      return view('user.category-boxed',compact('product'))->with('i',(request()->input('page',1)-1)*15);
    $product = product::with('categories')->get();
    $categories = categories::with('product')->get();
    return view('user.category-boxed',compact('product','categories'));

    }


}
