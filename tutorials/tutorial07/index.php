<!DOCTYPE html>
<html>

<head>
    <title>Login System</title>
    <link rel="icon" href="icon.PNG" type="image/x-icon">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/bootstrap.min2.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="padding-top: 30px;padding-bottom: 30px">
    <div class="sap_tabs">
        <div id="horizontalTab" class="resp-tab-active head pb-2" style="display: block; width: 100%; margin: 0px;">
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
                        <form name="login" action="result.php" method="post" id="login">
                            <label>Username or Email</label>
                            <input type="text" class="text" name="username" id="username" value="<?php if (isset($_COOKIE["username"])) {
                                                                                                        echo $_COOKIE["username"];
                                                                                                    } ?>" placeholder="Enter your registered email(User@gmail.com)" required><a href="#" class=" icon email"></a>
                            <span class="hidden"></span>
                            <label>Password</label>
                            <input type="password" value="<?php if (isset($_COOKIE["password"])) {
                                                                echo $_COOKIE["password"];
                                                            } ?>" name="password" id="password" placeholder="Enter valid password (1to8)"><a href="#" class=" icon lock"></a>
                            <span class="hidden"></span>
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" name="ck" id="ck" checked />
                                <label class="custom-control-label" for="ck">Remember Me</label>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <a class="btn btn-danger" onclick="window.location.href='#';">Not a user? Register from here</a>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit" class="btn btn-danger" name="login" value="LOG IN" id="login1">Login</button> </button>
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