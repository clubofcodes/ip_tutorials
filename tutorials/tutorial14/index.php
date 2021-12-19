<?php
session_start();
require "db/connect.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>
    <link rel="icon" href="icon.PNG" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/my.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body style='background-color:black'>
    <h1 class="text-center" style="color: White"><a href='#'><u>Registered User Data</u></a></h1>
    <br>
    <div class="container">
        <form action="fetch.php" method="post">
            <div class="form-group">
                <div class="col-sm-4">
                    <a class="btn btn-success" href="#">+ Add New Record</a>
                </div>
                <div class="col-sm-6">
                    <input class="form-control" type="text" placeholder="Search" id="name" name="name" />
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-secondary mr-sm-2" name="submit" value="Search" />
                </div>
            </div>
        </form>
        <table border="2" class="table input head table-responsive table-hover table-striped">
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
            </thead>
            <tbody id="myTable">
                <?php
                $count = 0;
                if ($result = $db->query("SELECT * FROM `Registration`")) {
                    if ($result->num_rows) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $count += 1; ?></td>
                                <td><img src="<?= $row['Image'] ?>" height="50px" width="75px" /></td>
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
                                    <a class="btn btn-primary" href="#">Edit</a>
                                    <a class="btn btn-danger" href="reg_del.php?id=<?php echo $row['ID']; ?>" onClick="return confirm('Do you want to delete?');">Delete</a>
                                </td>
                    <?php
                            echo '</tr>';
                        }
                    }
                }
                ?>
            </tbody>
        </table>
</body>

</html>
<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $("#name").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>