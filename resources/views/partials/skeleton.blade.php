<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - Cole DeMan's Site</title>

    <link href="{{ URL::asset('css/materialize.min.css') }}" rel="stylesheet" type="text/css"
          media="screen,projection"/>
    <link href="{{ URL::asset('css/nav.css') }}" rel="stylesheet" type="text/css" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @yield('styles')
    @yield('scripts')
    <script src='https://www.google.com/recaptcha/api.js'></script>
        <?php
        $whitelist = array(
                '127.0.0.1',
                '::1'
        );

        if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
            // not valid
        ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75629904-1', 'auto');
        ga('send', 'pageview');
    </script>
        <?php
            }else{
            echo "<!--The disabling google worked -->";
        }
                ?>


    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Cole DeMan's Website">
    <meta name="keywords" content="computer science, resume, coder, programmer, laravel, dalhousie">
    <meta name="author" content="Cole DeMan">
    <meta charset="utf-8">
    @yield('meta')
</head>
<body>
@yield('body')
{{--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>--}}
<script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous">
</script>
<script src="{{URL::asset('js/materialize.min.js')}}"></script>


    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>--}}
@yield('endscripts')
</body>
<footer class="footer-copyright">
    @yield('footer')
</footer>
</html>