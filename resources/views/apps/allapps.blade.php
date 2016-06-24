@extends('partials.contentdisplay')

@section('title', 'Applications')

@section('content')
    <div class=" section grey darken-4 z-depth-4">
        <div class="container grey-text">
            <h2 class="glyphicon-bold"> @yield('title')</h2>
            <h4><a href="https://coledeman.com/apps/shitgen">Shit Generator</a></h4>
            <p>
                Basically just a simple little chunk of Php code that replaces the words in a meme, a friend suggested
                it and I decided to make it.
            </p>
        </div>
    </div>

@endsection

