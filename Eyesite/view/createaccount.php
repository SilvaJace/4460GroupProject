<HTML>
  <head>
    <title>Create an Account</title>

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



<div id="create account" class="container-fluid bg-grey">
  <h2 class="text-center">CREATE AN ACCOUNT</h2>
  <div class="row">
    <div class="col-sm-4">

    </div>
    <form method='post' action='../controller/SignupController.php'>
			<pre>
				Forename: <input type='text' name='forename'>
				Surname: <input type='text' name='surname'>
				Username: <input type='text' name='username'>
				Password: <input type='text' name='password'>
				<input type='submit' value='Create Account'>
			</pre>
		</form>
</div>

  </div>

 <h2 class="text-center">I HAVE AN ACCOUNT</h2>
 
<center><li><a href="./loginscreen.php">Sign in</a></li></center>

</body>
</HTML>

