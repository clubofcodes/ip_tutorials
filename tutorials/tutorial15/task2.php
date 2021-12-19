<?php
session_start();
require "db/connect.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inner Join-Task2</title>
    <link rel="icon" href="icon.PNG" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/my.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style='background-color:black'>
    <h1 class="text-center" style="color:red">Department and Employee Table</h1>
    <br>
    <div class="container">
        <table border="2" class="table input head table-responsive table-hover table-striped">
            <thead class="thead-light">
                <tr class="table-danger">
                    <th>Sr No.</th>
                    <th>DEPARTMENT NAME</th>
                    <th>No of employees</th>
                </tr>
                <?php
                $count=0;
                $sql="SELECT departments.DEPARTMENT_NAME, COUNT(departments.DEPARTMENT_ID) No_of_employees FROM departments INNER JOIN employees ON employees.DEPARTMENT_ID=departments.DEPARTMENT_ID GROUP BY departments.DEPARTMENT_NAME";
			if($result = $db->query($sql)){
				if($result->num_rows){
					while($row = $result->fetch_assoc()){
                        ?>
						<tr>
                            <td><?php echo $count +=1;?></td>
							<td><?=$row['DEPARTMENT_NAME']?></td>
							<td><?=$row['No_of_employees']?></td>
						<?php

						echo '</tr>';
					}
				}

			}
			?>
            </thead>
        </table>
</body>
</html>