@extends('partials.skeleton')

@section('nav_color', 'purple darken-3')
@section('drop_txt_color', 'grey-text text-darken-4')

@section('body')

    @include('partials.nav')
    @yield('content')

@endsection


