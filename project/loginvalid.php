<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

$username=$_POST["username1"];
$password=$_POST["password1"];

if(isset($_REQUEST["submit"]))
{
 $con=mysql_connect("localhost","root","")or die("Server Not Connected");
 $db=mysql_select_db("bus_booking_system",$con)or die("Database Not Found");
 
   
 $valid=mysql_query("select * from login where UserName='$username' && password='$password'",$con);
 
 if(mysql_num_rows($valid)==1)
 { 
   $_SESSION["user"]=$username; 
   header("location:index.php?link2");
 }  
 else
 {
  header("location:login.php"); 
 }
}
else
{
 header("location:login.php");
} 

?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
