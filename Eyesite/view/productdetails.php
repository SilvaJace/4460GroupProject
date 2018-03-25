<?php
require_once 'login.php';
require_once '../util/dbinfo.php';
require_once '../checkSession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

 if(isset($_GET['product_id'])){
                    
        $product_id = $_GET['product_id'];
        
        $query = "select * from glasses where product_id='$product_id' ";
        $result = $conn->query($query);
        if(!$result) die ($conn->error);
        $data = $result->fetch_array(MYSQLI_NUM);	
    }

?>

<html>
<header>
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
</head>

<body id="myPage">

    <!-- Navbar -->
	<?php include('header.php') ?>


  
  <div id="productdetails" class="container-fluid text-center">
  <h2>Product Details</h2>
	<div class="container" style="margin-top: 25px; ">
        <div class="row">
            <div class="col-12 col-sm-5">
                <img src=<?php echo $data[0]?> alt="" style="width: 100%;"/>
            </div>
            <div class="col-12 col-sm-3">
                    <div class="Frame"><?php echo $data[1]?></div>
                    <div class="Price">$<?php echo $data[2]?></div>
					<div class="Size"><?php echo $data[3]?></div>
					<div class="Gender"><?php echo $data[5]?></div>
                    <hr>
                    <div class="cart-button">
                        <form method="POST" action='my-cart.php'>
                            <input type="hidden" name="product_id" value=<?php echo $data[4] ?>>
                            <input type="submit" name="cart-button" value="Add to Cart" class="btn btn-primary btn-lg">
                        </form>                  </div>
               </div>
        </div>
    </div>
	
	
	
	
	
	
	
	
	</html>
	
