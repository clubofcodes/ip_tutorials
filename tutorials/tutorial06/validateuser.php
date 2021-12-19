<?php
   session_start();
   
  
   if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
   {
        $user = $_POST['uemail'];
        $pass = $_POST['password'];
   
         if($user == "User@gmail.com" && $pass == "12345678")  // username is  set to "Ank"  and Password   
            {                                   // is 1234 by default     
   
             $_SESSION['one']=$user;
             header("location:index.php");
           }
           else
           {
               echo "invalid UserName or Password";        
           }
   }
?>