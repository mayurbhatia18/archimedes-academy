<?php
session_start();
if(!isset($_SESSION['email'])){
	header ('Location:adminlogin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>CBSE TimeTable</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <!-- Meta Tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  <!-- Title -->
     

    <!-- Mobile Device Meta -->
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui' /> 
</head>
<body>
	<section>
<div>
<h1 style="text-align:center;">TimeTable for CBSE</h1><br><br>
<?php
if(!$_POST){
echo '
<form method="post" action="'.$_SERVER['PHP_SELF'].'">
<div class="container">
<div class="row">
<div class="form-group col-md-6 col-md-offset-5">
<label>Number of days:</label>
<input type="number" name="days" required/>
</div>
</div>
<div class="row">
<div class="form-group col-md-6 col-md-offset-5">
<label>Number of time slots:</label>
<input type="number" name="slots" required/>
</div>
</div>
<div class="row">
<div class="col-md-6 col-md-offset-5">
<input type="submit" name="submit" class="btn btn-default btn-lg" value="Submit" />
</div>
</div>
</div>
</form>
'; 
}else{
	$rows=$_POST['days'];
	$cols=$_POST['slots'];
	$count1=1;
	$count2=1;
	echo '
	<form action="addcbsett5.php" method="post">
	<table>
	<tr>
	<th>Dates</th>';
	while($count1<=$cols){
	echo '
    <th><input type="text" name="slot'.$count1.'" /></th>
	';
	$count1++;
	}
	echo '
	</tr>';
	while($count2<=$rows){
		echo '
		<tr>
		<td><input type="date" name="date'.$count2.'" /></td>';
		$count1=1;
	while($count1<=$cols){
	echo '
    <td><input type="text" name="time'.$count2.$count1.'" /></td>
	';
	$count1++;
	}
	echo '</tr>';
	$count2++;
	}
	echo '
	</table>
	<input type="hidden" value="'.$rows.'" name="rows">
	<input type="hidden" value="'.$cols.'" name="cols">
	<input type="submit" />
	</form>';
	
}
?>
</div>
</section>
</body>
</html>