<html>
	<head>	
	</head>
	
	<body>
	<title>Account Created!</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

	.home-header {
		text-align: center;
	}
</style>
<link rel="stylesheet" href="../CSS/styles.css">
</head>

<body id="myPage">

<!-- Navbar -->
<?php include('header.php') ?>
	</body>
</html>


<?php

require_once '../util/dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if(isset($_POST['forename']) &&
isset($_POST['surname']) &&
isset($_POST['username']) &&
	isset($_POST['password'])) {
	$forename = $_POST['forename'];
	$surname = $_POST['surname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	
	$query = "INSERT INTO users (forename, surname, username, password) VALUES ('$forename', '$surname','$username', '$password')";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
}

$conn->close();


?>