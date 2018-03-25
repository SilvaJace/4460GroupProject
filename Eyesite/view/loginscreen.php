<html>

<head>
    <title>Login Screen</title>

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
    <!-- Navbar -->
    <?php include('header.php') ?>
    
<div class="container">
            <center><form method='post' action='../controller/LoginController.php'>
                    Username: <input type='text' name='username'>
					<br>
                    Password: <input type='password' name='password'>
                    <input type='submit' value='Login'>
                </form>

      <a href="createaccount.php"> Don't Have An Account?</a>
	  </center>
      </div>

</body>

</html>