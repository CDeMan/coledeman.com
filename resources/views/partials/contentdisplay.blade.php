@extends('partials.skeleton')

@section('nav_color', 'purple darken-3')
@section('drop_txt_color', 'grey-text text-darken-4')

@section('body')

    @include('partials.nav')
    @yield('content')

@endsection

@section('footer')
    <div class="section grey darken-3">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Contact Me:</h5>
                <a href="https://www.google.com/recaptcha/mailhide/d?k=01_mzbDQ0mGTnZ4OkqGFqOZA==&amp;c=Y5IF4Eiy9BI-8b2ofCaAakBinuOn7UnVXObpRcBFOzc="
                   onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501_mzbDQ0mGTnZ4OkqGFqOZA\75\75\46c\75Y5IF4Eiy9BI-8b2ofCaAakBinuOn7UnVXObpRcBFOzc\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;"
                   title="Reveal this e-mail address">Cole DeMan's Email</a>
                <p class="white-text">This webite was created by Cole DeMan using laravel.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="http://twitter.coledeman.com">Twitter</a></li>
                    <li><a class="grey-text text-lighten-3" href="http://coledeman.com/blog">Blog</a></li>
                    <li><a class="grey-text text-lighten-3" href="http://github.coledeman.com">Github</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2016 Cole DeMan
        </div>
    </div>
    </div>
@endsection
