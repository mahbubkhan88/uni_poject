<?php session_start(); ?>
<?php
include_once "wub_php_class.php";
$obj = new wub_php_class();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome | SaveMoney.com</title>

    <!-- Bootstrap -->
    <link rel="icon" href="logo/wub_logo.jpg"  type="image/x-icon">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link href="bootstrap/style.css" rel="stylesheet">
    <link href="bootstrap/app.css" rel="stylesheet">
    <link href="bootstrap/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/footer-v1.css">
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.min.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top nav-color">
        <div class="container ">
            <div class="navbar-header text-success">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand "><span class="text-success">SaveMoney.com</span></a>
            </div>
            <div class="collapse navbar-collapse" id="main_menu">
                <ul class="nav navbar-nav main_menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="?page=about.php">About</a></li>
                    <li><a href="?page=discount_card.php">Online Discount Card</a> </li>
                    <li><a href="?page=discount_offer.php">Promotion</a> </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Sing Up <b class="caret"></b></a>
                        <ul class="dropdown-menu ">
                            <li><a href="?page=sign_up_company.php" >Company</a></li>
                            <li><a href="?page=sign_up_customer.php" >Customer</a></li>
                        </ul>
                    </li>
                    <li><a href="?page=contact.php">Contact</a></li>

                </ul>
                <div class="top-link pull-right ">

                 <a style="margin-top:5px; color: white;" href="?page=sign_in.php"><i class="glyphicon glyphicon-log-in "> <font style="font-family:tahoma">Sign In</font></i></a>

                </div>
            </div>
        </div>
    </nav>
</header><!-- end header--->

<div class="container">
    <?php
    if(!empty($_GET['page'])){
        include_once $_GET['page'];
    }else{
        include_once "home.php";
    }
    ?>
</div>
<!--- end Services well-- >

<!----------footer start-------------->
<div class="footer-v1">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-5 md-margin-bottom-40">

                    <div class="posts">
                        <div class="headline"><h2>SaveMoney.com</h2></div>
                        <p><!--<small>-->SaveMoney.com is Bangladeshis first local services marketing platform,
                            helps you save money through its comprehensive listing of vouchers, offers,
                            deals & discounts. We grab the hottest deals in town and make them better by
                            helping you search and find the right things at the right price at the right time.
                            Everything you can get in here what you want!!!.<!--</small>--></p>
                    </div>
                </div><!--/col-md-3-->
                <!-- End About -->



                <!-- Link List -->
                <div class="col-md-3 md-margin-bottom-40">
                    <div class="headline"><h2>Useful Links</h2></div>
                    <ul class="list-unstyled link-list">
                        <li><a href="?page=about.php">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="#">Careers</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="#">How it works</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="#">Privacy Policy</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div><!--/col-md-3-->
                <!-- End Link List -->

                <!-- Address -->
                <div class="col-md-3 map-img md-margin-bottom-40">
                    <div class="headline"><h2>Contact Us</h2></div>
                    <address class="md-margin-bottom-40">
                        WUB, Road No-4, <br>
                        Dhanmondi, Dhaka <br>
                        Phone: 01914467257 <br>
                        Email: <a class="" href="mailto:info@anybiz.com">savemoney@hotmail.com</a>
                    </address>
                </div><!--/col-md-3-->
                <!-- End Address -->
            </div>
        </div>
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        2016 &copy; All Rights Reserved.
                        <a href="#">Design by </a> | <a href="#">WUB</a>
                    </p>
                </div>

                <!-- Social Links -->
                <div class="col-md-6">
                    <ul class="footer-socials list-inline">
                        <li>
                            <a data-original-title="Facebook" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a data-original-title="Skype" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                        <li>
                            <a data-original-title="Google Plus" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a data-original-title="Linkedin" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a data-original-title="Dropbox" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#">
                                <i class="fa fa-dropbox"></i>
                            </a>
                        </li>
                        <li>
                            <a data-original-title="Twitter" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div><!--/copyright-->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-2.1.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>