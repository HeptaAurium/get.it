<?php

namespace App\Helpers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class GeneralHelper
{
    static function get_product_img($id)
    {
        $img = DB::table('product_images')
            ->where('products_id', $id)
            ->pluck('storage_path')
            ->first();

        return $img;
    }

    static function get_all_products()
    {
        return Product::take(10)->get();
    }

    static function get_all_categories()
    {
        return Category::get();
    }

    static function get_all_brands()
    {
        return Brand::get();
    }
}
