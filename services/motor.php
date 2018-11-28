<html>
<head>
        <title>G7 Motorbike</title>
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
                                <a href="../index.php">G7 GROUP</a>
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
                                <a href="../abouthelpcentre.php">Help Centre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="headerwrapper">
            <div class="header-wrapper">
                <div class="covermotor">
                    <div class="coveraboutcontent1">
                        <div class="covertext" >
                            <h1>G7 Mortorbike</h1>
                            <p>Our largest local motorbike taxi service<br> that give
                            you the freedom to move<br> around the city conveniently.</p>
                            <div class="boxlink_slide"><a href="../map/map.php">TRAVEL NOW</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mainbody">
                <div class="bodycontain1 texttaxi1">
                    <h1>Why G7 Mortorbike?</h1>
                    <div class="containtaxi1 texttaxi2">
                        <div class="aboutcontain1">
                            <img src="../img/pc.png">
                            <div><h4>Dynamic</h4>
                            <p>The best way to roam around the city is sitting on a motorbike. 
                            And the traffic congestion will not be a big trouble anymore, we promise.</p></div>
                        </div>
                        <div class="hr"></div>
                        <div class="aboutcontain1">
                            <img src="../img/Money-2-icon.png">
                            <div><h4>Affordable</h4>
                            <p>No more bargain - We provide you fixed and
                            transparent fares through the app.</p></div>
                        </div>
                        <div class="hr"></div>
                        <div class="aboutcontain1">
                            <img src="../img/safety.png">
                            <div><h4>Credibility</h4>
                            <p>
                            Our dedicated and friendly drivers will ensure 
                            you have the best experiences during the journey.</p></div>
                        </div>
                    </div>
                </div>
                <div class="bodycontain3">
                    <div class="texttaxi1">
                        <h1>FAQs</h1>
                        <div class="tab">
                            <input id="tab-one" type="checkbox" name="tabs">
                            <label for="tab-one">Do I need to download a G7 Bike app?</label>
                            <div class="tab-content">
                                <p>No. All you need to do is selecting “G7 Bike” 
                                icon in the G7 app for booking a motorbike taxi.                                    </p>
                            </div>
                        </div>
                        <div class="tab">
                            <input id="tab-2" type="checkbox" name="tabs">
                            <label for="tab-2">How is G7 Bike’s fare calculated?</label>
                            <div class="tab-content">
                                <p>The fare is calculated base on the
                                    distance and time frame (peak and off peak hours). 
                                    After key in your destination, G7 Bike will calculate 
                                    your fare based on the shortest distance. For further information
                                    of fare regulation, please see more at the table above.</p>
                            </div>
                        </div>
                        <div class="tab">
                            <input id="tab-3" type="checkbox" name="tabs">
                            <label for="tab-3">When is the operation time of G7 Bike?</label>
                            <div class="tab-content">
                                <p>G7 Bike operates from 6 AM till 11PM. Besides, a number of freelance 
                                drivers will work during special time such as late night or early morning.</p>
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
                        <h1>G7 GROUP</h1>
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
                        <a href="taxi.php">G7 Taxi</a><br><br>
                        <a href="motor.php">G7 Motorbike</a><br><br>
                        <a href="freight.php">G7 Freight</a><br><br>
                        <a href="business.php">G7 for Business</a><br><br>
                    </div>
                </section>
            </div>
            <div class="footercontain3">
                <section class="column">
                    <div class="tf3">
                        <p>Best display on 16: 9 screen, latest Chrome browser, not supported on mobile.<br>
                        G7 GROUP © 2018 Designed by Gruppe Neun.</p>
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