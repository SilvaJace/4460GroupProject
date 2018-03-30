<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    $link = "<a href='loginscreen.php'>Login</a>";
    $logout = '';
} else {
    $link = "<a href='My-account.php'>My Account</a>";
    $logout = "<li><a href='../controller/LogoutController.php'>Log Out</a></li>";
}
?>

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
						<a href="Style.php">Style</a>
					</li>
					<li>
						<a href="Help.php">Help</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li>
						<a href="addProduct.php">Add Product</a>
					</li><li>
						<a href="my-cart.php">My Cart</a>
					</li>
					<li>
					<?php echo $link ?>
					</li>
					<?php echo $logout ?>


				</ul>
			</div>
			<div class="home-header">
				<a href="Home.php">
					<h1 class="page-heading">EyeSite</h1>
					<p>
						<i>A Welcome Site For Sore Eyes</i>
					</p>
				</a>
			</div>
		</div>
	</nav>