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
            var tmp;
            var length = input.length;
            for (i = 0; i < length; i++) {
                console.log(input.length);
                tmp = capsChoice(i, input);
                r = getRandom(0, 25);
                if (r > 21) {
                    var ran = getRandom(2, 5);
                    for (j = 0; j < ran; j++) {
                        result += capsChoice(0, tmp);
                    }
                } else {
                    if (tmp == "o" || tmp == "O") {
                        r = getRandom(0, 3);
                        if (r > 1) {
                            tmp = "0";
                        }
                    }
                    if (tmp == "e" || tmp == "E") {
                        r = getRandom(0, 4);
                        if (r > 2) {
                            tmp = "3";
                        }
                    }
                    if (tmp == "i" || tmp == "I") {
                        r = getRandom(0, 3);
                        if (r > 1) {
                            tmp = "1";
                        }
                    }
                    result += tmp;
                }
            }
            console.log("input = " + input);
            return result;
        }
        ;

        function capsChoice(i, input) {
            var r = getRandom(0, 20);
            if (r > 9) {
                return input.charAt(i).toUpperCase();
            } else {
                return input.charAt(i).toLowerCase();
            }
        }

        function getRandom(min, max) {
            return Math.floor(Math.random() * (max - min) + min);
        }
    </script>

@endsection