<?php
session_start();
require_once('connect.php');
$_SESSION['fname'] = $_REQUEST['fname']
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trivia App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<form name="next_page2" method="POST" action="next_page3.php" enctype="multipart/form-data">
		<div class="container-fluid">
			<label for="cars">Who is the best cricketer in the world?</label>
  				<select name="choose">
    				<option value="Sachin Tendulkar">Sachin Tendulkar</option>
    				<option value="Virat Kolli">Virat Kolli</option>
    				<option value=" Adam Gilchirst"> Adam Gilchirst</option>
    				<option value="Jacques Kallis">Jacques Kallis</option>
  				</select>
  				<center><input type="submit" name="next_btn" class="btnNext" value="Next"/></center>
  		</div>
</div>
 </body>
</html>