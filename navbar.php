<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Buffs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

        <style>
        .navbar {
            padding-top: 10px;
            padding-bottom: 10px;
            font-family: Cambria;
            font-size: 18px;
        }
        .navbar-brand{
            font-size: 25px;
        }
</style>

    </head>
<body>

<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo0MywidyI6MTI1MCwiZnMiOjM0LCJmZ2MiOiIjRjJGNUY5IiwiYmdjIjoiIzFCMkQ0NCIsInQiOjF9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a>
        <!-- <a href="https://www.fontspace.com/category/lettering"><img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo3MSwidyI6MTI1MCwiZnMiOjU3LCJmZ2MiOiIjODhCN0RCIiwiYmdjIjoiIzE2Mjk0MiIsInQiOjF9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
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
                    <a class="nav-link " href="Packages.php">Packages</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact Us</a>
                </li>
            </ul>
            
            <!-- <div class="mx-2">
            <a href="login.php"><button class="btn btn-primary"> Login/Sign up </button></a>
                
            </div> -->
            <?php
                session_start();

                // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
                if(!isset($_SESSION['loggedin'])){
                    header("location: logint.php");
                    exit;
                }
                else 
                {
                    echo '<div class="mx-2">
                    <a href="login.php"><button class="btn btn-primary">'.$_SESSION["username"].'</button></a>
                        
                    </div>';
                }
?>
        </div>
    </nav>

    
</body>
</html>