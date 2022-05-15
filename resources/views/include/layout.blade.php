<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{env('APP_NAME')}} - @yield('title_page')</title>
        <meta name="viewport"  content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{env('DIRLIB')}}favicon.png">
        <link rel="stylesheet" type="text/css" href="{{env('DIRLIB')}}fontawesome-6.1.1/css/all.css">
        <link rel="stylesheet" type="text/css" href="{{env('DIRLIB')}}atom/Atom/src/css/atom.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        @yield('addCSS')

    </head>

   

    <body>

        @include('include.partials._navLeft')
        <div id="content">
            @csrf
            @include('include.partials._navTop')
            @yield('content')
        </div>
   

    <script type="text/javascript" src="{{env('DIRLIB')}}jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{env('DIRLIB')}}atom/Atom/src/js/atom.min.js"></script>
    <script type="text/javascript" src="{{asset('js/chatbot.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/notifications.js')}}"></script>

    @include('include.partials._messages')
    
    @yield('addJS')

    </body>
</html>

