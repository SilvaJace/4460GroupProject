<?php
require_once 'login.php';
require_once '../util/dbinfo.php';
require_once '../checkSession.php';



$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);
$summary = "No items in cart.";

    if(isset($_POST['product_id'])){
        $product_id = $_POST['product_id'];

        // create order and retrieve ID
        $date_paid =  date(DATE_RFC2822);
        $order_query = "insert into `ordertable` (`date_paid`) values ('$date_paid') ";
        $conn->query($order_query);
        $order_id = $conn->insert_id;
	
        
        // create order line
        $order_line_query = "insert into `order_line` (`orderid`, `productid`) values ('$order_id', '$product_id')";
        $conn->query($order_line_query);


        $select_query = "select * from glasses where product_id='$product_id' ";
        $select_result = $conn->query($select_query);
        if(!$select_result) die ($conn->error);
        $data = $select_result->fetch_array(MYSQLI_NUM);	
		
		
	
        
$summary = <<<_END
<div class="row">
    <div class="col-12 col-sm-5">
        <img src=$data[0] alt="" style="width: 100%;"/>
    </div>
    <div class="col-12 col-sm-3">
        <div class="product-details" style="text-align:center;">
            <div class="frame">$data[1]</div>
            <div class="price">$$data[2]</div>            
            <div class="size">$data[3]</div>            
            <div class="gender">$data[5]</div>            
        </div>
    </div>
</div>
_END;
    }
?>

<html>

<header>

 <title>My Cart</title>

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


  
  <div id="my-cart" class="container-fluid text-center">
  <h2>My Cart</h2>
			
	</nav>


</body>

<!--Container-->
	<div class="container" style="margin-top: 25px; ">
        <h1> <font color="black" style="font-size: 4rem; text-align:center;">Cart Summary</font></h1>
        <?php echo $summary?>     
        <?php echo $order_id ?>
		 <div class="cart-button">
                       <center><form method="POST" action='payment.php'>
                            <input type="submit" name="checkout" value="Proceed to Payment" class="btn btn-primary btn-lg"></form>
							<form method="POST" action='Home.php'>
							<input type="submit" name="continue shopping" value="Continue Shopping" class="btn btn-primary btn-lg">
							 <input type="hidden" name="product_id" value=<?php echo $data[4] ?>>
					</center>                 
				</div>		
        <hr>
    </div>
	
</html>
<?php $conn->close(); ?>