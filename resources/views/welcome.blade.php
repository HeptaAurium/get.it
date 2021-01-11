@extends('layouts.app')
@section('title', 'Homepage | ')

@section('content')
    <style>
        .site-footer {
            margin-left: 0 !important;
        }

    </style>
    @include('home.showcase')
    @include('home.products')
    @include('home.jumbotron')
    @include('layouts.navs.footer')
@endsection
