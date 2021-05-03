<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="style.css" />
</head>
<body>
<img class="img3" src="unnamed.png" height="100px" width="100px"/>

<div class="login-box">
<form action="loginvalid.php" method="post" name="form1" onsubmit="return validation()">
 <h2 class="h1">Login</h2>
 <img class="img1" src="6824387_preview.png" height="50px" width="50px" align="absmiddle"/>
 <div class="textbox">
 <input type="text" name="username1" id="user" placeholder="Username"/><br />
  <span id="usname" class="font-weight-bold text-danger"></span>
 </div>
 <img class="img2" src="username-and-password-icon-png-2.png" height="30px" width="30px" align="absbottom"/>
 <div class="textbox">
 <input type="password" name="password1" id="pass" placeholder="Password"  /><br />
 <span id="ps1" class="font-weight-bold text-danger"></span>
 </div>
 <input type="submit" name="submit" value="Login" class="btn" />
 </form>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
function validation()
{
 var user=document.getElementById('user').value;
 var pass=document.getElementById('pass').value;
 
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
 
}
</script>
</body>
</html>
