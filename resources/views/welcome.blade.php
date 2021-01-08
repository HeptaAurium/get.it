@extends('layouts.app')
@section('title', 'Homepage | ')

@section('content')
    @include('home.showcase')

    <div class="col-12">
        <div class="products padding">
            <div class="arrivals">
                <h2 class="display-3 prod-header">New Arrivals</h2>
                <div class="py-5 px-5">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <div class="card" style="background:url('{{ asset('img/catalogue/1004.jpg') }}')">
                                <div class="product align-items-center p-2 text-center">
                                    {{-- <img src="{{ asset('img/catalogue/1001.jpg') }}"
                                        alt="" class="rounded w-100"> --}}
                                    <h5 class="prod-name">Product Name</h5>
                                    <div class="mt-3 info">
                                        <span class="text desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.</span>
                                        <span class="text desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.</span>
                                    </div>
                                    <div class="cost mt-3 text-light">
                                        <span>KSH 2,000</span>
                                        <div class="stars">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card" style="background:url('{{ asset('img/catalogue/1006.jpg') }}')">
                                <div class="product align-items-center p-2 text-center">
                                    {{-- <img src="{{ asset('img/catalogue/1001.jpg') }}"
                                        alt="" class="rounded w-100"> --}}
                                    <h5 class="prod-name">Product Name</h5>
                                    <div class="mt-3 info">
                                        <span class="text desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.</span>
                                        <span class="text desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.</span>
                                    </div>
                                    <div class="cost mt-3 text-light">
                                        <span>KSH 2,000</span>
                                        <div class="stars">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="card" style="background:url('{{ asset('img/catalogue/1005.jpg') }}')">
                                <div class="product align-items-center p-2 text-center">
                                    {{-- <img src="{{ asset('img/catalogue/1001.jpg') }}"
                                        alt="" class="rounded w-100"> --}}
                                    <h5 class="prod-name">Product Name</h5>
                                    <div class="mt-3 info">
                                        <span class="text desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.</span>
                                        <span class="text desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.</span>
                                    </div>
                                    <div class="cost mt-3 text-light">
                                        <span>KSH 2,000</span>
                                        <div class="stars">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endfor
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
