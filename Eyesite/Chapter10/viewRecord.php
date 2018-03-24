<?php

echo "<a href=addRecord.php>Add new record</a>";


require_once  'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM classics";

$result = $conn->query($query); 
if(!$result) die($conn->error);
//are you expecting something to return? Yes, get rows (for loop). No, close connection.

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_NUM); 
	echo <<<_END
		<pre>
			Author <a href='updateRecord.php?isbn=$row[4]'>$row[1]</a>
			Title $row[2]
			Category $row[3]
			Year $row[4]
			ISBN $row[0]
		</pre>
		
		<form method='post' action='deleteRecord.php'>
			<input type ='hidden' name ='isbn' value='$row[0]'>
			<input type='submit' value='DELETE RECORD'>
		</form>
_END;
}

$conn->close();



?>