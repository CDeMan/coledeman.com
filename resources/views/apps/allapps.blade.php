@extends('partials.contentdisplay')

@section('title', 'Web Applications')

@section('content')
    <div class=" section grey darken-4 z-depth-4">
        <div class="container grey-text">
            <h2 class="glyphicon-bold"> @yield('title')</h2>
            <h4><a href="/apps/obnoxious">Obnoxious Converter</a></h4>
            <p>
                A simple string maniplulation application. Nothing fancy. Was mostly created for a bad joke.
            </p>
        </div>
    </div>

@endsection

