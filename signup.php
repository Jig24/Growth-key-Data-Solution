<?php
// if($_SERVER["REQUEST_METHOD"]=="POST")
if(isset($_POST['btnsubmit']))
{
  include 'connectdb.php';
  $mail = $_POST['mail'];
  $pass  = $_POST['pass'];
  $cpass = $_POST['cpass'];
  if(($pass == $cpass))
  {
    $qr="INSERT INTO `signup`(`email`, `password`, `confirmPassword`) VALUES ('$mail','$pass','$cpass')";
    $res = mysqli_query($dbconn,$qr);
    if(!$res)
    {
      echo "<br>Invalid entry".mysqli_connect_error();
    }
    else
    {
      header("location: logint.php");
    }
  }
  else 
  {
    echo "<br>passwords don't match";
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>travelBuffs</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<script>
  
</script>
<style>
  body{
            background-repeat: no-repeat;
            background-size: cover;
            /* backdrop-filter: blur(5px); */
        }
        .cont{
        backdrop-filter: blur(15px);
        width: 90%;
        margin: 0 auto;
        border: 2px solid black;
        height: 595px;
    }
</style>
<body background="https://img1.goodfon.com/wallpaper/nbig/3/40/kompas-compass-mehanizm.jpg">
  <div class="mt-5 cont">
  <center><h1 style="margin: 30px;">Signup to Travel Buffs</h1></center>
  <div class="container my-4" style="margin-top: 55px;">
<form action="<?php $_PHP_SELF ?>" method="post">

  <div class="form-group ">
    <label for="mail"> <b> Email address</b></label>
    <input type="email" class="form-control " id="mail" name="mail" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
  <div class="form-group ">
    <label for="pass"><b>Password</b></label>
    <input type="password" class="form-control  " id="pass" name="pass" placeholder="Password">
  </div>
  <div class="form-group ">
    <label for="cpass"><b>Confirm Password</b></label>
    <input type="password" class="form-control  " id="cpass" name="cpass" placeholder="Confirm Password">
  </div>
  
  <input type="submit" class="btn btn-primary" name="btnsubmit" onclick="return validate()" />
  <!-- <button type="submit" name="btnsubmit" class="btn btn-primary" onclick="validate()">Submit</button> -->
  <div  class="container my-4">
        <center><h3 style="color: white;">Already have an account then : <a href="logint.php" class="btn btn-primary">Login</a></h4></h3></center>  

    </div>
</form>
</div>
</div>
<script>
        function validate()
        {
          var regex = /^[A_Za-z0-9._@-]{8,15}$/;
          let pass=document.getElementByID('pass').value;
          if(!regex.test(pass))
          {
            //Password must have atleast one special character , one number, one small and capital alphabet and should be of minimum 6 length
            alert("Password must satisfy its conditions");
            return false;
          }
            return true;
         
        }
    </script>
</body>
</html>