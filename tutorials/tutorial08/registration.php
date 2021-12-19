<?php
	// error_reporting(0);
	require 'db/connect.php';
    $id = isset($_GET['id'])?$_GET['id']:"";
    $Name="";
    $email="";
    $pwd="";
    $pwd2="";
    $phone="";
    $dob="";
    $cont="";
    $state="";
    $city="";
    $file1="Choose File";
    $note="";
    if($id!="")
    {
        $sql = "SELECT * FROM `registration` WHERE ID=$id"; 
        $result = $db->query($sql);
        
        if($result->num_rows)
        {
            $row = $result->fetch_assoc();
            $Name=$row['Name'];
            $email=$row['UsernameEmail'];
            $pwd=$row['Password'];
            $pwd2=$row['Password'];
            $phone=$row['MobileNumber'];
            $state=$row['State'];
            $city=$row['City'];
            $dob=$row['Birthdate'];
            $cont = $row['Country'];
            $image=$row['Image'];
            $file1=basename($image);
            //echo $file1;
            // print_r(explode('_',$image,3));
            $note=$row['Note'];
            // print_r ($row);
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register here!!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="icon2.PNG" type="image/x-icon">
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <link href="css/animation.css" rel='stylesheet' type='text/css' />
    </head>
    <body class="bg-dark">
        <div class="container text-white head pt-2 pb-2">
            <form name="registration" id="registration" method="post" action="reg_save.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['ID'];?>"/>
            <fieldset>
                <legend align="center">Registration Form</legend>
                <div class="form-group">
                    <label>Name:<span class="required">*</span></label>
                    <input type="text" class="form-control" id="name" value="<?php echo $Name;?>" placeholder="Enter Name" name="Name" />
                    <span class="hidden" id="n"></span>
                </div>
                <div class="form-group">
                    <label>Username/Email: <span class="required">*</span></label>
                    <input type="email" class="form-control" id="uname" value="<?=$email?>" placeholder="Enter Username or email address" name="email">
                    <span class="hidden" id="usererr"></span>
                </div>
                <div class="form-group">
                    <label>Password: <span class="required">*</span></label>
                    <input type="password" class="form-control" id="pwd" value="<?=$pwd?>" placeholder="Enter password" name="password" />
                    <span class="hidden" id="pwderr"></span>
                </div>
                <div class="form-group">
                    <label>Confirm Password: <span class="required">*</span></label>
                    <input type="password" class="form-control" id="cpwd" value="<?=$pwd?>" placeholder="Retype Your Password" name="password2">
                    <span class="hidden" id="repwderr" ></span>
                </div>
                <div class="form-group">
                    <label>Mobile Number: <span class="required">*</span></label>
                    <input type="number" class="form-control" value="<?=$phone?>" id="phone" placeholder="Enter Your Mobile Number" name="phone">
                    <span class="hidden" id="moberr"></span>
                </div>
                <div class="form-group">
                    <label>Birth date:<span class="required">*</span></label>
                    <input type="date" class="form-control" value="<?=$dob;?>" id="dob" placeholder="Enter birthdate" name="dob">
                </div>
                <div class="form-group">
                    <label>Country:</label>
                    <select class="form-control" id="country" name="con">
                        <option selected>Select Your Country....</option>
                        <option value="Australia" <?php if($cont=="Australia")echo "selected";?>>Australia</option>
                        <option value="Brazil" <?php if($cont=="Brazil")echo "selected";?>>Brazil</option>
                        <option value="Canada" <?php if($cont=="Canada")echo "selected";?>>Canada</option>
                        <option value="Egypt" <?php if($cont=="Egypt")echo "selected";?>>Egypt</option>
                        <option value="France" <?php if($cont=="France")echo "selected";?>>France</option>
                        <option value="Greenland (Denmark)" <?php if($cont=="Greenland (Denmark)")echo "selected";?>>Greenland (Denmark)</option>
                        <option value="India" <?php if($cont=="India")echo "selected";?>>India</option>
                        <option value="Kazakhstan" <?php if($cont=="Kazakhstan")echo "selected";?>>Kazakhstan</option>
                        <option value="Russia" <?php if($cont=="Russia")echo "selected";?>>Russia</option>
                        <option value="United States of America" <?php if($cont=="United States of America")echo "selected";?>>United States of America</option>
                        <option value="United Kingdom" <?php if($cont=="United Kingdom")echo "selected";?>>United Kingdom</option>
                    </select>
                    <span class="hidden" id="con"></span>
                </div>
                <div class="form-group">
                    <label>State:</label>
                    <input type="text" class="form-control" id="State" placeholder="Enter state" name="State" value="<?=$state;?>">
                </div>
                <div class="form-group">
                    <label>City:</label>
                    <input type="text" class="form-control" id="City" placeholder="Enter city" name="City" value="<?=$city;?>">
                </div>
                <div class="form-group">
                    <label>Image:<span class="required">*</span></label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="customFile"><?=$file1;?></label>
                        <input type="file" class="custom-file-input" id="image" placeholder="Select Image" name="imagefile" />
                        <span class="hidden" id="imgerr"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Note:</label>
                    <textarea class="form-control" id="note" placeholder="Enter Description Here...." name="note" ><?=$note;?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" id="btnsignup" name="btn" onclick="submitForm();" >Submit</button>
                <button type="reset" class="btn btn-danger" id="reset" name="reset">Reset</button>
            </fieldset>
        </form>
    </div>
</body>
</html>
<!-- Java Script -->
<script src="js/jquery.min.js"></script>
<script src="js/validation.js"></script>
<!-- Java Script -->