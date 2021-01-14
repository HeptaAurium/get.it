<?php

namespace App\Helpers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\GuestOrder;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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
    static function items_in_cart_count()
    {
        if (Auth::check()) {
            $cart = Order::where('users_id', Auth::id())
                ->where('checked_out', 0)
                ->get();
        } else {
            $cart = GuestOrder::where('ip_address', self::getIp())
                // ->where('checked_out', 0)
                ->get();
        }

        return count($cart);
    }
    static function getIp()
    {
        return Request()->ip();
    }
    static function get_categories_limit($n)
    {
        return Category::take($n)->Orderby("click_count", "DESC")->get();
    }
    static function get_brands_limit($n)
    {
        return Brand::take($n)->Orderby("click_count", "DESC")->get();
    }

    static function get_related($brand, $category)
    {
        $return = [];
        $array = [];
        $collection = [];

        // Ones that share a brand and category
        $closest = Product::where('brands_id', $brand)
            ->where('categories_id', $category)
            ->orderBy('click_count', 'DESC')
            ->get();

        foreach ($closest as $item) {
            array_push($collection, $item);
        }

        // Ones that share a brand
        $brands = Product::where('brands_id', $brand)
            ->orderBy('click_count', 'DESC')
            ->get();

        foreach ($brands as $item) {
            if (!in_array($item, $collection, true)) {
                array_push($collection, $item);
            }
        }

        // Ones that share a category
        $categ = Product::where('categories_id', $category)
            ->orderBy('click_count', 'DESC')
            ->get();

        foreach ($categ as $item) {
            if (!in_array($item, $collection, true)) {
                array_push($collection, $item);
            }
        }

        // Final array

        // foreach ($collection as $item) {
        //     $array = [
        //         'id' => $item,
        //         'name'=>
        //     ];
        // }
    }
}
//
