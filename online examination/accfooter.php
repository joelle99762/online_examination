
<!--Footer start-->
</br></br></br></br>
<div class="row accfooter">
<div class="col-md-3 box">
<a href="about.php" target="_blank">About this project</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">DEVELOPMENT TEAM</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">DEVELOPMENT TEAM</span></h4>
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
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
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