<?php

if($_POST)
{
	$note3 = $_POST['note3'];
	$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q = "UPDATE `notifications` SET notification3='$note3' WHERE not_id=1 ";
        mysqli_query($dbc,$q);
	header('Location:adminprofile.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>
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
<h1 style="text-align:center;">Notification 3</h1><br><br>
<div class="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<div class="form-group row">
<label class="control-label">Notification:</label><br>
<textarea name="note3" rows="10" style="width:100%"></textarea>
</div>
<button type="submit" class="btn btn-primary btn-lg" >Submit</button><br><br>
</form>
</div>
</section>
</body>
</html>