<?php
   error_reporting(0);
   $amount = $_POST['amount'];
   $rate = $_POST['rate'];
   $years    = $_POST['years'];
   $amount2 = (float)$amount;
   $rate2   = (float)$rate;
   $Solve_Interest = ($amount2 * $rate2 * $years) / 100;
   $Total_Amount = ($amount2 + $Solve_Interest);
   if(isset($_POST['check'])) {
   $title .= "$'GENERATED RESULT'$" ."<BR><BR>";
   $title .= "The Computed interest is ".number_format($Solve_Interest,2,'.','')."<br><br>"; 
   $title .= "The Total Amount to be paid is ".number_format($Total_Amount,2,'.','')."";        	  
   }
?>

<html>

<head>
    <title>Simple Interest Value</title>
    <link rel="icon" href="icon.PNG" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/my.css" rel="stylesheet" />
</head>

<body style='background-color:black'>
    <div class="container">
        <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
            <br>
            <table align="center" class="table head" border="1">
                <tr>
                    <td>
                        <h1 align="center">User Input's</h1>
                        <form action="result.php" method="post">
                            <div>
                                <div class="row">
                                    <h4>Your Principal Amount:<?php echo $amount; ?></h4>
                                </div>
                                <div class="row">
                                    <h4>Bank Rate of Interest(%) :<?php echo $rate; ?></h4>
                                </div>
                                <div class="row">
                                    <h4>Number of Years :<?php echo $years; ?></h4>
                                </div>
                            </div>
                            <center>
                                <h1 align="center">Simple Interest </h1>
                                <?php 
                                    echo $title;
                                ?>
                            </center><br>
                            <a href="index.php" class="btn btn-danger backb">GO back</a>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>