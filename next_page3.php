<?php 
session_start();
require_once('connect.php');
$_SESSION['choose'] = $_POST['choose'];
//echo"=".$_SESSION['choose'];die;
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
	<form name="next_page2" method="POST" action="finish_page.php" enctype="multipart/form-data">
		<div class="container-fluid">
			<label for="cars">What are the colors in the Indian national flag?</label>
  				<select name="colors[]" multiple="multiple">
    				<option value=White">White</option>
    				<option value=" Yellow"> Yellow</option>
    				<option value="Orange"> Orange</option>
    				<option value="Green">Green</option>
  				</select>
  				<center><input type="submit" name="next_btn" class="btnNext" value="Next"/></center>
  		</div>
  		</div>
 </body>
</html>