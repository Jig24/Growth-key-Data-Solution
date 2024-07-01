<?php
include 'connectdb.php';
if(isset($_POST["btnsubmit"]))
{
    $uname=$_POST["username"];
    $pass=$_POST["password"];
    $query="select username from user where username=? and password=?";
    $result=$con->prepare($query);
    $result->bind_param("ss",$uname,$pass);
    $result->execute();
    $result->bind_result($name);
    $result->store_result();
    if($result->num_rows>0)
    {
        $result->fetch();
        session_start();
        $_SESSION["uname"]=$name;
        header("location: Home.php");
    }
    else
    {
        echo "<script type=text/javascript>alert('Invalid Username Or Password.');</script>";
    }
}
?>
<html>
<head>

    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        body {
  margin: 0;
  padding: 0;
  background-color: rgb(199, 195, 195);
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 80px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
    </style>
</head>

<body>
    <div id="login">
        <h3 class="text-center pt-5">Welcome To HomeBase Work</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center">Login</h3>
                            <div class="form-group">
                                <label for="username" class="">Username:</label><br>
                                <input type="text" name="username" Required id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="">Password:</label><br>
                                <input type="password" name="password" Required id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <!-- <label for="remember-me" class="text-info"><span>Remember me</span><span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input name="btnsubmit" type="submit" name="submit" class="btn btn-primary btn-md" value="Login">
                            </div>
                            <!-- <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>