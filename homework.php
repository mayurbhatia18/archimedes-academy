<?php

	?>
<!DOCTYPE html> 
<html>
<head>
<title>Admin | Profile</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style>
.admintabs{
	background-color:yellow;
	border:1px solid black;
	text-align:center;
	font-family:sans-serif;
}
h1 h2 h3 h4 h5 h6{
	text-align:center;
}
</style>
</head>
<body><br><br>
<div class="container">
<div class="row">
<div class="col-md-offset-9 col-md-3">
<a href="adminlogout.php"><div class="admintabs"><h2>Logout</h2></div></a>
</div>
</div><br><br>
<div class="row">
<div class="col-md-6">
<a href="addhw.php"><div class="admintabs"><h2>Add Homework</h2></div></a>
</div>
<div class="col-md-6">
<a href="deletehw.php"><div class="admintabs"><h2>Delete Homework</h2></div></a>
</div>
</div><br><br>
<a href="adminprofile.php" style="display:block; margin:auto; text-decoration:none; color:black;"><h1>Go Back</h1></a>
<br>
</div>
</body>
</html>
