<!-- START WRAPPER -->
<div class="wrapper">

    <!-- START LEFT SIDEBAR NAV-->
    <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <div class="captain">
                <li class="user-details blue">
                    <img src="images/captain.png" alt="" class="circle responsive-img valign profile-image"><a href="#"
                                                                                                               id="user_name">{{ Auth::user()->name }}
                    </a></li>
            </div>


            <li class="bold"><a href="/home" class="waves-effect waves-blue"><i
                            class="small material-icons">dashboard</i>Dashboard</a>
            </li>
            <li class="bold"><a href="#" class="waves-effect waves-blue"><i class="small material-icons">mail</i>Mailbox<span
                            class="new badge">4</span></a>
            </li>
            <li class="bold"><a href="/calendar" class="waves-effect waves-blue"><i class="small material-icons">perm_contact_calendar</i>Calendar</a>
            </li>
            <li class="bold"><a href="/posts" class="waves-effect waves-blue"><i
                            class="small material-icons">edit_mode</i>Blog</a>
            </li>
            <li class="bold"><a href="{{ url('/logout') }}" class="waves-effect waves-blue"><i
                            class="small material-icons">keyboard_return</i>Logout</a>
            </li>
            <li class="user-details grey">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-blue"><i
                                    class="small material-icons">arrow_downward</i>Learn More</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="https://www.faa.gov/nextgen/" target="_blank">NextGen</a>
                                </li>
                                <li><a href="http://www.eurocontrol.int/sesar-research" target="_blank">Sesar</a>
                                </li>
                                <li><a href="https://www.icf.com" target="_blank">ICF International</a>
                                </li>
                                <li><a href="https://www.gotomeeting.com/webinar" target="_blank">Webinar</a>
                                </li>
                                <li><a href="https://www.gofundme.com/mycaptain-start-up-campaign" target="_blank">GoFundMe</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>


<ul id="profile-dropdown" class="dropdown-content">
    <li><a href="/home"> <i class="small material-icons">fingerprint</i>Profile</a>
    </li>
    <li><a href="/posts"><i class="small material-icons">mode_edit</i>Blog</a>
    </li>
    <li><a href="/"><i class="small material-icons">local_airport</i>Mission</a>
    </li>
    <li class="divider"></li>
    <li><a href="/"><i class="small material-icons">keyboard_return</i>Logout</a>
    </li>
</ul>





