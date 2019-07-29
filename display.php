<html>
<body>
<table>
<?php
$dbc=mysqli_connect('localhost','12shu','hoamenities','academy');
$q1 = "SELECT * FROM cbsetimetable8;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td>Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td>'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM cbsetimetable8 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM cbsetimetable8 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td>'.$date.'</td>';
$count2=1;
	while($count2<=$cols){
		$temp = $slotter["slot$count2"];
		echo '<td>'.$temp.'</td>';
		$count2++;
	}
	echo '</tr>';
	$count1++;
}
 ?>
</table>
</body>
</html>