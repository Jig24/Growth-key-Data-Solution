<?php
session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
if(!isset($_SESSION['loggedin'])){
    header("location: landing.php");
    exit;
}

?>

<?php 
include 'C:\xampp\htdocs\Project\Explores\dbconnect.php';
$con = getcon();
$qr = "select title, image, dis from packageinfo";
$res = mysqli_query($con,$qr);
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to Travelbuff. A blog for coding enthusiasts">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="fotter.css">
    <link rel="stylesheet" href="/Project/Explores/Explore.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <title>Travel buffs</title>
    <style>
        
        .navbar {
            padding-top: 10px;
            padding-bottom: 10px;
            font-family: Cambria;
            font-size: 20px;
        }
        .navbar-brand{
            font-size: 25px;
        }
        .head {
            padding-top: 15px;
            margin-left: 0cm;
            height: 2cm;
            background-color: rgb(67, 126, 253);
            border-radius: 1cm;
            color:white;
            font-family: Georgia;
        }

        .container{
            max-width: 1400px;
        }

        .card{
            margin-top:30px;
            border-radius: 10px;
        
        }
        .imgbox {
            width: 100%;
            height: 200px;
            border-radius: 10px;
            align-self: center;
        }

    </style>

<script>
        function check1()
        {
            var repass = /^[A_Za-z0-9._@-]{8,15}$/;
            var msg="";

            
            
            if(form1.password.value.length==0)
                msg += "Empty password ! ";
            else if (!repass.test(form1.password.value))
                msg += "invalid password  !\nPassword must have min 8 charcters and should containing uppqecase lowercase and special characters";

            if (msg != "") {
                alert(msg);
                return false;
            }
            return true;
        }

        function check2()
        {
            var repass2 = /^[A_Za-z0-9._@-]{8,15}$/;
            var msg2="";
            var pass1=form2.password2.value;
            var pass2=form2.confirmpassword.value;

            if(form2.password2.value.length==0)
                msg2 += "Empty password ! ";
            else if (!repass2.test(form2.password2.value))
                msg2 += "invalid password!"
            else if (form2.confirmpassword.value.length==0)
                msg2 += "Cofirm password is required!";
            else if (pass1 != pass2)
                msg2 += "Password doesn't match!";
            

            if (msg2 != "") {
                alert(msg2);
                return false;
            }
            return true;
        }
        


    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- <a class="navbar-brand" href="#">Travel buffs</a> -->
        <a class="navbar-brand" href="#">
        <img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo0MywidyI6MTI1MCwiZnMiOjM0LCJmZ2MiOiIjRjJGNUY5IiwiYmdjIjoiIzFCMkQ0NCIsInQiOjF9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home </a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Explore
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./Explores/Places.php">Places</a>
                        <a class="dropdown-item" href="./Explores/Beaches.php">Beaches</a>
                        <a class="dropdown-item" href="./Explores/Mountain.php">Mountains</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link active" href="Packages.php">Packages<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  " href="About.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact Us</a>
                </li>


            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form> -->
            <div class="mx-2">
                <button class="btn btn-primary"><?php echo $_SESSION['username']; ?></button>
                <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#signupModal">SignUp</button> -->
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login to Travelbuff</h5>
                </div>
                <div class="modal-body">
                    <form name="form1" action="1-resume.html">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" Required>
                        </div>
                        <div class="form-group">
                            <label >Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
        
                        <input type="submit" class="btn btn-primary" onclick="return check1();"></input>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Get an Travelbuff Account</h5>
                </div>
                <div class="modal-body">
                    <form name="form2" action="1-resume.html">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" Required>
                        </div>
                        <div class="form-group">
                            <label >Password</label>
                            <input type="password" class="form-control" name="password2">
                        </div>
                        <div class="form-group">
                            <label >Confirm Password</label>
                            <input type="password" class="form-control" name="confirmpassword">
                        </div>

                         <input type="submit" class="btn btn-primary" onclick="return check2();"></input>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="head">
        <h2 align="center">Packages</h2>
    </div>

        <div class="container">
<?php 
            if($res->num_rows>0)
            {
                while($row=$res->fetch_assoc())
                {
            ?>
        <div class="row">
            
            
            <div class="col-sm m-2">
                <div class="card" style="width: 18rem;">
                    <img class="imgbox" src="<?php echo $row["image"]; ?>" alt="Card image cap">
                        <div class="card-body">
                                <h5 class="card-title"><?php echo $row["title"]; ?></h5>
                                <hr/>
                                <p class="card-text"><?php echo $row["dis"]; ?></p>
                                    <a href="modal.php?id=<?php echo $row["title"];?>" class="btn btn-primary ">Book Now</a>
                                </div>
                        </div>
                </div>
            </div>
<?php
                }
            }
            else
            {
                echo "<h1 align='center'>No Places Found</h1>";
            }


?>
        </div>
</div>


    
    <?php require 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>