<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Captain</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Leckerli+One|Merriweather|Quicksand|Baloo+Tammudu|Source+Code+Pro"
          rel="stylesheet">


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/reset.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/css/profile.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


</head>
<body>

@include('inc.messages')
@include('inc.profileNav')
    <div class="row">
        <div class="col l3">
            @include('inc.sidenav')
        </div>

        <div class="offset l9">
        </div>
    </div> <!--end of row-->
<div class="container">
    <div class="row">
        <div class="col s12">
            @yield('home')
        </div>
    </div> <!--end of row-->

    <div class="row">
            @yield('create')
    </div> <!--end of row-->

    <div class="row">
        <div class="col s12">
        @yield('userPosts')
        </div>
    </div> <!--end of row-->

</div> <!-- End of Container -->



<!--  Scripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>


</body>

</html>

