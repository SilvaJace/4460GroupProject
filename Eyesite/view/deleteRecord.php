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

<body>
</body>
</html>
<?php include('header.php') ?>
<?php
require_once  '../util/dbinfo.php';
require_once '../checkSession.php';
$result = $conn->query($query); 
if(!$result) die( "<div class='flash-message' style='position: relative;'>$conn->error</div>"  );
$rows = $result->num_rows;
?>
<!doctype html>
<html>
    <body>    
        <div class="container listings-container"  >
            <h1 class="home-title">Delete Account</h1>
			<div class="container contact-form-container">
				<form method='post' action='../controller/deleteRecordcontroller.php'>
					<fieldset disabled>
                    <div class="form-group row">
                        <label for="fName" class="col-lg-3 col-form-label form-control-label">First name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="fName" value="First">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lName" class="col-lg-3 col-form-label form-control-label">Last name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="lName" value="Last">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-lg-3 col-form-label form-control-label">Username</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="delete-email" value="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="password" id="password" value="PassPhrases are better">
                        </div>
                    </div>
					</fieldset>
                    <div class="form-group row">
                        <div class="col-lg">
							<p class="text-danger">This action is irreversible. Are you sure you want to do this?</p>
                            <input type="submit" class="btn btn-danger" value="Delete Account">
                        </div>
                    </div>
                </form>
			</div>
		<hr>
		<div class="row">
		<?php
for($j=0; $j<$rows; $j++)
{
$result->data_seek($j); 
$row = $result->fetch_array(MYSQLI_NUM); 
}
?>
    </div>
	</div>
	</body>

</html>
