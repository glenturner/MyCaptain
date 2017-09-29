<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Captain</title>


    <!-- Fonts -->
    <script src="https://use.fontawesome.com/ed45b368b2.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Leckerli+One|Merriweather|Quicksand|Source+Code+Pro"
          rel="stylesheet">

    <!--  Scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>


</head>
<body>

<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">MyCaptain</a>
            <span class="logo">{{--<img src="/images/captain.png" alt="logo">--}}
               <a class="btn btn-floating btn-large blue"><i
                            class="material-icons">flight_takeoff</i></a>
            </span>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#mission"><i class="material-icons left">flight_takeoff</i>Mission</a></li>
                <li><a href="#initiative"><i class="material-icons left">language</i>Initiative</a></li>
                <li><a href="#individuals"><i class="material-icons left">perm_identity</i>Individuals</a></li>
                <li><a href="#modernizing"><i class="material-icons left">touch_app</i>Modernization</a></li>
                <li><a href="#contact"><i class="material-icons left">email</i>Contact</a></li>
                <li><a href="#"><i class="material-icons">search</i></a></li>
            </ul>
            <ul class="side-nav hide-on-med-and-up right-aligned" id="mobile-demo">
                <li><a href="#mission">Mission</a></li>
                <li><a href="#initiative">Initiative</a></li>
                <li><a href="#individuals">Individualas</a></li>
                <li><a href="#modernizing">Modernization</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</div>


<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center white-text text-lighten-2">Welcome to MyCaptain</h1>
            <div class="row center"><a class="waves-effect blue btn" href="/login">Login</a>
            </div>
            <br>

        </div>
    </div>
    <div class="parallax"><img src="/images/cityviews.jpg" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
    <div class="section">
        <div id="mission" class="section scrollspy">
            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h2>Our Mission</h2>
                    <a class="btn btn-floating btn-large blue pulse"><i class="material-icons">flight_takeoff</i></a>
                    <p class="problem"> Solving the issue of growth in commercial aviation which is currently out pacing the operational approach to controlling air traffic.
                        To continue the push on "improving our quality of life" requires a dynamic systems development approach between professional pilots, industry,
                        passengers, public, and the government.
                    </p>
                    <br><h4>Four Goals To Achieving Our Mission</h4><br>

                    <ul class="index-list index-list__off1 row">
                        <li data-index="1" class="col l3 s12 wow fadeInUp" data-wow-delay=".2s">
                            <div class="fa fa-id-card-o"></div>
                            <h5><a href="#">Professional Pilots</a></h5>
                            <p>
                                The airline pilots are the key to solving ‘the problem’ to the advantage all interested parties.
                                For this new dynamic systems development approach to happen the airline pilots need to take control
                                of their profession. There is a simple, concurrent ten step process to achieve this.
                            </p>
                        </li>
                        <li data-index="2" class="col l3 s12  wow fadeInUp" data-wow-delay=".4s">
                            <div class="fa fa-plane"></div>
                            <h5><a href="#">Aviation Industry</a></h5>
                            <p>
                                The new pilot profession will work with industry to evolve commercial aviation. This dynamic
                                combination will cut costs, open up new markets, bring stability, growth, and investment. All
                                while increasing safety, security and service. A completely new market driven approach.
                            </p>
                        </li>
                        <li data-index="3" class="col l3 s12  wow fadeInUp" data-wow-delay=".6s">
                            <div class="fa fa-globe "></div>
                            <h5><a href="#">
                                    Passengers & Public</a></h5>
                            <p>
                                The combination of the professional pilots and industry will allow passengers to drive their
                                flight experience with an ‘UBER/Groupon’ twist. The passengers & public will combine with modern
                                communications and bring new levels of safety, security, and service.
                            </p>
                        </li>
                        <li data-index="4" class="col l3 s12  wow fadeInUp" data-wow-delay=".8s">
                            <div class="fa fa-university"></div>
                            <h5><a href="#">Government</a></h5>
                            <p>
                                The professional pilots & aviation industry will combine with the tech communication industry
                                to allow the Next Generation Air Transportation System integrated plan to evolve and grow. This
                                new approach will drive the rest of global aviation and technology to new heights.
                            </p>
                        </li>
                    </ul>

                  {{--  <p class="left-align light"> To provide transportation services that consistently meet customer
                        expectations by
                        evolving, advancing, and integrating professional airline pilots
                        stabilizing and expanding the global aviation market
                        increasing safety, security and service for the passengers and public
                        modernizing <em><a href="https://www.faa.gov/nextgen/" target="_blank">NEXTGEN,</a> <a href="http://www.eurocontrol.int/sesar-research" target="_blank">SESAR,</a></em> and global air traffic control execution.</p>--}}
                </div>
            </div>

        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">The mission statement and the <strong>four goals</strong> represent the
                    process needed to make this happen.</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="/images/plane_window.jpg" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <div id="initiative" class="section scrollspy">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h2>Initiative</h2>
                    <a class="btn btn-floating btn-large blue pulse"><i class="material-icons">language</i></a>
                    <p class="left-align light">
                    <p>​​The MyCaptain global initiative will start in the United States. To accomplish this will
                        require an integrated approach to operations. The mission statement and the four goals represent
                        the process need to make this happen. There are major entities involved in the day to day
                        operation. These four entities are professional airline pilots, airline industry,
                        people/packages and the government. First step is to modernize the United States commercial
                        aviation system requires the professional airline pilots to form one group.</p>
                    <p>Therefore, the first webinars will be about how the airline pilots will accomplish this process.
                        The nations airline pilots will be broken up into two groups. First group will be small and
                        consist of the pilots of Allied Pilots Association (APA). The first webinars will be about how
                        APA will cause a concurrent transformation of APA into a new leadership position of the nations
                        professional pilots. The first webinar is about step one; Converting operations to, and taking
                        advantage of modern communications. For example, all future APA operations will run 24 hours and
                        the APA pilots will do this worldwide.</p>
                </div>

            </div>

        </div>
    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">MyCaptain intends to list all the individual supporters of the
                    transition of our profession by "Last Name, Base, Airline".</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="/images/plane_window.jpg" alt="Unsplashed background img 3"></div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <div id="individuals" class="section scrollspy">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h2>Individuals</h2>
                <a class="btn btn-floating btn-large blue pulse"><i class="material-icons">perm_identity</i></a>
                <p>The above statement is how MyCaptain intends to list all the individual supporters of the transition
                    of our profession. The Idea is two fold. First, to allow pilots who do not know or understand the
                    MyCaptain global initiative to search 'the list' for someone they recognize. Then contact that
                    individual in their own way and confirm the validity of MyCaptain through a known personal
                    connection. Second, to show the growing tide of support of the MyCaptain initiative.
                    The intention is to grow the group of interested professional pilots to a tipping point. The tipping
                    point is certain percentage of pilots at any particular union. This will allow these pilots to
                    change the way things are done at their institutions. </p>
                <p>An internal search engine is coming to allow one to search for other professional pilots who are on
                    board with the plan.This search engine will be a list of the pilot's last name, base and airline (a
                    Google like search)
                    A personal connection will be made between MyCaptain and you initialzing from your relationship with
                    that pilot and their position on the MyCaptain initiative. You will then use your own method to
                    contact your fellow pilot to validate the mission of MyCaptain. Then join a Webinar, and then the
                    list. Eventually additional statistics on the growth by union of this list will be made
                    available.</p>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">This new communications link will allow any pilot any where to be
                    involved in union activity at any time.</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="/images/plane_window.jpg" alt="Unsplashed background img 3"></div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <div id="modernizing" class="section scrollspy">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h2>Modernizing APA</h2>
                <a class="btn btn-floating btn-large blue pulse"><i class="material-icons">touch_app</i></a>
                <p class="left-align light">The first Webinar will cover why we need APA to take the lead in improving
                    membership communications. This new communications link will allow any pilot anywhere to be involved
                    in union activity at any time. The first step in the MyCaptain Global Initiative is to move APA into
                    the present and future global communication capabilities. This means upgrading the present methods
                    APA uses to communicate with you, 'the member'. There needs to be an easy way for all the membership
                    to interact in real time with APA. The easy way is the internet. APA needs to upgrade the Union
                    website and turn it into a 24 hour on line operation.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<footer class="page-footer black">
    <div class="container">
        <div id="contact" class="section scrollspy">
        <div class="row">
            <h4>Contact</h4>
            <div class="row">
                <form class="col s12" action="{{url('/')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" name="name" type="text" class="validate">
                            <label for="name">Name</label>
                        </div>
                    </div>


                            <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">subject</i>
                            <input id="subject" name="subject" type="text" class="validate">
                            <label for="subject">Nature of Inquiry</label>

                        </div>
                    </div>
                        <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">speaker_notes</i>
                            <textarea id="message" name="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>

                    <button class="btn waves-effect white blue-text" type="submit" name="submit">Send
                        <i class="material-icons right blue-text">send</i>
                    </button>
                </form>
            </div>

        </div>
        </div>


            {{--<div class="col l6 s12">
                <h5 class="white-text">Mission</h5>
                <p class="grey-text text-lighten-4">To provide transportation services that consistently meet customer
                    expectations by evolving, advancing, and integrating professional airline pilots stabilizing and
                    expanding the global aviation market increasing safety, security and service for the passengers and
                    public modernizing <em>NextGen, SESAR,</em> and global air traffic control execution.</p>
            </div>--}}


         {{--   <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>--}}

           {{-- <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>--}}
        </div>
    </div>
    {{--   <div class="footer-copyright">
           <div class="container">
               Copyright <a class="white-text text-lighten-3" href="#">© Turner Technologies</a>
           </div>
       </div>--}}
</footer>



<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="/css/about.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


<script>$(document).ready(function () {
        $('.parallax').parallax();
        $('.scrollspy').scrollSpy();
        $('.button-collapse').sideNav();
        $('.container').addClass('animated bounceInLeft');
    });
</script>


</body>

</html>
