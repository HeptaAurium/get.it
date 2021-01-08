@extends('layouts.app')
@section('title', 'Homepage | ')

@section('content')
    <div class="showcase-universal">
        <div class="scroll-buttons">
            <button class="btn btnNext flex-center">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </button>
            <button class="btn btnPrev flex-center">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </button>
        </div>
        <div class="indicators">
            <ol style="list-style-type: none">
                <li class="li-indicator">
                    <div class="row align-items-center">
                        <img class="col-4 rounded-circle img-fluid" style="height:auto;" src="{{asset('img/front/100.jpg')}}" alt="">
                        <div class="col-8">
                            <div class="flex-column">
                                <h3 class="text-center">PRODUCT NAME</h3>
                                <h6 class="text-center font-weight-bolder">KES 5,000</h6>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="li-indicator">
                    <div class="row align-items-center">
                        <img class="col-4 rounded-circle img-fluid" style="height:auto;" src="{{asset('img/front/1001.jpg')}}" alt="">
                        <div class="col-8">
                            <div class="flex-column">
                                <h3 class="text-center">PRODUCT NAME</h3>
                                <h6 class="text-center font-weight-bolder">KES 5,000</h6>
                            </div>
                        </div>
                    </div>
                </li>
            </ol>
        </div>

        <div class="showcase-outer one">
            <div class="showcase">
                <div class="nav">
                    @include('home.nav')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="content d-flex flex-column">
                                    <h1 class='non-diplay'>SNEAKERS</h1>
                                    <h3 class="display display-4">Kicks for Cliques</h3>
                                    <P>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus porro eveniet
                                        cupiditate suscipit commodi ipsam, rem illum necessitatibus atque, qui perferendis
                                        laboriosam eum nesciunt reprehenderit? Id nostrum iusto eligendi quidem.
                                    </P>
                                    <button class="btn btn-lg">Get Started</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
