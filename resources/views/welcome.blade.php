@extends('layouts.app')
@section('title', 'Homepage | ')

@section('content')
    @include('home.showcase')

    <div class="col-12">
        <div class="products padding">
            <div class="arrivals">
                <h2 class="display-3 prod-header">New Arrivals</h2>
                <div class="py-5 px-md-5">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-3">
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
                        <div class="col-xs-12 col-md-6 col-lg-3">
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
                        <div class="col-xs-12 col-md-6 col-lg-3">
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
                    <a href="#" class="btn btn-link">View All</a>
                </div>
            </div>
            <div class="picks">
                <h2 class="display-3 prod-header">Top Picks</h2>
                <div class="py-5 px-md-5">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-3">
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
                        <div class="col-xs-12 col-md-6 col-lg-3">
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
                        <div class="col-xs-12 col-md-6 col-lg-3">
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
                    <a href="#" class="btn btn-link">View All</a>
                </div>
            </div>
        </div>

        <div class="jumbotron row jumbotron-fluid catalogue flex-column padding">
            <h1 class="display-4 text-center py-3">We've Got it all</h1>
            <div class="text-center col-10 mx-auto">
                <div class="row justify-content-around flex-column">
                    <div class="col-12">
                        <span>FOOTWEAR</span>
                    </div>
                    <div class="clear"></div>
                    <div class="col-12">
                        <span>MEN</span>
                        <span>LADIES</span>
                        <span>KIDS</span>
                    </div>
                    <div class="clear"></div>
                    <div class="col-12">
                        <span>COOKING PANS</span>
                        <span>COOKING POTS</span>
                        <span>PRESSURE COOKER</span>
                        <span>PLATES</span>
                        <span>EGG BEATER</span>
                    </div>
                    <div class="clear"></div>
                    <div class="col-12">
                        <span>PILLOWS</span>
                        <span>DUVETS</span>
                        <span>BATHROOM ORGANISERS</span>
                        <span>BUSINESS TOOLS</span>
                        <span>DINNER SETS</span>
                        <span>BAGS</span>
                        <span>BAGS</span>
                    </div>
                    <div class="col-12">
                        <span>BOOTS</span>
                        <span>SNEAKERS</span>
                        <span>CONVERSE</span>
                        <span>VANS</span>
                        <span>OPEN SHOES</span>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center my-4">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>

    @endsection
