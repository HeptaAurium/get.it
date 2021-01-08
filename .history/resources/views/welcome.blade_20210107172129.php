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
        .<div id="my-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
                <li data-target="#my-carousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Title</h5>
                        <p>Text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Title</h5>
                        <p>Text</p>
                    </div>
                </div>
            </div>
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
