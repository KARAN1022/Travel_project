<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="reg.css" />

</head>
<body>
  <div class="container">
   <form method="post" name="f2" action="regvalid.php" onsubmit=" return validation()" >
   <div class="row">
   <div class="col-md-3"></div>
	<div class="col-md-6">
	 <h1 class="text-center">REGISTER</h1>
	<!--row in md-6 for label & textbox-->
	 <label class="label col-md-3 control-label text-white">Name</label>
	 <div class="col-md-9">
	  <input type="text" class="form-control-plaintext text-white" style="border-bottom-color:#00CCFF" name="name1" id="name1"  placeholder="NAME" maxlength="15"/>
	 <span id="name" class="font-weight-bold text-danger"></span>
	 </div>
	<!--close  -->
	<!--row in md-6 for label & textbox-->
	 <label class="label col-md-3 control-label text-white">UserName</label>
	 <div class="col-md-9">
	  <input type="text" class="form-control-plaintext text-white" style="border-bottom-color:#00CCFF" name="username1" id="user"  placeholder="USERNAME" />
	 <span id="usname" class="font-weight-bold text-danger"></span>
	 </div>
	<!--close  -->
	<!--row in md-6 for label & textbox-->
	 <label class="label col-md-3 control-label text-white">Password</label>
	 <div class="col-md-9">
	  <input type="password" class="form-control-plaintext text-white" style="border-bottom-color:#00CCFF" name="password1" id="pass"  placeholder="PASSWORD" />
	<span id="ps1" class="font-weight-bold text-danger"></span>
	 </div>
	<!--close  --> 
	<!--row in md-6 for label & textbox-->
	 <label class="label col-md-3 control-label text-white">Confirm-password</label>
	 <div class="col-md-9">
	  <input type="password" class="form-control-plaintext text-white" style="border-bottom-color:#00CCFF" name="password2" id="pass1"  placeholder="CONFIRM-PASSWORD" />
	  <span id="ps2" class="font-weight-bold text-danger"></span>
	 </div>
	<!--close  -->
	<!--row in md-6 for label & textbox-->
	 <label class="label col-md-3 control-label text-white">Mobile-No</label>
	 <div class="col-md-9">
	  <input type="text" class="form-control-plaintext text-white" style="border-bottom-color:#00CCFF" name="mobileno1" id="mo"  placeholder="MOBILE-NO" />
	  <span id="mo1" class="font-weight-bold text-danger"></span>
	 </div>
	<!--close  -->
	<!--row in md-6 for label & textbox-->
	 <label class="label col-md-3 control-label text-white">City</label>
	 <div class="col-md-9">
	 <select class="form-control-plaintext text-white" style="border-bottom-color:#00CCFF"      name="city1" id="city" placeholder="CITY" />
	 <option>Palanpur</option> 
	 <option>Mahesana</option>
	 <option>Ahmedabad</option>
	 <option>Rajkot</option>
	 <option></option>
	  </select>
	 </div>
	<!--close  -->
	<button class="btn btn-info" name="submit1">SUBMIT</button>
	</div>
	</form>
  </div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
 function validation()
 {
  var name=document.getElementById('name1').value;
  var user=document.getElementById('user').value;
  var pass=document.getElementById('pass').value;
  var compass=document.getElementById('pass1').value;
  var mob=document.getElementById('mo').value;
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
  if(user=="")
  { 
   document.getElementById('usname').innerHTML="Please fill the Username field";
   return false;
  }
  if((user.length<=2)||(user.length >=10))
  {
   document.getElementById('usname').innerHTML="Username length must be between 2 to 10 charaters";
   return false;
  }
  if(!isNaN(user))
  {
   document.getElementById('usname').innerHTML="charaters are allow only";
   return false;
  }
  if(pass=="")
  { 
   document.getElementById('ps1').innerHTML="Please fill the Password field";
   return false;
  }
  if((pass.length<=5)||(pass.length >=10))
  {
   document.getElementById('ps1').innerHTML="Password length must be between 5 to 10 charaters";
   return false;
  }
  if(pass!=compass)
  {
   document.getElementById('ps2').innerHTML="Password  Aren't matching";
   return false;
  }
  if(compass=="")
  { 
   document.getElementById('ps2').innerHTML="Please fill the Password field";
   return false;
  }
  if((compass.length<=5)||(compass.length >=10))
  {
   document.getElementById('ps2').innerHTML="Password length must be between 5 to 10 charaters";
   return false;
  }
  if(mob=="")
  { 
   document.getElementById('mo1').innerHTML="Please fill the mobile-No field";
   return false;
  }
  if(mob.length!=10)
  {
   document.getElementById('mo1').innerHTML="mobile-No  must write 10 digits No.";
   return false;
  }
  if(isNaN(mob))
  {
   document.getElementById('mo1').innerHTML="Digits are allow only";
   return false;
  }
}

</script>
</body>
</html>
