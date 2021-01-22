<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
use App\Models\Cart;
use App\Models\GuestOrder;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [];
        $data['orders'] = [];

        if (Auth::check()) {
            $orders = Order::where('users_id', Auth::User()->id)
                ->where('checked_out', 0)
                ->where('active', 1)
                ->get();
        } else {
            $orders = GuestOrder::where('ip_address', GeneralHelper::getIp())
                ->where('transferred', 0)
                ->where('active', 1)
                ->get();
        }

        foreach ($orders as $order) {
            $otu = $order->partial_otu;
            $otu = explode('|', $otu);

            $products = Product::where('id', $otu[0])->first();
            // dd($products['name']);
            $color = DB::table('product_attribute_values')->where('id', $otu[1])->first();
            $array = [
                'id' => $order->id,
                'name' => isset($products['name']) ? $products['name'] : 'Undefined',
                'size' => $otu[2],
                'color' => $color->value,
                'hex' => $color->hex_val,
                'img' => DB::table('product_images')->where('products_id', $otu[0])->pluck('storage_path')->first(),
                'quantity' => $order->quantity . " " . ucfirst(DB::table('product_attribute_values')->where('id', $products->quantification)->pluck('value')->first()),
                'price' => $products->discount_price,

            ];

            array_push($data['orders'], $array);
        }

        return view('cart.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [];
        if(Auth::check()){
            $order = Order::find($id);
        }else{
            $order = GuestOrder::find($id);
        }
        $otu = $order->partial_otu;
        $otu = explode('|', $otu);
        $data['orders']['product'] = Product::where('id', $otu[0])->first();
        $data['orders']['color'] = DB::table('product_attribute_values')->where('id', $otu[1])->pluck('value')->first();
        // $data['orders']['img']=DB::table()->

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (Auth::check()) {
            $cart = Order::find($id);
        } else {
            $cart = GuestOrder::find($id);
        }

        $cart->active = 0;
        $success = $cart->save();

        if ($success > 0) {
            flash('Item successfully removed from cart')->success();
        } else {
            flash("We seen to have ran into an error! Try again later!")->error();
        }

        return back();
    }
}
