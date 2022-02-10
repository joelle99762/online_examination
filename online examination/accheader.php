<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Graduation Project || USER DASHBOARD </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
 <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link rel="stylesheet" href="css/font.css">
 
 <script src="js/jquery.js" type="text/javascript"></script>
 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});
</script>


 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>

<body style="background:#7c9d8c;">


<div class="header">
<div class="row">
<div id="lgo" class="col-lg-6"><span class="logo2">O</span><span class="logo">nline</span> <span class="logo2">E</span><span class="logo">xamination</span> <span class="logo2">S<span class="logo">ystem</span></div>
<div id="lgo1" class="col-lg-6">