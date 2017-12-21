<?php session_start(); ?>
<?php
  $log = $_SESSION['login'];
    if($log=='login'){
?>
<?php
    include_once"../wub_php_class.php";
    $obj = new wub_php_class();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>SUPER</span> ADMIN</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                        <?php
                        if(isset($_SESSION['user_name'])) {
                            echo $_SESSION['user_name'];
                        }
                        ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="home.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Dashboard</a></li>
        <li><a href="?page=add_slider.php"><span><i class="glyphicon glyphicon-plus"></i></span> Add Slider</a></li>
        <li><a href="?page=add_category.php"><span><i class="glyphicon glyphicon-plus"></i></span> Add Category</a></li>
        <li><a href="?page=add_product.php"><span><i class="glyphicon glyphicon-plus"></i></span> Add Discount Product</a></li>
        <li><a href="?page=add_discount.php"><span><i class="glyphicon glyphicon-plus"></i></span> Add Discount Card</a></li>
        <li><a href="?page=customer_poduct_buy.php"><span><i class="glyphicon glyphicon-plus"></i></span>Customer Purchases Poduct</a></li>
        <li><a href="?page=search_discount_id.php"><span><i class="glyphicon glyphicon-plus"></i></span> Search</a></li>
        <li><a href="?page=all_category.php"><span><i class="glyphicon glyphicon-th-large"></i></span> All Category</a></li>
        <li><a href="?page=all_discount_card.php"><span><i class="glyphicon glyphicon-th-large"></i></span> All Discount Card</a></li>
        <li><a href="?page=all_company.php"><span><i class="glyphicon glyphicon-th-large"></i></span> All Company</a></li>
        <li><a href="?page=all_customer.php"><span><i class="glyphicon glyphicon-th-large"></i></span> All Customer</a></li>
    </ul>

</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="container">
        <?php
        if(!empty($_GET['page'])){
            include_once $_GET['page'];
        }else{
            include_once "home.php";
        }
        ?>
    </div>

</div>	<!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
<?php /*$obj->show_company_product();*/ ?>
<script>
    function company_name(){
        // Initiate Variables With Form Content
        var comp_name = $("#comp_name").val();

        $.ajax({
            type: "POST",
            url: "product_category.php",
            data: "comp_name=" + comp_name,
            success : function(result){
                document.getElementById("ProductName").innerHTML=result;
            }
        });
    }
</script>
</body>

</html>
<?php
    }else{
        session_destroy();
        echo"<script>window.location.href='index.php'</script>";
    }
?>