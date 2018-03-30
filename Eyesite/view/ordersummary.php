<?php
require_once 'login.php';
require_once '../util/dbinfo.php';
require_once '../checkSession.php';



$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);
?>
 
<html>

<title>Order Summary</title>

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


  
  <div id="ordersummary" class="container-fluid text-center">
  <h2>Order Summary</h2>
	