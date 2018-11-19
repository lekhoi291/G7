<?php
session_start();
if (!isset($_SESSION['username'])){
    // header('location:userregistration/login.php');
}
?>

<html>
    <head>
        <title>Privacy</title>
        <link rel="stylesheet" href="../css/main.css" type="text/css">
        <link rel="stylesheet" href="../css/header.css" type="text/css">
        <link rel="stylesheet" href="../css/mainbody.css" type="text/css">
        <link rel="stylesheet" href="../css/slideimage1.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        <script src="../Js/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="aboutcss/privacy.css" type="text/css">
        <link rel="icon" href="../img/Polar_Bear-512.png">
    </head>
    <body>
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
                            </li>
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
        <div class="container">
            <div class="mainbody_p">
                    <div class="bodycontain_p1">
                        <div class="textp_1">
                            <h1>G7 GROUP PRIVACY POLICY</h1>
                            <p>(updated on 19 July 2018)</p>
                            <p>This Privacy Policy (“Policy”) describes how G7 Holdings Inc. 
                                and its respective subsidiaries, associate companies and jointly
                                controlled entities (“G7 Group”) use your Personal Data.</p>
                            <h3>Collection of Personal Data</h3>
                            <p>“Personal Data” means information about you, 
                                from which you are identifiable, including but not limited 
                                to your name, nationality, address, telephone number, fax
                                number, bank details, credit card details, gender, resident
                                status, financial background, personal interests, email 
                                address, your occupation, your photo, any information about
                                you which you have provided to G7 Group in registration 
                                forms, application forms or any other similar forms and/or 
                                any information about you that has been or may be collected, 
                                stored, used and/or processed by G7 Group from time to time 
                                and includes sensitive personal data such as your identification 
                                card number, driving licence number, birth certificate number, passport
                                number, race, ethnic origin, date of birth, marital status, education
                                background, and data relating to health, religious or other similar
                                beliefs. If you are a service provider, we may also collect telematics
                                data (such as your speed, acceleration, and braking data), device data
                                (such as your IMEI number and the names of the apps you have installed
                                on your device) and your vehicle registration data.</p>
                            <p>The provision of your Personal Data is voluntary. However, 
                            if you do not provide G7 Group your Personal Data, G7 Group
                            will not be able to process your Personal Data for the Purposes
                            and Additional Purposes outlined below and may cause G7 Group 
                            to be unable to provide services or products to or accept payments 
                            from you.</p>
                            <p>If you are an agent, vendor, supplier or service provider, 
                            provision of your Personal Data is mandatory and failure to 
                            provide your Personal Data, may be a breach of laws or 
                            regulatory requirements, and may cause G7 Group to be unable 
                            to engage you to provide services or products or issue payments 
                            to you for products or services provided.</p>
                            <p>In addition to the Personal Data you provide to 
                            G7 Group directly, G7 Group may collect your 
                            Personal Data from publicly available sources or from 
                            third parties, for example:</p>
                            <ul>
                                <li>from filled up application or registration forms, surveys or training tools or other similar forms;</li>
                                <li>from publicly available sources such as directories;</li>
                                <li>from G7 Group’s official social media pages, if you follow, like or are a fan of such pages;</li>
                                <li>from credit reporting agencies, insurance providers, or financial services providers;</li>
                                <li>when you interact and communicate with G7 Group at any events or activities;</li>
                                <li>when you enter contests organized by G7 Group;</li>
                                <li>from various entities or divisions under G7 Group;</li>
                                <li>from other entities who provide you with services or with whom you have a contractual relationship;</li>
                                <li>from marketing service providers or partners; or</li>
                                <li>by using G7 Group apps and websites, which includes all apps and websites operated by G7 Group and under the names of its respective brands (respectively “Apps” and “Websites”).</li>
                            </ul>
                            <p>Your personal data may also be collected from cookies used on the Websites, and if you are a service provider,
                                from your accelerometer data, GPS data, device data and data collected when your G7 Driver app is on. <br>
                                Further, certain service providers of G7 Group may utilise personal 
                                in-vehicle cameras for their own safety and security purposes. 
                                Whilst the use of such in-vehicle cameras are neither endorsed or prohibited by 
                                G7 Group, G7 Group does not collect, use or disclose any of your Personal 
                                Data from such in-vehicle recordings, and the collection, use and disclosure of 
                                any such Personal Data is not conducted on behalf of G7 Group. The collection,
                                use and disclosure of Personal Data obtained from personal in-vehicle cameras 
                                is solely the responsibility of the service provider and you should inform your 
                                service provider if you have any objections to the use of personal in-vehicle 
                                cameras in such vehicles.</p>
                            <h3>Purposes of Processing</h3>
                            <p>G7 Group may use and process your Personal Data for business and 
                                transportation, delivery and logistics (including food and beverage) 
                                and payment and financial services activities of G7 Group which shall 
                                include, without limitation the following (“Purposes”):<br>
                                Where you are a customer of the services provided by G7 Group:</p>
                            <ul>
                                <li>to perform the G7 Group’s obligations in respect 
                                    of any contract entered into with you;</li>
                                <li>to provide you with any service you have requested;</li>
                                <li>to process your subscriptions and to deliver the services to you;</li>
                                <li>where you have requested to download and use the G7 or G7 Driver App, or 
                                    any other G7 Group application, to process your request, 
                                    to deliver the App to you 
                                    and to provide you a license for the use of the App;</li>
                                <li>to process and manage your rewards and loyalty points;</li>
                                <li>to process your participation in any events, activities, focus groups, 
                                    research studies,
                                    contests, promotions, polls, surveys or any productions;</li>
                                <li>to process, manage or verify your application for subscription with the 
                                    G7 Group and to provide you the benefits offered to subscribers;</li>
                                <li>to validate your bookings and process payments relating 
                                    to any products or services you have requested;</li>
                                <li>to understand and analyse our sales as well as your needs and preferences;</li>
                                <li>to develop, enhance and provide products and services to meet your needs;</li>
                                <li>to process exchanges or product returns;</li>
                                <li>to use Cookies to enhance our processes, advertising, notifications, 
                                    authentication, 
                                    security and compliance, analytics and preference management.</li>
                            </ul>
                            <p>Where you are an agent, vendor, supplier, partner, contractor or service provider:</p>
                            <ul>
                                <li>for the purposes of engaging you to provide services or products;</li>
                                <li>to facilitate or enable any checks as may be required by G7 Group in order to engage you;</li>
                                <li>to process payments relating to any products or services you have provided;</li>
                                <li>to provide personalised feedback to you, so that you are able to identify specific areas for improvement;</li>
                                <li>to assess safety and quality;</li>
                                <li>to monitor compliance with our terms and conditions, policies and Driver’s Code of Conduct;</li>
                                <li>to provide updates to our fleet partners for fleet management purposes;</li>
                                <li>to contact you in relation to the provision of your services.</li>
                            </ul>
                            <h3>General:</h3>
                            <ul>
                                <li>to respond to questions, comments and feedback from you;</li>
                                <li>to communicate with you for any of the purposes listed in this Policy;</li>
                                <li>for internal administrative purposes, such as auditing, data analysis, database records;</li>
                                <li>for purposes of detection, prevention and prosecution of crime;</li>
                                <li>to maintain the safety and security of our services;</li>
                                <li>for G7 Group to comply with its obligations under law;</li>
                            </ul>
                            <p>and you agree and consent to G7 Group using and processing your Personal Data for 
                            the Purposes and in the manner as identified in this Policy.</p>

                            <h3>Marketing and promotional purposes</h3>
                            <p>G7 Group may also use and process your data for other purposes such as (“Additional Purposes”):</p>
                            <ul>
                                <li>To send you alerts, newsletters, updates, mailers, promotional materials, special privileges, festive greetings 
                                    from G7 Group, its partners, sponsors or advertisers;</li>
                                <li>To notify and invite you to events 
                                    or activities organized by G7 Group, 
                                    its partners, sponsors or advertisers;</li>
                                <li>To process your registration to participate in or attend an event or activity and to communicate 
                                    with you regarding your attendance at the event or activity;</li>
                                <li>To share your Personal Data amongst its subsidiaries, associate companies and jointly controlled entities as well as with its agent, vendor, supplier, partner, contractor or service provider who may 
                                    communicate with you to market their products, services, events or promotions;</li>
                            </ul>
                            <p>by way of post, telephone call, short message service (SMS), online messaging service, by hand and/or by email.</p>
                            <h3>Unsubscribe and Revocation of Consent</h3>
                            <p>If you wish to unsubscribe to the processing of your Personal Data for Additional Purposes by G7 Group, please click on the link “Unsubscribe” which is embedded in the relevant email or message in order not to receive any such messages in the future.
                                Please note that if you unsubscribe, we may still send you service-related messages, such as ride receipts.<br>
                                If you wish to revoke the consent that G7 Group has obtained from you for the Purposes stipulated herein, please notify G7 Group using the contact details stated below.</p>
                            <h3>Transfer of Personal Data</h3>
                            <p>Your Personal Data may be transferred to, stored, used and processed in a jurisdiction other than your home nation or otherwise in the country, state and city in which you are present while using any services provided by G7 Group (“Alternate Country”), to companies under G7 Group which are located outside of your home nation or Alternate Country and/or where G7 Group’s servers and/or service providers and partners are located outside of your home nation or Alternate Country. You understand and consent to the transfer of your Personal 
                                Data out of your home nation or Alternate Country as described herein.</p>
                            <h3>Disclosure to Third Parties</h3>
                            <p>Your personal data may be transferred, accessed or disclosed to third parties for the Purposes and Additional Purposes. Further, G7 Group may engage other companies, service providers or individuals to perform functions on its behalf, and consequently may provide access or disclose to your Personal Data to such service providers or 
                                third parties. The third parties include, without limitation:</p>
                            <ul>
                                <li>G7 Group partners, which include parties with whom G7 Group collaborates with for certain events, programs and activities;</li>
                                <li>Advertisers;</li>
                                <li>Event management companies and event sponsors;</li>
                                <li>Marketing research companies;</li>
                                <li>Service providers, including, information technology (IT) service providers for infrastructure, software and development work;</li>
                                <li>Professional advisors and external auditors, including legal advisors, financial advisors and consultants;</li>
                                <li>Other entities within G7 Group; </li>
                                <li>Governmental authorities to comply with statutory, regulatory and governmental requirements.</li>
                            </ul>
                            <p>Your Personal Data may also be shared in connection with a corporate transaction, such as the formation of a joint venture, a sale of a subsidiary or a division, merger, consolidation, or asset sale, or in the unlikely event of winding-up.
                                    Access & Correction Requests and Inquiries, Limiting the Processing of Personal Data<br>
                                    Subject to any exceptions under applicable laws of your home nation or Alternate Country, you may request for access to and/or request correction of your Personal Data, request to limit the processing of 
                                    your Personal Data for the Additional Purposes and/or make any inquiries regarding your Personal Data by contacting:</p>
                            <p>Email: dataprotection@g7.com<br>
                            Email: dataprotection@g7.com<br><br>
                            Subject to any laws of your home nation or Alternate Country, G7 Group reserves the right to impose a fee for access of your 
                            Personal Data in the amounts as permitted therein.</p>
                            <p>In respect of your right to access and/or correct your Personal Data, G7 Group has the right to refuse your requests to access and/or make any correction to your Personal Data for the reasons permitted under law, such as where the expense of 
                                providing access to you is disproportionate to the risks to your or another person’s privacy.</p>
                            <h3>Cookies</h3>
                            <p>G7 Group, and third parties with whom we partner, may use cookies, web beacons, tags, scripts, local shared objects such as HTML5 and Flash (sometimes called “flash cookies”), advertising identifiers (including mobile identifiers such as Apple’s IDFA or Google’s Advertising ID) and similar technology (“Cookies”) in connection with your use of the Websites and Apps. Cookies may have unique identifiers, and reside, among other places, on your computer or mobile device, in emails we send to you, and on our web pages. Cookies may transmit information about you and your use of the Service, such as your browser type, search preferences, IP address, data relating to advertisements that have been displayed to you or that you have clicked on, and the date and time of your use. 
                                Cookies may be persistent or stored only during an individual session.</p>
                            <p>G7 Group may allow third parties to use Cookies on the Websites and Apps to collect the same type of information for the same purposes G7 Group does for itself. Third parties may be able to associate the information they collect with other information they have about you from other sources. 
                                We do not necessarily have access to or control over the Cookies they use.</p>
                            <p>Additionally, we may share non-personally identifiable information from or about you with third parties, such as location data, advertising identifiers, or a cryptographic hash of a common account identifier (such as an email address), 
                                to facilitate the display of targeted advertising.</p>
                            <p>If you do not wish for your Personal Data to be collected via Cookies on the Websites, you may deactivate cookies by adjusting your internet browser settings to disable, block or deactivate cookies, by deleting your browsing history and clearing the cache from your 
                                internet browser. You may also be able to limit our sharing of some of this information through your mobile device 
                                settings, or by submitting your details <a href="">here</a>.</p>
                            <h3>Links to Third-Party Websites</h3>
                            <p>The Websites may contain links to third parties’ websites. Please note that G7 Group is not responsible for the collection, use, maintenance, sharing, or disclosure of data and information by such third parties. If you provide information directly to such sites, the privacy policy and terms of service on those sites are applicable and G7 Group is not 
                                responsible for the information processing practices or privacy policies of such sites.</p>
                            <h3>Personal Information from Minors and Other Individuals</h3>
                            <p>As a parent or legal guardian, please do not allow the minor (individuals under 18 (eighteen) years of age) under your care to submit Personal Data to G7 Group. In the event that such Personal Data is provided to G7 Group, you hereby consent to the processing of the minor’s Personal Data and personally accept and 
                                agree to be bound by this Policy and take responsibility for his or her actions.</p>
                            <p>In some circumstances you may have provided personal data relating to other individuals (such as your spouse, family members or friends) and in such circumstances you represent and warrant that you are authorized to provide their personal data to G7 Group and you have obtained their consent for their 
                                personal data be processed and used in the manner as set forth in this Policy.</p>
                            <h3>Acknowledgement, Consent, and Data Retention</h3>
                            <p>By communicating with G7 Group, using G7 Group’s services, purchasing products from G7 Group or by virtue of your engagement with G7 Group, you acknowledge that you have read and understood this Policy and agree and consent to the use, processing and 
                                transfer of your Personal Data by G7 Group as described in this Policy.</p>
                            <p>G7 Group shall have the right to modify, update or amend the terms of this Policy at any time by placing the updated Policy on the Websites. By continuing to communicate with G7 Group, by continuing to use G7 Group’s services, purchasing products from G7 Group or by your continued engagement with G7 Group following the modifications, updates or amendments to this Policy, 
                                such actions shall signify your acceptance of such modifications, updates or amendments.</p>
                            <p>In the event of any conflict between the English and other language versions, the English version shall prevail.</p>
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
                        <a href="about/about.php">About us</a><br><br>
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
                        <p><a href="about/privacy.php">Privacy</a>
                        <a href="">Accessibility</a>
                        <a href="">Terms</a></p>
                    </div>
                </section>
            </div>
        </div>
        </div>
    </body>
</html>