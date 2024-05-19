<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductColor;
use App\Models\ProductSize;

class ProductInventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    protected $fillable = [
        'productID',
        'sizeID',
        'colorID',
        'quantity',
    ];

    // Function to retrieve data based on productID
    public static function getByProductID($productID)
    {
        return self::where('productID', $productID)->get();
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productID', 'ID');
    }

    public function sizes()
    {
        return $this->belongsTo(ProductSize::class, 'sizeID', 'ID');
    }

    public function colors()
    {
        return $this->belongsTo(ProductColor::class, 'colorID', 'ID');
    }

    // Function to retrieve distinct colors by product ID
    public static function getDistinctColorsByProductID($productID)
    {
        return \DB::table('inventory as i')
            ->join('product as p', 'i.productID', '=', 'p.ID')
            ->join('colors as c', 'i.colorID', '=', 'c.ID')
            ->select('c.ID', 'c.color')
            ->distinct()
            ->where('p.ID', $productID)
            ->get();
    }

    // Function to retrieve distinct sizes by product ID
    public static function getDistinctSizesByProductID($productID)
    {
        return \DB::table('inventory as i')
            ->join('product as p', 'i.productID', '=', 'p.ID')
            ->join('sizes as s', 'i.sizeID', '=', 's.ID')
            ->select('s.ID', 's.size')
            ->distinct()
            ->where('p.ID', $productID)
            ->get();
    }
}
