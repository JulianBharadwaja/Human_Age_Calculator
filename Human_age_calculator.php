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
	$now=strtotime('today');
	if(sizeof($arr) != 3) 
		die('ERROR: Please enter a valid date.');
	if(!checkdate($arr[0],$arr[1],$arr[2]))
		die('PLEASE: Enter a valid date of birth.');
	if($dateTs>=$now)
		die('Enter a date of birth earlier than today');
	$ageDays=floor(($now-$dateTs)/86400);
	$ageYears=floor($ageDays/365);
	$ageMonths=floor(($ageDays-($ageYears*365))/30);
	echo "<font color='red' size='10'> You are aprox ".$ageYears." years and ".$ageMonths." months old. </font>";
?>
