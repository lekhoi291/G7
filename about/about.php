<?php
session_start();
if (!isset($_SESSION['username'])){
    // header('location:userregistration/login.php');
}
?>

<html>
    <head>
        <title>About</title>
        <link rel="stylesheet" href="../css/main.css" type="text/css">
        <link rel="stylesheet" href="../css/header.css" type="text/css">
        <link rel="stylesheet" href="../css/mainbody.css" type="text/css">
        <link rel="stylesheet" href="../css/slideimage1.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        <script src="../Js/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="aboutcss/about.css" type="text/css">
        <link rel="icon" href="../img/Polar_Bear-512.png">
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
                                <a href="about.php">About</a>
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
                <div class="coverabout">
                    <h1>Forward Together</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mainbody">
                <div class="bodycontain1">
                    <div class="textabout1">
                        <h1>A Southeast Asian Journey</h1>
                        <section class="column">
                            <div>
                                <p>It was 2012 and legend has it, a few friends were enjoying some tea together. As is common with Southeast Asians, 
                                they started ranting about how hard it was to get a taxi.</p>
                                <p>But afterwards, they did something uncommon.</p>
                                <p>They decided to solve the problem. They started us, 
                                G9 (then MyTeksi). Pretty soon, our simple goal had transformed into something 
                                bigger – to make Southeast Asia a better place.</p>
                            </div>
                            <div style="margin-left: 5%">
                                <p>Today, G9 is present in eight countries across the region. 
                                And countless people like you, use our services every day.</p>
                                <p>But you are more than just a “number” to us. Like you, we too are Malaysians, Singaporeans, Indonesians, Thais, Vietnamese, Cambodians, Filipinos 
                                and Myanmar people. You are our neighbours. 
                                Friends. Family. And whatever we do, it’s to 
                                drive all of us … <b class="ft">Forward Together.</b></p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="bodycontain_about1">
                    <div class="inbodycontain_about1">
                        <div class="textabout3">
                            <section class="column">
                                <div class="textabout3_h1">
                                    <h1>Forward, But in <br> What Direction?</h1>
                                </div>
                                <div style="flex-grow: 3; margin-left: 2%;">
                                    <p>As one of the fastest growing regions in the world, 
                                    it’s easy to take progress for granted. Not so at G9. 
                                    We understand your needs don’t just stop at getting a ride.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="bodycontain_about2">
                    <section class="column">
                        <div class="contain2_left textabout4">
                            <h3>You deserve a safe transportation platform.</h3>
                            <p>Safe enough for us to trust our own mothers, sisters, 
                            and daughters to use. So we implemented these measures:</p>
                            <div class="aboutcontain1">
                                <img src="../img/bookmark.png">
                                <div><h4>Screening</h4>
                                <p>Every driver and vehicle are screened 
                                upon registration and must maintain a star 
                                rating above a set minimum.</p></div>
                            </div>
                            <div class="aboutcontain1">
                                <img src="../img/training.png">
                                <div><h4>Training & Code of Conduct</h4>
                                <p>We continually improve our 
                                training system and Code of Conduct to 
                                ensure a high level of service.</p></div>
                            </div>
                            <div class="aboutcontain1">
                                <img src="../img/safety.png">
                                <div><h4>Safety Features</h4>
                                <p>We’re always innovating for your safety. In fact, 
                                we introduced the first “Share Your Ride” feature 
                                in the industry.</p></div>
                            </div>
                            <div class="aboutcontain1">
                                <img src="../img/insuran.png">
                                <div><h4>Insurance & 24/7 Support</h4>
                                <p>We’ve got you covered with additional Personal 
                                Accident coverage, 24/7 call centres, and emergency 
                                response teams.</p></div>
                            </div>
                        </div>
                        <div style="flex-grow: 1.5;" class="aboutimg1">
                            <img src="../img/65930313_p0.jpg">
                        </div>
                    </section>
                </div>
                <div class="bodycontain_about3">
                    <section class="column">
                        <div style="flex-grow: 1.5;" class="aboutimg2">
                            <img src="../img/69662529_p0.jpg">
                        </div>
                        <div class="contain2_left textabout4">
                            <h3>Everyone should have access to transportation.</h3>
                            <p>Because to us, transportation is a right, not a privilege. 
                            That’s why we’ve worked really hard to create a platform 
                            that caters to your every need, regardless of income, age, or 
                            special needs:</p>
                            <div class="aboutcontain1">
                                <img src="../img/choice.png">
                                <div><h4>Choices</h4>
                                <p>Whether it’s taxis, cars, bikes or other vehicles, 
                                all our rides are fairly priced. So there’s one for 
                                your every need.</p></div>
                            </div>
                            <div class="aboutcontain1">
                                <img src="../img/house.png">
                                <div><h4>Door to Door</h4>
                                <p>We believe door-to-door transportation should be affordable 
                                    to all. Not just because it’s 
                                    nice to have. But because for someone with 
                                    special needs, it’s a must have.</p></div>
                            </div>
                            <div class="aboutcontain1">
                                <img src="../img/clock.png">
                                <div><h4>Anywhere Anytime</h4>
                                <p>From going to work in the morning, 
                                    to heading home after a night of partying, 
                                    we plan to be there for all of you.</p></div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="bodycontain_about4">
                    <section class="column">
                        <div class="contain2_left textabout4">
                            <h3>We want to improve the lives of our partners.</h3>
                            <p>That’s what we call our drivers. Not workers. Not contractors. 
                                But partners. And we want to give you a way to earn enough to 
                                have options in life. We want to make a profit, yes. But never 
                                at your expense.</p>
                            <div class="aboutcontain1">
                                <img src="../img/bussiness.png">
                                <div><h4>Entrepreneurs</h4>
                                <p>In essence, every driver partner is working for him/herself. 
                                It’s a small enterprise that will help you achieve financial freedom.</p></div>
                            </div>
                            <div class="aboutcontain1">
                                <img src="../img/training.png">
                                <div><h4>Training</h4>
                                <p>We want our driver partners to be the best drivers they can be. 
                                No just so you can earn more, but so you will also have pride in your profession.</p></div>
                            </div>
                            <div class="aboutcontain1">
                                <img src="../img/community.png">
                                <div><h4>We’re Family</h4>
                                <p>It’s a privilege for us to be a part of our driver partners’ lives. That’s why we created programs to help you own better cars 
                                and prepare for your retirement, or provide special classes for your children.</p></div>
                            </div>
                        </div>
                        <div style="flex-grow: 1.5;" class="aboutimg3">
                            <img src="../img/70126962_p0.jpg">
                        </div>
                    </section>
                </div>
                <div class="bodycontain_about5">
                    <div class="inbodycontain_about1">
                        <div class="textabout3">
                            <section class="column">
                                <div class="textabout3_h1">
                                    <h1>The Only Way is <br> Together</h1>
                                </div>
                                <div style="flex-grow: 3; margin-left: 2%;">
                                    <p>See a problem. Come up with the solution. 
                                    If only it was that simple.</p>
                                           
                                    <p>At G9, we have always tried to solve real world transportation problems. 
                                    But even from the very beginning, we realised just finding 
                                    the solution is not enough. To actually bring them to life, requires more.</p>

                                    <p>Sure, we have the technology. But we still need to 
                                    bring passengers and drivers together. We need to work with 
                                    communities and governments. And we need to learn from the diverse 
                                    peoples and cultures of Southeast Asia.</p>
                                            
                                    <p>And the only way we can do all that, is together with you.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="coverabout1">
                    <div class="coveraboutcontent1">
                        <div class="coverabouttext1">
                            <h1>G9 in a nutshell</h1>
                            <p>The goals we’ve set for ourselves aren’t easy to achieve. 
                            But we believe one day soon, every single person in 
                            Southeast Asia<br> will be able to travel safely, 
                            comfortably, and easily to work, to college,
                            and to tea with a few friends.</p>
                            <p>With every single day that passes, we’re more certain of it. 
                            Because we have you to help get us there. That’s 
                            what G9 is<br> really about. Bringing people 
                            together to make life better for all.</p>
                            <h3>Forward Together.</h3>
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
                        <a href="news.php">Newsroom</a><br><br>
                        <a href="blog.php">Blog</a><br><br>
                        <a href="">Careers</a><br><br>
                    </div>
                    <div class="texta_many tf3">
                        <h1>SERVICES</h1>
                        <a href="../services/taxi.php">G9 Taxi</a><br><br>
                        <a href="../services/motor.php">G9 Motorbike</a><br><br>
                        <a href="../services/freight.php">G9 Freight</a><br><br>
                        <a href="../services/business.php">G9 for Business</a><br><br>
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