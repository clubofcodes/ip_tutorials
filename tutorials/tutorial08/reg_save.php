<?php 
	session_start();
    require "db/connect.php";
    echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
    echo "</pre>";
    $userid=session_id();
    $image=$_FILES['imagefile'];
    //echo $image['name'];

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

    $upload_dir ="uploads/img/";
    $upload_filename =$userid."_".basename($image['name']);
    $target_file = $upload_dir.$upload_filename;
    echo $target_file;
    
    if($image['size'] > (1024*1024*5)){
        echo "File size is more then 5MB";
    }else{
        if(move_uploaded_file($image["tmp_name"],$target_file)){
            echo "</br>The file ".$upload_filename." has been uploaded.";
        }else{
            echo "Sorry,there was an error uploading your file.";
        }
    }
    
    
    $sql="";
	if(isset($id) && $id!=""){
        $sql = "UPDATE `registration` SET Name='$Name',UsernameEmail='$Uemail',Password='$pass',MobileNumber=$m_no,Birthdate='$dob',Country='$country', State='$state', City='$city',Image='$target_file',Note='$note' WHERE ID=$id";
        // echo $sql;
	}else{
		$sql= "INSERT INTO registration(`ID`, `Name`, `UsernameEmail`, `Password`, `MobileNumber`, `Birthdate`, `Country`, `State`, `City`, `Image`, `Note`) VALUES ('','$Name','$Uemail','$pass','$m_no','$dob','$country','$state','$city','$target_file','$note')";
    }
    $data=$db->query($sql);
	header("location:index.php");
?>