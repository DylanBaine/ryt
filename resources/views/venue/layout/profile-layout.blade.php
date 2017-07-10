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
        <meta property="og:image" content=""> 
        <meta property="og:url" content=" {{url("/venue/" . $venue->slug)}} ">  

        <meta name="twitter:title" content="Route Your Tour">
        <meta name="twitter:image" content="{{asset('images/logo.gif')}}">


        @include('includes.styles')

    </head>
    <body id="app">

        @include('includes.auth-nav')
        
        <div class="container-fluid">

            @yield('content')    

        </div>

        <footer class="col-md-12 half-height flex-center">
            footer
        </footer>

        @if(Auth::guard('venue')->check())
            <div class="profile btn-transparent">
                <a href="/venue/home">Home Page</a>
            </div>
        @endif

        @include('includes.scripts')

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

    </body>
    

</html>
