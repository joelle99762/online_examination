<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Graduation Project || Feedback </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>

<body>
<div class="header">
<div class="row">
<div id="lgo" class="col-sm-6"><span class="logo2">O</span><span class="logo">nline</span> <span class="logo2">E</span><span class="logo">xamination</span> <span class="logo2">S<span class="logo">ystem</span>
</div>
<div id="lgo1" class="col-sm-6">
<?php
 include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<div id="lgo1">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Sign in</b></span></a></div>';}
else{
echo '
<div id="lgo1">
<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Sign Out</b></span></a></div>';}
?>
<div id="lgo1">
<a href="index.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Home</b></span></a></div>
</div>

</div><!-- row closed-->
</div><!--header closed-->
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



<div class="bg1">
<div id="row" class="row">

<div class="col-sm-6"></div>
<div class="col-sm-6 panel">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else{
	echo' 
<h2 align="center" style="font-family:typo; color:#000066;text-decoration: underline;">FEEDBACK/REPORT A PROBLEM</h2>
<center><span style="font-weight: bold;">You can send us your feedback through e-mail on the following e-mail id:<br />
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<a href="mailto:hassanalhassanj401@gmail.com" style="color:#000000">hassan</a><br /><br />
</div><div class="col-md-1"></div></div>
<p>Or you can directly submit your feedback by filling the enteries below:-</p></span></center><br/>
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-sm-3"><b>Name:</b></div>
<div class="col-sm-9">
<!--Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-sm-3"><b>Subject:</b></div>
<div class="col-sm-9">
<!--Text input-->
<div class="form-group">    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-sm-3"><b>E-Mail address:</b></div>
<div class="col-sm-9">
<!--Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
</div>
<div class="form-group" align="center">
<button  type="submit" class="sub" class="btn btn-primary">Send Message
	</button>
</div>
</form>';
}?>
</div><!--col-sm-6 end-->
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
<a href="feedback.php" target="_blank">Feedback</a>
</div>
</div><!-- End row footer-->
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
		 <img src="image/joelle.jpg" width=100 height=100  class="img-rounded">
		 </div>
		 <div class="col-md-5" style="color:#31b5af;font-family:'typo';font-size:18px;font-weight:bold;">
		<a href="http://yugeshverma.blogspot.in" style="" title="Find on Facebook">JOELLE BAYEH</a>
		<h4 style="" class="title1">70313040</h4>
		<h4 style="">joellebayeh55@gmail.com</h4>
		<h4 style="">Computer science student at the Lebanese University</h4></div></div>
		</p>
		
		<p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/hassane.jpg" width=100 height=100  class="img-rounded">
		 </div>
		 <div class="col-md-5" style="color:#31b5af;font-family:'typo';font-size:18px;font-weight:bold;">
		<a href="http://yugeshverma.blogspot.in" style="" title="Find on Facebook">HASSANE AL HASSANE</a>
		<h4 style="" class="title1">71840962</h4>
		<h4 style="">hassanealhassanej401@gmail.com</h4>
		<h4 style="">Computer science student at the Lebanese University</h4></div></div>
		</p>
		
		<p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/reina.jpg" width=100 height=100  class="img-rounded">
		 </div>
		 <div class="col-md-5" style="color:#31b5af;font-family:'typo';font-size:18px;font-weight:bold;">
		<a href="http://yugeshverma.blogspot.in" style="" title="Find on Facebook">REINA SLEIMAN</a>
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
