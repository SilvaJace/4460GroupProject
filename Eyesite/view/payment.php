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
<form action="payment.php" method="post"<pre>
	Card Number <input type="text" name="cardnumber"></br></br>
	Payment Type <input type="text" name="productimage"></br></br>
	Exp Month <input type="text" name="color"></br></br>
	Exp Year <input type="text" name="price"></br></br>
	
	<input type="submit" name="PAY">
	</br></br>
	<br>
</pre></form>
_END;


if(isset($_POST['productid']) &&
	isset($_POST['productname']) &&
	isset($_POST['productimage']) &&
	isset($_POST['color']) &&
	isset($_POST['price'])) {
		$productid=get_post($conn, 'productid');
		$productname=get_post($conn, 'productname');
		$productimage=get_post($conn, 'productimage');
		$color=get_post($conn, 'color');
		$price=get_post($conn, 'price');
		$query="INSERT INTO product (productid, productname, productimage, color, price) VALUES ".
			"('$productid','$productname','$productimage','$color','$price')";
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
