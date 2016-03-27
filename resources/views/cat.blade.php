@extends('partials.contentdisplay')

@section(' CATS', 'Home')

@section('styles')
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css" media="screen,projection"/>
@endsection


@section('content')

    <div>

        <?php
        for ($x = 0; $x <= 10; $x++) {
            $content=file_get_contents('http://thecatapi.com/api/images/get?format=html');
            echo $content;
        }
        ?>
    </div>

@endsection
