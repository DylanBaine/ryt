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
        <meta property="og:image" content="{{url('images/promoters/' . $promoter->profile_image )}}"> 
        <meta property="og:url" content=" {{url("/promoter/" . $promoter->slug)}} ">  

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


                    <li><a href="/">Front Page</a></li>
                    <li><a href="/bands">All Bands</a></li>
                    <li><a href="">All Venues</a></li>
                    <li><a href="/promoters">All Promoters</a></li>

                        <!-- Authentication Links -->
                        @if (Auth::guard('promoter')->check())
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

                        @elseif(Auth::guard('promoter')->check())

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
                                    <li><a href="/promoter/home">Home</a></li>
                                </ul>
                            </li>
--}}
                        @else

                            <li><a href="{{ url('/login') }}" class="login">Login</a></li>
                            <li><a href="{{ url('/register') }}" class="register">Register</a></li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container-fluid">

        @yield('content')    

    </div>

    <footer class="col-md-12 half-height flex-center">
        footer
    </footer>

    @if(Auth::guard('promoter')->check())
        <div class="profile btn-transparent">
            <a href="/promoter/home">Home Page</a>
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
            margin-left: -1 00vw;
        }
    </style>
</html>
