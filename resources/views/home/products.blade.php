<div class="products-outer">
    <h2 class="display-3 prod-header py-3">New Arrivals</h2>
    <div class="products">
        <div class="prod-buttons">
            <button class="btn btn-prod prodNext flex-center" id="arrivalsNext">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </button>
            <button class="btn btn-prod prodPrev flex-center" id="arrivalsPrev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </button>
        </div>
        <div class="arrivals">
            <div class="py-2 col-12 px-md-5 d-inline-flex">
                @foreach ($arrivals as $item)
                    @php
                    $img= \App\Helpers\GeneralHelper::get_product_img($item->id);
                    $rating= $item->rating;
                    @endphp
                    <a href="/products/{{ $item->name }}/{{ $item->id }}">
                        <div class="prod">
                            <div class="card" style="background:url('{{ config('settings.catalogue_url') . $img }}')">
                                <div class="product align-items-center p-2 text-center">
                                    <h5 class="prod-name">{{ $item->name }}</h5>
                                    <div class="mt-3 info">
                                        <span class="text desc">{{ $item->description }}</span>
                                    </div>
                                    <div class="cost mt-3 text-light">
                                        <div class="d-flex justify-content-around align-items-baseline">
                                            @php
                                            $high = $item->original_price;
                                            $low = $item->discount_price;
                                            $perc = ($high-$low) / $high * 100
                                            @endphp
                                            <span class='text-white-50'>
                                                <del>{{ config('settings.currency') . ' ' . number_format($high) }}</del>
                                            </span>
                                            <span class="font-weight-bolder text-white" style="font-size:1.3remrem">
                                                {{ config('settings.currency') . ' ' . number_format($low) }}
                                            </span>
                                            <span class="font-italic text-white-50">Save
                                                {{ round($perc, 2) }}%
                                            </span>
                                        </div>
                                        <div class="stars text-center mt-2">
                                            @if ($rating == 0)
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @endfor
                                                <br><span>No rating for this product yet</span>

                                            @else
                                                @php $rating = (int)$rating; @endphp
                                                @for ($i = 1; $i <= $rating; $i++)
                                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                                @endfor

                                                @for ($i = $rating + 1; $i <= 5; $i++)
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @endfor
                                                <br><span>
                                                    Rated <span style="font-size:.8rem">{{ $rating }}+</span>
                                                    By <span style="font-size:.8rem">{{ $item->rated_by }}+</span>
                                                    clients
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="flex-center" style="height: 480px; width:320px">
                    <a href="" class="btn" style="font-size:3rem">
                        View More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('home.cats')

<div class="products-outer">
    <h2 class="display-3 prod-header py-3">Top Picks</h2>
    <div class="products">
        <div class="prod-buttons">
            <button class="btn btn-prod prodNext flex-center" id="picksNext">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </button>
            <button class="btn btn-prod prodPrev flex-center" id="picksPrev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </button>
        </div>
        <div class="picks">
            <div class="py-2 col-12 px-md-5 d-inline-flex">
                @foreach ($picks as $item)
                    @php
                    $img= \App\Helpers\GeneralHelper::get_product_img($item->id);
                    $rating= $item->rating;
                    @endphp
                    <a href="/products/{{ $item->name }}/{{ $item->id }}">
                        <div class="prod">
                            <div class="card" style="background:url('{{ config('settings.catalogue_url') . $img }}')">
                                <div class="product align-items-center p-2 text-center">
                                    <h5 class="prod-name">{{ $item->name }}</h5>
                                    <div class="mt-3 info">
                                        <span class="text desc">{{ $item->description }}</span>

                                    </div>
                                    <div class="cost mt-3 text-light">
                                        <div class="d-flex justify-content-around align-items-baseline">
                                            @php
                                            $high = $item->original_price;
                                            $low = $item->discount_price;
                                            $perc = ($high-$low) / $high * 100
                                            @endphp
                                            <span class='text-white-50'>
                                                <del>{{ config('settings.currency') . ' ' . number_format($high) }}</del>
                                            </span>
                                            <span class="font-weight-bolder text-white" style="font-size:1.3remrem">
                                                {{ config('settings.currency') . ' ' . number_format($low) }}
                                            </span>
                                            <span class="font-italic text-white-50">Save
                                                {{ round($perc, 2) }}%
                                            </span>
                                        </div>
                                        <div class="stars text-center">
                                            @if ($rating == 0)
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @endfor
                                                <br><span>No rating for this product yet</span>

                                            @else
                                                @php $rating = (int)$rating; @endphp
                                                @for ($i = 1; $i <= $rating; $i++)
                                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                                @endfor

                                                @for ($i = $rating + 1; $i <= 5; $i++)
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @endfor
                                                <br><span>
                                                    Rated <span style="font-size:.8rem">{{ $rating }}+</span>
                                                    By <span style="font-size:.8rem">{{ $item->rated_by }}+</span>
                                                    clients
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="flex-center" style="height: 480px; width:320px">
                    <a href="" class="btn" style="font-size:3rem">
                        View More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
