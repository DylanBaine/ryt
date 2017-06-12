<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>RYT</title>
        <!--Icon-->
        <link rel="icon"
            type="image/gif" 
            href="{{asset('images/logo.gif')}}">
        <!--og and twitter tags-->
        <meta property="og:title" content="Route Your Tour">
        <meta property="og:type" content="website"> 
        <meta property="og:image" content="{{asset('images/logo.gif')}}"> 
        <meta property="og:url" content="{{url("/")}}">  

        <meta name="twitter:title" content="Route Your Tour">
        <meta name="twitter:image" content="{{asset('images/logo.gif')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body id="app">
        <nav class="navbar navbar-transparent navbar-static-top" style="background-color: rgba(79, 185, 226, .3); border: transparent;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button style="background-color: transparent;border-color: transparent;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse text-center" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
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

 {{--                       @elseif(Auth::guard('venue')->check())

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
                                    <li><a href="/venue/home">Home</a></li>
                                </ul>
                            </li>

--}}                    @elseif(Auth::guard('promoter')->check())

                            <li class="dropdown">
                                <li><a href="/promoter/home">Home</a></li>
                                <li>
                                    <a href="{{ url('/band/logout') }}"
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
    <div class="container-fluid">
        <header>
            <div class="header-img">
            </div>
            <nav class="home-nav ">
                <ul style="width: 100vw; z-index: 999;">
                    <li><a href="/" class="home">Home</a></li> | 
                    <li><a href="/bands" class="bands">Bands/Artists</a></li> | 
                    <li><a href="/promoters" class="promoters">Promoters/Booking Agents</a></li> | 
                    <li><a href="/venues" class="venue">Submit Your Venue</a></li> | 
                    <li><a href="/community" class="community">Community</a></li> | 
                    <li><a href="">Contact Us</a></li>
                </ul>
            </nav>
            <nav class="toggle-nav">
                    <div class="flex-center">
                        
                        <button style="background-color: transparent;border-color: transparent; margin-right: auto; margin-left: auto;" type="button" class="navbar-toggle collapsed open" data-toggle="collapse" data-target="#app-navbar-collapse-two">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar bar-one" style="transition: all .5s"></span>
                            <span class="icon-bar bar-two" style="transition: all .5s"></span>
                            <span class="icon-bar bar-three" style="transition: all .5s"></span>
                        </button>

                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse-two">
                        <ul class="nav navbar-nav text-center hidden-big" style=" z-index: 999; overflow: hidden; background: transparent;   ">
                            <li><a href="/" class="home">Home</a></li>  
                            <li><a href="/bands" class="bands">Bands/Artists</a></li> 
                            <li><a href="/promoters" class="promoters">Promoters/Booking Agents</a></li> 
                            <li><a href="/venue/register" class="venue">Submit Your Venue</a></li>
                            <li><a href="/community" class="community">Community</a></li> 
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
            </nav>
            
        </header>

        @yield('content')    

    </div>
    <footer class="col-xs-12 quarter-height flex-center" style="background-color: black; color: white;">
        <div class="col-xs-12 text-center">
            <div class="col-md-4">Footer</div>
            <div class="col-md-4">Footer</div>
            <div class="col-md-4"><div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div></div>
        </div>
    </footer>

    @if(Auth::guard('band')->check())
        <div class="profile btn-transparent">
            <a href="/band/home">Home Page</a>
        </div>
    @endif

    </body>
    <!-- Scripts -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"></script>
    <script>
        $('.open').click(function(){
            $('.bar-one').toggleClass('bar-one-open');

            $('.bar-two').toggleClass('bar-two-open');

            $('.bar-three').toggleClass('bar-three-open');
        });
    $('.open-form').click(function(){
        $('.search-form').css({
            'width' : '100%',
            'height' : '100%'
        });
        $('.search').css({
            'height' : '183px'
        });
        $(this).css({
            'display': 'none'
        })
    });


</script>
    <style>
        .bar-one-open {
            transform: rotate(45deg);
            margin-top: 4px;
            position: absolute;
        }
        .bar-two-open {
            transform: rotate(-45deg);
        }

        .bar-three-open {
            opacity: 0;
        }
    </style>
</html>
