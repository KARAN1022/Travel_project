<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/all.min.css" />
</head>

<body>

<div class="container-fluid p-0">
   <div class="navbar bg-dark">
    <a href="booking.php" class="navbar-brand text-white">Booking</a>
   </div>   
</div>

<div class="container-fluid" style="height:525px">
<?php


if(isset($_REQUEST["book_submit"]))
{
 $user=$_SESSION["user"];
 $fromcity=$_POST["fromcity"];
 $tocity=$_POST["tocity"];
 $name=$_POST["name"];
 $mobileno=$_POST["mobileno"];
 $date=$_POST["depart"];
 $seat=$_POST["seat1"];
 $price=$_POST["price1"];
 $time=$_POST["time1"];
 $_SESSION["st"]=$seat;
 $_SESSION["mobi"]=$mobileno;
} 
$con=mysql_connect("localhost","root","")or die("Server Not Connected");
$db=mysql_select_db("bus_booking_system",$con)or die("Database Not Found");
$que="insert into booking                       values('$user','$fromcity','$tocity','$name',$mobileno,'$date',$seat,'$price','$time')";
$check=mysql_query("select * from booking where seatno=$seat && date='$date'",$con);
 if(mysql_fetch_row($check))
 {
   ?>
   <script type="text/javascript">
    alert("Seat Already Booked");
	window.location="index.php?link2";
   </script>
   <?php
  
 }
 else
 {      
    $i=mysql_query($que,$con);
  
  if(isset($i))
  {?>
  
   <script type="text/javascript">
    alert("Seat Booked");
   </script>
  <?php
  }
  else
  {?>
   <script type="text/javascript">
    alert("Seat not Booked");
   </script>
  <?php
  }
 }

//Showing user Booking
?>
  <table class="table-hover">
   <th class="p-2">Name</th>
   <th class="p-4">Mobile-No</th>
   <th class="p-4">From</th>
   <th class="p-4">To</th>
   <th class="p-4">Date</th>
   <th class="p-4">SeatNo</th>
   <th class="p-4">Price</th>
   <th class="p-4">Time</th>
   <th class="p-4">
     <form action="cancel.php" method="post" name="f3">
     <input type="submit" value="cancel Booking" name="cancel1" class="ml-2 btn btn-outline-primary" /> 
     </form>
	 <br />
	 <form action="showseat.php" method="post" name="showseat">
      <input type="submit" value="Next" name="showchart" class="btn btn-outline-primary" />
     </form>

   </th>
 
 <?php
 $a="select * from booking where UserName='$user' && mobileno=$mobileno && seatno=$seat && date='$date'";
  $r=mysql_query($a,$con);

 while($row = mysql_fetch_array($r))
 {
  echo "<tr><td>",$row["name"],"</td>
            <td>",$row["mobileno"],"</td>
			<td>",$row["froms"],"</td>
			<td>",$row["to"],"</td>
			<td class='p-4'>",$row["date"],"</td>
			<td class='p-4'>",$row["seatno"],"</td>
			<td>",$row["price"],"</td>
			<td>",$row["time"],"</td></tr>";
 }
 ?>
</table>
<?php
if(isset($_REQUEST["payment1"]))
{
 
   header("location:www.paytm.com");
 
}
if(isset($_REQUEST["newbook"]))
{
 
   header("location:index.php?link2");
 
}
?>
</div>
 <div class="container-fluid p-0 m-0" >
   <div class="text-white navbar bg-dark" style="top:20px;">
   <p>All Right Reserved to Go tour &copy;
	<?php
	 $copyyear=2018;
	 $curyear=date('Y');
	 if($copyyear!=$curyear)
	 {
	  echo $copyyear;
	  echo"-",$curyear;
	 }  
	?>
	</p>
   </div>   
</div>	 	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="../font_awesome/js/all.min.js"></script>
</body>
</html>
