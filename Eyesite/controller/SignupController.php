<?php
require_once '../util/dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

print_r($_POST);
if (isset($_POST['username']) && isset($_POST['password'])) {
    $forename = $_POST['forename'];
	$surname = $_POST['surname'];
	$username = $_POST['username'];
		
    $tmp_password = mysql_entities_fix_string($conn, $_POST['password']); 
    
	$salt1 = 'qm&h*';
	$salt2 = 'pg!@';
    $token = hash('ripemd128',"$salt1$tmp_password$salt2");
    $query = "INSERT INTO users (forename, surname, username, password) VALUES ('$forename', '$surname','$username', '$token')";

	$result = $conn->query($query); 
    if(!$result) die($conn->error);

    session_start();
    $_SESSION['username'] = $tmp_username;	
    $_SESSION['password'] = $tmp_password;
     header("Location: ../view/Home.php");

	
}else{
	exit();
}

function mysql_entities_fix_string($conn, $string){
	return htmlentities(mysql_fix_string($conn, $string));	
}

function mysql_fix_string($conn, $string){
	if(get_magic_quotes_gpc()) $string = stripslashes($string);
	return $conn->real_escape_string($string);
}











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