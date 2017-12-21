<div class="headline"><h1 class="text-success">All Offer</h1></div>
<div class="row">
    <div class="col-sm-12 col-sm-12">

        <?php
        $ret_data = $obj->data_show_allcompany();
        while ($row = mysqli_fetch_array($ret_data)) {
            ?>
            <div class="col-md-4 col-sm-4">
                <div class="thumbnail">
                    <img class="img-responsive  " src="img_comp/<?php echo $row['image']; ?>" width="250px"
                         height="200px">
                    <h4 class="text-center">
                    <a href="?page=discount_offer.php&sp=company_offer_single.php&row_id=<?php echo $row['id']; ?>&c_name=<?php echo $row['company_name']; ?>"><?php echo $row['company_name']; ?></a>
                    </h4>
                </div>
            </div>
            <?php } ?>
    </div>
</div>