@extends('layouts.app')
@section('title', 'My Cart ')

@section('content')
    @include('layouts.navs.sidepanel')
    <div class="clear-left mt-4">
        <div class="container-fluid py-2 px-3">
            <div class="row justify-content-around bg-light px-2">
                <div class="col-sm-11 col-md-6 rounded">
                    <ul class="ul-cart">
                        @foreach ($orders as $item)
                            @php
                            if($item['name']==""){
                            continue;
                            }
                            @endphp
                            <li class="li-cart row align-items-center my-3 rounded" style="background:#ddd;">
                                <div class="col-3">
                                    <img class="img-fluid w-100" src="{{ config('settings.catalogue_url') . $item['img'] }}"
                                        alt="">
                                </div>
                                <div class="col-9 px-3 row">
                                    <h2 class="col-12">{{ $item['name'] }}</h2>
                                    <div class="col-6">
                                        <p clas="text-small">Quantity: <span>{{ $item['quantity'] }}</span></p>
                                        <p clas="text-small">Price:
                                            <span>{{ config('settings.currency') . ' ' . number_format($item['price']) }}</span>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p clas="text-small">Color: <span>{{ $item['color'] }}</span>
                                            <a class="btn rounded-circle ml-1"
                                                style="background:{{ $item['hex'] }};padding:.5rem;margin-top: -4px;"></a>
                                        </p>
                                        <p clas="text-small">Size: <span>{{ $item['size'] }}</span></p>

                                    </div>
                                    <div class="col-12 ">
                                        <h5>Total Price:
                                            {{ config('settings.currency') . ' ' . number_format($item['price'] * (int) $item['quantity']) }}
                                        </h5>
                                    </div>
                                    <div class="row col-12">
                                        <div class="col-4">
                                            <button class="btn btn-danger btn-block btn-sm"> <i class="fa fa-trash"
                                                    aria-hidden="true"></i> </button>
                                        </div>
                                        <div class="col-8">
                                            <button class="btn btn-success btn-block btn-sm"> <i class="fa fa-pencil-alt"
                                                    aria-hidden="true"></i> Edit </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-11 col-md-6 rounded p-3">
                    <div style="background: #ddd;min-height: 500px;position:sticky;top:80px;" class="rounded p-3">
                        <table class="table mb-0 table-borderless">
                            <tbody>
                                <tr class="border-bottom">
                                    <td class="pl-0">Total Item count</td>
                                    <td class="pr-0 text-right">
                                        <span class="badge badge-pill badge-outline-primary">
                                            {{ \App\Helpers\GeneralHelper::items_in_cart_count() }}</span>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="pl-0">Total Price:</td>
                                    <td class="pr-0 text-right">
                                        <span class="badge badge-pill badge-outline-info">
                                            {{config('settings.currency')." ". number_format(\App\Helpers\GeneralHelper::items_in_cart_price()) }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="pre-checkout-btn">
                            <div class="mt-5">
                                <div class="row justify-content-evenly p-2">
                                    <div class="col-12  my-2">
                                        <a href="/products" class="btn btn-dark  btn-block">
                                            Continue Shopping
                                        </a>
                                    </div>
                                    <div class="col-12 my-2">
                                        <a href="/checkout/" class="btn  btn-block"
                                            style="background-color: orangered;color:#fff;">
                                            Proceed to Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
