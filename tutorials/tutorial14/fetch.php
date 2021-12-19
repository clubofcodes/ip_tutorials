<?php
session_start();
require "db/connect.php";
if(isset($_POST['submit']))
	  {
	  	if(preg_replace("#[^0-9a-z]#i"," ", $_POST['name']))
	  		{ 
	  		 $name=$_POST['name'];
	  		
	  		$sql="SELECT ID, Image, Name, UsernameEmail, Password, MobileNumber, Birthdate, Country, State, City, Note FROM registration WHERE  Name LIKE '%" . $name . "%' OR Image LIKE '%" . $name . "%' OR UsernameEmail LIKE '%" . $name  ."%' OR MobileNumber LIKE '%" . $name  ."%' OR Birthdate LIKE '%" . $name  ."%' OR Country LIKE '%" . $name  ."%' OR State LIKE '%" . $name  ."%' OR City LIKE '%" . $name  ."%' OR Note LIKE '%" . $name  ."%' "; 
	  		$result= $db->query($sql);
	  		while($row=$result->fetch_assoc()){		
					}
				}
			}
	  else
	  { 
	  echo  "<p>Please enter a search query</p>"; 
	  }
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
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>

<body style='background-color:black'>
    <h1 class="text-center" style="color: White"><a href='#'><u>Registered User Data</u></a></h1>
    <br>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group">
                <div class="col-sm-4">
                    <a class="btn btn-success" href="registration.php">+ Add New Record</a>
                </div>
                <div class="col-sm-6">
                    <input class="form-control" type="text" placeholder="Search" name="name" />
                
                </div>
                <div class="col">
                <a href="index.php" onClick="return confirm('Do you want to search other one?');"> <button type="button" class="btn btn-warning">go back</button></a>
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
                <?php
                $count = 0;
                $result = $db->query($sql);
                    if ($result->num_rows>0) {
                        while ($row = $result->fetch_assoc()) {
                ?>
                            <tr>
                                <td><?php echo $count += 1; ?></td>
                                <td><img src="<?=$row['Image']?>" height="50px" width="75px"/></td>
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
                
                    ?>
            </thead>
        </table>
        <script type="text/javascript">
            $("document").ready(function() {
                $(".btn-danger").click(function() {
                    $(this).parents("tr").fadeOut(1000);
                });
            });
        </script>
</body>
</html>