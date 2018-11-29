<html>
<head>
        <title>G9 Taxi</title>
        <link rel="stylesheet" href="../css/main.css" type="text/css">
        <link rel="stylesheet" href="../css/header.css" type="text/css">
        <link rel="stylesheet" href="../css/mainbody.css" type="text/css">
        <link rel="stylesheet" href="../css/slideimage1.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        <script src="../Js/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="../about/aboutcss/about.css" type="text/css">
        <link rel="icon" href="../img/Polar_Bear-512.png">
        <link rel="stylesheet" href="css/taxi.css" type="text/css">
        <link rel="stylesheet" href="css/service_tab.css" type="text/css">
</head>
<body>
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
                                <a href="../index.php">G9 GROUP</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../index.php#Service">Service</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../about/about.php">About</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../map/map.php">Travel NOW</a> 
                            <?php if (!isset($_SESSION['username'])):?>
                                <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                    <a href="../userregistration/login.php">Log In</a>
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
                                            <a href="../userregistration/logout.php">Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif;?>
                            <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../helpcentre/helpcentre.php">Help Centre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="headerwrapper">
            <div class="header-wrapper">
                <div class="covertaxi">
                    <div class="coveraboutcontent1">
                        <div class="covertext" >
                            <h1>G9 Taxi</h1>
                            <p>Our largest pool of taxi fleets in Vietnam that<br>
                            give you the freedom to travel from almost<br>
                            anywhere, at anytime.</p>
                            <div class="boxlink_slide"><a href="../map/map.php">TRAVEL NOW</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mainbody">
                <div class="bodycontain1 texttaxi1">
                    <h1>Why G9 Taxi?</h1>
                    <div class="containtaxi1 texttaxi2">
                        <div class="aboutcontain1">
                            <img src="../img/clock.png">
                            <div><h4>Less Wait Time</h4>
                            <p>Get a taxi catering for you with just 2 touches.</p></div>
                        </div>
                        <div class="hr"></div>
                        <div class="aboutcontain1">
                            <img src="../img/insuran.png">
                            <div><h4>More Taxis</h4>
                            <p>For a wide coverage from urban to suburban areas,
                            4 to 7-seaters, we have taxi for all your need!</p></div>
                        </div>
                        <div class="hr"></div>
                        <div class="aboutcontain1">
                            <img src="../img/Money-2-icon.png">
                            <div><h4>Know the Fares</h4>
                            <p>Know the cost estimation and direction 
                            before you get the taxi so you can plan time and budget ahead.</p></div>
                        </div>
                        <div class="hr"></div>
                        <div class="aboutcontain1">
                            <img src="../img/safety.png">
                            <div><h4>Safety</h4>
                            <p>Get to know your driver, ride safe 
                            and arrive safe with “share my ride" function.</p></div>
                        </div>
                    </div>
                </div>
                <div class="bodycontain3">
                    <div class="texttaxi1">
                        <h1>FAQs</h1>
                        <div class="tab">
                            <input id="tab-one" type="checkbox" name="tabs">
                            <label for="tab-one">What time are the drivers working?</label>
                            <div class="tab-content">
                                <p>Our service operates 24 hours a day throughout the week, 
                                but subject to availability of taxis at the moment of booking.</p>
                            </div>
                        </div>
                        <div class="tab">
                            <input id="tab-2" type="checkbox" name="tabs">
                            <label for="tab-2">What phones and OS are compatible with the app?</label>
                            <div class="tab-content">
                                <p>As long as you have either a Google Android (4.0.3 or above) 
                                or Apple iOS (8.0 or above) smartphone or tablet, then you’re good to go!</p>
                            </div>
                        </div>
                        <div class="tab">
                            <input id="tab-3" type="checkbox" name="tabs">
                            <label for="tab-3">Why is the fare on the app different from that on the taxi’s calculation?</label>
                            <div class="tab-content">
                                <p>When you use G9’s service, your taxi fare is 
                                based on the taxi’s calculation system (meaning 
                                that you are probably using Mai Linh taxi and will 
                                pay Mai Linh taxi’ fare). The 
                                fare on the app is merely an approximate measurement 
                                of how much you would pay.</p>
                            </div>
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
                        <a href="about.php">About us</a><br><br>
                        <a href="">Newsroom</a><br><br>
                        <a href="">Blog</a><br><br>
                        <a href="">Careers</a><br><br>
                    </div>
                    <div class="texta_many tf3">
                        <h1>SERVICES</h1>
                        <a href="taxi.php">G9 Taxi</a><br><br>
                        <a href="motor.php">G9 Motorbike</a><br><br>
                        <a href="freight.php">G9 Freight</a><br><br>
                        <a href="business.php">G9 for Business</a><br><br>
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
                        <p><a href="privacy.php">Privacy</a>
                        <a href="">Accessibility</a>
                        <a href="">Terms</a></p>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>