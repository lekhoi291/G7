<?php
session_start();
?>

<html>
    <head>
        <title>G9 GROUP</title>
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/header.css" type="text/css">
        <link rel="stylesheet" href="css/mainbody.css" type="text/css">
        <link rel="stylesheet" href="css/slideimage1.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        <script src="Js/jquery-3.3.1.min.js"></script>
        <script src="Js/scrollanimation.js"></script>
        <link rel="icon" href="img/Polar_Bear-512.png">
        <link rel="stylesheet" href="about/aboutcss/safety.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <div id="menuwrapper">
                <div id="menuwrap">
                    <div id="top_menu">
                        <input type='checkbox'/>
                        <label>
                            <i class='icon-reorder'></i>
                            <span>Navigation</span>
                        </label>
                        <ul>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="#movetop">G9 GROUP</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="#Service">Service</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="about/about.php">About</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="map/map.php">Travel NOW</a> 
                            <?php if (!isset($_SESSION['username'])):?>
                                <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                    <a href="userregistration/login.php">Log In</a>
                                </li>
                            <?php else:?>
                                <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                    <a class="dropdown">Welcome <?php echo $_SESSION['username']; ?></a>
                                    <ul class="menus">
                                        <li>
                                            <a href="">Profile</a>
                                        </li>
                                        <li>
                                            <a href="">Setting</a>
                                        </li>
                                        <li>
                                            <a href="userregistration/logout.php">Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif;?>
                            <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="helpcentre/helpcentre.php">Help Centre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="headerwrapper" id="movetop">
                <div class="header-wrapper">
                    <div class="cover"></div>
                </div>
            </div>
            <div class="mainbody">
                <div class="bodycontain1">
                    <section class="column">
                        <div class="text1">
                            <div style="text-align: center;">
                                <h1>MOVE THE WAY YOU WANT</h1>
                            </div>
                            <section class="column">
                                <div>
                                    <h1>Where to?</h1>
                                    <p>We’re committed to helping riders and drivers get where they want to go with confidence.</p>
                                </div>
                                <div style="margin-left: 5%;">
                                    <h1>Move the way you want</h1>
                                    <p>Over 11 Million Passengers,<br> 200,000 Drivers. <br>SET FREE.</p>
                                </div>
                            </section>
                            <section class="column">
                                <div>
                                    <div class="boxlink_travel_now">
                                        <a href="map/map.php">Travel NOW</a>
                                    </div>
                                </div>
                                <div style="margin-left: 5%;">
                                    <div class="boxlink_travel_now">
                                        <a href="about/about.php">Learn more</a>
                                    </div>
                                </div>
                            </section>
                        </div>      
                        <div class="img1" style="margin-left: 5%;">
                            <img src="img/__firstBG.jpg">
                        </div>
                    </section>
                </div>
                <div class="img2" id="Service">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="img/__graf_zeppelin_kantai_collection_drawn_by_fujita_condor__59eaad3931d697b9f31058275f4b161d.jpg">
                            <div class="captiontextcontain">
                                <div class="textcaption">
                                <h1>G9 Taxi</h1>
                                <p>Let's us giving you the freedom to travel<br>
                                from almost anywhere, anyplace, at anytime</p>
                                <div class="boxlink_slide"><a href="services/taxi.php">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mySlides fade">
                            <img src="img/__hibiki_i_class_destroyer_and_verniy_kantai_collection_drawn_by_fujita_condor__2ffaac39a7df25a263ebab9568d5b83e.jpg">
                            <div class="captiontextcontain">
                                <div class="textcaption">
                                <h1>G9 Motorbike</h1>
                                <p>Let's our largest local motorbike taxi service that give you <br> 
                                the freedom to move around the city 
                                conveniently.</p>
                                <div class="boxlink_slide"><a href="services/motor.php">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mySlides fade">
                            <img src="img/__i_13_and_i_14_kantai_collection_drawn_by_fujita_condor__5c466dd7160bed8aeeae8bbcec4665cc.jpg">
                            <div class="captiontextcontain">
                                <div class="textcaption">
                                <h1>G9 Freight</h1>
                                <p>Freedom to haul the way you want, giving you the freedom<br> to give 
                                and take all your personal items without waiting.</p>
                                <div class="boxlink_slide"><a href="services/freight.php">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mySlides fade">
                            <img src="img/__saratoga_kantai_collection_drawn_by_fujita_condor__678a622cc85f71efd8ff2e77b4ca80ad.jpg">
                            <div class="captiontextcontain">
                                <div class="textcaption">
                                <h1>G9 for Business</h1>
                                <p>How teams help move people and guests.<br>
                                Everywhere your business needs to go.</p>
                                <div class="boxlink_slide"><a href="services/business.php">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="prenextcontain" style="width: 100%">
                            <a class="prev" style="float:left;" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" style="float:right;" onclick="plusSlides(1)">&#10095;</a>
                            <span class="dot" onclick="currentSlide(1)"></span> 
                            <span class="dot" onclick="currentSlide(2)"></span> 
                            <span class="dot" onclick="currentSlide(3)"></span> 
                            <span class="dot" onclick="currentSlide(4)"></span> 
                        </div>
                    </div>
                    <script src="Js/slideimage1.js"></script>
                </div>
                <div class="bodycontain2">
                    <section class="column">
                        <div class="text3">
                            <h1>Our promise towards a SAFER EVERYDAY</h1>
                            <p>“Respect the unexpected.  Think through your risks.”</p>
                            <div class="boxlink_travel_now">
                                <a href="about/safer.php">Learn More</a>
                            </div>
                        </div>
                        <div class="img3">
                            <img src="img/__secondBG.jpg">
                        </div>
                    </section>
                </div>
                <div class="hr"></div>
                <div class="bodycontain2">
                    <section class="column">
                        <div class="img3">
                            <img src="img/DpuzlNhXoAAfPr_.jpg">
                        </div>
                        <div class="text3">
                            <h1>Let's join our community</h1>
                            <p>A whole lot more than just a taxi service.</p>
                            <div class="boxlink_travel_now">
                                <a href="userregistration/login.php">Sign Up</a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="bodycontain3">
                    <div class="bodycontainer3">
                        <div class="text4">
                            <section class="column icon_anc">
                                <div>
                                    <img src="img/about.png">
                                </div>
                                <div>
                                    <img src="img/new.png">
                                </div>
                                <div>
                                    <img src="img/community.png">
                                </div>
                            </section>
                            <section class="column">
                                <div>
                                    <h1>About us</h1>
                                    <p>Our story, leadership, and where we’re going</p>
                                </div>
                                <div> 
                                    <h1>Newsroom</h1>
                                    <p>Company news, partnerships, and app updates</p>
                                </div>
                                <div>
                                    <h1>Community</h1>
                                    <p>Connecting communities and strengthening cities</p>
                                </div>
                            </section>
                            <section class="column texta_blue">
                                <div>
                                    <a href="about/about.php">Learn More</a>
                                </div>
                                <div>
                                    <a href="about/news.php">Learn More</a>
                                </div>
                                <div>
                                    <a href="about/community.php">Learn More</a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footercontain1">
                <section class="column">
                    <div class="tf1">
                        <p>We're here to help!</p>
                    </div>
                    <div class="tf2 texta_white">
                        <p>Support is just a few taps away. You can also get your questions answered by using
                        our help section.</p>
                        <a href="">Learn More</a>
                    </div>
                </section>
            </div>
            <div class="footercontain2">
                <section class="column">
                    <div class="tf3" style="flex-grow: 2;">
                        <h1>G9 GROUP</h1>
                        <p>Somewhere in Vietnam.</p>
                    </div>
                    <div class="tf3 texta_many">
                        <h1>COMPANY</h1>
                        <a href="about/about.php">About us</a><br><br>
                        <a href="about/news.php">Newsroom</a><br><br>
                        <a href="about/blog.php">Blog</a><br><br>
                        <a href="">Careers</a><br><br>
                    </div>
                    <div class="texta_many tf3">
                        <h1>SERVICES</h1>
                        <a href="services/taxi.php">G9 Taxi</a><br><br>
                        <a href="services/motor.php">G9 Motorbike</a><br><br>
                        <a href="services/freight.php">G9 Freight</a><br><br>
                        <a href="services/business.php">G9 for Business</a><br><br>
                    </div>
                </section>
            </div>
            <div class="footercontain3">
                <section class="column">
                    <div class="tf3">
                        <p>Best display on 16: 9 screen, latest Chrome browser, not supported on mobile.<br>
                        G9 GROUP © 2018 Designed by Group Nine.</p>
                    </div>
                    <div class="texta_line textspacingend tf3">
                        <p><a href="about/privacy.php">Privacy</a>
                        <a href="">Accessibility</a>
                        <a href="">Terms</a></p>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>