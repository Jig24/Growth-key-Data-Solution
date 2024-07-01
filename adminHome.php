<?php
session_start();
if(!isset($_SESSION["auname"]))
{
    header("location:admin.php");
}
?>
<script>
    function addemp(e,id)
    {
       if(e=="")
       {
           alert("enter Proper Employee Name...");
       }
       else
       {
           emp=e;
        $.ajax({
            url:"adminback.php",
            type:"post",
            data:{addemp:"yes",uid:id,empname:emp},
            success:function(response)
            {
              var arr=$.parseJSON(response);
              alert(arr['msg']);
                fetchuser();
            }
        });
       }
        }
    function deleteuser(id)
    {
        ans = confirm("Do you want to Delete this User?");
        if(ans==true)
        {
        $.ajax({
            url:"adminback.php",
            type:"post",
            data:{deleteuser:"yes",uid:id},
            success:function(response)
            {
              var arr=$.parseJSON(response);
              alert(arr['msg']);
                fetchuser();
            }
        });
        }
        else
        {
            return false;
        }
    }
    
function fetchuser()
{
    $.ajax({
            url:"adminback.php",
            type:"post",
            data:{fetchuser:"yes"},
            success:function(response)
            {
                var arr=$.parseJSON(response);
                
                if(arr["msg"]=="success")
                {
                    
                    mytab.innerHTML=arr["table"];  
                    
                     
                }
                else
                {
                    alert(arr["msg"]);
                    mytab.innerHTML="<thead><h3 align='center'>NO User Found</h3></thead>";
                }
            }
        });
        return false;
}

function adduser()
{
  var u=uname.value;
  var p=pass.value;
    $.ajax({
            url:"adminback.php",
            type:"post",
            data:{adduser:"yes",un:u,ps:p},
            success:function(response)
            {
                  var arr=$.parseJSON(response);
                  uname.value="";
                  pass.value="";
                  uname.focus();
              alert(arr['msg']);
                fetchuser();
                       
            }
        });
       
       
}
</script>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Home</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <style>




          /* SIDEBAR STYLE */
          .sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111 ;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
        /* SIDEBAR STYLE */

    </style>
    <body onload="fetchuser();">
    <!-- SIDE BAR -->

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="adminHome.php">Manage User</a>
  <a href="adminContent.php">Manage Content</a>
  <!-- <a href="#">Clients</a>
  <a href="#">Contact</a> -->
</div>

<!-- SIDE BAR ENDS -->
<div id="main">
<button class="openbtn" onclick="openNav()">☰</button>
<h2 align="center">Add User</h2>
<form  method="post" onsubmit="return adduser();" >
                <div class="form-row form-group">
                    <div class="col-sm">
                        <label for="uname">Username</label>
                        <input type="text" required id="uname" class="form-control" value="<?php echo isset($_POST['uname'])?htmlspecialchars($_POST['uname'],ENT_QUOTES):''; ?>" name="uname" placeholder="Enter New Customer username"/>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm">
                        <label for="pass">Password</label>
                        <input required type="text" id="pass" class="form-control" value="<?php echo isset($_POST['pass'])?htmlspecialchars($_POST['pass'],ENT_QUOTES):''; ?>" name="pass" placeholder="Enter Password"/>
                    </div>
                </div>

                <div class="form-row form-group" style="margin-top: 5px;">
                    <div class="col-sm">
                        <!-- <input type="submit" id="btnsubmit" class="btn btn-primary" name="btnsubmit" disabled="disabled"/> -->
                        <input type="submit" id="btnsubmit" class="btn btn-primary" name="btnsubmit" value="Add"/>
                    </div>
                </div>
        
            </form>
      <div class="container-fluid mt-5">
        <input type="text" class="form-control" name="search" id="searchtxt" onkeyup="myFunction();" placeholder="Search By date"/>
        <h2 align="center">My Users</h2>
        <!-- TABLE  -->
          <table class="table mt-3" id="mytab">
          </table>
          <h3 id="tcount"></h3>
        <!-- TABLE  -->
      </div>
      <!--<div class="container mt-5">-->
        
      <!--  <h2>Stockist Requests</h2>-->
        <!-- TABLE  -->
      <!--    <table class="table mt-3" id="mytabacp">-->
      <!--    </table>-->
        <!-- TABLE  -->
      <!--</div>-->



</div>
    </body>
    					<script>
function myFunction() {
    // alert("hii")
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchtxt");
  filter = input.value.toUpperCase();
  table = document.getElementById("mytab");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  var count=0;
  for (i = 0; i <tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        count++;
      } else {
        tr[i].style.display = "none";
      }  
    }
  }
  if(count==0)
  {
  	tcount.innerHTML="No Records Found";
  }
  else
  {
  tcount.innerHTML="numbes of records found : "+count+" out of "+(tr.length-1);
	}
}
</script>
    <script>
    
        // SIDEBAR SCRIPT
        function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
            // SIDEBAR SCRIPT


           
    </script>
  
</html>