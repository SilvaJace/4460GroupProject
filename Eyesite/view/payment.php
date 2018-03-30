<?php
require_once 'login.php';
require_once '../util/dbinfo.php';
require_once '../checkSession.php';



$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);
?>
 
<html>

<title>Payment Info</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
         .home-header {
            text-align: center;
        }
    </style>
 <link rel="stylesheet" href="../CSS/styles.css">
</header>


<body>

   <body id="myPage">

    <!-- Navbar -->
	<?php include('header.php') ?>


  
  <div id="payment-information" class="container-fluid text-center">
  <h2>Payment Information</h2>
	
<?php
echo <<<_END
<form action="ordersummary.php" method="post"<pre>
	First & Last Name <input type="text" name="custname"></br></br>
	Card Number <input type="text" name="cardnumber"></br></br>
	Payment Type <input type="text" name="payment_type"></br></br>
	Exp Month <input type="text" name="exp_month"></br></br>
	Exp Year <input type="text" name="exp_year"></br></br>
	
	<input type="submit" name="PAY">
	</br></br>
	<br>
</pre></form>
_END;


if(isset($_POST['custname']) &&
	isset($_POST['cardnumber']) &&
	isset($_POST['payment_type']) &&
	isset($_POST['exp_month']) &&
	isset($_POST['exp_year'])) {
		$custname=get_post($conn, 'custname');
		$cardnumber=get_post($conn, 'cardnumber');
		$payment_type=get_post($conn, 'payment_type');
		$exp_month=get_post($conn, 'exp_month');
		$exp_year=get_post($conn, 'exp_year');
		$query="INSERT INTO payment (custname, cardnumber, payment_type, exp_month, exp_year) VALUES ".
			"('$custname','$cardnumber','$payment_type','$exp_month','$exp_year')";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
	//$result->close();
	
}

$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>	
	
	</body>



















</html>
