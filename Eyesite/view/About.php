<?php
require_once '../util/dbinfo.php';
require_once '../checkSession.php';
?>

<html>

<head>
    <title>Stylin' Wear</title>

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
    <link rel="stylesheet" href="../CSS/styles.css">
</head>

<body id="myPage">

    <!-- Navbar -->
	<?php include('header.php') ?>
    
	
	  <div id="products" class="container-fluid text-center">
  <h2>About Us</h2>
		  
		  <h3> Digital Eye Strain </h3>
		  <p> In an increasingly technology-driven world, we find ourselves staring at screens for hours everyday. We are committed to adapting to this and protecting your eyes against unneccesary eye strain. Feel the difference as you avoid headaches and long-term eye strain with our glasses. </p>
		  <p> Thank you for visiting! Tell your friends! <p>
		  
		  
	</div>
	
    

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
        <p>Thank you for choosing Eyesite</p>
    </footer>

</body>

</html>
