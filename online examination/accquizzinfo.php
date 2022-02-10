<?php 
include_once 'dbConnection.php';
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$quizz=mysqli_query($con,"SELECT * FROM quiz WHERE eid='$eid'" );
$row=mysqli_fetch_array($quizz);
$time=$row['time'];
$date=$row['date'];
$title=$row['title'];
echo '<div class="row">
<div class="col-sm-6">
	<div class="row">
	<input type="hidden" id="qtime" value="'.$time.'">
	<input type="hidden" id="qdate" value="'.$date.'">
	
    <span class="ribbon-highlight"><div id="time" ></div></span>
	<hr>
    <center><img src="image\userprofile.png" alt="user profile picture" height="100" width="100"></center>
	<center><div>Hello, '.$name.' you are taking '.$title.' exam </div></center>
	<center><div>We wish you every success ...</div></center>
	</br>
</div></div>';
}

?>
<script>
  var minutes = 0;
  var seconds = 0;
  var user_min="<?php echo $email;?>"+"_min";
  var user_sec="<?php echo $email;?>"+"_sec";
  function startTimer(duration, display) {
    var timer = duration,
        minutes, seconds;
    setInterval(function() {
      minutes = parseInt(timer / 60, 10);
      seconds = parseInt(timer % 60, 10);

      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = minutes + ":" + seconds;

      setCookie(user_min, minutes.toString(), 1);
      setCookie(user_sec, seconds.toString(), 1);

      if (--timer < 0) {
        timer = 0;
		
      }
    }, 1000);
  }


  window.onload = function() {
     var minutes_data = getCookie(user_min);
     var seconds_data = getCookie(user_sec);
     var ta = <?php echo $time;?>;
	 var timer_amount = parseInt(ta)*60;
      if (!minutes_data || !seconds_data){
        //no cookie found use default
      }
      else{
        timer_amount = parseInt(minutes_data*60)+parseInt(seconds_data)
      }

    var fiveMinutes = timer_amount,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display); //`enter code here`
  };

   function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
   } 

   function getCookie(cname) {
   var name = cname + "=";
   var ca = document.cookie.split(';');
   for(var i=0; i<ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1);
      if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
   }
   return "";
  } 
  

  </script>
