<?php

require_once '../util/dbinfo.php';
require_once '../checkSession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
?>

<html>
<head>
<title>Add Product</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    h1.page-heading {
        text-decoration: underline;
    }

    .home-header {
        text-align: center;
        background-color: rgb(255, 255, 255);
    }
</style>
<link rel="stylesheet" href="../CSS/styles.css" >
</head>
<body>
</body>
</html>
<?php include('header.php') ?>
<?php
$username = $_SESSION['username'];

$query="SELECT `role` FROM `roles` WHERE `username` = '$username'";
		$result=$conn->query($query);
		if(!$result) echo "Query failed: $query <br>" .
			$conn->error . "<br><br>";

		$rows = $result->num_rows;		
	
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$role = $row['role'];

		
		
		if($role == 'admin'){
		}else{
			header("Location: Home.php");
			exit();
		}

echo <<<_END
<form action="addProduct.php" method="post"<pre>
	Glasses Frame <input type="text" name="frame"></br></br>
	Size <input type="text" name="size"></br></br>
	Price <input type="text" name="price"></br></br>
	Gender <input type="text" name="gender"></br></br>
	Image HTML <input type="text" name="img"></br></br>
	
	<input type="submit" name="ADD RECORD">
	</br></br>
	<a href="home.php" >Home Page</a>
</pre></form>
_END;


if(isset($_POST['frame']) &&
isset($_POST['size']) &&
isset($_POST['price']) &&
	isset($_POST['gender']) &&
	isset($_POST['img'])) {
		$frame=get_post($conn, 'frame');
		$size=get_post($conn, 'size');
		$price=get_post($conn, 'price');
		$gender=get_post($conn, 'gender');
		$img=get_post($conn, 'img');
		$query="INSERT INTO glasses (frame, size, price, gender, img) VALUES ".
			"('$frame','$size', '$price', '$gender', '$img')";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
}

$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>