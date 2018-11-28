<html>
<head>
        <title>G7 Freight</title>
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
                                <a href="../about/helpcentre.php">Help Centre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="headerwrapper">
            <div class="header-wrapper">
                <div class="coverfreight">
                    <div class="coveraboutcontent1">
                        <div class="covertext" >
                            <h1>G7 Freight</h1>
                            <p>Freedom to haul the way you want, giving you the freedom<br> to give 
                                and take all your personal items without waiting.</p>
                            <div class="boxlink_slide"><a href="#">In Developing</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mainbody">
                <div class="bodycontain1 texttaxi1">
                    <h1>Why G7 Freight?</h1>
                    <div class="containtaxi1 texttaxi2">
                         <div class="aboutcontain1">
                            <img src="../img/clock.png">
                            <div><h4>Express Service</h4>
                            <p>With a lightning-fast delivery service, 
                            you will get the items right away.</p></div>
                        </div>
                        <div class="hr"></div>
                        <div class="aboutcontain1">
                            <img src="../img/Money-2-icon.png">
                            <div><h4>Cost-effective</h4>
                            <p>With fixed and transparent fare right on the app, you will 
                            pay the exact amount to our shippers without worrying 
                            about any surges charges.</p></div>
                        </div>
                        <div class="hr"></div>
                        <div class="aboutcontain1">
                            <img src="../img/safety.png">
                            <div><h4>Credibility</h4>
                            <p>Our professional shippers will ensure you 
                            get the items as fast as possible with an utmost care.</p></div>
                        </div>
                    </div>
                </div>
                <div class="bodycontain3">
                    <div class="texttaxi1">
                        <h1>FAQs</h1>
                        <div class="tab">
                            <input id="tab-one" type="checkbox" name="tabs">
                            <label for="tab-one">How to send package through the application? And how to know the delivery fare?</label>
                            <div class="tab-content">
                                <p>Sending package is so simple and easy – Open the Grab application, 
                                choose the “Delivery” icon (swipe from left to right), then fill in 
                                the pick-up and drop-off location for your package. Our application will 
                                calculate the fixed fares based on the direction and send our driver to you soon. 
                                You then can pay him cash with the exact amount on the application.</p>
                            </div>
                        </div>
                        <div class="tab">
                            <input id="tab-2" type="checkbox" name="tabs">
                            <label for="tab-2">How can GrabExpress consider the delivery is unsuccessful?</label>
                            <div class="tab-content">
                                <p>We will make every reasonable effort to deliver the shipment 
                                right after the successful booking, but these are not guaranteed that 
                                the receiver is available to be contact. We will call three times to confirm on the delivery times within 15 minutes interval. 
                                If we cannot contact the receiver, we will send back the shipment to you.</p>
                            </div>
                        </div>
                        <div class="tab">
                            <input id="tab-3" type="checkbox" name="tabs">
                            <label for="tab-3">How can your driver know the receiver’s information?</label>
                            <div class="tab-content">
                                <p>After finish booking, you will receive a form in the application
                                where you need to fill in 
                                all the details so we can contact on your behalf and deliver the shipment.</p>
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