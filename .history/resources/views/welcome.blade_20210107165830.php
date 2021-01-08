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
                            <P>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus porro eveniet cupiditate suscipit commodi ipsam, rem illum necessitatibus atque, qui perferendis laboriosam eum nesciunt reprehenderit? Id nostrum iusto eligendi quidem.
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
