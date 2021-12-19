<?php
session_start();
require "db/connect.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>
    <link rel="icon" href="icon.png" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/my.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style='background-color:black'>
    <h1 class="text-center" style="color: White"><a onClick="history.go(-1);"><u>Registered User Data</u></a></h1>
    <br>
    <div class="container">
        <a class="btn btn-success" href="registration.php">+ Add New Record</a>
        <font size="2">
            <table border="2" width="100%" class="table head">
                <thead class="thead-light">
                    <tr class="table-danger">
                        <th>Sr No.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Birthdate</th>
                        <th>Number</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Note</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $count = 0;
                    $sql = "select * from registration";
                    if ($result = $db->query($sql)) {
                        if ($result->num_rows) {
                            while ($row = $result->fetch_assoc()) {
                    ?>
                                <tr>
                                    <td><?php echo $count += 1; ?></td>
                                    <td><img src="<?= $row['Image'] ?>" height="45px" width="43px" /></td>
                                    <td><?= $row['Name'] ?></td>
                                    <td><?= $row['UsernameEmail'] ?></td>
                                    <td>********</td>
                                    <td><?= $row['Birthdate'] ?></td>
                                    <td><?= $row['MobileNumber'] ?></td>
                                    <td><?= $row['Country'] ?></td>
                                    <td><?= $row['State'] ?></td>
                                    <td><?= $row['City'] ?></td>
                                    <td><?= $row['Note'] ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="registration.php?id=<?php echo $row['ID']; ?>">Edit</a>
                                        <a class="btn btn-danger" href="#" onClick="return confirm('Do you want to delete?');">Delete</a>
                                    </td>
                        <?php

                                echo '</tr>';
                            }
                        }
                    }
                        ?>
                </thead>
            </table>
        </font>

</body>

</html>
<!-- JavaScript -->
<script src="js/jquerymin.js" type="text/javascript"></script>
<script type="text/javascript">
    $("document").ready(function() {
        $(".btn-danger").click(function() {
            $(this).parents("tr").fadeOut(1000);
        });
    });
</script>
<!-- JavaScript -->