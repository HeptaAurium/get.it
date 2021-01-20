@extends('layouts.app')
@section('title', 'My Cart ')

@section('content')
    @include('layouts.navs.sidepanel')
    <div class="clear-left mt-4">
        <div class="cat-main search-main">
            <div class="row">
                @if (count($orders) ==0)
                    <div class="col md-8 flex-center" style="height: 300px;">
                        <h3 class="display text-muted">No Products in your Cart, <a href="/home">Start</a> shopping to add
                            items to cart</h3>
                    </div>
                @else
                    <div class="container">
                        <div class="row justify-content-between px-1">
                            <div class="col-md-7  mx-auto">
                                @foreach ($orders as $item)
                                    <div class="cart-division p-2 shadow-sm bg-white my-1">
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="{{ config('settings.catalogue_url') . $item['img'] }}" alt="" class="img-fluid w-100">
                                            </div>
                                            {{-- <div class="col-6 p-2">
                                                <h5 class="display">Product: <span
                                                        class="font-weight-bolder">{{ $item['name'] }}</span>
                                                </h5>
                                                <h5 class="display">Brand:
                                                    <span class="font-weight-bolder">
                                                        {{ $item['brand'] }}
                                                    </span>
                                                </h5>
                                                <h5 class="display">Color:
                                                    <span class="font-weight-bolder">
                                                        {{ $item['color'] }}
                                                    </span>
                                                </h5>
                                                <h5 class="display">Size:
                                                    <span class="font-weight-bolder">
                                                        {{ $item['size'] }}
                                                    </span>
                                                </h5>

                                                <h5 class="display">Quantity:
                                                    <span class="font-weight-bolder"> {{ $item['quantity'] }}
                                                        {{ $item['quantification'] }}
                                                    </span>
                                                </h5>
                                                <div class="cart-buttons d-flex flex-row">
                                                    <div class="col-6 px-2">
                                                        <button type="button" class="btn btn-primary btn-sm btn-block"
                                                            data-toggle="modal" data-target="#editModal"
                                                            data-whatever="@<?php echo $item->id; ?> @whatever">Edit</button>
                                                        @include('modals.edit')
                                                    </div>
                                                    <div class="col-6 px-2">
                                                        <a href="/cart/{{ $item->id }}"
                                                            class="btn btn-block btn-sm btn-danger">
                                                            Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                @endforeach
                            </div>
                            {{-- <div class="col-md-5 bg-white shadow-sm pre-checkout mx-3 mx-md-auto d-flex flex-column">
                                <div class="d-flex my-2">
                                    <h5 class="col-6">Total Item count </h5>
                                    <span class="badge badge-pill badge-primary col-6">
                                        {{ \App\Helpers\GeneralHelper::items_in_cart_count() }}</span>
                                </div>
                                <div class="d-flex my-2">
                                    <h5 class="col-6">Total Price:
                                    </h5>
                                    <span class="badge badge-pill badge-success col-6">Ksh
                                        {{ number_format(\App\Helpers\GeneralHelper::items_in_cart_price()) }}</span>
                                </div>

                                <div class="pre-checkout-btn">
                                    <div class="mt-5">
                                        <div class="row justify-content-evenly p-2">
                                            <div class="col-12  my-2">
                                                <a href="/products" class="btn btn-dark  btn-block">
                                                    Continue Shopping
                                                </a>
                                            </div>
                                            @guest
                                                @php
                                                $guest = 0;
                                                @endphp
                                            @else
                                                @php
                                                $guest = 1;
                                                @endphp
                                            @endguest
                                            <div class="col-12 my-2">
                                                <a href="/checkout/{{ $guest }}" class="btn  btn-block"
                                                    style="background-color: orangered;color:#fff;">
                                                    Proceed to Checkout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                @endif
            </div>
            @guest
                <div class="cart-footer alert cart-alert justify-content-between align-items-center">

                    <p class="small">
                        <i class="fa fa-info" aria-hidden="true"></i> Items in cart will disappear after 48hrs, <a
                            href="{{ route('login') }}">login </a> to make your cart permanent!
                    </p>

                </div>
            @endguest
        </div>
    @endsection
