<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('logo.png') }}" >

        <title>Game</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> 
        <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>      
    </head>
    <body>
        <div id="app">
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
