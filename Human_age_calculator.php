<body style='background-color:#422F2F;'>
<?php 
error_reporting(1);
if(isset($_POST['sub']))
{
	//mm,dd,yy refers to months, days and years
	$mm = $_POST['mm'];
	$dd = $_POST['dd'];
	$yy = $_POST['yy'];
	//dob refers to date of birth
	$dob = $mm.'/'.$dd.'/'.$yy;
	echo $mm.'/'.$dd.'/'.$yy.'<br/>';
	$arr = explode('/',$dob);
	echo $arr[0].'/'.$arr[1].'/'.$arr[2].'<br/>';
	//$dateTs=date_default_timezone_set($dob);
	$dateTs=strtotime($dob);
	//using American date time format;
	$now=strtotime('today');
	if(sizeof($arr) != 3) 
	{
		die('ERROR: Please enter a valid date.');
	}
	if(!checkdate($arr[0],$arr[1],$arr[2]))
	{
		die('PLEASE: Enter a valid date of birth.');
	}
	if($dateTs>=$now)
	{
		die('Enter a date of birth earlier than today');
	}
	$ageDays=floor(($now-$dateTs)/86400);
	$ageYears=floor($ageDays/365);
	$ageMonths=floor(($ageDays-($ageYears*365))/30);
	echo "<font color='red' size='10'> You are aprox ".$ageYears." years and ".$ageMonths." months old. </font>";
}
?>
<form method="post" style='padding-top:20%;'><center>
<span style='font-size:20px;font-weight:bold;'>Choose your date of birth</span>
<select name="yy">
<option value=''>Year</option>
<?php
for($i=1900;$i<=2020;$i++)
{
	echo "<option value='$i'>$i</option>";
}
?>
</select>
<select name="mm">
<option value=''>Month</option>
<?php
for($i=1;$i<=12;$i++)
{
	echo "<option value='$i'>$i</option>";
}
?>
</select>
<select name="dd">
<option value=''>Day</option>
<?php
for($i=1;$i<=31;$i++)
{
	echo "<option value='$i'>$i</option>";
}
?>
</select>
<input type='submit' value='Check it' name='sub'/>
</center>
</form>	

</body>
