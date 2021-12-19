<!DOCTYPE html>
<html>

<head>
    <title>Register here!!</title>
    <link rel="icon" href="icon2.PNG" type="image/x-icon">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.min.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default',
            width: 'auto',
            fit: true
        });
    });
    </script>
    <link href="fonts/font.css" rel='stylesheet' type='text/css' />
</head>

<body style="padding-top: 30px;padding-bottom: 30px">
    <div class="sap_tabs">
        <div id="horizontalTab" class="head" style="display: block; width: 100%; margin: 0px;">
            <ul class="resp-tabs-list">
                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab">
                    <div class="top-img"><img src="images/top-note.png" alt="" /></div>
                    Registration Form
                </li>
                <div class="clear"></div>
            </ul>

            <div class="resp-tabs-container">
                <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-0">
                    <div class="facts">
                        <div class="register">
                            <form name="registration" method="post" action="" enctype="multipart/form-data">
                                <p>Name:</p>
                                <input type="text" class="text" value="" placeholder="Enter Name" name="fname" required>
                                <p>Username/Email:</p>
                                <input type="email" class="text" value="" placeholder="Enter Email" name="lname"
                                    required>
                                <p>Password:</p>
                                <input type="password" class="text" value="" placeholder="Enter password" name="email">
                                <p>Confirm Password:</p>
                                <input type="password" value="" placeholder="Retype Your Password" name="password"
                                    required>
                                <p>Age:</p>
                                <input type="number" value="" placeholder="Enter age" name="contact" required>
                                <p>Birth date:</p>
                                <input type="date" class="text" id="bdate" placeholder="Enter birthdate" name="bdate">
                                <p>Country:</p>
                                <select type="s">
                                    <option selected>Select Your Country</option>
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
                                <p>State:</p>
                                <input type="text" id="state" placeholder="Enter state" name="state">
                                <p>City:</p>
                                <input type="text" id="city" placeholder="Enter city" name="city">
                                <p>Image:</p>
                                <input type="file" id="image" placeholder="Select Image" name="image">
                                <p>Note:</p>
                                <textarea type=ta id="note" placeholder="Enter Description" name="note"></textarea>
                                <div class="sign-up">
                                    <input type="reset" value="Reset">
                                    <input type="submit" name="signup" value="Sign Up">
                                    <div class="clear"> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>