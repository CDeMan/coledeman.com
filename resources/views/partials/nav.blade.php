<header>
    <nav class="@yield('nav_color')">
        <div class="col s12">
            <div class="nav-wrapper">
                <a href="/home/" class="brand-logo">@yield('title')</a>
                <ul id="nav-mobile" class="right">
                    <li>
                        <a href="#" class="dropdown-button" data-beloworigin="true" data-activates="dropdown4">About Cole</a>
                        <ul id="dropdown4" class="dropdown-content">
                            <li><a href="/resume">Resume</a></li>
                            <li><a href="http://github.coledeman.com">Github</a></li>
                            <li><a href="#">Link3</a></li>
                        </ul>
                        <li><a href="http://web.cs.dal.ca/~deman">Dal Website</a></li>
                    </li>
                    @yield('context_buttons')
                </ul>
            </div>
        </div>
    </nav>
</header>
<ul id="nav-mobile" class="side-nav purple">

</ul>