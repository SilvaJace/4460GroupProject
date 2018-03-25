
<?php
require_once '../util/dbinfo.php';
//require_once '../checkSession.php';
?>
<html>

<head>
    <title>My Account</title>

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
            background-color: azure;
        }
    </style>
</head>
	
<body id="myPage">

    <!-- Header -->
    <!-- <div class="jumbotron text-center">
                        <h1>Eyesite</h1>
                        <p>A welcome site for sore eyes</p>
                    </div> -->

  <!-- Navbar -->
  <?php include('header.php') ?>

	
	
<div><center><h4>My Account</h4></center>
	</div>
    <!-- Account Information -->
    <?php

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM users ";

$result = $conn->query($query); 
if(!$result) die($conn->error);


$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_NUM); 
	echo <<<_END
		<pre>
			Forename $row[0]
			Surname $row[1]
			Username $row[2]
        </pre>
        

_END;
}



$conn->close();



?>
   
   <a class='accounts' href="updateRecord.php">Edit Account</a>  </br> 
   <a class='accounts' href="deleteRecord.php">Delete Account</a>    

</body>

<footer>
 <p><center>Thank you for choosing Eyesite</center></p>
    </footer>
</html>