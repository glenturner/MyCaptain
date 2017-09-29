<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Captain</title>

    <!--  Scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/reset.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/css/blog.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Fonts -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Leckerli+One|Merriweather|Quicksand|Source+Code+Pro"
          rel="stylesheet">

</head>
<body>

@include('inc.profileNav')
@include('inc.messages')

<div class="container">
    <div class="row">
        <div class="col l12">
<br><br>
            <div class="col l3">
                @include('inc.sidenav')
            </div>

            <div class="col l9">
                @yield('calendar')
            </div>
        </div>
    </div>
</div> <!-- End of Container -->




<script type='text/javascript'>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            googleCalendarApiKey: 'AIzaSyCP6bH2Kw4qHQ0bKfIlZ0f0w0VjTqL1_7g',
            events: {
                googleCalendarId: '7r1vjrimllvp8kmt6dfslu0s38@group.calendar.google.com'
            }
        });
    });

</script>

</body>
</html>