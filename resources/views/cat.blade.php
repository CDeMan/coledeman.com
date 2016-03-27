@extends('partials.contentdisplay')

@section('title', 'CATS')

@section('styles')
    <style>
        img {width: 33%;}
    </style>

@section('content')

    <div class="grey darken-4">

        <?php
            $content=file_get_contents('http://thecatapi.com/api/images/get?format=html&api_key=NzY3NjA&results_per_page=21');
            echo $content;
        ?>
    </div>

@endsection
