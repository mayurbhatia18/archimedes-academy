

<!DOCTYPE html> 
<html>
<head>
<title>Delete Homework</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
<!DOCTYPE html>
<html>
<head>
<title>Homework</title>
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
<style>
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
	<section>
<div>
<h1 style="text-align:center;">Delete Homework</h1><br><br>
<div class="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<div class="form-group row">
<label class="control-label">Select Batch:</label>
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
<button type="submit" class="btn btn-primary btn-lg" >Submit</button><br><br>
</form>
</div>
</section>
<div class="container">
<div class="col-md-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;">
<?php
if($_POST)
{
$batch = $_POST['batch'];
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch='$batch' ";
$r1 = mysqli_query($dbc,$q1);
echo '<h1>Homework for '.$batch.'</h1>';
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%; border:1px solid black;">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 echo '<div style=" background-color:yellow; color:black;"><a href="deleting.php?id='.$id.'" style="text-decoration:none;"><h3 style="padding:5px 5px 5px 5px;">Delete</h3></a></div><br><br>';
 }
}
?>
</div>
</div><br>
<a href="homework.php" style="display:block; margin:auto; text-decoration:none; color:black;"><h1>Go Back</h1></a>
<br>
</body>
</html>
</body>
</html>