<!DOCTYPE html>
<html>

<head>
    <title>Login System</title>
    <link rel="icon" href="icon.PNG" type="image/x-icon">
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
                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">
                    <div class="topimg"><img src="images/top-lock.png" alt="" /></div>
                    <span>Login Form</span>
                </li>
                <div class="clear"></div>
            </ul>
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                <div class="facts">
                    <div class="login register">
                        <div class="buttons">
                        </div>
                        <form name="login" action="" method="post">
                            <p>Username or Email</p>
                            <input type="text" class="text" name="uemail" value=""
                                placeholder="Enter your registered email"><a href="#" class=" icon email"></a>
                            <p>Password</p>
                            <input type="password" value="" name="password" placeholder="Enter valid password"><a
                                href="#" class=" icon lock"></a>
                            <div class="p-container">
                                <div class="sign-up">
                                    <div class="submit two">
                                    <input type="submit" name="login" value="LOG IN" id="login">
                                    </div>
                                    <div>
                                        <a class="btn btn-primary" onclick="window.location.href='registration.php';">Not a user? Register from here</a>                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>