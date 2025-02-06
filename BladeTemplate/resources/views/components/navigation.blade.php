<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            @section('navigation')
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="/">Home</a>
                    </li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}">
                        <a href="/about">About</a>
                    </li>
                    <li class="{{ Request::is('project') ? 'active' : '' }}">
                        <a href="/project">Projects</a>
                    </li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}">
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            @show
        </div>
    </div>
</nav>
