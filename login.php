<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SM Shetty </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!--Sweet alert-->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body class="white-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <!-- <h1 class="logo-name">IN+</h1> -->
                <img src="images/smshetty.jpg">
            </div>
            <h3>Welcome to Admin Panel</h3>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="" method="POST">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username*" required="required">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password*" required="required">
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LfkY3YUAAAAABWV4csQowhkcYk6ENIGwd6tvbPN"></div>
                </div>
                <button type="submit" name="login" class="btn btn-primary block full-width m-b">Login</button>
                <a href="#"><small> Forgot password?</small></a>
            </form>
        </div>
    </div>
    <script src="js/custom.js"></script>
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
<?php 
    include 'connection.php';

    if(isValiduser())  
    { 
        redirect("index.php");
    }

    if(isset($_POST['login']))
    {   
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
        {
            $us_nm = trim(mysqli_real_escape_string($connect,$_POST['username']));
            $ps_wd = trim(mysqli_real_escape_string($connect,$_POST['password']));
            //your site secret key
            $secret = '6LfkY3YUAAAAACM6t6no2DB4uwQKMVkPSi2HHe6Y';
            //get verify response data
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success) 
            {
                if((!strlen($us_nm)>0) || (!strlen($ps_wd)>0))
                {
                    echo "<script>warning('','Please fill mandatory fields');</script>";
                }
                else
                {
                    $login_check = loginchk($us_nm,$ps_wd);
                    if($login_check==0)
                    {
                        redirect('index.php');
                    }
                    elseif($login_check==1)
                    {
                        echo "<script>warning('','Invalid UserName/ Password. Try Again');</script>";
                    }
                    elseif ($login_check==2) {
                        echo "<script>warning('','Error in updating details. Refresh and Try Again');</script>";
                    }
                    else{
                        echo "<script>warning('','Error');</script>";
                    }
                } 
            }
            else
            {
                echo "<script>warning('','Robot verification failed, please try again.');</script>";
            }
        }
        else
        {
            echo "<script>warning('','Please click on the reCAPTCHA box');</script>";
        }
    }
?>
</html>
