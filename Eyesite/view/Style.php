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
    <!-- Products -->
    </div>
    <div class="container">
        <div class="row">
            <div class='col-12 col-sm-3'>
                <img src="../img/CodingM.jpg" class="img-fluid" alt="Responsive Image" height="200" width="225">
                <img>
            </div>
            <div class='col-12 col-sm-3'>
                <img src='../img/EmmaS4.jpg' class="img-fluid" alt="Responsive Image" height="200" width="200">
                <img>
            </div>
            <div class='col-12 col-sm-3'>
                <img src='../img/ChrisH.jpg' class="img-fluid" alt="Responsive Image" height="200" width="225">
                <img>
            </div>
            <div class='col-12 col-sm-3'>
                <img src='../img/CodingW.jpg' class="img-fluid" alt="Responsive Image" height="200" width="175">
                <img>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                <!-- PRICE ITEM -->
                <div class="panel price panel-red">
                    <div class="panel-heading  text-center">
                        <h3>Glasses 1</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px">
                            <strong>$239</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Lens
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Clear</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Transition</a>
                                    <br>
                                    <a class="dropdown-item" href="#">BlueLight Protective</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Frame Color
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Red</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Blue</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Black</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Size
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Small</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Medium</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Large</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">Add To Cart</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->


            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                <!-- PRICE ITEM -->
                <div class="panel price panel-blue">
                    <div class="panel-heading  text-center">
                        <h3>Glasses 2</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px">
                            <strong>$339</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Lens
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Clear</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Transition</a>
                                    <br>
                                    <a class="dropdown-item" href="#">BlueLight Protective</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Frame Color
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Red</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Blue</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Black</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Size
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Small</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Medium</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Large</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">Add To Cart</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->


            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                <!-- PRICE ITEM -->
                <div class="panel price panel-green">
                    <div class="panel-heading  text-center">
                        <h3>Glasses 3</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px">
                            <strong>$249</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Lens
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Clear</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Transition</a>
                                    <br>
                                    <a class="dropdown-item" href="#">BlueLight Protective</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Frame Color
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Red</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Blue</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Black</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Size
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Small</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Medium</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Large</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">Add To Cart</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->


            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                <!-- PRICE ITEM -->
                <div class="panel price panel-grey">
                    <div class="panel-heading  text-center">
                        <h3>Glasses 4</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px">
                            <strong>$329</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Lens
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Clear</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Transition</a>
                                    <br>
                                    <a class="dropdown-item" href="#">BlueLight Protective</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Frame Color
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Red</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Blue</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Black</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Size
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Small</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Medium</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Large</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">Add To Cart</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->


            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                <!-- PRICE ITEM -->
                <div class="panel price panel-grey">
                    <div class="panel-heading  text-center">
                        <h3>Glasses 5
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px">
                            <strong>$529</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Lens
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Clear</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Transition</a>
                                    <br>
                                    <a class="dropdown-item" href="#">BlueLight Protective</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Frame Color
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Red</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Blue</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Black</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Size
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Small</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Medium</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Large</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">Add To Cart</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->


            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                <!-- PRICE ITEM -->
                <div class="panel price panel-green">
                    <div class="panel-heading  text-center">
                        <h3>Glasses 6
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px">
                            <strong>$129</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Lens
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Clear</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Transition</a>
                                    <br>
                                    <a class="dropdown-item" href="#">BlueLight Protective</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Frame Color
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Red</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Blue</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Black</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Size
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Small</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Medium</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Large</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">Add To Cart</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->


            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                <!-- PRICE ITEM -->
                <div class="panel price panel-blue">
                    <div class="panel-heading  text-center">
                        <h3>Glasses 7
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px">
                            <strong>$179</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Lens
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Clear</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Transition</a>
                                    <br>
                                    <a class="dropdown-item" href="#">BlueLight Protective</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Frame Color
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Red</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Blue</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Black</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Size
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Small</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Medium</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Large</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">Add To Cart</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->


            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                <!-- PRICE ITEM -->
                <div class="panel price panel-red">
                    <div class="panel-heading  text-center">
                        <h3>Glasses 8
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px">
                            <strong>$269</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Lens
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Clear</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Transition</a>
                                    <br>
                                    <a class="dropdown-item" href="#">BlueLight Protective</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Frame Color
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Red</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Blue</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Black</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <i class="icon-ok text-danger"></i>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select a Size
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Small</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Medium</a>
                                    <br>
                                    <a class="dropdown-item" href="#">Large</a>
                                    <br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">Add To Cart</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->


            </div>


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
        <p>Thank you for choosing Eyesite</p>
    </footer>

</body>

</html>