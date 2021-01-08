@extends('layouts.app')
@section('title', 'Homepage | ')

@section('content')
    <div class="showcase-outer one">
        <div class="showcase">
            <div class="nav">
                @include('home.nav')
                <div class="row">
                    <div class="col-md-10">
                        <div class="content">
                            <h1>SNEAKERS</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
