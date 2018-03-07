<html>

<head>
	<title>EyeSite</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>

		.home-header {
			text-align: center;
		}
	</style>
</head>

<body id="myPage">

	<!-- Header -->
	<!-- <div class="jumbotron text-center">
                        <h1>EyeSite</h1>
                        <p>A Welcome Site For Sore Eyes</p>
                    </div> -->

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


	<!-- Portfolio -->
	<div id="portfolio" class="container-fluid text-center bg-grey">

		<h2>Trending Everywhere!</h2>
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>

			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<a href="mens.html">
						<center>
							<img height='' width='' src='../img/StephenColbert.jpg'>
						</center>
					</a>
					<h4>"Keep a man seeing as sharp as he looks"
						<br>
						<span>For Men</span>
					</h4>
				</div>
				<div class="item">
					<a href="womens.html">
						<center>
							<img height='332' width='605' src='../img/EmmaStone.jpg'>
						</center>
						<h4>"Beautiful eyes preserved to match the beauty beheld"
							<br>
							<span>Fandango</span>
						</h4>
				</div>
				<div class="item">
					<a href="style.html">
						<center>
							<img height='332' width='605' src='../img/JDepp.jpg'>
						</center>
						<h4>"Coding has never looked this good"
							<br>
							<span>Stylish</span>
						</h4>
				</div>
				<div class="item">
					<a href="help.html">
						<center>
							<img height='332' width='605' src='../img/Questioned.jpg' </center>
							<h4> "Can't find what you're looking for? Ask us!"
								<br>
								<span>Support</span>
							</h4>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
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
		<p>Back to Top</p>
	</footer>

</body>

</html>
