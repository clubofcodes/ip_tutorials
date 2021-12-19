<html>
<head>
    <title>Calculator</title>
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
                        <h1 align="center">Interest Calculator</h1>
                        <form action="result.php" method="post">
                            <div>
                                <div class="row"><label>Enter Principal Amount:</label><input type="text" name="amount"
                                        value="" autofocus required size=10 /><br> </div>
                                <div class="row"> <label> Enter Rate of Interest(%) : </label><input type="text"
                                        name="rate" value="" required size=10 /><br> </div>
                                <div class="row"> <label> Enter Number of Years : </label> <input type="text"
                                        name="years" value="" required size=10 /> </div>
                            </div>
                            <br>
                            <input type="submit" name="check" value="Compute Interest"
                                class="btn btn-lg btn-success btn-block"
                                title="Click here to compute the Interest Amount." />
                            <input type="reset" value="Clear" class="btn btn-lg btn-warning btn-block"
                                title="Click here to clear text box and values on the screen" />
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>