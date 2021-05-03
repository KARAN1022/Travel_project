

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<!-- Bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- custom css -->
<link rel="stylesheet" href="custom.css"  />
<!--font awesome-->
<link rel="stylesheet" href="css/all.min.css" />
<!--jquery css-->
<link rel="stylesheet" href="../jquery-ui-1.12.1.custom/jquery-ui.css" />
</head>

<body>
<!--Start Navigation-->
<nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top">
 <label class="navbar-brand">Go Tour</label>
<span class="navbar-text">Book your Happiness Here</span>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu"><span class="navbar-toggler-icon"></span></button>
 <div class="collapse navbar-collapse" id="myMenu">
<ul class="navbar-nav pl-5 custom-nav">
  <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
  <li class="nav-item"><a href="register.php?link1" class="nav-link">Registration</a></li>
  <li class="nav-item"><a href="#book" class="nav-link">Booking</a></li>
  <li class="nav-item"><a href="about.php" class="nav-link">About us</a></li>
  <li class="nav-item"><a href="contact.php" class="nav-link">Contact us</a></li>
 
 </ul>
</div>
</nav><!--End navigation-->
<!--header-->
<header class="jumbotron hd-img">
 <div class="resclass mainheading">
  <h1 class="text-white font-weight-bold">WELCOME TO GO TOUR</h1>
  <p class="text-warning font-italic">Make Your Day beautiful</p>
 </div>
</header><!--End header-->

<!--intro-->
<div class="container">
 <div class="jumbotron">
  
  <h3 class="text-center">GO TOUR</h3>
  <p>
   Go Tour is Better Website which can provide to book your travel destination.
   You Can easily book your destination all over the Gujarat.Customer's relaxation 
   is our main motto.Just get online and visit our website.we focus on enhancing
   your uses experience by offering online booking on your website. Our sole mission
   is "To provide best experience with traveling". Our state-of-art workshops are coveniently
   located in many cities across the Gujarat state, Now you can book your tickets online
    by doing registration.
  </p>
 </div>
</div><!--End intro-->

<!--our service-->
<div class="container text-center">
 <h2>Services</h2>
  <div class="row mt-4">
   <div class="col-sm-4">
   <a href="#book"><i class="fas fa-bus fa-8x"></i></a>
   <h4 class="mt-4">Booking</h4>
   </div>
   <div class="col-sm-4">
   
   <a href="register.php"><i class="fas fa-user-circle fa-8x"></i></a>
   <h4 class="mt-4">Registration</h4>
   </div>
   <div class="col-sm-4">
   <a href="tours.php"><i class="fas fa-bus fa-8x"></i></a>
   <h4 class="mt-4">Tours</h4>
   </div>
  </div> 
</div>

<!--booking-->
<div class="container">
 <div class="jumbotron">
 <a name="book"></a>
 <h3 class="text-center">Booking</h3>
<?php
   

if(!isset($_GET["link1"]) && !isset($_GET["link2"]))
{
?>
 <br />
 <center>
  <div class="carousel" data-ride="carousel">
    <div class="carousel-inner">
	  <div class="carousel-item active">
	    <img class="img-thumbnail w-50 d-block" src="images (2).jpeg" alt="First img" />
	  </div>
	  <div class="carousel-item">
	    <img class="img-thumbnail w-50 d-block" src="images (3).jpeg" alt="second img" />
	  </div>
	  <div class="carousel-item">
	    <img class="img-thumbnail w-50 d-block" src="images (4).jpeg" alt="second img" />
	  </div>
	</div>  
  </div>
  </center>
 <br />
 <div class="text-center mt-4">
 <a href="register.php?link1">Register First</a>
 </div>
 <?php
} 
if(isset($_GET["link2"]))
{
 ?>
 
  
 
   <form action="indval.php"  method="post" name="form1" onsubmit="return validate()">
    
	<select name="fromcity" class="form-control">
	 <option>Palanpur</option>
	</select>
	<select name="tocity" class="form-control mt-3" id="sel" onchange="return selcity()">
	 <option value="Select City" onclick="return selcity()">Select City</option>
	 <option value="Ahmedabad" onclick="return selcity()" >Ahmedabad</option>
	 <option  value="Mahesana" onclick="return selcity()">Mahesana</option>
	 <option value="Surat" onclick="return selcity()" >Surat</option>
	 <option value="Rajkot" onclick="return selcity()" >Rajkot</option>
	</select>
	<input type="text" class="form-control-plaintext" name="name" id="name1"  placeholder="Name" />
	<span id="name" class="text-danger"></span>
	<input type="text" class="form-control-plaintext" name="mobileno" id="mobile1"  placeholder="Mobileno" />
	<span id="mobile" class="text-danger"></span>
	<input type="text" class="form-control-plaintext" name="depart" id="depart" placeholder="Depart Date" />
	<span id="cal" class="text-danger"></span>
	 <input type="text" class="form-control-plaintext" name="seat1" id="seat1" placeholder="Enter Seat Number" />
	 
	 <span id="seat" class="text-danger"></span>
	 <br />
	 <span id="price"></span>
	 <input type="hidden" id="price1" name="price1" />  
	 <br />
	 <span id="time"></span>
	 <input type="hidden" id="time1" name="time1" />
     <div class="btn1">	    		 
     <center>
	  <input type="submit" class="btn btn-outline-primary" name="book_submit" value="Booking"/>
     </center>
  </div>
</form>
<h6 class="text-primary text-center mt-5">Seating Arrangement</h6>
<center>   
<table class="table-bordered">
    <th colspan="4">&nbsp;Door</th>
	<th colspan="2">&nbsp;Driver</th>
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;21&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;22&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;23&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;24&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;25&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;26&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;27&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;28&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;29&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;30&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;31&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;32&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;33&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;34&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;35&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;11&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;12&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;36&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;37&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;38&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;13&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;14&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;39&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;40&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;41&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;15&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;16&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;42&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;43&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;44&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;17&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;18&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;45&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;46&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;47&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;19&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;20&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;48&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;49&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;50&nbsp;&nbsp;&nbsp;</td>
	</tr>
 </table>		
</center>   
   <?php
   
   }
   ?>
  </div>
</div><!--End booking-->
<div class=" container-fluid p-0">
   <div class="text-white navbar bg-dark">
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
<!--javascript-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="../jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="../font_awesome/js/all.min.js"></script>
<script type="text/javascript">
 $(document).ready(function()
 {
    var minDate=new Date();
   $("#depart").datepicker(
   {
    showAnim:'drop',
	numberOfMonth:1,
	autoclose:true,
	minDate,
	dateFormat:'yy/mm/dd'
   }).datepicker("setDate","0");
   
   
   
 });
 function selcity()
 {
  var op=document.getElementById('sel').value;
   if(op=="Select City")
  {
   document.getElementById('price').innerHTML="";
   alert("Please Select City");
   return false;
  }
  if(op=="Ahmedabad")
 {
  document.getElementById('price1').value=document.getElementById('price').innerHTML="Price:800";
  document.getElementById('time1').value=document.getElementById('time').innerHTML="Depature Time: 8:00 PM";
  
  
 }
 if(op=="Mahesana")
 {
   document.getElementById('price1').value=document.getElementById('price').innerHTML="Price:500";
  document.getElementById('time1').value=document.getElementById('time').innerHTML="Depature Time: 8:00 PM";
 }
 if(op=="Surat")
 {
  document.getElementById('price1').value=document.getElementById('price').innerHTML="Price:1500";
  document.getElementById('time1').value=document.getElementById('time').innerHTML="Depature Time: 8:00 PM";
 }
 if(op=="Rajkot")
 {
  document.getElementById('price1').value=document.getElementById('price').innerHTML="Price:1700";
  document.getElementById('time1').value=document.getElementById('time').innerHTML="Depature Time: 8:00 PM";
 }
}
function validate()
{
 var name=document.getElementById('name1').value;
 var mob=document.getElementById('mobile1').value;
 var cal=document.getElementById('depart').value;
 var seat=document.getElementById('seat1').value;
 var op=document.getElementById('sel').value;
   if(op=="Select City")
  {
   alert("Please Select City");
   return false;
  }
 if(name=="")
  { 
   document.getElementById('name').innerHTML="Please fill the name field";
   return false;
  }
  if(!isNaN(name))
  {
   document.getElementById('name').innerHTML="charaters are allow only";
   return false;
  }
  if((name.length<=2)||(name.length >=15))
  {
   document.getElementById('name').innerHTML="Name length must be between 2 to 15 charaters";
   return false;
  }
  if(mob=="")
  { 
   document.getElementById('mobile').innerHTML="Please fill the mobile-No field";
   return false;
  }
  if(mob.length!=10)
  {
   document.getElementById('mobile').innerHTML="mobile-No  must write 10 digits No.";
   return false;
  }
  if(isNaN(mob))
  {
   document.getElementById('mobile').innerHTML="Digits are allow only";
   return false;
  }
  if(cal=="")
  {
   document.getElementById('cal').innerHTML="Please Select Date";
   return false;
  }
  if(seat=="")
  {
   document.getElementById('seat').innerHTML="Seat field Can't be empty";
   return false;
  }
  if(isNaN(seat))
  {
   document.getElementById('seat').innerHTML="Digits are allow only";
   return false;
  }
  if(seat<1 || seat>50)
  {
   document.getElementById('seat').innerHTML="Invalid Seat Number";
   return false;
  }
}
</script>
</body>
</html>
