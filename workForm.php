<?php
session_start();
if(!isset($_SESSION['uname'])){
    header("location: index.php");
    exit;
}

?>
<script>
    function sub()
    {
        if(ipt.value=="")
        {
            alert("Please Fill The Form First");
        }
    else
        {   
            $.ajax({
            url:"workback.php",
            type:"post",
            data:{sub:"yes"},
            success:function(response)
            { 
                alert("Form Submitted Successfully");
                fetch();    
                ipt.value=""
                ipt.focus()
            }
        });        
    }
    }
    function fetch()
    {
        $.ajax({
            url:"workback.php",
            type:"post",
            data:{fetchwork:"yes"},
            success:function(response)
            { 
                arr=$.parseJSON(response);
                if(arr['msg'])
                {
                    alert("Congragulations! Work Completed Successfully!!!Will be Check by administrator Soon..")
                location.href="work.php";
                }
                else
                {
                cont.innerHTML=arr['cont'];
                }
            }
        });
    }
</script>
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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <title>Online Best Job</title>
<script>
     $('body').bind('copy',function(e) { e.preventDefault(); return false; });
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&display=swap');
</style>
    <style>
      @media screen and (max-width:600px) {
 			.mdiv
			{
				display: flex;
				flex-direction: column;
				align-content: center;
				align-self: center;
				align-items: center;
				
			}
}
.mydiv
			{
				width: 180px;
				height: 180px;
				background-color: white;
				border-radius:100px; 
				padding: 20px;
				margin: 10px;
				align-content: center;
				align-self: center;
				align-items: center;
			}
			div.polaroid {
  box-shadow: 0 12px 23px 0 rgba( 0, 0,230,0.8), 0 6px 20px 0 rgba( 0, 0,230, 0.19);
  text-align: center;
  cursor: pointer;
}
.p1
{
	font-family: "Lucida Console", "Courier New", monospace;

}

@media screen and (max-width:600px) {
 			.mdiv
			{
				display: flex;
				flex-direction: column;
				align-content: center;
				align-self: center;
				align-items: center;
				
			}
}
      .pop-outin {
  animation: 2s anim-popoutin ease ;
}

@keyframes anim-popoutin {
  0% {
    color: black;
    transform: scale(0);
    opacity: 0;
    text-shadow: 0 0 0 rgba(0, 0, 0, 0);
  }
  25% {
    color: red;
    transform: scale(2);
    opacity: 1;
    text-shadow: 3px 10px 5px rgba(0, 0, 0, 0.5);
  }
  50% {
    color: black;
    transform: scale(1);
    opacity: 1;
    text-shadow: 1px 0 0 rgba(0, 0, 0, 0);
  }
  100% {
    /* animate nothing to add pause at the end of animation */
    transform: scale(1);
    opacity: 1;
    text-shadow: 1px 0 0 rgba(0, 0, 0, 0);
  }
}

.fromtop {
  animation: 2s anim-fromtop linear;
}
@keyframes anim-fromtop {
  0% { opacity: 0; transform: translateY(-100%);}
  25% { opacity: 1; transform: translateY(0%);}
  50% {
  }
  100% {
  }
}
      #myimg{
    -webkit-animation: mover 10s   alternate;
    animation: mover 10s   alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
        .navbar {
            padding-top: 10px;
            padding-bottom: 10px;
            font-family: Cambria;
            font-size: 18px;
        }
        .navbar-brand{
            font-size: 25px;
        }   

        .text{
            margin-top:20px;
            font-family: Cambria;
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
        .list{
            min-width: 870px;
        }

        .container{
            max-width: 1400px;
        }

        .imgb{
            width:120px;
            height: 35px;
        }

    </style>

<script>
      
    </script>
</head>
<!-- <a href="https://www.fontspace.com/category/lettering"><img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo3MSwidyI6MTI1MCwiZnMiOjU3LCJmZ2MiOiIjRTlGNUZEIiwiYmdjIjoiIzE2Mjk0MiIsInQiOjF9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a>
        <a href="https://www.fontspace.com/category/lettering"><img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo3MSwidyI6MTI1MCwiZnMiOjU3LCJmZ2MiOiIjRkZGRkZGIiwiYmdjIjoiIzE2Mjk0MiJ9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a> -->
<body onload="fetch();" onselectstart="return false">
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
    <div class="container">
        <br><br>
    <div class="col-md-12">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static" >
                  <h4 id="cont" style=" font-weight: thicker;font-style:italic;font-family: 'Sofia', sans-serif;" class="mb-0 font-effect-emboss" style="width:10em">I'm a student. I'm very thankful to the smart work team that I found my dream job. Here I do some work in my free time and take out the whole expense of my institute.

 </h4>      
                </div>
              </div>
            </div>
            <label for="ipt">Fill Form(Fill Correctly the Above Details):</label>
            <textarea onpaste="return false;" required  class="col-md-12" placeholder="Fill Correctly the Above Details" name="ipt" id="ipt" cols="30" rows="10"></textarea>
            <button id="btnsubmit" onclick="sub();" class="btn btn-primary">Submit</button>
    </div>
    
    <?php require 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script type="text/javascript">
											function gettime()
											{
												var d=new Date();
												p1.innerHTML=d.toString().substring(0,24);
												setTimeout("gettime();",1000);
											}
											gettime();
										</script>
										

										
</body>

</html>