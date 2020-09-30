<?php 
session_start();
require_once('connect.php');
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
	<form name="next_page2" method="POST" action="next_page2.php" enctype="multipart/form-data">
		<div class="container-fluid">
			<label>What is your name?</label>
			<input type="text" name="fname" value=""><br />
			<center><input type="submit" name="next_btn" class="btnNext" value="Next"/></center>
		</div>
	</form>
	</div>
</body>
</html>