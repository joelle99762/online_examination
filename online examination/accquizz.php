
<?php
include_once 'dbConnection.php';
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );


echo '
<div class="col-sm-6">
<div id="subForm" class="panel logged-user" style="padding: 20px;">';
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];
echo '<b>Question &nbsp;'.$sn.'&nbsp;::<br />'.$qns.'</b><br /><br />';
}
$q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );

$cqn=intval($sn);
$tqn=intval($total);

echo '<form id="respForm" action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
<br /><div class="row"><div class="col-sm-12">';

$option;
$optionid;
while($row=mysqli_fetch_array($q) )
{
$option=$row['option'];
$optionid=$row['optionid'];
echo'<input type="radio" name="ans" value="'.$optionid.'">'.$option.'<br /><br />';
}
echo '</div></div><div class="row"><div class="col-sm-4" style="float:left;">';
if($cqn<$tqn){
	echo'<button id="send" type="submit" class="sub"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Next</button></div><div class="col-sm-4"></div><div class="col-sm-4"></div></div></form>';
	}
if($cqn==$tqn){
	echo'<button id="send" type="submit" class="sub"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Finish</button></div><div class="col-sm-4"></div><div class="col-sm-4"></div></div></form>';
}

if($cqn>1&& $cqn<=$tqn){
	echo'<div class="row"><div class="col-sm-4"></div><div class="col-sm-4"></div><div class="col-sm-4" style="float:right;margin-top:-52px;"><button type="submit" id="back" onclick="window.history.back()" class="sub"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Back</button></div></div>';
	}
echo'</div></div></div></br></br></div>';
}

?>


