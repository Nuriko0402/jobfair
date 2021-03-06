<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Fair</title>
        <link type="text/css" href="/css/app.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link type="text/css" href="/css/vue-multiselect.min.css" rel="stylesheet">
        @routes
        
    </head>
    <body class="antialiased">
    <div id="app">
        @yield('content')
    
    </div>
   
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
