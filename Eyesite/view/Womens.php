<?php
require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

?>


<html>

<head>
    <title>Women's Frames</title>

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
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#myPage">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="Mens.php">Mens</a>
                    </li>
                    <li>
                        <a href="Womens.php">Womens</a>
                    </li>
                    <li>
                        <a href="Style.html">Style</a>
                    </li>
                    <li>
                        <a href="Help.html">Help</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="my-account.html">My Account</a>
                    </li>
                    <li>
                        <a href="my-cart.html">My Cart</a>
                    </li>
                    <li>
                        <a href="login.html"> Login</a>
                    </li>

                </ul>
            </div>
            <div class="home-header">
                <a href="Home.html">
                    <h1 class="page-heading">EyeSite</h1>
                    <p>
                        <i>A Welcome Site For Sore Eyes</i>
                    </p>
                </a>
            </div>
        </div>
    </nav>


  
  <div id="products" class="container-fluid text-center">
  <h2>WOMENS FRAMES</h2>


  
<?php


$query = "select * from glasses where gender='f'";

$result = $conn->query($query);
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; ++$j)
{
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);
	
	echo <<<_END
	   <br>
  <div class="row">
    <div class="col-sm-12">
	$row[1]
	<br>
	Starting at: $$row[2]
	<br>
	$row[3]
	<br>
		  <button class="btn btn-lg"><a href="viewproduct.php"> Purchase</a></button>
	</div>
	</div>
	
	</pre>
	
_END;
}

$conn->close();

?>


</div>
<html>
<body>

    <!-- Contact -->
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">CONTACT US</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p>
                    <span class="glyphicon glyphicon-map-marker"></span> Salt Lake City, US</p>
                <p>
                    <span class="glyphicon glyphicon-phone"></span> +1 801-393-7483</p>
                <p>
                    <span class="glyphicon glyphicon-envelope"></span> info@eyesite.com</p>
            </div>
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                <br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Back to Top</p>
    </footer>

</body>

</html>