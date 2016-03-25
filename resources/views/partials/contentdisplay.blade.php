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
                <a href="http://www.google.com/recaptcha/mailhide/d?k=01_jPVwtIu9dNWiukOMSOCIA==&amp;c=AA9xec6x11FiE5Ci7Tkc4wtZpnveyFuClJvO22b15Mo=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501_jPVwtIu9dNWiukOMSOCIA\75\75\46c\75AA9xec6x11FiE5Ci7Tkc4wtZpnveyFuClJvO22b15Mo\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">Reveal Email Address</a>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="http://twitter.coledeman.com">Twitter</a></li>
                    <li><a class="grey-text text-lighten-3" href="http://Github.coledeman.com">Github</a></li>
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
