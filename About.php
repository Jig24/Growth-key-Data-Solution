<?php
session_start();
if(!isset($_SESSION['uname'])){
    header("location: index.php");
    exit;
}

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
        .imgb{
            width:120px;
            height: 35px;
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
        <img class="mx-2 imgb" src="images/Tlogo.png" alt="Lettering fonts"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul  class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="work.php">Work Load</a>
                </li>
           
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="Contact.php">Contact Us</a>
                </li>


            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form> -->
            <div class="mx-2">
                <button class="btn btn-primary"><?php echo "Hello ".$_SESSION["uname"]."!!"; ?></button>
                
            </div>
        </div>
    </nav>

    <h2 class="text-center mt-4" style=" font-family: Cambria; font-weight:bold;" >The ultimate Guide to the world's creative neighborhoods</h2>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm">
                <img src="images/download.png" class="m-3" alt="logo" style="height:15em; width:25em; border-radius:10px; "/>
            </div>
            <div class="col-sm">
                <p class="mt-3" style="line-height: 40px;"> Hi, We are <b><u>Tulip Data Solution, an ultimate guide to explore the world.</u></b><br>
                a place where you could find whatever you want. Here you could be any one and you could get anything you want. If You need a job you could just search for what kind of job in search engine and you could get more and more results.
                If you post something on a classified website there would be many responses waiting for you. Thats the advantage in this website which is highly appreciated by online users community </p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            
            <div class="col-sm">
                <h2 class="text-center m-3" style="font-family: Cambria; font-weight:bold;"> Make Money with us</h2>
                <h5 style="font-family: Cambria; font-weight:bold;" class="m-3 mt-5">Select your Suitable Job</h5>
                <p class="m-3">
                We honestly trust every task should have to be with unique identification and each work requires being an efficient and fresh. 
We are homework job search site, providing an open and inexpensive service. We speak about the projects, not about not commending. We completely dedicate ourselves in project, progressing them with affection and interest, sincerity and meaningful, essence that we trust that needed in unique procedure with effective work. 
                </p>
                
            </div>
            <div class="col-sm">
                <img src="images/about.png" class="m-3" alt="logo" style="height:15em; width:25em; border-radius:10px; "/>
            </div>
        </div>
    </div>


    <!-- <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Heading 1</h4>
                    <ul>
                        <li><a href="">item 1</a></li>
                        <li><a href="">item 2</a></li>
                        <li><a href="">item 3</a></li>
                        <li><a href="">item 4</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Heading 2</h4>
                    <ul>
                        <li><a href="">item 1</a></li>
                        <li><a href="">item 2</a></li>
                        <li><a href="">item 3</a></li>
                        <li><a href="">item 4</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Heading 3</h4>
                    <ul>
                        <li><a href="">item 1</a></li>
                        <li><a href="">item 2</a></li>
                        <li><a href="">item 3</a></li>
                        <li><a href="">item 4</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Heading 4</h4>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <p>Ⓒ copyright reserved</p>
    </footer> -->
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