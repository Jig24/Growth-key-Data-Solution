<?php
session_start();
if(!isset($_SESSION['uname'])){
    header("location: index.php");
    exit;
}

?>
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


    <title>Online Best Job</title>
    
    <style>
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
        .textbtn{
            animation: slide_up 2.4s ease;
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
        .mainimg{
            width: 100%;
            
        }
        .textcon{
            
            text-align: center;
            position: absolute;
            top: 40%;
            left: 13%;
            color: white;
            width: 75%;
            
            padding: 2px;
            
            
        }
        .imgtext{
            animation: slide_up 1.4s ease;
            margin-top: 4px;
        }
        .smalltext{
            animation: slide_up 1.8s ease;
            margin-top: 4px;
            margin-bottom: 20px;
        }

        .container{
            position: relative;
        }
        
        .imgbox{
          background: url("https://t4.ftcdn.net/jpg/03/84/55/29/360_F_384552930_zPoe9zgmCF7qgt8fqSedcyJ6C6Ye3dFs.jpg") no-repeat fixed;
        background-size: cover;
        height: 100%;
        width: 100%;
        position: relative;
        }
        .overlay{
          height: 100%;
          width: 102%;
        background-color: rgb(50,70,80,0.7);
        animation: 1.4s fadein ease;

        }
        @keyframes slide_up {
            0%{
                transform: translateY(100px);
            }
            100%{
                transform: translateY(0);
            }
            
        }

        @keyframes fadein{
            0%{
                opacity: 0;
            }
            100%{
                opacity: 1;

            }
        }
        @media only screen and (max-width: 600px) {

            .textcon{
              top: 6%;
            }
        }
    </style>

<script>
      
    </script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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


    <hr/>
    <div class="container imgbox">
      <div class="overlay">
        <br> 
<marquee id="marqueeID" direction"right"
            behavior="slide" loop="10" bgcolor="white">
            Opportunity Don't Happened, You Create Them </marquee>
        </br>
        <div class="textcon">
            <div class="imgtext">
                <h2>Welcome to Tulip Data Solutions.</h2>
            </div>
            <div class="smalltext">
                <h3>Here we are giving you opportunity to find jobs without Investment</h3>
            </div>
            <div class="textbtn">
              <h2 align="center" style="color:blue;font-weight:bold;"><button onclick="location.href='work.php';" class="btn btn-primary">Get Started</button></h2>    
            </div>
    
        </div>
        </div>
    </div>
    <hr/>
    
    <div class="text">
        <h2 align="center" style="color:green;font-weight:bold;">Welcome to India Biggest HomeBaseWork</h2>
        
    </div>
    <div class="container">
    <h5>In our platform, your work is very easy. It’s completely online and digital. Just you need to do simple form filling work. So, there is no confusion to join, every individual can join and earn a huge amount of money.</h5>
    </div>
       
    
    <div align="center" class="text">
        <img src="images/formfill.png" alt="dddd"></img>
        
    </div>
    <div class="container">
         <p><h5> Are you students, freshers, or housewives who are Looking for genuine and simple online data entry typing work from home? Do you want to earn money online by typing some data or words? Then you've come to the right platform. tulipdatasolutions.in is 100% real.</p></h5>
    <h5>The internet online form filling jobs is out of the easiest work from home jobs, one could have joined even today. The online form filling jobs the name informs you need to purely fill the internet forms with necessary details provided to you ✅. And this part time online home based work from home jobs you can do any time. Present-day online is the broad market for clients. Every day millions of visitors visit the websites and fill various types of forms like subscription forms, job forms and more.</h5>
    </div>
        <div class="text">
        <h2 align="center" style="color:green;font-weight:bold;">What is the particular usage of this form filling Jobs work?</h2>
    </div>
    <div class="container">
    <h5><p> As of today on the online there are millions of websites, and every site is fighting the completion to place at the top. For instance, if you are running a website on music CDs and want to be in front of the search engine you need to hit the competitor sites. For this, the webmaster is playing revenue like anything to get the first placement.</p>

       <li>We take care of all these home jobs from clients. Every day we receive a minimum of one thousand and five hundred plus applications all these requests from clients and at least five hundred and more offline or online form filling jobs for their hosted websites. </li>
</h5></div>
<br>
 <div class="container" background="blue">
       
      <h5><li>Thankyou for trusting us we activate your plan and start your work within 24 hours. Whether you are students, freshers, housewives or job-seeker, we provide online typing jobs to everyone irrespective of their social background, educational qualification, age, and gender.
       We have given an opportunity to millions of Indian to work from home during this time of the rising pandemic.</li>
       
     <li> Earning 18,000 to 30,000 weekly from home is no more a dream but a new reality in this post-COVID 19 world Tulip Data Solution allow everyone in this country to work online from home as a data entry worker and earn well over 30,000₹ weekly consistently month after month. </h5></li>
</div>
</br>
<div class="container" style="background:lime;" class="container-fluid">
</br>

<br>
<b><h5>When we entered into this home base work offer</b>
there were many companies doing the same business. When people found us, they understood we are only providing the genuine works ( online typing, offline typing jobs, copy-pasting jobs, form filling jobs, social media facebook jobs work at home, typist jobs from home, data entry jobs from home without registration fee or computer home based jobs) continuously to the workers, and the workers are earning good money with these work from home jobs. These are like dream home based work and these work from home jobs easy to do and you need very less time for that. We give only the best job options to our visitors for all types of part time jobs or all online jobs. On our website, you can search for part time jobs near me or work from home jobs or part time jobs for getting accurate results.</h5>
</br>

<br><h5>
The other companies, which are offering a similar home based job and
paying, low, and if a worker is missing his payment it is not possible for him to get his salary even after a year. At the starting of the company, we stayed behind, our hard work, and our customers who are working for us in their home worked hard to bring our company to stay in the number one position now.</h5>
</br>
</div>

<br>
<div class="container" style="bakcground:red;">
   <strong><h5> We are ISO (International Organization for Standardization) Certified company and provides 100% genuine data entry work from home where You can make a decent amount of money online by doing simple online typing work from home on your mobile phone. Earn up to 18,000 to 30,000 monthly. Register now free of cost and start your work within 24 hours.</h5></strong>
</div>
</br>
<br>
<div class="container">
<h5><strong> <br><li>GET YOUR JOINING LETTER IN JUST 5 MIN</br>
<li>NO QUALIFICATION NEED</li>
<li>TYPE IN YOUR SMARTPHONE</li>
<li>WORK FROM HOME</li>
<li>100% TRUSTED</li>
</br>
</br>
</h5>
<img class="bd-placeholder-img" width="210" height="220" src="images/iso.png" alt="">

    <div  class="container my-4">
        <div class="row mb-2">
            <div  class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0 d-inline-block mb-2 text-primary"><strong><font color="green"> Why Home Based Jobs</font></strong></h3>
                  <p class="card-text mb-auto"><b><li>No Any Target</li> 
                  <li>No Any Investment</li> 
                  <li>No Any Age Limits</li> 
                  <li>No Qualification Required</li> 
                  <li>No Registration Fees Or Investment</li> 
                  <li>No Time Periods</li> 
                  <li>No Need To Pay Training Fee</li> </b>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="150" height="220" src="images/writing-jobs.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0 d-inline-block mb-2 text-primary"><strong><font color="green"> Work From Home Jobs Benefits</font></strong></h3>
                  <p class="card-text mb-auto"><b><li> 100% Genuine Work</li>
                  <li>Work Any Time</li>
                  <li>Work Anywhere</li>
                  <li>100% Payment Guaranty</li>
                  <li>Lifetime Free Membership</li>
                  <li>100% Legitimate Work</li></b>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="230" height="220" src="images/BG.jpg" alt="">
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0 d-inline-block mb-2 text-primary"><strong><font color="green">Payments</font></strong></h3>
                  <h5 class="mb-0">After Complete the work, your balance will be updated instantly and you get your payout in your bank, G Pay, phone Pe, Paytm & wallet.</h5>
                 
                  
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="160" height="220" src="images/payment.png" alt="">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0 d-inline-block mb-2 text-primary"><strong><font color="green">Help & Support</font></strong></h3>
                  <h5 class="mb-0">If you have any query, you can drop your call & message. Our Team solve your Problem instantly. </h5>
                  
                  
                  
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="220" src="images/help.jpg" alt="">
                </div>
              </div>
            </div>
    </div>
    <div class="text">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
<br>

</style>
    <table>
  <tr>
    <th>Name</th>
    <th>City</th>
    <th>Mobile</th>
    <th>Amount</th>
  </tr>
  <tr>
    <td>Asher Mohammad</td>
    <td>Muzaffarpur</td>
    <td>85******40</td>
    <td>Rs.10,594.00</td>
  </tr>
  <tr>
    <td>Afzal Ahmad</td>
    <td>Veraval</td>
    <td>98******17</td>
    <td>Rs.17,500.00</td>
  </tr>
  <tr>
    <td>Akash Sharma</td>
    <td>Agra</td>
    <td>94******58</td>
    <td>Rs.18,000.00</td>
  </tr>
  <tr>
    <td>
    akshay Amrule</td>
    <td>Pune</td>
    <td>97******62</td>
    <td>Rs.12,054.00</td>
  </tr>
  <tr>
    <td>Anjali Kashyap</td>
    <td>Madhya Pradesh</td>
    <td>80******74</td>
    <td>Rs.17,500.00</td>
  </tr>
  <tr>
    <td>Anshu Soni</td>
    <td>Gujarat</td>
    <td>95******23</td>
    <td>Rs.18,000.00</td>
  </tr>
</table>
        <h1 align="center" style="color:green;font-weight:bold;">What People Say?</h1>
        
    </div>
    
    
    
    <div class="container">
    <div class="col-md-12">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary"><font color="green">	
Richa Sharma(Mumbai)</font></strong>
                  <h5 class="mb-0"><font color="black">This is Best website I Visited Gives Money on time and Value our Work,I Joined many money making website, they are also cheat me. But right now I join Here , this company give me work and money also.</font>
 </h5>
                  
                  
                  
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="150" height="220" src="images/p1.png" alt="">
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">	<font color="green">
Abhishek Reddy(Hyderabad)</font></strong>
                  <h5 class="mb-0"><font color="black">Most of the website are fake, just wastage my money. But This company really very helpful and also giving work.
 Best Place I Found In India For Online Form Filling. I earn In Dollar and Buy my Own Car and House .My Parents Proud Of Me.</font></h5>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="150" height="220" src="images/P2.png" alt="">
                </div>
              </div>
            </div>
    

            <div class="col-md-12">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary"><font color="green">	
Monil Gandhi(Noida)</font></strong>
                  <h5 class="mb-0"><font color="black">I'm a student. I'm very thankful to the smart work team that I found my dream job. Here I do some work in my free time and take out the whole expense of my institute.</font>

 </h5>
                  
                  
                  
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="150" height="220" src="images/p3.png" alt="">
                </div>
              </div>
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