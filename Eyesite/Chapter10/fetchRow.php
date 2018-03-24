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

//rows = the number of result entities (number of rows)
$rows = $result->num_rows;

//loop through the rows
for($j=0; $j<$rows; ++$j){
	
	//data_seek is a php function that goes through and finds the data
	$result->data_seek($j);
	//fetch the array
	$row = $result->fetch_array(MYSQLI_ASSOC);
	//echo some of the data
	echo 'Author: '.$row['author'].'<br>';
	echo 'Title: '.$row['title'].'<br>';
	
}

//close the connection
$result->close();
$conn->close();


?>