<html> 

<head>
	<title>EyeSite</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>

		.home-header {
			text-align: center;
		}
	</style>
</head>

<body>
</body>
</html>
<?php include('header.php') ?>
<?php

require_once '../util/dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if(isset($_GET['username'])){
	
	$isbn = $_GET['username'];
	
	$query = "select * from users where username='$username' ";
	$result = $conn->query($query);
	if(!$result) die ($conn->error);
	
$rows = $result->num_rows;

	for($j=0; $j<$rows; ++$j){
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	<pre>
	<form method='post' action='../controllers/updateRecordcontroller.php'>
		username: <input type='text' name='username' value='$row[2]'>
		forename: <input type='text' name='forename' value='$row[0]'>
		surname: <input type='text' name='surname' value='$row[1]'>
		password: <input type='text' name='password' value='$row[3]'>
		<input type='hidden' name='id' value='$row[0]'>
		<input type='hidden' name='update' value='yes'>
		<input type='submit'>
	</form>	
	</pre>
	
_END;
	
	}
}

if(isset($_POST['update'])){
	
	$username = $_POST['username'];
	$forename = $_POST['forename'];
	$surname = $_POST['surname'];
	$password = $_POST['password'];
	
	
	$query = "update users set username='$username', forename='$forename', title='$surname', category='$password' where username = $username ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: Home.php");
	
}

$conn->close();

?>