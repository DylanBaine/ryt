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

        @include('includes.styles')
        
    </head>
    <body id="app">
        
        @include('includes.auth-nav')

        @yield('content')

        <div class="profile btn-transparent">
            <a href="/venue/{{Auth::user()->slug}}">See Public Page</a>
        </div>

        <footer class="col-md-12 half-height flex-center">
            footer
        </footer>
        
        <!-- Scripts -->
        @include('includes.scripts')

    </body>
</html>
