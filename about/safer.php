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
        <link rel="stylesheet" href="../css/slideimage1.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        <script src="../Js/jquery-3.3.1.min.js"></script>
        <script src="../Js/scrollanimation.js"></script>
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
    </body>
</html>