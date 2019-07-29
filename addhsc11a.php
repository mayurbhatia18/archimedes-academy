<?php
session_start();
if($_POST){
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q = "DROP TABLE `hsctimetable11a`";
mysqli_query($dbc,$q);
$q1 = "CREATE TABLE `hsctimetable11a` ( `id` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`))";
mysqli_query($dbc,$q1);	
$rows=$_POST['rows'];
$cols=$_POST['cols'];
$count1=1;
$count2=1;
$count=1;
$q2 = "ALTER TABLE `hsctimetable11a` ADD `dates` VARCHAR(20) DEFAULT NULL";
mysqli_query($dbc,$q2);
$q6 = "ALTER TABLE `hsctimetable11a` ADD `slottime` VARCHAR(20) DEFAULT NULL";
mysqli_query($dbc,$q6);
$q8 = "ALTER TABLE `hsctimetable11a` ADD `columns` VARCHAR(20) DEFAULT NULL";
mysqli_query($dbc,$q8);
$q10 = "ALTER TABLE `hsctimetable11a` ADD `rows` VARCHAR(20) DEFAULT NULL";
mysqli_query($dbc,$q10);
while($count1<=$cols){
$q3 = "ALTER TABLE `hsctimetable11a` ADD `slot$count1` VARCHAR(20) DEFAULT NULL";
		mysqli_query($dbc,$q3);
		$count1++;
	}
	
	while($count2<=$rows){
		$date = $_POST["date$count2"];
		$slot = $_POST["slot$count2"];
		$q4 = "INSERT INTO `hsctimetable11a` (dates) VALUES ('$date')";
		mysqli_query($dbc,$q4);
		if($cols>=$rows){
		$q7 = "UPDATE `hsctimetable11a` SET slottime='$slot' WHERE dates='$date'";
        mysqli_query($dbc,$q7);
		}else{
			if($count<=$cols)
			{
		$q7 = "UPDATE `hsctimetable11a` SET slottime='$slot' WHERE dates='$date'";
        mysqli_query($dbc,$q7);
		$count++;
			}
		}
$q9 = "UPDATE `hsctimetable11a` SET columns='$cols' WHERE dates='$date'";
        mysqli_query($dbc,$q9);
		$q11 = "UPDATE `hsctimetable11a` SET rows='$rows' WHERE dates='$date'";
        mysqli_query($dbc,$q11);
		$count1=1;
		while($count1<=$cols)
	{
	$time = $_POST["time$count2$count1"];
$q5 = "UPDATE `hsctimetable11a` SET slot$count1='$time' WHERE dates='$date'";
mysqli_query($dbc,$q5);
$count1++;
	}
	$count2++;
	}
	if($cols>$rows){
	$count3=$rows+1;
while($count3<=$cols)
{
	$slot = $_POST["slot$count3"];
	$q = "INSERT INTO `hsctimetable11a` (slottime) VALUES ('$slot')";
		mysqli_query($dbc,$q);
	$count3++;
}
	}
}
header('Location:adminprofile.php');
	?>