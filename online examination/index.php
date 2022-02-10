<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Graduation Project || Home </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div id="lgo" class="col-sm-6"><span class="logo2">O</span><span class="logo">nline</span> <span class="logo2">E</span><span class="logo">xamination</span> <span class="logo2">S<span class="logo">ystem</span></div>
<div id="lgo1" class="col-sm-6">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Sign in</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:#10292e">USER LOGIN</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="email"></label>  
  <div class="col-md-8">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="password"></label>
  <div class="col-md-8">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>
</div><!-- /.modal-body -->
		</fieldset>
	<div class="modal-footer">  
	  <label class="col-md-2 control-label"></label>
      <div class="col-md-8">
        <button type="submit" class="sub">Login</button>
	</div>
	</div>
</form>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div id="row" class="row">

<div class="col-sm-3"></div>
<div class="col-sm-6 panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php 
$a=123123;
if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <button  type="submit" class="sub" class="btn btn-primary">
		<span class="glyphicon glyphicon-log-out"></span>Sign Up
	</button>
  </div>
</div>

</fieldset>
</form>
</div><!--col-sm-6 end-->
<div class="col-sm-3"></div>
</div><!--row end-->
</div><!--container end-->

<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="about.php" target="_blank">About this project</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Development Team</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:#10292e;">DEVELOPMENT TEAM</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		  <img src="image/joelle.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5" style="color:#31b5af;font-family:'typo';font-size:18px;font-weight:bold;">
		<a href="https://www.facebook.com/joelle.bayeh.3" style="" title="Find on Facebook">JOELLE BAYEH</a>
		<h4 style="" class="title1">70313040</h4>
		<h4 style="">joellebayeh55@gmail.com</h4>
		<h4 style="">Computer science student at the Lebanese University</h4></div></div>
		</p>
		
		<p>
		<div class="row">
		<div class="col-md-4">
		<img src="image/hassane.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5" style="color:#31b5af;font-family:'typo';font-size:18px;font-weight:bold;">
	<a href="https://www.facebook.com/diab.hassan.14" style="" title="Find on Facebook">HASSANE AL HASSANE</a>
		<h4 style="" class="title1">71840962</h4>
		<h4 style="">hassanealhassanej401@gmail.com</h4>
		<h4 style="">Computer science student at the Lebanese University</h4></div></div>
		</p>
		
		<p>
		<div class="row">
		<div class="col-md-4">
		  <img src="image/reina.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5" style="color:#31b5af;font-family:'typo';font-size:18px;font-weight:bold;">
		<a href="https://www.facebook.com/rei.na.108" style="" title="Find on Facebook">REINA SLEIMAN</a>
		<h4 style="" class="title1">78907841</h4>
		<h4 style="">reinasleiman@gmail.com</h4>
		<h4 style="">Computer science student at the Lebanese University</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:#10292e;font-family:'typo' ">ADMIN LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<form role="form" method="post" action="admin.php?q=index.php">
	<div class="form-group">
	<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
	</div>
	<div class="form-group">
	<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
	</div>
	<div class="form-group" align="center">
	<input type="submit" name="login" value="Login" class="sub" />
	</div>
</form>
</div><div class="col-md-2"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
