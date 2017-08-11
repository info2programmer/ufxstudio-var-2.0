<!DOCTYPE html>
<html lang="en">
<?php
require_once ('lib/db_config.php');
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ufx Studio -  Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    body {
        background-color: #999999;
        background-image-opacity:0.5; 
    }
        .login-panel {
            margin-top: 33%;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <?php if(isset($_GET['status'])) 
            {
                echo"<div class='alert alert-danger'>
                    <strong>Error! </strong> Enter Valid Username And Password!
                  </div>";
               echo "<div class='login-panel panel panel-default animated  rubberBand'>";
            }
            else
            {
                echo "<div class='login-panel panel panel-default'>";
            }
            ?>
                
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form action="login.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                

                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
if(isset($_POST['submit']))
{
    global $con;
    $username=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    $sql="SELECT * FROM `tbl_login` WHERE `username`='".$username."' AND `password`='".md5($password)."' ";
    $result=$con->query($sql);

    if($result->num_rows==1)
    {
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['AdminUser']=$row['username'];
        header('Location:index.php');
    }
    else
    {
        header('Location:login.php?status=error');
    }

    //echo $username;
   // echo $password;
}

?>


</body>

</html>
