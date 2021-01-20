@extends('layouts.app')
@section('title', 'Shop with Us')

@section('content')
    @include('layouts.navs.sidepanel')
    <div class="clear-left mt-4">
        <div class="container-fluid px-2">
            <div class="row justify-content-between shop p-2 px-3">
                <h2 class="display-4 col-12 p-4">Most Popular Products <span class="float-right text-small"><a href="">View
                            More</a></span> </h2>
                @foreach ($picks as $item)
                    <div class="card col-6 col-md-4 col-lg-3 bg-light mb-2 border rounded p-3"
                        style="background:url('{{ config('settings.catalogue_url') . \App\Helpers\GeneralHelper::get_display_image($item->id) }}')">
                        <div class="shop-footer rounded text-center">
                            @php
                            $low = $item->discount_price;
                            $high = $item->original_price;
                            $perc = ($high-$low)/$high*100;
                            $rating = (int)$item->rating;
                            @endphp
                            <h5 class="prod-name">{{ $item->name }}</h5>
                            <div class="mt-3 info">
                                <span class="text desc text-small">{{ $item->description }}</span>
                            </div>
                            <div class="cost mt-3 text-light">
                                <div class="d-flex justify-content-around align-items-baseline">
                                    @php
                                    $high = $item->original_price;
                                    $low = $item->discount_price;
                                    $perc = ($high-$low) / $high * 100
                                    @endphp
                                    <span class='text-white-50 d-none d-md-block'>
                                        <del>{{ config('settings.currency') . ' ' . number_format($high) }}</del>
                                    </span>
                                    <span class="font-weight-bolder text-white price" style="font-size:1.3rem;">
                                        {{ config('settings.currency') . ' ' . number_format($low) }}
                                    </span>
                                    <span class="font-italic text-white-50 d-none d-md-block">Save
                                        {{ round($perc, 2) }}%
                                    </span>
                                </div>
                                <div class="stars text-center mt-2">
                                    @if ($rating == 0)
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                        <br><span class="d-none d-md-block">No rating for this product yet</span>

                                    @else
                                        @php $rating = (int)$rating; @endphp
                                        @for ($i = 1; $i <= $rating; $i++)
                                            <i class="fa fa-star active" aria-hidden="true"></i>
                                        @endfor

                                        @for ($i = $rating + 1; $i <= 5; $i++)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                       <br><span class="d-none d-md-block">
                                            Rated <span style="font-size:.8rem">{{ $rating }}+</span>
                                            By <span style="font-size:.8rem">{{ $item->rated_by }}+</span>
                                            clients
                                        </span>
                                    @endif
                                </div>
                                <div class="buttons">
                                    <a href="/products/{{ $item->name }}/{{ $item->id }}" class="btn btn-block col-md-6 btn-orangered mt-2 mt-md-4 mx-auto" >Details</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
            {{-- <hr style="width:90%;margin:1rem auto;border-top:1px solid #ddd;"> --}}
            <div class="row justify-content-between shop p-2 px-3">
                <h2 class="display-4 col-12 p-4"> Highest Rated Products</h2>
                @foreach ($rated as $item)
                    <div class="card col-6 col-md-4 col-lg-3 bg-light mb-2 border rounded p-3"
                        style="background:url('{{ config('settings.catalogue_url') . \App\Helpers\GeneralHelper::get_display_image($item->id) }}')">
                        <div class="shop-footer rounded text-center">
                            @php
                            $low = $item->discount_price;
                            $high = $item->original_price;
                            $perc = ($high-$low)/$high*100;
                            $rating = (int)$item->rating;
                            @endphp
                            <h5 class="prod-name">{{ $item->name }}</h5>
                            <div class="mt-3 info">
                                <span class="text desc text-small">{{ $item->description }}</span>
                            </div>
                            <div class="cost mt-3 text-light">
                                <div class="d-flex justify-content-around align-items-baseline">
                                    @php
                                    $high = $item->original_price;
                                    $low = $item->discount_price;
                                    $perc = ($high-$low) / $high * 100
                                    @endphp
                                    <span class='text-white-50 d-none d-md-block'>
                                        <del>{{ config('settings.currency') . ' ' . number_format($high) }}</del>
                                    </span>
                                    <span class="font-weight-bolder text-white price" style="font-size:1.3rem;">
                                        {{ config('settings.currency') . ' ' . number_format($low) }}
                                    </span>
                                    <span class="font-italic text-white-50 d-none d-md-block">Save
                                        {{ round($perc, 2) }}%
                                    </span>
                                </div>
                                <div class="stars text-center mt-2">
                                    @if ($rating == 0)
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                        <br><span class="d-none d-md-block">No rating for this product yet</span>

                                    @else
                                        @php $rating = (int)$rating; @endphp
                                        @for ($i = 1; $i <= $rating; $i++)
                                            <i class="fa fa-star active" aria-hidden="true"></i>
                                        @endfor

                                        @for ($i = $rating + 1; $i <= 5; $i++)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                       <br><span class="d-none d-md-block">
                                            Rated <span style="font-size:.8rem">{{ $rating }}+</span>
                                            By <span style="font-size:.8rem">{{ $item->rated_by }}+</span>
                                            clients
                                        </span>
                                    @endif
                                </div>
                                <div class="buttons">
                                    <a href="/products/{{ $item->name }}/{{ $item->id }}" class="btn btn-block col-md-6 btn-orangered mt-2 mt-md-4 mx-auto" >Details</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
            {{-- <hr style="width:90%;margin:1rem auto;border-top:1px solid #ddd;"> --}}  <div class="row justify-content-between shop p-2 px-3">
                <h2 class="display-4 col-12 p-4"> New Arrivals  </h2>
                @foreach ($arrivals as $item)
                    <div class="card col-6 col-md-4 col-lg-3 bg-light mb-2 border rounded p-3"
                        style="background:url('{{ config('settings.catalogue_url') . \App\Helpers\GeneralHelper::get_display_image($item->id) }}')">
                        <div class="shop-footer rounded text-center">
                            @php
                            $low = $item->discount_price;
                            $high = $item->original_price;
                            $perc = ($high-$low)/$high*100;
                            $rating = (int)$item->rating;
                            @endphp
                            <h5 class="prod-name">{{ $item->name }}</h5>
                            <div class="mt-3 info">
                                <span class="text desc text-small">{{ $item->description }}</span>
                            </div>
                            <div class="cost mt-3 text-light">
                                <div class="d-flex justify-content-around align-items-baseline">
                                    @php
                                    $high = $item->original_price;
                                    $low = $item->discount_price;
                                    $perc = ($high-$low) / $high * 100
                                    @endphp
                                    <span class='text-white-50 d-none d-md-block'>
                                        <del>{{ config('settings.currency') . ' ' . number_format($high) }}</del>
                                    </span>
                                    <span class="font-weight-bolder text-white price" style="font-size:1.3rem;">
                                        {{ config('settings.currency') . ' ' . number_format($low) }}
                                    </span>
                                    <span class="font-italic text-white-50 d-none d-md-block">Save
                                        {{ round($perc, 2) }}%
                                    </span>
                                </div>
                                <div class="stars text-center mt-2">
                                    @if ($rating == 0)
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                        <br><span class="d-none d-md-block">No rating for this product yet</span>

                                    @else
                                        @php $rating = (int)$rating; @endphp
                                        @for ($i = 1; $i <= $rating; $i++)
                                            <i class="fa fa-star active" aria-hidden="true"></i>
                                        @endfor

                                        @for ($i = $rating + 1; $i <= 5; $i++)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                       <br><span class="d-none d-md-block">
                                            Rated <span style="font-size:.8rem">{{ $rating }}+</span>
                                            By <span style="font-size:.8rem">{{ $item->rated_by }}+</span>
                                            clients
                                        </span>
                                    @endif
                                </div>
                                <div class="buttons">
                                    <a href="/products/{{ $item->name }}/{{ $item->id }}" class="btn btn-block col-md-6 btn-orangered mt-2 mt-md-4 mx-auto" >Details</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
            {{-- <hr style="width:90%;margin:1rem auto;border-top:1px solid #ddd;"> --}}
        </div>
    </div>
@endsection
