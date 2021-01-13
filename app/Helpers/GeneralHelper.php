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

    static function get_all_products($n)
    {
        if ($n == 'all') {
            return Product::get();
        } else {
            return Product::orderBy('click_count', 'DESC')->take($n)->get();
        }
    }

    static function get_all_categories($n)
    {
        if ($n == 'all') {
            return Category::get();
        } else {
            return Category::orderBy('click_count', 'DESC')->take($n)->get();
        }
    }

    static function get_all_brands($n)
    {
        if ($n == 'all') {
            return Brand::get();
        } else {
            return Brand::orderBy('click_count', 'DESC')->take($n)->get();
        }
    }
}
