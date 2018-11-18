<html>
 <head>
  <title>Login and Registration</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylelogin.css">
  <link rel="stylesheet" type="text/css" href="loginheader.css">
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
        <div class="Loginbox">
            <div class="form">
                <form class="login-form" name="login" id="login">
				<form action="validation.php" method="post">
				
                    <p>User Name</p>
                    <input type="text" name="user" placeholder="Enter Your Name" required><br>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Your Password" required><br>
                    <input type="submit" value="Login"><br>
                    <p class="message">Create an account? <a href="#signup">Register</a></p>
                </form>
				</form>

                <form class="register-form" name="signup" id="signup">
				<form action="registration.php" method="post">
                    <p>User Name</p>
                    <input type="text" name="user" placeholder="Enter Your Name" required><br>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Your Password" required><br>
                    <!-- <p>Email</p> -->
                    <!-- <input type="email" placeholder="Enter Your Email"/><br> -->
                    <!-- <p>Phone number</p> -->
                    <!-- <input type="tel" placeholder="Enter Your Telephone Number"/><br> -->
                    <!-- <p>Address</p> -->
                    <!-- <input type="text" placeholder="Enter Your Address"/><br> -->
                    <input type="submit" value="Create Account">
                    <p class="message">Alreday Have an account? <a href="#login">Login</a></p>
                </form>
				</form>
            </div>
	</div>
		
    <!-- <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <script>
        $('.message a').click(function(){
         $('form').animate({height:"toggle",opacity: "toggle"},"slow");
        } )
    </script> -->
  </body>
</html>