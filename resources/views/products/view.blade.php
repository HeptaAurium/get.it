@extends('layouts.app')
@section('title', $product->name)

@section('content')
    @include('layouts.navs.sidepanel')
    @php
    $low = $product->discount_price;
    $high = $product->original_price;
    $perc = ($high-$low)/$high*100;
    $rating = (int)$product->rating;
    @endphp
    <div class="clear-left bg-light">
        <div class="product-showcase p-1 pt-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 bg-transparent">
                        <div class="product-img-div p-0 m-0">
                            <div class="display-img"
                                style="background-image:url('{{ config('settings.catalogue_url') . $images[0]->storage_path }}')">
                            </div>
                            <div class="img-list list-inline row flex-row">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 pt-md-4 pl-md-3">
                        <h1 class="display-3 font-weight-bold mb-2 ">{{ $product->name }}</h1>
                        <h4 class="font-weight-bolder my-2">
                            {{ config('settings.currency') . ' ' . number_format($low) }}
                            <sup><del>{{ number_format($high) }}</del></sup>
                            &nbsp;&nbsp;&nbsp;
                            <span class="text-success">Save {{ round($perc, 2) }}%</span>
                        </h4>

                        <div class="stars text-left my-2">
                            @if ($rating == 0)
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @endfor
                                <br><span>No rating for this product yet</span>

                            @else
                                @for ($i = 1; $i <= $rating; $i++)
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                @endfor

                                @for ($i = $rating + 1; $i <= 5; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @endfor
                                <br><span>
                                    Rated <span style="font-size:.8rem">{{ $rating }}+</span>
                                    By <span style="font-size:.8rem">{{ $product->rated_by }}+</span> clients
                                </span>
                            @endif
                        </div>
                        <p class="lead my-2">
                            {{ $product->description }}
                        </p>
                        <h6>
                            <i class="fa fa-map-marker-alt text-success pr-2" aria-hidden="true"
                                style="font-size:1.52rem"></i>
                            Delivered by {{ Date('l, jS F Y', strtotime('+5 day')) }}
                        </h6>
                        <hr style="width: 80%;margin: 30px auto; border-top:1px solid #ddd;">
                        @php
                        $sizes = $product->sizes;
                        if(!empty($sizes)):
                        $sizes = explode(',', $sizes);
                        @endphp
                        <h3 class="display my-3">Available Sizes</h3>
                        <div class="p-2 row h-auto">
                            @foreach ($sizes as $item)
                                {{-- <div class="col-3"> --}}
                                    <span class="span-input span-size" data-size="{{ $item }}">{{ $item }}</span>
                                    {{--
                                </div> --}}
                            @endforeach
                        </div>
                        @php endif; @endphp
                        @if (count($colors) > 0)
                            <h3 class="display my-3">Available Sizes</h3>
                            <div class="p-2 row h-auto">
                                @foreach ($colors as $it)
                                    <div class="col-3">
                                        <span class="span-colors @if($it['hex'] != '#fff') text-white @endif flex-center m-2" style="background:{{$it['hex']}};">
                                        {{ ucfirst($it['name']) }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="quantity my-4">
                            <div class="form-group row">
                                <label for="quantity" class="col-12">Quantity</label>
                                <div class="row col-12">
                                    <div class="col-6">
                                        <input id="quantity" class="form-control" type="number" name="" min="0" value="1">
                                    </div>
                                    <div class="col-6">
                                        <input id="quantity" class="form-control" type="number" name="" min="0" value="{{}}" readonly>
                                    </div>
                                </div>
                                <div class="col-11 mx-auto my-3">
                                    <button class="btn btn-lg btn-block" style="background: orangered;color:#fff" id="btnAddCart"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('products.partials.related')
    </div>
    @include('layouts.navs.footer')
@endsection
