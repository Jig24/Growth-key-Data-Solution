<?php 
//connecting db
$servername = "localhost";
$username = "u746958287_tulip";
$password = "Tulip@123";
$database = "u746958287_tulip_db";

$con = mysqli_connect($servername , $username , $password , $database);

if(!$con)
{
    die("failed ".mysqli_connect_error());
    // echo "Connection not done";
}

?>