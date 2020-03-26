<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Jitomates - @yield('title')</title>
        

 <!-- Redirecciones bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

    </head>
    <body>
        @section('header')
            MASTER HEADER
        @show
         
        <div class="container">
            @yield('content')
        </div>
 
        @section('footer')
            MASTER FOOTER
        @show
        


         <!--bootstrap redirecciones-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>