<html>
<head>
        <title> User Login</title>
        <link rel="stylesheet" type="text/css"
        hrel="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        >
        <link rel="stylesheet" type="text/css" href="mainbody.css">
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
</div>

<div class="container">
    <div class="login-box">
    <section class="column">
    <div>
        <h2> Login</h2>
        <form action="validation.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
            </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Login</button>
            <p class="message">Create an account? <a href="#signup">Register</a></p>
        </form>
    </div>
    <div>
        <h2> Register</h2>
        <form action="registration.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
            </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Register</button>
            <p class="message">Alreday Have an account? <a href="#login">Login</a></p>
        </form>
    </div>
</section>
    
</div>

</div>
 <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <script>
        $('.message a').click(function(){
         $('form').animate({height:"toggle",opacity: "toggle"},"slow");
        } )    
    </script>
</body>
</html>