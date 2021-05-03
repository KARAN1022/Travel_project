
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","")or die("Server Not Connected");
$db=mysql_select_db("bus_booking_system",$con)or die("Database Not Found");
$name=$_POST["name1"];
$username=$_POST["username1"];
$password1=$_POST["password1"];
$password2=$_POST["password2"];
$mobileno=$_POST["mobileno1"];
$city=$_POST["city1"];
$check=mysql_query("select * from registration where UserName='$username' && mobileno=$mobileno",$con);
$check1=mysql_query("select * from registration where UserName='$username'",$con);

if(mysql_fetch_row($check))
{?>
 <script type="text/javascript">
 alert("You have already registered");
 window.location="login.php";
 </script>
 <?php
}
elseif(mysql_fetch_row($check1))
{
  ?>
   <script type="text/javascript">
    alert("UserName already Taken");
	window.location="register.php";
   </script>
 <?php
}
elseif(isset($_REQUEST["submit1"]))
{
 
 $reg="insert into registration values('','$name','$username','$password1',$mobileno,'$city')";
 $i=mysql_query($reg,$con);
 $log="insert into login values('','$username','$password1')";
 mysql_query($log,$con);

 if(isset($i) && $name!=NULL && $username!=NULL && $password1!=NULL && $password2!=NULL && $mobileno!=NULL && $city!=NULL )
 {
   header("location:login.php");
 }
 else
 {
  header("location:register.php");
 }
}
else
{
 header("location:register.php");
} 
?>


</body>
</html>
