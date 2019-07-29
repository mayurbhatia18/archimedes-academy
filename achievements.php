<?php
session_start();
if(!isset($_SESSION['email'])){
	header ('Location:adminlogin.php');
	}

if($_POST)
{
	$name=$_POST['name'];
	$batch=$_POST['batch'];
	$text=$_POST['achievement'];
	if(isset($_FILES['files'])){
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
        /*if($file_size > 10485760){
			$errors[]='File size must be less than 10 MB';
        }	*/	
       
        $desired_dir="achievements";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0755);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                $target= "$desired_dir/".$file_name;
			}else{									// rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;
                 $target= "$desired_dir/".$file_name.time();				 
            }
		$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
		$q = "INSERT INTO achievements (image,name,batch,text) VALUES ('$target','$name','$batch','$text')";
		mysqli_query($dbc,$q);
		}
    }
}

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Achievements</title>
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
<h1 style="text-align:center;">Achievements</h1><br><br>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
<div class="container">
<div class="row">
<div class="form-group col-md-6 col-md-offset-5">
<label>Marks Image:</label>
<input type="file" name="files[]" multiple="" />
</div>
</div>
<div class="row">
<div class="col-md-offset-5 col-md-6">
<label>Name:</label><br>
<input type="text" name="name" required />
</div>
</div>
<div class="row">
<div class="col-md-offset-5 col-md-6">
<label>Batch:</label><br>
<input type="text" name="batch" required />
</div>
</div>
<div class="row">
<div class="col-md-offset-5 col-md-6">
<label>Achievement:</label><br>
<textarea cols="60" rows="10" name="achievement">
</textarea>
</div>
</div>
<div class="row">
<div class="col-md-6 col-md-offset-5">
<input type="submit" name="submit" class="btn btn-default btn-lg" value="Upload" />
</div>
</div>
</div>
</form>
</div>
</section>
</body>
</html>