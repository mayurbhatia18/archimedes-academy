<?php

if($_POST)
{
	$batch = $_POST['batch'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$subject = $_POST['subject'];
	$portion = $_POST['portion'];
	$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q = "UPDATE `weeklytest` SET date='$date', time='$time', subject='$subject', portion='$portion' WHERE batch='$batch'";
mysqli_query($dbc,$q);
	header('Location:adminprofile.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Weekly test</title>
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
<h1 style="text-align:center;">Weekly Test</h1><br><br>
<div class="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<div class="form-group row">
<label class="control-label">Batch:</label>
<select name="batch" class="form-control">
<option>cbse 8th batch 1</option>
<option>cbse 8th batch 2</option>
<option>cbse 9th batch 1</option>
<option>cbse 9th batch 2</option>
<option>cbse 10th batch 1</option>
<option>cbse 10th batch 2</option>
<option>ssc 8th batch 1</option>
<option>ssc 8th batch 2</option>
<option>ssc 9th batch 1</option>
<option>ssc 9th batch 2</option>
<option>ssc 10th batch 1</option>
<option>ssc 10th batch 2</option>
<option>hsc 11th batch 1</option>
<option>hsc 11th batch 2</option>
<option>hsc 12th batch 1</option>
<option>hsc 12th batch 2</option>
<option>Scholarship 5th batch 1</option>
<option>Scholarship 5th batch 2</option>
<option>Scholarship 8th batch 1</option>
<option>Scholarship 8th batch 2</option>
<option>Homibaba 6th batch 1</option>
<option>Homibaba 6th batch 2</option>
<option>Homibaba 9th batch 1</option>
<option>Homibaba 9th batch 2</option>
</select>
</div>
<div class="form-group row">
<label class="control-label">Date:</label>
<input type="date" name="date" style="width:30%" class="form-control" required />
</div>
<div class="form-group row">
<label class="control-label">Time:</label>
<input type="text" name="time" class="form-control" required />
</div>
<div class="form-group row">
<label class="control-label">Subject:</label>
<input type="text" name="subject" class="form-control" required />
</div>
<div class="form-group row">
<label class="control-label">Portion:</label><br>
<textarea name="portion" rows="10" style="width:100%"></textarea>
</div>
<button type="submit" class="btn btn-primary btn-lg" >Submit</button><br><br>
</form>
</div>
</section>
</body>
</html>