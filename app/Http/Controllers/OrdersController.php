<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
use App\Models\GuestOrder;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //Init
        $success = false;
        $guest = $request->guest;
        $month = Date('F');

        // formulate a partial otu
        $otu = $request->product . "|" . (empty($request->color) ? 0 : $request->color) . "|" . (empty($request->size) ? 0 : $request->size)  . "|" . $request->quantification;

        if ($guest == 1) {
            $ip =  GeneralHelper::getIp();
            $new = $request->quantity == 0 ? 1 : $request->quantity;
            // Check if an order of the same product exists
            $check = GuestOrder::where('ip_address', $ip)->where('partial_otu', $otu)->where('transferred', 0)->first();
            if ($check != null) {
                $init = $check->quantity;
                $quantity = $new + $init;
                $check->quantity = $quantity;
                if ($check->save()) {
                    $success = true;
                }
            } else {
                $orders = new GuestOrder();
                $orders->ip_address = $ip;
                $orders->partial_otu = $otu;
                $orders->quantity = $new;
                if ($orders->save()) {
                    $success = true;
                }
            }
        } else {
            $orders = new Order;
            $orders->users_id = Auth::id();

            // If product is in cart
            $new = ($request->quantity == 0 ? 1 : $request->quantity);
            $check = Order::where('partial_otu', $otu)->where('users_id', Auth::id())->first();

            if ($check != null) {
                $init = $check->quantity;
                $quantity = $new + $init;
                $check->quantity = $quantity;
                if ($check->save()) {
                    $success = true;
                }
            } else {
                $orders = new Order;
                $orders->users_id = Auth::id();
                $orders->partial_otu = $otu;
                $orders->quantity = $new;
                if ($orders->save()) {
                    $success = true;
                }
            }
        }

        if ($success) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'failed']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        return "here";
        Order::where('id', $order)->delete();

        flash("Item removed from cart successfully")->success();
        return back();
    }
}
