<nav class="navbar navbar-transparent navbar-static-top" style="border: transparent;">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/venues') }}">
                {{ config('app.name', 'Laravel Multi Auth Guard') }}: Venue
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="/">Front Page</a></li>
                        <li><a href="/bands">Bands</a></li>
                        <li><a href="/promoters">Promoters/Booking Agents</a></li>
                        <li><a href="/venues">Venues</a></li>
                                          
                        <!-- Authentication Links -->
                        @if (Auth::guard('band')->check())

                            <li><a href="/band/home">Home</a></li>
                            <li>
                                <a href="{{ url('/band/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/band/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                        @elseif(Auth::guard('venue')->check())

                            <li><a href="/venue/home">Home</a></li>
                            <li>
                                <a href="{{ url('/venue/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/venue/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                        @elseif(Auth::guard('promoter')->check())

                            <li><a href="/promoter/home">Home</a></li>
                            <li>
                                <a href="{{ url('/promoter/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/promoter/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                        @else

                            <li><a href="{{ url('/login') }}" class="login">Login</a></li>
                            <li><a href="{{ url('/register') }}" class="register">Register</a></li>

                        @endif
                    </ul>
        </div>
    </div>
</nav>
