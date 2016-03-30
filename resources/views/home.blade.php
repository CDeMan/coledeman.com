@extends('partials.contentdisplay')

@section('title', 'Home')

@section('styles')
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css" media="screen,projection"/>
@endsection

@section('card1lnk', '/about')
@section('card2lnk', 'http://github.coledeman.com')
@section('card3lnk', '/resume')
@section('cardcolor', 'grey darken-3 grey-text text-lighten-4')

@section('content')

    <div class="parallax-container valign-wrapper row">
        <div class="col s4 valign cards">
            <div class="center">
                <a href="@yield('card1lnk')">
                    <img class="circle profile_pic" src={{URL::asset('images/userimage.jpg')}}>
                </a>
                <a href="@yield('card1lnk')">
                    <div class="card-panel  @yield('cardcolor')">
                        <p class="center flow-text">About Cole</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col s4 valign cards">
            <div class="center">
                <a href="@yield('card2lnk')">
                    <img class="circle profile_pic"
                         src='http://assets2.bigthink.com/system/idea_thumbnails/60118/primary/computer_code.jpg?1448159143'>
                </a>
                <a href="@yield('card2lnk')">
                    <div class="card-panel  @yield('cardcolor')">
                        <p class="center flow-text">GitHub</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col s4 valign cards">
            <div class="center">
                <a href="@yield('card3lnk')">
                    <img class="circle profile_pic"
                         src='http://v2.yewno.com/wp-content/uploads/2015/11/9cbd773a1b3393d88e12f0123e1a1dc4_clientImage_2400x1800_xlarge_original_1.jpg'>
                </a>
                <a href="@yield('card3lnk')">
                    <div class="card-panel  @yield('cardcolor')">
                        <p class="center flow-text">Resume</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="parallax no-padding s12">
            <img src={{URL::asset('images/para1.jpg')}}>
        </div>
    </div>
    <div class=" section grey darken-4 z-depth-4">
        <div class="container grey-text">
            <h2>About This Site.</h2>
            <p>This site is meant as a showcase for my strengths as a web designer and supply information on my computer
                science
                skills. It was built using an open-source PHP framework known as <a
                        href="https://laravel.com/">Laravel</a>.
                This framework utilizes a model-view-controller architecture, and as of March 2015 is considered the
                most popular PHP framework on the internet.</p>

            <p>This website is also styled with a CSS framework called <a href="http://materializecss.com">Materialize
                    CSS</a> it is a third-party framework that uses Google's <a
                        href="https://www.google.com/design/spec/material-design/introduction.html">Material Design</a>
                principles to deliver an elegant and responsive minimalistic style to the site. I have also designed this
            website to provide a optimal user experience by making the content to display differently on different
            sized displays from smart phones to desktop computers (you can test this by resizing your browser window.)</p>

            <p>I am currently a student at <a href="http://www.dal.ca/">Dalhousie University</a> studying for my
                Bachelors of Computer Science. I'm currently looking to provide freelance web design. If you have any
                inquiries or job offers please contact me <a
                        href="http://www.google.com/recaptcha/mailhide/d?k=01_mzbDQ0mGTnZ4OkqGFqOZA==&amp;c=Y5IF4Eiy9BI-8b2ofCaAakBinuOn7UnVXObpRcBFOzc="
                        onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501_mzbDQ0mGTnZ4OkqGFqOZA\75\75\46c\75Y5IF4Eiy9BI-8b2ofCaAakBinuOn7UnVXObpRcBFOzc\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;"
                        title="Reveal this e-mail address">here</a>.</p>

        </div>
    </div>

@endsection

@section('endscripts')
    <script>

        $(document).ready(function () {
            $('.parallax').parallax();
        });

    </script>
@endsection