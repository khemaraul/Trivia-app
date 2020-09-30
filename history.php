<?php 
session_start();
require_once('connect.php');
$query = "select * from data";
$res = $conn->prepare($query);
$res->execute();
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
	<div class="container-fluid">
		<?php while($row = $res->fetch()){
		    $phpdate = strtotime( $row['date_posted'] );
		    $mysqldate = date( 'jS F h:i a', $phpdate );
		?>
		<p>Game <?php echo $row['id'];?> <?php echo $mysqldate;?></p>
		<p> Name : <?php echo $row['fname'];?></p>
		<p>Who is the best cricketer in the world?</p>
		<p>Answer : <?php echo $row['choose'];?></p>
		<p>What are the colors in the national flag?</p>
		<p>Answers : <?php echo $row['colors'];?></p><br />
		<?php }?>
		<center><button class="btnNext"><a href="index.php">Go Back</a></button></center>
	</div>
</body>
</html>