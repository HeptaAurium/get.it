@extends('layouts.app')
@section('title', 'My Cart | ')

@section('content')
    @include('layouts.navs.sidepanel')
    <div class="clear-left mt-4">
        <div class="container-fluid py-2 px-3">
            <div class="row">
                <div class="col-md-8 bg-light rounded cart">
                    <ul class="ul-cart">
                        @foreach ($orders as $item)
                            @php
                            if($item['name']==""){
                            continue;
                            }
                            @endphp

                            <li class="li-cart row">
                                <div class="col-3 left"
                                    style="background-image:url('{{ config('settings.catalogue_url') . $item['img'] }}')">
                                </div>
                                <div class="col-9 py-2 px-3 row">
                                    <div class="col-6">
                                        <h2>{{ $item['name'] }}</h2>
                                        <p clas="text-small">Quantity: <span>{{ $item['quantity'] }}</span></p>
                                        <p clas="text-small">Price:
                                            <span>{{ config('settings.currency') . ' ' . number_format($item['price']) }}</span>
                                        </p>
                                    </div>
                                    <div class="col-6">

                                    </div>
                                    <div class="col-12 d-flex flex-row justify-content-md-between mt-6">
                                        <h5>Total Price:
                                            {{ config('settings.currency') . ' ' . number_format($item['price'] * (int) $item['quantity']) }}
                                        </h5>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
