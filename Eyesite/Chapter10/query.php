<?php

//get db credentials
require_once 'login.php';

//get connection to db
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

//create and run query and get result
$query = "select * from classics";
$result = $conn->query($query);
if(!$result) die($conn->error);


$rows = $result->num_rows;


for($j=0; $j<$rows; ++$j){
	$result->data_seek($j);
	echo 'Author: '.$result->fetch_assoc()['author'].'<br>';

	
}


?>