@extends('partials.contentdisplay')

@section('title', 'Best of Weeze')

@section('styles')
    <link href="{{ URL::asset('css/weeze.css') }}" rel="stylesheet" type="text/css" media="screen,projection"/>
@endsection

@section('content')

    <div class="section grey darken-4">
        <?php
        $directory = 'images/bestofweeze';
        $files = File::allFiles($directory);
        foreach ($files as $file) {
            echo "<img class=\"weeze\" src=\"".(string)$file."\">" , "\n";
        }
        ?>
    </div>

@endsection
