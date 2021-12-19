<?php
   $mno=$_POST["mno"];
   ?>
<!DOCTYPE html>
<html>

<head>
    <title>Selected Month</title>
    <meta charset="utf-8">
    <link rel="icon" href="icon.PNG" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css" type='text/css' />
    <link rel="stylesheet" href="css/my2.css" type='text/css' />
    <div class="container">
        <div class="well head" style="background-color:white;">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <center>
</head>

<body>
    <form action="index.php">
        <h1>
            <center><span>You Selected</span></center>
        </h1>
        <br><br>
        <select id="number" name="SelectNo.OfMonth" class="input form-control font-weight-bold">
            <option>Selected Month Name</option>
            <option value="1" <?php if($mno==1) echo "selected"; ?>> January</option>
            <option value="2" <?php if($mno==2) echo "selected"; ?>>February</option>
            <option value="3" <?php if($mno==3) echo "selected"; ?>>March</option>
            <option value="4" <?php if($mno==4) echo "selected"; ?>>April</option>
            <option value="5" <?php if($mno==5) echo "selected"; ?>>May</option>
            <option value="6" <?php if($mno==6) echo "selected"; ?>>June</option>
            <option value="7" <?php if($mno==7) echo "selected"; ?>>July</option>
            <option value="8" <?php if($mno==8) echo "selected"; ?>>August</option>
            <option value="9" <?php if($mno==9) echo "selected"; ?>>September</option>
            <option value="10" <?php if($mno==10) echo "selected"; ?>>October</option>
            <option value="11" <?php if($mno==11) echo "selected"; ?>>November</option>
            <option value="12" <?php if($mno==12) echo "selected"; ?>>December</option>
        </select>
        <div class="form-group">
            <button id="button" class="button btn btn-warning btn-lg">Back</button>
        </div>
    </form>
    </center>
    </div>
    </div>
</body>

</html>