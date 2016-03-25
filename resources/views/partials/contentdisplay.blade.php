@extends('partials.skeleton')

@section('nav_color', 'purple darken-3')

@section('body')

    @include('partials.nav')
    @yield('content')

@endsection


