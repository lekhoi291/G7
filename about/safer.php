<?php
session_start();
if (!isset($_SESSION['username'])){
    // header('location:userregistration/login.php');
}
?>

<html>
    <head>
        <title>Safer</title>
        <link rel="stylesheet" href="../css/main.css" type="text/css">
        <link rel="stylesheet" href="../css/header.css" type="text/css">
        <link rel="stylesheet" href="../css/mainbody.css" type="text/css">
        <link rel="stylesheet" href="aboutcss/safety_tab.css" type="text/css">
        <link rel="stylesheet" href="aboutcss/safety.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        <script src="../Js/jquery-3.3.1.min.js"></script>
        <link rel="icon" href="../img/Polar_Bear-512.png">
    </head>
    <body>
        <div class="container">
            <div id="menuwrapper">
                <div id="menuwrap">
                    <div id="top_menu">
                        <ul>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../index.php">G7 GROUP</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../index.php#Service">Service</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="about.php">About</a>
                            </li>
                            <li style="border-right: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="../map/map.php">Travel NOW</a>
                            <?php if (!isset($_SESSION['username'])) : ?>
                                <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                    <a href="../userregistration/login.php">Log In</a>
                                </li>
                            <?php else:?>
                                <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                    <a href="../userregistration/logout.php">Log Out</a>
                                </li>
                            <?php endif;?>
                            <li style="float: right; border-left: 1px solid rgba(44, 44, 44, 0.3);">
                                <a href="">Help Centre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="headerwrapper">
            <div class="header-wrapper">
                <div class="coversafety"></div>
            </div>
        </div>
        <div class="container">
            <div class="mainbody">
                <div class="bodycontain1 textsafe1">
                    <p>At Grab, our mission is to create a safer 
                    everyday for our customers and partners, as well as the 
                    community as a whole.</p>
                    <h1>Everyday app. Everyday safety.</h1>
                    <p>As an everyday app that serves your daily needs, 
                    ensuring your safety and security in every experience with 
                    us is our top priority.<br> Whether you’re going somewhere, paying for a meal, or ordering in, 
                    we’ll always be there to protect you, every step of the way.</p>        
                </div>
                <div class="hr"></div>
                <div class="bodycontain1 textsafe1">
                    <h1>What we believe in</h1>
                    <h2>The 5 Safety Commandments</h2>
                    <p>There are a few rules we live and stand by. 
                    Non-negotiable, of course. These 5 safety policies serve 
                    as our fundamental principles that we practice and abide by, 
                    in creating a safer everyday.</p>
                    <p>Read on to see how we put trust and safety first, 
                    in everything we do.</p>
                    <section class="column icon_safe" style="margin-top: 2%;">
                        <div>
                            <img src="../img/conduct_financial_transactions_20131.png">
                            <h1>Code of Conduct</h1>
                            <p>Legal compliance, safety,
                            security <br> and service standards 
                            we expect of<br> our partners.</p>
                        </div>
                        <div>
                            <img src="../img/93704819.png">
                            <h1>Data Privacy</h1>
                            <p>Our promise to keep your personal<br> 
                            data and information safe and<br> secure.</p>
                        </div>
                        <div>
                            <img src="../img/safety.png">
                            <h1>Data Security</h1>
                            <p>Our commitment to ensuring our <br>
                            systems are well-protected to<br> safeguard your privacy.</p>
                        </div>
                    </section>
                    <section class="column texta_blue">
                        <div>
                            <a href="">Learn More</a>
                        </div>
                        <div>
                            <a href="">Learn More</a>
                        </div>
                        <div>
                            <a href="">Learn More</a>
                        </div>
                    </section>
                    <section class="column icon_safe" style="margin-top: 2%;">
                        <div>
                            <img src="../img/3897-200.png">
                            <h1>Anti-harassment</h1>
                            <p>Our zero-tolerance policy on sexual <br>
                            harassment to preserve a healthy<br> ecosystem.</p>
                        </div>
                        <div>
                            <img src="../img/729352-200.png">
                            <h1>Code of Conduct</h1>
                            <p>Conditions that apply to any 
                            usage<br> of Grab’s services.</p>
                        </div>
                        <div></div>
                    </section>
                    <section class="column texta_blue">
                        <div>
                            <a href="">Learn More</a>
                        </div>
                        <div>
                            <a href="">Learn More</a>
                        </div>
                        <div></div>
                    </section>
                </div>
                <div class="bodycontain_safe1">
                    <div class="inbodycontain_safe1 textsafe2">
                        <p>We’re also the first in the ride-hailing industry globally whose quality 
                        management system is accredited under the <b>ISO 9001:2015 Quality Certification</b>.</p>
                        <div class="boxlink_safe">
                            <a href="">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="bodycontain1 ">
                    <section class="column">
                        <div class="textsafe1" style="margin-right: 2%;">
                            <h1>What we do</h1>
                            <h2>Innovate, innovate, innovate.</h2>
                            <p>The industry is ever-changing, so we make sure that 
                            we’re on our toes at all times. We believe in prevention, 
                            protection, and action, and we’re constantly and 
                            proactively building new trust and safety features and 
                            programmes to fulfill those criterias.</p>
                        </div>
                        <div class="img1_safe">
                            <img src="../img/53757399_p0.jpg">
                        </div>
                    </section>
                    <section class="column safe_number">
                        <div style="margin-right: 2%;">
                            <h1>01</h1>
                        </div>
                        <div style="margin-right: 2%;">
                            <h1>02</h1>
                        </div>
                        <div>
                            <h1>03</h1>
                        </div>
                    </section>
                    <section class="column textsafe1">
                        <div style="margin-right: 2%;"><h2>Prevention</h2></div>
                        <div style="margin-right: 2%;"><h2>Protection</h2></div>
                        <div><h2>Action</h2></div>
                    </section>
                    <section class="column">
                        <div style="margin-right: 2%;">
                            <div class="tab">
                                <input id="tab-one" type="checkbox" name="tabs">
                                <label for="tab-one">Driver Background Checks</label>
                                <div class="tab-content">
                                    <p>All drivers have to go through our security 
                                    and safety screening before being qualified as 
                                    a driver on our platform.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-two" type="checkbox" name="tabs">
                                <label for="tab-two">Number Masking</label>
                                <div class="tab-content">
                                    <p>We mask the personal contact numbers of both 
                                    passengers and drivers to protect the privacy 
                                    and data of both parties</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-three" type="checkbox" name="tabs">
                                <label for="tab-three">Driver Selfie Authentication</label>
                                <div class="tab-content">
                                    <p>Using facial recognition, drivers have to authenticate and verify their 
                                    identity at least once a day to ensure that they match their profile in the app.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-four" type="checkbox" name="tabs">
                                <label for="tab-four">Vendor Security Programme</label>
                                <div class="tab-content">
                                    <p>We work with many 3rd party vendors and at times, need to 
                                    share our data with them. To prevent your personal data 
                                    from being abused or mismanaged, we developed a programme that 
                                    helps us screen for any issues that may compromise your data 
                                    security and privacy.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-five" type="checkbox" name="tabs">
                                <label for="tab-five">Prevention of Illegal Activity</label>
                                <div class="tab-content">
                                    <p>Our security features help to prevent and block the 
                                    usage and circulation of illegal apps and suspicious 
                                    devices or accounts, commonly used for fraud and 
                                    attacks on our users’ accounts.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-6" type="checkbox" name="tabs">
                                <label for="tab-6">Account Verification</label>
                                <div class="tab-content">
                                    <p>Our system is programmed to detect any anomaly in your 
                                    login activity. To reduce the accidental or intentional 
                                    take-over of your account, 
                                    we perform additional security checks to verify that it is 
                                    indeed you who is attempting to sign in to your account.</p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-right: 2%;">
                            <div class="tab">
                                <input id="tab-7" type="checkbox" name="tabs">
                                <label for="tab-7">Emergency Button</label>
                                <div class="tab-content">
                                    <p>At any time during a ride, passengers can press the 
                                    emergency button in the Grab app to notify security or 
                                    their emergency contacts.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-8" type="checkbox" name="tabs">
                                <label for="tab-8">Share My Ride</label>
                                <div class="tab-content">
                                    <p>Let your friends or loved ones know 
                                    where you are by sharing your trip details 
                                    and live GPS location.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-9" type="checkbox" name="tabs">
                                <label for="tab-9">Personal Accident Insurance</label>
                                <div class="tab-content">
                                    <p>We’re the first in the industry to insure our 
                                    passengers and drivers above the compulsory commercial 
                                    insurance for vehicles.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-10" type="checkbox" name="tabs">
                                <label for="tab-10">Data Security Frameworks</label>
                                <div class="tab-content">
                                    <p>Our app and backend systems employ best-in-class security frameworks to 
                                    better protect our users' accounts, ride data, e-wallet and private information.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tab">
                                <input id="tab-11" type="checkbox" name="tabs">
                                <label for="tab-11">Rate Your Trip</label>
                                <div class="tab-content">
                                    <p>Both drivers and passengers can rate and 
                                    review their trip experience to help us identify 
                                    and investigate any misconduct.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-12" type="checkbox" name="tabs">
                                <label for="tab-12">Driver Monitoring & Incident Investigation</label>
                                <div class="tab-content">
                                    <p>A dedicated team works round-the-clock to 
                                    investigate and maintain the quality of our drivers.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-13" type="checkbox" name="tabs">
                                <label for="tab-13">Driver Telematics</label>
                                <div class="tab-content">
                                    <p>Using high-tech algorithms that utilise the 
                                    phone’s sensors, we are able to tell if a driver 
                                    was speeding, braking harshly or accelerating too 
                                    quickly, and provide weekly feedback reports to drivers.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input id="tab-14" type="checkbox" name="tabs">
                                <label for="tab-14">24/7 Customer Service</label>
                                <div class="tab-content">
                                    <p>Should you require any assistance, our 
                                    customer experience team is available to you 24 
                                    hours a day, 7 days a week.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="hr"></div>
                <div class="bodycontain1 textsafe1">
                    <h1>What to do when things go wrong?</h1>
                    <p>Should anything go wrong, do know that we’ll always 
                    be there to help and protect your interests, every step of the way.</p>
                    <div class="boxlink_travel_now">
                        <a href="">Help Centre</a>
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
                        <a href="">Press</a>
                    </div>
                    <div class="texta_many tf3">
                        <h1>SERVICES</h1>
                        <a href="">G7 Taxi</a><br><br>
                        <a href="">G7 Freight</a><br><br>
                        <a href="">G7 Motorbike</a><br><br>
                        <a href="">G7 for Business</a><br><br>
                        <a href="">G7 Air</a>
                    </div>
                </section>
            </div>
            <div class="footercontain3">
                <section class="column">
                    <div class="tf3">
                        <p>Best display on 1080p 16: 9 screen, latest Chrome browser, not supported on mobile.<br>
                        G7 GROUP © 2018 Designed by Gruppe Neun.</p>
                    </div>
                    <div class="texta_line textspacingend tf3">
                        <p><a href="privacy.html">Privacy</a>
                        <a href="">Accessibility</a>
                        <a href="">Terms</a></p>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>