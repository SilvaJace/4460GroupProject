<?php

require_once '../util/dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if (isset($_POST['username']) && isset($_POST['password'])) {

	$tmp_username = mysql_entities_fix_string($conn, $_POST['username']); 
	$tmp_password = mysql_entities_fix_string($conn, $_POST['password']); 

	$query = "SELECT * FROM users WHERE username = '$tmp_username'";
	
    $result = $conn->query($query);
	if(!$result) die($conn->error);
    $data = $result->fetch_assoc();
    $password = $data['password'];
    
    $salt1 = 'qm&h*';
	$salt2 = 'pg!@';
    $token = hash('ripemd128',"$salt1$tmp_password$salt2");
	if($token == $password){
		
		session_start();
		$_SESSION['username'] = $tmp_username;	
		$_SESSION['password'] = $tmp_password;
	
		header("Location: ../view/Home.php");
	}
	else
	{
		echo "login error<br>";
	}
	
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



?>