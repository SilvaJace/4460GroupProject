<html>

<head>
    <title>Logout</title>

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

<body>

<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		   <a class="navbar-brand" href="#myPage"></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
		  <li><a href="Home.php">Home</a></li>
		 <li><a href="loginscreen.html">Login</a></li>
		</div>
	  </div>
	 <div class="home-header">
                <a href="Home.html">
                    <h1 class="page-heading">Eyesite</h1>
                    <p>
                        <i>A Welcome Site For Sore Eyes</i>
                    </p>
                </a>
            </div>



</body>

</html>



<?php


session_start(); 


if(isset($_SESSION['username']))
{
	$_SESSION = array();
	setCookie(session_name(), '', time()-2592000, '/');
	session_destroy();
	
		echo "<div style='text-align: center; color:black; font-size: 20px;'> User Successfully Logged Out</div>";
}





?>