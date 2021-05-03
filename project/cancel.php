<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$seat=$_SESSION["st"];
$mo=$_SESSION["mobi"];
$con=mysql_connect("localhost","root","")or die("Server Not Connected");
$db=mysql_select_db("bus_booking_system",$con)or die("Database Not Found");
$check=mysql_query("select * from booking where seatno =$seat && mobileno=$mo",$con);
if(isset($_REQUEST["cancel1"]))
{
 if(mysql_num_rows($check)==1)
 $cancel=mysql_query("delete from booking where seatno =$seat && mobileno=$mo ",$con);
 if(isset($cancel))
 {?>
   <script type="text/javascript">
   alert("Booking Cancelled");
  </script>
  <?php
 }
 header("location:index.php?link2");
}

?>
</body>
</html>
