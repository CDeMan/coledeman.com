<header>
    <nav class="@yield('nav_color')">
        <div class="col s12">
            <div class="nav-wrapper">
                <a href="/home/" class="brand-logo">Home</a>
                <ul id="nav-mobile" class="right hide-on-small-and-down">
                    <li>
                        <a href="#" class="dropdown-button" data-beloworigin="true" data-activates="dropdown4">About Cole</a>
                        <ul id="dropdown4" class="dropdown-content purple lighten-2">
                            <li><a class="@yield('drop_txt_color')" href="/about">About</a></li>
                            <li><a class="@yield('drop_txt_color')" href="/resume">Resume</a></li>
                            <li><a class="@yield('drop_txt_color')" href="http://github.coledeman.com">Github</a></li>
                        </ul>
                        <li><a href="http://web.cs.dal.ca/~deman">Dal Website</a></li>
                    </li>
                    @yield('context_buttons')
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-up">
                    <li>
                        <a href="#" class="dropdown-button" data-beloworigin="true" data-activates="dropdown3"><i class="material-icons">list</i></a>
                        <ul id="dropdown3" class="dropdown-content purple lighten-2">
                            <li><a class="@yield('drop_txt_color')" href="/about">About</a></li>
                            <li><a class="@yield('drop_txt_color')" href="/resume">Resume</a></li>
                            <li><a class="@yield('drop_txt_color')" href="http://github.coledeman.com">Github</a></li>
                            <li><a class="@yield('drop_txt_color')" href="http://web.cs.dal.ca/~deman">Dalhousie Website</a></li>
                        </ul>
                    </li>
                    @yield('context_buttons')
                </ul>
            </div>
        </div>
    </nav>
</header>{{-- for a side nav
<ul id="nav-mobile" class="side-nav purple">

</ul>--}}