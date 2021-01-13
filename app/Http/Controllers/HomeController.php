<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

        $data['product'] = $product;

        return view('products.view', $data);
    }
}
