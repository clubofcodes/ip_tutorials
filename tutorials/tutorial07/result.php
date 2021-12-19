<?php 
if(!empty($_POST["ck"])) {
	setcookie ("username",$_POST["username"],time()+ 24*3600);
	setcookie ("password",$_POST["password"],time()+ 24*3600);

	echo "<p align='left'> <font color=Red  size='2pt'>Cookies set </font> </p>";
} else {
	setcookie("username","");
	setcookie("password","");
echo "<p align='left'> <font color=Red size='2pt'>Cookies not set</font> </p>";	
	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="icon2.PNG" type="image/x-icon" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
        <header class="jumbotron hero-spacer" style="margin-top: 0px;">
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>