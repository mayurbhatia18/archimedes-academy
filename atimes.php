<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Archimedes Academy times</title>
	<link rel="stylesheet" type="text/css" href="fonts/headingstyle.css">
	<link rel="stylesheet" type="text/css" href="css/atimes.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins:600' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <style type="text/css">
  
  	.row{

  		margin-right: 0px !important;
  		margin-left: 0px !important;
  	}

    @media only screen and (max-device-width:500px){

a.btn-webedify{

  display: none;
}
}
table{
	border-collapse:collapse;
}
table, th, td{
	border:1px solid black;
}
th td{
	text-align:center;
	
}
tr:first-child{background-color:#cccccc}
  </style>

	</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript" src="js/tawk.js"></script>
<!--End of Tawk.to Script-->
 <body>
 <!--header start-->

<?php include 'header.html';?>
<!--header end-->

<div style="width:100%; height:auto;">

<div class="newsheading">
<h1 id="atimeshead" class="text-center">Archimedes Times</h1>
<p class="text-center" style="font-family: 'Fjalla One'; font-size:17px;color:#6D6E70;line-height: 4px;">ESTD since 2012</p><br>
<p id="date"></p>
</div>
<hr class="style-nine">
<marquee direction="left" speed="normal" behavior="loop" >
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q = "SELECT * FROM notifications WHERE not_id=1 ";
$r = mysqli_query($dbc,$q);
$notes = mysqli_fetch_assoc($r);

echo '<p style="font-size: 25px;font-family: Fjalla One;">'.$notes["notification1"]. ' &nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp; ' .$notes["notification2"]. ' &nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp; ' .$notes["notification3"].'</p>';

?>
</marquee>
<hr class="style-nine">
<!--heading end-->

<div class="row subheading">
<div class="col-md-3 col-sm-3 col-xs-6"> 
 <div class="dropdown">
    <button id="cbse" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">CBSE
    <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <script>
    var ab="c8batch1";
    </script>
    <li><a href="#" id="c8batch1" onclick="myFunction2(ab)">8th Batch 1</a></li>
    <script>
    var a="c8batch2";
    </script>
    <li><a href="#" id="c8batch2" onclick="myFunction2(a)">8th Batch 2</a></li>
    <script>
    var b="c9batch1";
    </script>
    <li><a href="#" id="c9batch1" onclick="myFunction2(b)">9th Batch 1</a></li>
    <script>
    var c="c9batch2";
    </script>
    <li><a href="#" id="c9batch2" onclick="myFunction2(c)">9th Batch 2</a></li>
    <script>
    var h="c10batch1";
    </script>
    <li><a href="#" id="c10batch1" onclick="myFunction2(h)">10th Batch 1</a></li>
    <script>
    var e="c10batch2";
    </script>
    <li><a href="#" id="c10batch2" onclick="myFunction2(e)">10th Batch 2</a></li>
  </ul>
  </div>	
  </div>

<div class="col-md-3 col-sm-3 col-xs-6"> 
 <div class="dropdown">
    <button id="icse" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">SSC
    <span class="caret"></span></button>
  <ul class="dropdown-menu">
  <script>
    var i="ssc8batch1";
    </script>
    <li><a href="#" id="ssc8batch1" onclick="myFunction2(i)">8th Batch 1</a></li>
    <script>
    var j="ssc8batch2";
    </script>
    <li><a href="#" id="ssc8batch2" onclick="myFunction2(j)">8th Batch 2</a></li>
    <script>
    var kl="ssc9batch1";
    </script>
    <li><a href="#" id="ssc9batch1" onclick="myFunction2(kl)">9th Batch 1</a></li>
    <script>
    var l="ssc9batch2";
    </script>
    <li><a href="#" id="ssc9batch2" onclick="myFunction2(l)">9th Batch 2</a></li>
    <script>
    var m="ssc10batch1";
    </script>
    <li><a href="#" id="ssc10batch1" onclick="myFunction2(m)">10th Batch 1</a></li>
    <script>
    var n="ssc10batch2";
    </script>
    <li><a href="#" id="ssc10batch2" onclick="myFunction2(n)">10th Batch 2</a></li>
  </ul>
  </div>	
  </div>

<div class="col-md-3 col-sm-3 col-xs-6"> 
 <div class="dropdown">
    <button id="ssc" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ExtraCurricular
    <span class="caret"></span></button>
  <ul class="dropdown-menu">
  <script>
    var o="s5batch1";
    </script>
    <li><a href="#" id="s5batch1" onclick="myFunction2(o)">Scholarship 5th Batch 1</a></li>
    <script>
    var p="s5batch2";
    </script>
    <li><a href="#" id="s5batch2" onclick="myFunction2(p)">Scholarship 5th Batch 2</a></li>
    <script>
    var q="s8batch1";
    </script>
    <li><a href="#" id="s8batch1" onclick="myFunction2(q)">Scholarship 8th Batch 1</a></li>
    <script>
    var r="s8batch2";
    </script>
    <li><a href="#" id="s8batch2" onclick="myFunction2(r)">Scholarship 8th Batch 2</a></li>
    <script>
    var s="h6batch1";
    </script>
    <li><a href="#" id="h6batch1" onclick="myFunction2(s)">Homibaba 6th batch 1</a></li>
    <script>
    var t="h6batch2";
    </script>
    <li><a href="#" id="h6batch2" onclick="myFunction2(t)">Homibaba 6th batch 2</a></li>
    <script>
    var u="h9batch1";
    </script>
    <li><a href="#" id="h9batch1" onclick="myFunction2(u)">Homibaba 9th batch 1</a></li>
    <script>
    var v="h9batch2";
    </script>
    <li><a href="#" id="h9batch2" onclick="myFunction2(v)">Homibaba 9th batch 2</a></li>
  </ul>
  </div>	
  </div>

<div class="col-md-3 col-sm-3 col-xs-6"> 
 <div class="dropdown">
    <button id="hsc" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">HSC
    <span class="caret"></span></button>
  <ul class="dropdown-menu">
  <script>
    var w="11batch1";
    </script>
    <li><a href="#" id="11batch1" onclick="myFunction2(w)">11th Batch 1</a></li>
    <script>
    var x="11batch2";
    </script>
    <li><a href="#" id="11batch2" onclick="myFunction2(x)">11th Batch 2</a></li>
    <script>
    var y="12batch1";
    </script>
    <li><a href="#" id="12batch1" onclick="myFunction2(y)">12th Batch 1</a></li>
    <script>
    var z="12batch2";
    </script>
    <li><a href="#" id="12batch2" onclick="myFunction2(z)">12th Batch 2</a></li>
  </ul>
  </div>
  </div>  

</div>	<!--subheading end-->
<hr class="style-eight">
<!--cbse-content-->
<div class="row cbse-content">

<!--cbse 8 batch 1 content-->
<div id="c8batch1-content"  style="display: none;">
<div class="row text-center"><h2>CBSE 8th Batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM cbsetimetable5;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><th style="text-align:center; padding:15px;">Dates</th>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<th style="text-align:center;">'.$slottime.'</th>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM cbsetimetable5 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM cbsetimetable5 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'cbse 8th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'cbse 8th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->

<!--cbse 9 batch 1 content-->

<div id="c9batch1-content" style="display: none;">
<div class="row text-center"><h2>CBSE 9th Batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');$q1 = "SELECT * FROM cbsetimetable6;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM cbsetimetable6 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM cbsetimetable6 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 6-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'cbse 9th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 6-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'cbse 9th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
</div>


<!--cbse 10 batch 1 content-->


<div id="c10batch1-content" style="display: none;">
<div class="row text-center"><h2>CBSE 10th batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM cbsetimetable7;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM cbsetimetable7 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM cbsetimetable7 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 7-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'cbse 10th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 7-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'cbse 10th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
</div>


<!--cbse 8 batch 2 content-->

<div id="c8batch2-content" style="display: none;">
<div class="row text-center"><h2>CBSE 8th batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<div style="overflow-x:auto;">
<table style="width:100%;">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');$q1 = "SELECT * FROM cbsetimetable8;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><th style="text-align:center; padding:15px;">Dates</th>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<th style="text-align:center;">'.$slottime.'</th>';
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
echo '<td style="padding:15px;">'.$date.'</td>';
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
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'cbse 8th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'cbse 8th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
</div>


<!--cbse 9 batch 2 content-->

<div id="c9batch2-content" style="display: none;">
<div class="row text-center"><h2>CBSE 9th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM cbsetimetable9;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM cbsetimetable9 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM cbsetimetable9 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'cbse 9th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'cbse 9th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
</div>


<!--cbse 10 batch 2 content-->


<div id="c10batch2-content" style="display: none;">
<div class="row text-center"><h2>CBSE 10th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM cbsetimetable10;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM cbsetimetable10 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM cbsetimetable10 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 10-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'cbse 10th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 10-->
</div>
</div>
</div>

<!--icse-content-->
<div class="row icse-content">

<!--ssc 8 batch 1 content-->

<div id="ssc8batch1-content" style="display: none">
<div class="row text-center"><h2>SSC 8th Batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM icsetimetable5;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM icsetimetable5 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM icsetimetable5 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->

<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->

<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'ssc 8th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'ssc 8th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
</div>
</div>
<!--ssc 9 batch 1 content-->

<div id="ssc9batch1-content" style="display: none">
<div class="row text-center"><h2>SSC 9th Batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');$q1 = "SELECT * FROM icsetimetable6;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM icsetimetable6 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM icsetimetable6 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 6-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'ssc 9th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }

?><!-- The Modal -->
 </div>
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 6-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'ssc 9th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
</div>
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
</div>


<!--ssc 10 batch 1 content-->

<div id="ssc10batch1-content" style="display: none">
<div class="row text-center"><h2>SSC 10th Batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');$q1 = "SELECT * FROM icsetimetable7;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM icsetimetable7 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM icsetimetable7 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 7-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'ssc 10th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 7-->
</div>
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'ssc 10th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
</div>
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
</div>


<!--ssc 8 batch 2 content-->

<div id="ssc8batch2-content" style="display: none;">
<div class="row text-center"><h2>SSC 8th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');$q1 = "SELECT * FROM icsetimetable8;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM icsetimetable8 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM icsetimetable8 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'ssc 8th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
</div>
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'ssc 8th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
</div>
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
</div>


<!--ssc 9 batch 2 content-->

<div id="ssc9batch2-content" style="display: none">
<div class="row text-center"><h2>SSC 9th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');$q1 = "SELECT * FROM icsetimetable9;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM icsetimetable9 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM icsetimetable9 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'ssc 9th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'ssc 9th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
</div>
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
</div>


<!--ssc 10 batch 2 content-->

<div id="ssc10batch2-content" style="display: none">
<div class="row text-center"><h2>SSC 10th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');$q1 = "SELECT * FROM icsetimetable10;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM icsetimetable10 WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM icsetimetable10 WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 10-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'ssc 10th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 10-->
</div>
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'cbse 10th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
</div>

</div>

<!--ssc-content-->
<div class="row ssc-content">

<!--scholarship 5 batch 1 content-->

<div id="s5batch1-content" style="display: none">
<div class="row text-center"><h2>Scholarship 5th batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM sctimetable5a;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM sctimetable5a WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM sctimetable5a WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'Scholarship 5th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'Scholarship 5th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 5-->
</div>
</div>

<!--scholarship 5 batch 2 content-->

<div id="s5batch2-content" style="display: none">
<div class="row text-center"><h2>Scholarship 5th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;"> 
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM sctimetable5b;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM sctimetable5b WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM sctimetable5b WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'Scholarship 5th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'Scholarship 5th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>

<!--scholarship 8 batch 1 content-->

<div id="s8batch1-content" style="display: none">
<div class="row text-center"><h2>Scholarship 8th batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM sctimetable6a;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM sctimetable6a WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM sctimetable6a WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'Scholarship 8th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'Scholarship 8th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>

<!--scholarship 8 batch 2 content-->

<div id="s8batch2-content" style="display: none">
<div class="row text-center"><h2>Scholarship 8th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;"> 
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM sctimetable6b;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM sctimetable6b WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM sctimetable6b WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'Scholarship 8th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'Scholarship 8th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>

<!--homibaba 6 batch 1 content-->

<div id="h6batch1-content" style="display: none">
<div class="row text-center"><h2>Homibaba 6th Batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homitimetable6a;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM homitimetable6a WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM homitimetable6a WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'Homibaba 6th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'Homibaba 6th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>


<!--homibaba 6 batch 2 content-->

<div id="h6batch2-content" style="display: none">
<div class="row text-center"><h2>Homibaba 6th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;"> 
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homitimetable6b;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM homitimetable6b WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM homitimetable6b WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'Homibaba 6th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'Homibaba 6th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>


<!--homibaba 9 batch 1 content-->

<div id="h9batch1-content" style="display: none">
<div class="row text-center"><h2>Homibaba 9th Batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homitimetable9a;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM homitimetable9a WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM homitimetable9a WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'Homibaba 9th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'Homibaba 9th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>


<!--homibaba 9 batch 2 content-->

<div id="h9batch2-content" style="display: none">
<div class="row text-center"><h2>Homibaba 9th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;"> 
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homitimetable9b;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM homitimetable9b WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM homitimetable9b WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'Homibaba 9th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'Homibaba 9th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>
</div>

<!--hsc-content-->
<div class="row hsc-content">

<!--hsc 11 batch 1 content-->

<div id="11batch1-content" style="display: none">
<div class="row text-center"><h2>HSC 11th Batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM hsctimetable11a;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM hsctimetable11a WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM hsctimetable11a WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end mo3dal-->
</div><!--end 8-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'hsc 11th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'hsc 11th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>


<!--hsc 12 batch 1 content-->


<div id="12batch1-content" style="display: none">
<div class="row text-center"><h2>HSC 12th Batch 1</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM hsctimetable12a;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM hsctimetable12a WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM hsctimetable12a WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'hsc 12th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'hsc 12th batch 1'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>


<!--hsc 11 batch 2 content-->

<div id="11batch2-content" style="display: none">
<div class="row text-center"><h2>HSC 11th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM hsctimetable11b;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM hsctimetable11b WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM hsctimetable11b WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end mo3dal-->
</div><!--end 8-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'hsc 11th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 8-->
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'hsc 11th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>


<!--hsc 12 batch 2 content-->

<div id="12batch2-content" style="display: none">
<div class="row text-center"><h2>HSC 12th Batch 2</h2>
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Time-Table</h3>
<table style="width:100%;">
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM hsctimetable12b;";
$r1 = mysqli_query($dbc,$q1);
echo '<tr><td style="text-align:center; padding:15px;">Dates</td>';
$count1 = 1;
$count2 = 1;
 while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<td style="text-align:center;">'.$slottime.'</td>';
 }
 echo '</tr>';
$q2 = "SELECT * FROM hsctimetable12b WHERE id=1 ";
$r2 = mysqli_query($dbc,$q2);
$slot = mysqli_fetch_assoc($r2);
$cols = $slot["columns"];
$rows = $slot["rows"];
echo '<tr>';
while($count1<=$rows){
$q3 = "SELECT * FROM hsctimetable12b WHERE id=$count1 ";
$r3 = mysqli_query($dbc,$q3);
$slotter = mysqli_fetch_assoc($r3);
$date = $slotter["dates"];
echo '<td style="padding:15px;">'.$date.'</td>';
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
<div class="col-md-6 col-sm-6 text-center" style="border-right: 1px solid #BBBDBF"><h3>Homework</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM homework WHERE batch= 'hsc 12th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Subject</th><th style="text-align:center;">Professor</th><th style="text-align:center;">Given On</th><th style="text-align:center;">Submit On</th></tr>';
 echo '<tr><td style="padding:15px">'.$subject.'</td><td>'.$professor.'</td><td>'.$start.'</td><td>'.$stop.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$homework.'</td></tr>';
 echo '</table></div><br>';
 }
?><!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div><!--end 9-->
</div>
<div class="col-md-12 col-sm-12 text-center" style="border-right: 1px solid #BBBDBF; overflow-x:auto;"><h3>Weekly Test</h3>
<?php
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q1 = "SELECT * FROM weeklytest WHERE batch= 'hsc 12th batch 2'";
$r1 = mysqli_query($dbc,$q1);
while($data=mysqli_fetch_array($r1)) { 
 extract($data);
 echo '<div style="overflow-x:auto;"><table style="width:100%">';
 echo '<tr><th style="text-align:center; padding:15px;">Date</th><th style="text-align:center;">Time</th><th style="text-align:center;">Subject</th></tr>';
 echo '<tr><td style="padding:15px">'.$date.'</td><td>'.$time.'</td><td>'.$subject.'</td></tr>';
 echo '<tr><td colspan="4" style="padding:15px">'.$portion.'</td></tr>';
 echo '</table></div><br>';
 }
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" style="color:#ffffff; opacity:1; "><i class="fa fa-close"></i></span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div><!--end modal-->
</div>
</div>
</div>
<br><br>

</div><!--container end-->


<?php include 'footer1.html';?>



<script>
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
</script>
  

<script>
  var f = document.getElementById('c8batch2-content');

  function myFunction2(x){
if(x == 'c8batch1')
var g = document.getElementById('c8batch1-content');
if(x == 'c8batch2')
var g = document.getElementById('c8batch2-content');
if(x == 'c9batch1')
var g = document.getElementById('c9batch1-content');
if(x == 'c9batch2')
var g = document.getElementById('c9batch2-content');
if(x == 'c10batch1')
var g = document.getElementById('c10batch1-content');
if(x == 'c10batch2')
var g = document.getElementById('c10batch2-content');
if(x == 'ssc8batch1')
var g = document.getElementById('ssc8batch1-content');
if(x == 'ssc8batch2')
var g = document.getElementById('ssc8batch2-content');
if(x == 'ssc9batch1')
var g = document.getElementById('ssc9batch1-content');
if(x == 'ssc9batch2')
var g = document.getElementById('ssc9batch2-content');
if(x == 'ssc10batch1')
var g = document.getElementById('ssc10batch1-content');
if(x == 'ssc10batch2')
var g = document.getElementById('ssc10batch2-content');
if(x == 's5batch1')
var g = document.getElementById('s5batch1-content');
if(x == 's5batch2')
var g = document.getElementById('s5batch2-content');
if(x == 's8batch1')
var g = document.getElementById('s8batch1-content');
if(x == 's8batch2')
var g = document.getElementById('s8batch2-content');
if(x == 'h6batch1')
var g = document.getElementById('h6batch1-content');
if(x == 'h6batch2')
var g = document.getElementById('h6batch2-content');
if(x == 'h9batch1')
var g = document.getElementById('h9batch1-content');
if(x == 'h9batch2')
var g = document.getElementById('h9batch2-content');
if(x == '11batch1')
var g = document.getElementById('11batch1-content');
if(x == '11batch2')
var g = document.getElementById('11batch2-content');
if(x == '12batch1')
var g = document.getElementById('12batch1-content');
if(x == '12batch2')
var g = document.getElementById('12batch2-content');
if(g.style.display == 'block')
   g.style.display = 'none';
 else
  g.style.display = 'block';

f.style.display = 'none';
f = g;
}


</script>




</body>
 </html>