<?php
session_start();
if(!isset($_SESSION['one'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
       }
          echo "Login Success";
	
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="icon" href="wicon.PNG" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="RJ">

    <title>Welcome </title>
    <link href="css/bootstrap.min2.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome ! User</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
            <p>I am a Student at Rk University Pursuing My Degree in B.Tech Information Technology.</p>
            <p>As a Student of Information Technology, My Field of Interest is Android and Web Design.</p>
            <br>
            <p> Bahar Jane Ke liye Niche wale Button per Click kare!!<p>
                    <p><a href="logout.php" class="btn btn-primary btn-large">Logout </a></p>
                    <p>Good Bye! Have a nice day.<p>
        </header>
        <hr>
    </div>
    <hr>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>