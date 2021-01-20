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
            $cart = Order::where('users_id', Auth::User()->id)
                ->where('checked_out', 0)
                ->get();

        } else {
            $cart = GuestOrder::where('ip_address', self::getIp())
                ->where('transferred', 0)
                ->get();
        }

        return count($cart);
    }
    static function items_in_cart_price()
    {
        $price = 0;
        if (Auth::check()) {
            $cart = Order::where('users_id', Auth::id())
                ->where('checked_out', 0)
                ->get();
        } else {
            $cart = GuestOrder::where('ip_address', self::getIp())
                ->where('transferred', 0)
                ->get();
        }

        foreach ($cart as $item) {
            $otu = explode('|', $item->partial_otu);

            $pri = Product::where('id', $otu[0])
                ->pluck('discount_price')
                ->first();
            $price += ($pri * $item->quantity);
        }

        return $price;
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

    static function get_related($id, $brand, $category)
    {
        $collection = [];

        // Ones that share a brand and category
        $closest = Product::where('brands_id', $brand)
            ->where('categories_id', $category)
            ->where('id', '!=', $id)
            ->orderBy('click_count', 'DESC')
            ->get();

        foreach ($closest as $item) {
            array_push($collection, $item);
        }

        // Ones that share a brand
        $brands = Product::where('brands_id', $brand)
            ->where('id', '!=', $id)
            ->orderBy('click_count', 'DESC')
            ->get();

        foreach ($brands as $item) {
            if (!in_array($item, $collection)) {
                array_push($collection, $item);
            }
        }

        // Ones that share a category
        $categ = Product::where('categories_id', $category)
            ->where('id', '!=', $id)
            ->orderBy('click_count', 'DESC')
            ->get();

        foreach ($categ as $item) {
            if (!in_array($item, $collection)) {
                array_push($collection, $item);
            }
        }

        if (count($collection) < 6) {
            $item = count($collection);
            $n = 6 - $item;

            $prods = Product::where('id', '!=', $id)
                ->orderBy('click_count', 'DESC')
                ->take($n)
                ->get();

            foreach ($prods as $item) {
                if (!in_array($item, $collection)) {
                    array_push($collection, $item);
                }
            }
        }

        return $collection;
    }

    static function get_display_image($id)
    {
        $img = DB::table('product_images')->where('products_id', $id)->pluck('storage_path')->first();
        return $img;
    }

    static  function get_attribute($id)
    {
        $val = DB::table('product_attribute_values')->where('id', $id)->pluck('value')->first();
        // dd($val);
        return $val;
    }
}
//
