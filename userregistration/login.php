<html>
<head>
    <title> User Login</title>
    <link rel="stylesheet" type="text/css" href="mainbody.css">
    <link rel="stylesheet" type="text/css" href="loginheader.css">
    <link rel="stylesheet" type="text/css" href="signinsignup.css">
    <link rel="icon" href="../img/Polar_Bear-512.png">
</head>
<body>
<div class="loginheadercontain">
        <a href="../Index.html"><div class="dotcontain backtohomepage">
            <img src="047_-_homepage-512.png">
        </div></a>
        <div class="backtohomepage">
            <a href="../Index.html">Homepage</a>
        </div>
    </div>
    <div class="containerlogin">
        <div class="avatarcontainer avatar">
            <img src="avatar.jpg">
        </div>
</div>

<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
        <label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up">
        <label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
        <div class="sign-in-htm">
        <form action="validation.php" method="post">
            <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" type="text" name="user" class="input" required>
            </div>
            <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" name="password" type="password" class="input" data-type="password" required>
            </div>
            <div class="group">
                <input type="submit" class="button" value="Sign In">
            </div>
        </form>
    </div>
    <div class="sign-up-htm">
        <form action="registration.php" method="post">
            <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" type="text" name="user" class="input" required>
            </div>
            <div class="group">
                <label for="user" class="label">Password</label>
                <input id="pass" name="password" type="password" class="input" data-type="password" required>
            </div>
            <div class="group">
				<input type="submit" class="button" value="Sign Up">
			</div>
        </form>
    </div>    
</div>
</body>
</html>