<?php 
if(isset($_POST['sub']))
{
	//mm,dd,yy refers to months, days and years
	$mm = $_POST['mm'];
	$dd = $_POST['dd'];
	$yy = $_POST['yy'];
	//dob refers to date of birth
	$dob = $mm.'/'.$dd.'/'.$yy;
	$arr = explode('/',$dob);
	//$dateTs=date_default_timezone_set($dob);
}
?>