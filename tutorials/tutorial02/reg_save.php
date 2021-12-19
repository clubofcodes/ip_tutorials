<?php 
	session_start();
	require "db/connect.php";

    $Name = $_POST['Name'];
   	$Uemail = $_POST['email'];
    $pass = $_POST['password'];
    $m_no = $_POST['phone'];
    $dob = $_POST['dob'];
    $country = $_POST["con"];
    $state = $_POST['State'];
    $city = $_POST['City'];
    $note = $_POST['note'];
    $id = $_POST['id'];
    
    $sql="";
	if(isset($id) && $id!=""){
        $sql = "UPDATE `registration` SET Name='$Name',UsernameEmail='$Uemail',Password='$pass',MobileNumber=$m_no,Birthdate='$dob',Country='$country', State='$state', City='$city',Note='$note' WHERE ID=$id";
        // echo $sql;
	}else{
		$sql= "INSERT INTO registration(`ID`, `Name`, `UsernameEmail`, `Password`, `MobileNumber`, `Birthdate`, `Country`, `State`, `City`, `Image`, `Note`) VALUES ('','$Name','$Uemail','$pass','$m_no','$dob','$country','$state','$city','','$note')";
    }
    $data=$db->query($sql);
	header("location:index.php");
?>