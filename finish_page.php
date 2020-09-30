<?php 
session_start();
require_once('connect.php');
$_SESSION['colors'] = $_POST['colors'];
//print_r($_SESSION['colors']);die;
$string = implode(',',$_SESSION['colors']);
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
<?php 
$query = "insert into data(fname,choose,colors,date_posted)Values('".$_SESSION['fname']."','".$_SESSION['choose']."','".$string."',now())";
$result = $conn->prepare($query);
$result->execute();
?>
<body>
	<div class="container-fluid">
		<h1>Summary</h1>
		<p>Hello <?php echo $_SESSION['fname'];?></p>
		<p>Who is the best cricketer in the world?</p>
		<p>Answer: <?php echo $_SESSION['choose'];?></p>
		<p>What are the colors in the national flag?</p>
		<p>Answer: <?php echo $string;?></p>
		<center><button class="btnNext"><a href="index.php">Finish</a></button></center>
	</div>
</body>
</html>