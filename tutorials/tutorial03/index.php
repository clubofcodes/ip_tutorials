<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register here!!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="icon.PNG" type="image/x-icon">
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <link href="css/my.css" rel='stylesheet' type='text/css' />
    </head>
    <body class="bg-dark">
        <div class="container text-white head pt-2 pb-3">
            <form name="registration" id="registration" method="post" action="" enctype="multipart/form-data">
            <fieldset>
                <!-- <span class="hidden" id="status"></span> -->
                <legend align="center">Registration Form</legend>
                <div class="form-group">
                    <label>Name:<span class="required">*</span></label>
                    <input type="text" class="form-control" id="name" value="" placeholder="Enter Name" name="name" />
                    <span class="hidden" id="n"></span>
                </div>
                <div class="form-group">
                    <label>Username/Email: <span class="required">*</span></label>
                    <input type="email" class="form-control" id="uname" value="" placeholder="Enter Username or email address" name="email">
                    <span class="hidden" id="usererr"></span>
                </div>
                <div class="form-group">
                    <label>Password: <span class="required">*</span></label>
                    <input type="password" class="form-control" id="pwd" value="" placeholder="Enter password" name="password" />
                    <span class="hidden" id="pwderr"></span>
                </div>
                <div class="form-group">
                    <label>Confirm Password: <span class="required">*</span></label>
                    <input type="password" class="form-control" id="cpwd" value="" placeholder="Retype Your Password" name="cpwd">
                    <span class="hidden" id="repwderr" ></span>
                </div>
                <div class="form-group">
                    <label>Mobile Number: <span class="required">*</span></label>
                    <input type="number" class="form-control" value="" id="phone" placeholder="Enter Your Mobile Number" name="phone">
                    <span class="hidden" id="moberr"></span>
                </div>
                <div class="form-group">
                    <label>Birth date:<span class="required">*</span></label>
                    <input type="date" class="form-control" id="inputBirth" placeholder="Enter birthdate" name="bdate">
                </div>
                <div class="form-group">
                    <label>Country:</label>
                    <select class="form-control" id="country">
                        <option selected>Select Your Country....</option>
                        <option>Australia</option>
                        <option>Brazil</option>
                        <option>Canada</option>
                        <option>Egypt</option>
                        <option>France</option>
                        <option>Greenland (Denmark)</option>
                        <option>India</option>
                        <option>Kazakhstan</option>
                        <option>Russia</option>
                        <option>United States of America</option>
                        <option>United Kingdom</option>
                    </select>
                    <span class="hidden" id="con"></span>
                </div>
                <div class="form-group">
                    <label>State:</label>
                    <input type="text" class="form-control" id="inputState" placeholder="Enter state" name="state">
                </div>
                <div class="form-group">
                    <label>City:</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Enter city" name="city">
                </div>
                <div class="form-group">
                    <label>Image:<span class="required">*</span></label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <input type="file" class="custom-file-input" id="image" placeholder="Select Image" name="image">
                        <span class="hidden" id="imgerr"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Note:</label>
                    <textarea class="form-control" id="note" placeholder="Enter Description Here...." name="note"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" id="btnsignup">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </fieldset>
        </form>
    </div>
</body>
</html>
<!-- Java Script -->
<script src="js/jquery.min.js"></script>
<script src="js/validation.js"></script>
<!-- Java Script -->