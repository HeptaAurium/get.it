<?php
$allProducts = \App\Helpers\GeneralHelper::get_all_products(10);
$allCategories = \App\Helpers\GeneralHelper::get_all_categories(10);
$allBrands = \App\Helpers\GeneralHelper::get_all_brands(10);
?>
<button class="expand-side flex-center" title="Toggle minified view" data-toggle="tooltip">
    <i class="fa fa-caret-left" aria-hidden="true"></i>
</button>
<nav class="search-side-bar  padding">
    <div class="container-fluid">
        <a href="/" class="btn">
            <div class="logo flex-center">
                <img class="img-responsive" style="height:80px;" src="{{ asset('img/icons/logo-clear.png') }}" alt="">
                <h5 class="display-4 ssb-header pl-4 logo-text" style="font-size:36px !important;"> <span class="text-dark font-weight-bold"
                        >{{ config('app.name') }}</span></h5>
            </div>
        </a>
        <ul class="nav flex-column">
            <li class="nav-item ssb-li-parent">
                <h5 class="display-4 ssb-header">Categories<i class="fa fa-caret-down float-right"
                        aria-hidden="true"></i></h5>
                <ul class="ssb-ul">
                    @if (count($allCategories) == 0)
                        <h6> <i class="fa fa-frown-o" aria-hidden="true"></i> No categories found from your search
                        </h6>
                    @else
                        @foreach ($allCategories as $item)
                            <li class="ssb-li"><a href="{{ __('/categories/' . $item->route . '/' . $item->id . '') }}"
                                    class="w-100">{{ $item->name }} </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </li>
            <li class="nav-item ssb-li-parent">
                <h5 class="display-4 ssb-header">Brands<i class="fa fa-caret-down float-right" aria-hidden="true"></i>
                </h5>
                <ul class="ssb-ul">
                    @if (count($allBrands) == 0)
                        <h6> <i class="fa fa-frown-o" aria-hidden="true"></i> No brands found from your search
                        </h6>
                    @else
                        @foreach ($allBrands as $item)
                            <li class="ssb-li">
                                <a href="{{ __('/brands/' . $item->name . '/' . $item->id . '') }}" class="w-100">
                                    <img src="{{ config('settings.catalogue_url') . $item->logo }}"
                                        class="img-fluid" style="width:16px;">
                                    {{ $item->name }}
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </li>
            <li class="nav-item pt-3 ssb-li-parent">
                <h5 class="display-4 ssb-header">Products<i class="fa fa-caret-down float-right" aria-hidden="true"></i>
                </h5>
                <ul class="ssb-ul padding">
                    @if (count($allProducts) == 0)
                        <h6> <i class="fa fa-frown-o" aria-hidden="true"></i> No products found from your search
                        </h6>
                    @else
                        @foreach ($allProducts as $item)
                            <li class="ssb-li"><a href="{{ __('/products/' . $item->name . '/' . $item->id . '') }}"
                                    class="w-100">{{ $item->name }} </a>
                            </li>
                        @endforeach
                    @endif

                </ul>
                <h6><a href="#" class="btn">Explore More products</a></h6>
            </li>
        </ul>
    </div>
</nav>
