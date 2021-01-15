<div class="related-products mt-4 padding p-3">
    <h3 class="display-4">You might also like</h3>
    @php
    $related = \App\Helpers\GeneralHelper::get_related($product->id, $product->brands_id, $product->categories_id);
    @endphp
    <div class="container-fluid px-2">
        <div class="row">
            @foreach ($related as $item)

                <div class="col-md-4 col-lg-3 border rounded p-3">
                    <img src="{{ config('settings.catalogue_url') . \App\Helpers\GeneralHelper::get_display_image($item->id) }}"
                        alt="" class="img-fluid">
                    <div class="related-text text-center my-2">
                        @php
                        $low = $item->discount_price;
                        $high = $item->original_price;
                        $perc = ($high-$low)/$high*100;
                        $rating = (int)$product->rating;
                        @endphp
                        <div class="stars my-3">
                            @if ($rating == 0)
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @endfor
                                <br><span class="py-2">No rating for this product yet</span>

                            @else
                                @for ($i = 1; $i <= $rating; $i++)
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                @endfor

                                @for ($i = $rating + 1; $i <= 5; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @endfor
                                <br><span class="py-2">
                                    Rated <span style="font-size:.8rem">{{ $rating }}+</span>
                                    By <span style="font-size:.8rem">{{ $item->rated_by }}+</span> clients
                                </span>
                            @endif
                        </div>
                        <h4 class="font-weight-bolder my-3">
                            {{ config('settings.currency') . ' ' . number_format($low) }}
                            <sup><del>{{ number_format($high) }}</del></sup>
                            &nbsp;&nbsp;&nbsp;
                            <span class="text-success">Save {{ round($perc, 2) }}%</span>
                        </h4>
                        <div class="col-12 d-flex flex-row">
                            <a href="/products/{{$item->name}}/{{$item->id}}" class="btn btn-info btn-lg w-75 mx-auto">View Product</a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
