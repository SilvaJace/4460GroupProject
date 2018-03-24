<?php

require_once  '../util/dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['username']))
{
	$username = $_POST['username'];

	$query = "DELETE FROM users WHERE username='$username' ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: Home.php");
	
}

$conn->close();


?>