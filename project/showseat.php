<?php 
  session_start();
?>
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
    <a href="showseat.php" class="navbar-brand text-white">Booking Chart</a>
   </div>   
</div>

<div class="container-fluid" style="height:800px">
  <div class="jumbotron" style="height:750px">
  <table class="table-hover">
   <th class="p-2">Name</th>
   <th class="p-4">Mobile-No</th>
   <th class="p-4">From</th>
   <th class="p-4">To</th>
   <th class="p-4">Date</th>
   <th class="p-4">SeatNo</th>
   <th class="p-4">Price</th>
   <th class="p-4">Time</th>
<?php
$seat=$_SESSION["st"];
  $mo=$_SESSION["mobi"];
  $con=mysql_connect("localhost","root","")or die("Server Not Connected");
  $db=mysql_select_db("bus_booking_system",$con)or die("Database Not Found");
$check=mysql_query("select * from booking where seatno=$seat && mobileno=$mo",$con);
while($row = mysql_fetch_array($check))
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
if(isset($_REQUEST["showchart"]))
{?>
 
   <table>
     <tr>
	     <td><button class="btn btn-outline-dark" id="s1" onclick="return color_set()">1</button></td>
		 <td><button class="btn btn-outline-dark" id="s2" onclick="return color_set()">2</button></td>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><button class="btn btn-outline-dark" id="s21" onclick="return color_set()">21</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s22" onclick="return color_set()">22</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s23" onclick="return color_set()">23</button>         </td>
		 <td>&nbsp;&nbsp;<button value="Refresh" class="btn btn-outline-primary" onclick="return             color_set()">Refresh</button></td>
     </tr>
	 <tr>
	     <td><button class="btn btn-outline-dark" id="s3" onclick="return color_set()">3</button></td>
		 <td><button class="btn btn-outline-dark" id="s4" onclick="return color_set()">4</button></td>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><button class="btn btn-outline-dark" id="s24" onclick="return color_set()">24</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s25" onclick="return color_set()">25</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s26" onclick="return color_set()">26</button>         </td>
     </tr>
	 <tr>
	     <td><button class="btn btn-outline-dark" id="s5" onclick="return color_set()">5</button></td>
		 <td><button class="btn btn-outline-dark" id="s6"onclick="return color_set()">6</button></td>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><button class="btn btn-outline-dark" id="s27" onclick="return color_set()">27</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s28" onclick="return color_set()">28</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s29" onclick="return color_set()">29</button>         </td>
     </tr>
	 <tr>
	     <td><button class="btn btn-outline-dark" id="s7" onclick="return color_set()">7</button></td>
		 <td><button class="btn btn-outline-dark" id="s8" onclick="return color_set()">8</button></td>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><button class="btn btn-outline-dark" id="s30"onclick="return color_set()">30</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s31" onclick="return color_set()">31</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s32"onclick="return color_set()">32</button>         </td>
     </tr>
	 <tr>
	     <td><button class="btn btn-outline-dark" id="s9" onclick="return color_set()">9</button></td>
		 <td><button class="btn btn-outline-dark" id="s10" onclick="return color_set()">10</button>         </td>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><button class="btn btn-outline-dark" id="s33" onclick="return color_set()">33</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s34" onclick="return color_set()">34</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s35" onclick="return color_set()">35</button>        </td>
     </tr>
	 <tr>
	     <td><button class="btn btn-outline-dark" id="s11" onclick="return color_set()">11</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s12" onclick="return color_set()">12</button>         </td>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><button class="btn btn-outline-dark" id="s36" onclick="return color_set()">36</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s37" onclick="return color_set()">37</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s38" onclick="return color_set()">38</button>         </td>
     </tr>
	 <tr>
	     <td><button class="btn btn-outline-dark" id="s13" onclick="return color_set()">13</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s14" onclick="return color_set()">14</button>         </td>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><button class="btn btn-outline-dark" id="s39" onclick="return color_set()">39</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s40" onclick="return color_set()">40</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s41"onclick="return color_set()">41</button>         </td>
     </tr>
	 <tr>
	     <td><button class="btn btn-outline-dark" id="s15 onclick="return color_set()"">15</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s16" onclick="return color_set()">16</button>         </td>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><button class="btn btn-outline-dark" id="s42" onclick="return color_set()">42</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s43" onclick="return color_set()">43</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s44" onclick="return color_set()">44</button>         </td>
     </tr>
	 <tr>
	     <td><button class="btn btn-outline-dark" id="s17" onclick="return color_set()">17</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s18" onclick="return color_set()">18</button>         </td>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><button class="btn btn-outline-dark" id="s45" onclick="return color_set()">45</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s46" onclick="return color_set()">46</button>        </td>
		 <td><button class="btn btn-outline-dark" id="s47" onclick="return color_set()">47</button>        </td>
     </tr>
	 <tr>
	     <td><button class="btn btn-outline-dark" id="s19" onclick="return color_set()">19</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s20" onclick="return color_set()">20</button>         </td>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><button class="btn btn-outline-dark" id="s48" onclick="return color_set()">48</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s49" onclick="return color_set()">49</button>         </td>
		 <td><button class="btn btn-outline-dark" id="s50" onclick="return color_set()">50</button>         </td>
     </tr>
  </table>
  
 
  <br /><br />
  <form method="post" action="indval.php" name="f2">
<br /><input type="submit" value="Payment" name="payment1" class="btn btn-outline-primary "  />
       <input type="submit" value="Book Next" name="newbook" class="btn btn-outline-primary ml-3"  />
</form>
<br /><br />
<label>After payment Enter UPI ID:9824615242@ybl On Payment Website</label>
  
 
      <script type="text/javascript">
       var seat=<?php echo $seat; ?>;
	   function color_set()
	   {
	     if(seat==1)
		 {
	      document.getElementById('s1').style.backgroundColor="#00FF00";
		  
		 }
		  if(seat==2)
		 {
		   document.getElementById('s2').style.backgroundColor="#00FF00";
		   
		 }
		  if(seat==3)
		 {
		   document.getElementById('s3').style.backgroundColor="#00FF00";
		   
		 }
		  if(seat==4)
		 {
		   document.getElementById('s4').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==5)
		 {
		   document.getElementById('s5').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==6)
		 {
		   document.getElementById('s6').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==7)
		 {
		   document.getElementById('s7').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==8)
		 {
		   document.getElementById('s8').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==9)
		 {
		   document.getElementById('s9').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==10)
		 {
		   document.getElementById('s10').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==11)
		 {
	      document.getElementById('s11').style.backgroundColor="#00FF00";
		  
		 }
		  if(seat==12)
		 {
		   document.getElementById('s12').style.backgroundColor="#00FF00";
		   
		 }
		  if(seat==13)
		 {
		   document.getElementById('s13').style.backgroundColor="#00FF00";
		   
		 }
		  if(seat==14)
		 {
		   document.getElementById('s14').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==15)
		 {
		   document.getElementById('s15').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==16)
		 {
		   document.getElementById('s16').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==17)
		 {
		   document.getElementById('s17').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==18)
		 {
		   document.getElementById('s18').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==19)
		 {
		   document.getElementById('s19').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==20)
		 {
		   document.getElementById('s20').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==21)
		 {
	      document.getElementById('s21').style.backgroundColor="#00FF00";
		  
		 }
		  if(seat==22)
		 {
		   document.getElementById('s22').style.backgroundColor="#00FF00";
		   
		 }
		  if(seat==23)
		 {
		   document.getElementById('s23').style.backgroundColor="#00FF00";
		   
		 }
		  if(seat==24)
		 {
		   document.getElementById('s24').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==25)
		 {
		   document.getElementById('s25').style.backgroundColor="#00FF00";
		 }
		 if(seat==26)
		 {
		   document.getElementById('s26').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==27)
		 {
		   document.getElementById('s27').style.backgroundColor="#00FF00";
		 }
		 if(seat==28)
		 {
		   document.getElementById('s28').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==29)
		 {
		   document.getElementById('s29').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==30)
		 {
		   document.getElementById('s30').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==31)
		 {
	      document.getElementById('s31').style.backgroundColor="#00FF00";
		  
		 }
		  if(seat==32)
		 {
		   document.getElementById('s32').style.backgroundColor="#00FF00";
		   
		 }
		  if(seat==33)
		 {
		   document.getElementById('s33').style.backgroundColor="#00FF00";
		   
		 }
		  if(seat==34)
		 {
		   document.getElementById('s34').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==35)
		 {
		   document.getElementById('s35').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==36)
		 {
		   document.getElementById('s36').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==37)
		 {
		   document.getElementById('s37').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==38)
		 {
		   document.getElementById('s38').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==39)
		 {
		   document.getElementById('s39').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==40)
		 {
		   document.getElementById('s40').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==41)
		 {
	      document.getElementById('s41').style.backgroundColor="#00FF00";
		  
		 }
		  if(seat==42)
		 {
		   document.getElementById('s42').style.backgroundColor="#00FF00";
		   
		 }
		  if(seat==43)
		 {
		   document.getElementById('s43').style.backgroundColor="#00FF00";
		   
		 }
		  if(seat==44)
		 {
		   document.getElementById('s44').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==45)
		 {
		   document.getElementById('s45').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==46)
		 {
		   document.getElementById('s46').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==47)
		 {
		   document.getElementById('s47').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==48)
		 {
		   document.getElementById('s48').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==49)
		 {
		   document.getElementById('s49').style.backgroundColor="#00FF00";
		   
		 }
		 if(seat==50)
		 {
		   document.getElementById('s50').style.backgroundColor="#00FF00";
		   
		 }
	   }
	  
	  </script>
 <?php
}  
?>
  </div>
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
