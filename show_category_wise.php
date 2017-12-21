<?php
$id = $_GET['row_id'];
?>
<div class="row" >
    <div class="row">
        <div class="col-lg-12 col-lg-12">
            <div class="headline"><h1 class="text-success">All Offer</h1></div>
            <div class="row">
                <div class="col-sm-12 col-sm-12">

                    <?php
                    $ret_data = $obj->cat_wise_show_allcompany($id);
                    while($row=mysqli_fetch_array($ret_data)){
                        ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img class="img-responsive  " src="img_comp/<?php echo $row['image']; ?>" width="250" height="200">
                                <h4 class="text-center">
                                    <a href="?page=discount_offer.php&sp=company_offer_single.php&row_id=<?php echo $row['id']; ?>&c_name=<?php echo $row['company_name']; ?>"><?php echo $row['company_name']; ?></a>
                                </h4>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            </div>
        </div>

    </div>

</div>