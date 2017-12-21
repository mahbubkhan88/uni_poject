<div class="row" style="margin-top: 75px;">


<?php
/*include_once "wub_php_class.php";
$obj = new wub_php_class();
*/?>
<div class="headline"><h1 class="text-success">Welcome To Our Discount Card </h1></div>
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
                   <h4 class="text-center"> <a href="?page=discount-single.php&row_id=<?php echo $row['id']; ?>&card_title=<?php echo $row['title']; ?>" class="btn btn-success"><?php echo $row['company_name']; ?>View Details</a></h4>
                </div>
            </div>
        </div>
        <?php } ?>
</div> <!------ end Welcom Services Row-------->
</div>