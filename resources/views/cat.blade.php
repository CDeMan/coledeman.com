@extends('partials.contentdisplay')

@section('title', 'CATS')

@section('styles')
    <style>
        img {width: 33%;}
    </style>

@section('content')

    <div class="grey darken-4">

        <?php
        for ($x = 0; $x <= 10; $x++) {
            $content=file_get_contents('http://thecatapi.com/api/images/get?format=html');
            echo $content;
        }
        ?>
    </div>

@endsection
