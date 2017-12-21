<div class="row" style="margin-top: 75px;">

<div class="row">

    <div class="col-lg-8 col-lg-8">

         <?php

        if(!empty($_GET['sp'])){
            include_once $_GET['sp'];
        }else{
            include_once "latest_company.php";
        }

        ?>


    </div>


    <div class="col-md-1 col-sm-1">
    </div>
    <div class="col-md-3 col-sm-3">
        <div class="headline"><h1 class="text-success">Offer Category </h1></div>
        <div class="search_checkbox">
            <i class="glyphicon glyphicon-plus"></i>
            <a href="?page=discount_offer.php">All</a>
        </div>
<?php
    $ret_data = $obj->category_show();
    while($row1=mysqli_fetch_array($ret_data)){
        ?>
        <div class="search_checkbox">
            <!--<input class="" type="checkbox" value="3">-->
            <i class="glyphicon glyphicon-plus"></i>
            <a href="?page=discount_offer.php&sp=show_category_wise.php&row_id=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a>
        </div>
        <?php } ?>

    </div>
</div>

</div>