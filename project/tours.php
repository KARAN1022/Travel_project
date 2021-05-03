<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/all.min.css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div class=" container-fluid p-0">
   <div class="navbar bg-dark">
    <a href="tours.php" class="navbar-brand text-white">Tours</a>
   </div>   
</div>
<div class="container-fluid">
 <div class="jumbotron" style="height:1100px">
 <h3 class="text-uppercase m-5 text-center">Go Tour</h3>
  <ol>
    <li>
	 <h6>Ambaji Temple</h6>
	  <img src="download (6).jpeg" width="100px" height="100px" class="img-thumbnail"/>
	  <p>
	    <b>Ambaji</b> is a census town in Banaskantha district in the state of Gujarat,India.<br />
		 It is known for its historical and mythological connections with sites of cultural heritage.
	  </p>
	</li>
	<li>
	 <h6>Atapi wonderland,vadodara</h6>
	  <img src="download (4).jpeg" width="100px"  class="img-thumbnail"/>
	  <p>
	    <b>Atapi wonderland</b> is a Theme Park in the outskirt of vadodara at Ajwa.<br />
		 It is Adventure park which contains many rides and also have Fun waterpark.<br />
		 It is Attraction of youngsters.
	  </p>
	</li>
	<li>
	 <h6>Somnath Temple</h6>
	  <img src="download (2).jpeg" width="100px" height="100px" class="img-thumbnail"/>
	  <p>
	    <b>Somnath</b> temple located in PrabhasPatan near Junagadh in Saurashtra on the western coast of Gujarat,india.<br />
		 It is an important pilgrimage and tourist spot of Gujarat.<br />
		 It is  cultural and heritage site.
	  </p>
	</li>
	<li>
	 <h6>Rann of kutch</h6>
	  <img src="download (3).jpeg" width="100px" height="100px" class="img-thumbnail"/>
	  <p>
	    <b>Rann of kutch</b> is a salt marsh in the Thar Desert in the Kutch District of Gujarat,india.<br />
		 It about 2900 sq miles in the area and is reputed to be one of the largest salt deserts in the world.<br />
	  </p>
	</li>
	<li>
	 <h6>Girnar</h6>
	  <img src="images (29).jpeg" width="100px" height="100px" class="img-thumbnail"/>
	  <p>
	    <b>Girnar</b> is most historical hill station and tirthdham of Gujarat,india.<br />
		  Elevation of girnar:1069m(3507ft).
		  <br />
		  <center><b>All of above Tours Are Available, Please Contact Our Branch Office</b></center>
	  </p>
	</li>
  </ol>
<a href="contact.php" class="mt-2 btn btn-success">Contact Now</a>
</div>
</div>

   <div class="text-white navbar bg-dark" style="top:20px;">
   <p>All Right Reserved to Go tour &copy;
	<?php
	 $copyyear=2019;
	 $curyear=date('Y');
	 if($copyyear!=$curyear)
	 {
	  echo $copyyear;
	  echo"-",$curyear;
	 }  
	?>
	</p>
   </div>   
	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="../font_awesome/js/all.min.js"></script>
</body>
</html>
