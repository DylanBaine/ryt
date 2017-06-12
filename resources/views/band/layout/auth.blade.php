<!DOCTYPE html>
<html lang="en">
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
        
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Multi Auth Guard') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="app">
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
                <a class="navbar-brand" href="{{ url('/bands') }}">
                    {{ config('app.name', 'Laravel Multi Auth Guard') }}: Band
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
                    <li><a href="/bands">All Bands</a></li>
                    <li><a href="">All Venues</a></li>
                    <li><a href="/promoters">All Promoters</a></li>


                    <!-- Authentication Links -->
                    @if (! Auth::guard('band')->check())

                        <li class="dropdown text-center">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                more <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('login') }}">Login</a></li>
                                <li><a href="{{ url('register') }}">Register</a></li>
                            </ul>
                        </li>
                    @else
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
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

        <div class="profile btn-transparent">
            <a href="/band/{{Auth::user()->slug}}">See Public Page</a>
        </div>

    <footer class="col-md-12 half-height flex-center">
        footer
    </footer>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
