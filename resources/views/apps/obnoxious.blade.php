{{--/**
 * Created by PhpStorm.
 * User: cole
 * Date: 15/01/17
 * Time: 7:29 PM
 *--}}
@extends('partials.contentdisplay')

@section('title', 'Obnoxious Converter')

@section('content')

    <div class=" section grey darken-4 z-depth-4">
        <div class="container grey-text">
            <h2>@yield('title')</h2>
            <p class="result"></p>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea" class="materialize-textarea"></textarea>
                            <label for="textarea">Input</label>
                            <a id="convert" class="waves-effect waves-light btn">Convert</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

@section("endscripts")

    <script>
        $(document).ready(function () {

            $(".result").slideUp();

            $("#convert").click(function () {
                var input = $("#textarea").val();
                var result = process(input);
                $(".result").text(result);
                $(".result").slideDown();
            });
        });

        function process(input) {
            var r = getRandom(0, 10);
            var result = "";
            var length = input.length;
            for (i = 0; i < length; i++) {
                console.log(input.length);
                r = getRandom(0, 10);
                if (r > 4) {
                    result += input.charAt(i).toUpperCase();
                } else {
                    result += input.charAt(i);
                }
            }
            console.log("input = " + input);
            return result;
        }
        ;

        function getRandom(min, max) {
            return Math.floor(Math.random() * (max - min) + min);
        }
    </script>

@endsection