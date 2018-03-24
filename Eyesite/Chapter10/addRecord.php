<html>
	<head>	
	</head>
	
	<body>
		<form method='post' action='addRecord.php'>
			<pre>
				Forename: <input type='text' name='forename'>
				Surname: <input type='text' name='surname'>
				Username: <input type='text' name='username'>
				Password: <input type='text' name='password'>
				<input type='submit' value='Create Account'>
			</pre>
		</form>
	</body>
</html>


<?php

require_once '../util/dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_POST['forename']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['password'])) {
	$forename = $_POST['forename'];
	$surname = $_POST['surname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "INSERT INTO users (forename, surname, username, password) VALUES ('$forename', '$surname','$username', '$password')";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
}

$conn->close;


?>