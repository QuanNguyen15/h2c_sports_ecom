<?php

namespace App\Http\Controllers;
use DB;
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
    $product = product::with('category')->SelectRaw('ID,name,price,image,categoryID')->paginate(12);


    return view('user.category-boxed',compact('product'));

    }
    public function Chi_Tiet_San_Pham($id){

            $product_1 = product::findOrFail($id);
            return view('user.product-sidebar', compact('product_1'));
            dd($product_1->toArray());

    }



}
