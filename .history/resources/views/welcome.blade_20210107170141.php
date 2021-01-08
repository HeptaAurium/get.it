@extends('layouts.app')
@section('title', 'Homepage | ')

@section('content')
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
                               <button class="btn btn-block">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
