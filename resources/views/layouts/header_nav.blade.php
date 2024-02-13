<!-- header-area-start -->
<div id="header-sticky" class="it-header-5-area it-header-1-style it-header-2-style">
    <div class="container">
        <div class="it-header-wrap p-relative">
            <div class="row align-items-center">
                <div class="col-xl-2 col-6" style="padding-right:0px;padding-left:0px;">
                    <div class="it-header-5-logo">
                        <a href="{{ route('pages.home') }}"><img src="{{ asset('assets/img/logo/btec_logo_new.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-10 d-none d-xl-block">
                    <div class="it-header-2-main-menu">
                        <nav class="it-menu-content">
                            <ul>
                                <li class="p-static {{ Route::is('pages.home') ? 'active' : '' }}">
                                    <a href="{{ route('pages.home') }}">Home</a>
                                </li>
                                <li class="has-dropdown {{ (Route::is('pages.about_us') or Route::is('pages.message_director') or Route::is('pages.mission_vision') or Route::is('pages.organizational_chart')) ? 'active' : '' }}">
                                    <a href="{{ route('pages.about_us') }}">About Us</a>
                                    <ul class="it-submenu submenu">
                                        <li><a href="{{ route('pages.message_director') }}">Message from Director</a></li>
                                        <!--<li><a href="{{ route('pages.home') }}">Management Board</a></li>-->
                                        <li><a href="{{ route('pages.mission_vision') }}">Mission, Vision & Core Value</a></li>
                                        <li><a href="{{ route('pages.organizational_chart') }}">Organizational Chart</a></li>
                                        <li><a href="{{ route('pages.logo_meaning') }}">Logo Meaning</a></li>
                                        <!--<li><a href="{{ route('pages.home') }}">Accreditation</a></li>-->
                                        <!--<li><a href="{{ route('pages.home') }}">Logo Meaning</a></li>-->
                                    </ul>
                                </li>
                                <li class="has-dropdown {{ (Route::is('pages.program') or Route::is('pages.pedagogy_research') or Route::is('pages.science_edu') or Route::is('pages.social_science_edu')) ? 'active' : '' }}">
                                    <a href="{{ route('pages.program') }}">Programs</a>
                                    <ul class="it-submenu submenu">
                                        <!--<li><a href="{{ route('pages.home') }}">In-Service Programs</a></li>
                                        <li><a href="{{ route('pages.home') }}">Pre-Service Programs</a></li>-->
                                        <li><a href="{{ route('pages.pedagogy_research') }}">Faculty of Pedagogy Research</a></li>
                                        <li><a href="{{ route('pages.science_edu') }}">Faculty of Science Education</a></li>
                                        <li><a href="{{ route('pages.social_science_edu') }}">Faculty of Social Science Education</a></li>
                                    </ul>
                                </li>
                                <!--<li class="has-dropdown">
                                    <a href="#">pages</a>
                                    <ul class="it-submenu submenu has-megamenu">
                                        <li><a href="course-1.html">Course 01</a></li>
                                        <li><a href="course-2.html">Course 02</a></li>
                                        <li><a href="course-details.html">Course Details</a></li>
                                        <li><a href="teacher.html">Teacher</a></li>
                                        <li><a href="teacher-details.html">Teacher Details</a></li>
                                        <li><a href="price.html">Price</a></li>
                                        <li><a href="event.html">Event</a></li>
                                        <li><a href="event-details.html">Event Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="Instructor-registration.html">Instructor Registration</a></li>
                                        <li><a href="student-registration-1.html">Student Registration 01</a></li>
                                        <li><a href="student-registration-2.html">Student Registration 02</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="signin.html">Sign IN</a></li>
                                        <li><a href="signup.html">Sign UP</a></li>
                                        <li><a href="404.html">Error</a></li>
                                    </ul>
                                </li>-->
                                <li class="has-dropdown {{ Route::is('pages.our_campus') ? 'active' : '' }}">
                                    <a href="{{ route('pages.our_campus') }}">Our Campus</a>
                                    <!--<ul class="it-submenu submenu has-megamenu">
                                        <li style="color:#22A3D1;"><strong>Campus Facilities</strong></li>
                                        <li style="color:#22A3D1;"><strong>Campus Life</strong></li>

                                        <li><a href="{{ route('pages.home') }}">Library</a></li>
                                        <li><a href="{{ route('pages.home') }}">Clubs</a></li>

                                        <li><a href="{{ route('pages.home') }}">Laboratories</a></li>
                                        <li><a href="{{ route('pages.home') }}">Dormitory</a></li>

                                        <li><a href="{{ route('pages.home') }}">Computer Labs and Technology</a></li>
                                        <li><a href="{{ route('pages.home') }}">Events and Activities</a></li>

                                        <li><a href="{{ route('pages.home') }}">Sports</a></li>
                                        <li><a href="{{ route('pages.home') }}">Student Support Services</a></li>

                                        <li><a href="{{ route('pages.home') }}">Arts</a></li>
                                    </ul>-->
                                </li>
                                <!--<li class="has-dropdown">
                                    <a href="#">Campus Life</a>
                                    <ul class="it-submenu submenu">
                                        <li><a href="{{ route('pages.home') }}">Clubs</a></li>
                                        <li><a href="{{ route('pages.home') }}">Dormitory</a></li>
                                        <li><a href="{{ route('pages.home') }}">Events and Activities</a></li>
                                        <li><a href="{{ route('pages.home') }}">Student Support Services</a></li>
                                    </ul>
                                </li>-->
                                <li class="{{ Route::is('pages.action_research') ? 'active' : '' }}">
                                    <a href="{{ route('pages.action_research') }}">Action Research</a></li>
                                <li class="{{ Route::is('pages.social_service') ? 'active' : '' }}">
                                    <a href="{{ route('pages.social_service') }}">Social Services</a></li>
                                <li class="{{ Route::is('pages.contact_us') ? 'active' : '' }}">
                                    <a href="{{ route('pages.contact_us') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <!--<div class="col-xl-3 col-6">
                    <div class="it-header-2-right d-flex align-items-center justify-content-end">
                        <div class="it-header-2-icon">
                            <a href="cart.html">
                                <i class="fa-regular fa-cart-shopping"></i>
                            </a>
                        </div>
                        <div class="it-header-2-button d-none d-lg-block">
                            <a class="it-btn-white sky-bg" href="contact.html">
                                <span>
                                    Contact Us
                                    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" 
                                        xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 1.24023L16 7.24023L11 13.2402" stroke="currentcolor" stroke-width="1.5" 
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 7.24023H16" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="it-header-2-bar d-xl-none">
                            <button class="it-menu-bar"><i class="fa-solid fa-bars"></i></button>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>
<!-- header-area-end -->