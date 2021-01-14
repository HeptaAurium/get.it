<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        $data['arrivals'] = Product::take(10)->orderBy('id', 'DESC')->get();
        $data['picks'] = Product::take(10)->orderBy('click_count', 'DESC')->get();
        return view('welcome', $data);
    }

    public function view($name, $id)
    {
        $data = [];
        $product = Product::where('id', $id)->first();
        $colors = $product->colors;
        $colors = explode(',', $colors);
        $data['colors'] = [];

        foreach ($colors as  $value) {
            $array = [
                'id' => $value,
                'name' => DB::table('product_attribute_values')->where('id', $value)->pluck('value')->first(),
                'hex' => DB::table('product_attribute_values')->where('id', $value)->pluck('hex_val')->first(),
            ];
            array_push($data['colors'], $array);
        }

        $data['product'] = $product;
        $data['images'] = DB::table('product_images')->where('products_id', $id)->get();
        $data['brand'] = Brand::where('id', $product->brands_id)->pluck('name')->first();

        return view('products.view', $data);
    }
}
