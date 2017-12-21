<?php
include_once "wub_php_class.php";
$obj = new wub_php_class();
?>

<div class="container" id="slider" style="margin-top:0;"> <!----start slide ---->
    <section>
        <div class="page-header" id="gallery">
        </div>
        <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#screenshot-carousel" data-slide-to="1"></li>
                <li data-target="#screenshot-carousel" data-slide-to="2"></li>
                <li data-target="#screenshot-carousel" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner">

                <div class="item active">
                        <img class="img-responsive " src="slider/hanif-enterprise.jpg" width="1000px" height="320px">
                  <div class="carousel-caption">
                     </div>
                     </div>
                <div class="item ">
                    <img class="img-responsive " src="slider/hotel%20today.jpg" width="1000px" height="320px">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive " src="slider/kfc.jpg" width="1000px" height="320px">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div><!--- end carousel inner --->

            <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!---end carousel --->
    </section>
</div> <!------ end slider-------->

<!------ Welcom Services Row-------->
<?php
include_once "wub_php_class.php";
$obj = new wub_php_class();
?>

<div class="headline"><h1 class="text-success">
    Welcome To Our Discount Card</h1></div>
<div class="row">
    <?php
    $ret_data = $obj->data_show_discountcard();
    while($row=mysqli_fetch_array($ret_data)){
        ?>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img class="img-responsive " src="discountcard/<?php echo $row['card']; ?>" width="150px" height="150px">
                <div class="caption text-center">
                    <h4><?php echo $row['title']; ?></h4>
                    <h4 class="text-center"> <a href="?page=discount-single.php&row_id=<?php echo $row['id']; ?>" class="btn btn-success"><?php echo $row['company_name']; ?>View Details</a></h4>
                </div>
            </div>
        </div>
        <?php } ?></div> <!------ end Welcom Services Row-------->


<div class="headline"><h1 class="text-success">
    Latest Discount Offer Product</h1></div>
<div class="row"> <!---Introduction software source row--->
    <?php
    $product_data = $obj->discount_all_product_show();
    while($row=mysqli_fetch_array($product_data)){
        ?>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img class="img-responsive " src="img_product/<?php echo $row['image']; ?>" width="200px" height="200px">
            <div class="caption text-center">
                <h4><?php echo $row['prod_name']; ?></h4>
                <h4 class="text-center"> <a href="?page=discount-single.php&row_id=<?php echo $row['id']; ?>" class="btn btn-success"><?php echo $row['company_name']; ?>View Details</a></h4>
                <p class="text-center"><?php echo $row['discount']; ?></p>
            </div>
        </div>
    </div>
<?php } ?></div> <!--- end Introduction software source row--->

