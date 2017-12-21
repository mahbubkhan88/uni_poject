<div class="row ">
    <?php
    $id= $_GET['row_id'];
    $c_name= $_GET['c_name'];
    //*echo $id;
    $p_details = $obj->product_all_info($id);
    ?>

    <div class="col-md-12">
        <div class="headline"><h1 class="text-success">  <?php   echo $c_name ; ?></h1></div>
        <div class="row">


            <div class="col-sm-12 col-sm-12">

                <?php
                while ($row = mysqli_fetch_array($p_details)) {
                    ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <img class="img-responsive  " src="img_product/<?php echo $row['image']; ?>" width="250px"  height="200px">
                            <h4 class="text-center">

                                <!--<a href="?page=discount_offer.php&sp=single_comp_product_deteils.php&row_id=<?php /*echo $row['id']; */?>&p_name=<?php /*echo $row['p_name']; */?>"><?php //echo $row['p_name']; ?></a> -->
                                <a data-toggle="modal" data-target="#myModal" href=""><?php echo $row['p_name']; ?></a>
                            </h4>
                            <p class="text-center"><?php echo $row['discount']; ?></p>
                        </div>
                    </div>
                    <?php } ?>
            </div>


        </div>
    </div>

</div>

<!--Modal-->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="headline"><h1 class="text-success"> Product Name:<?php   echo $p_name ; ?></h1></div>
                    <div class="row">

                        <?php

                        $p_details = $obj->sigle_product_show($id);

                        while ($row = mysqli_fetch_array($p_details)) {
                            ?>

                            <div class="col-sm-8 col-sm-8">


                                <h1>
                                    <p style="color: #0080BC">Deal Highlights</p>
                                    <ul>
                                        <li><?php   echo $row['deteils'] ; ?></li>
                                        <li><?php   echo $row['price'] ; ?> /=</li>
                                        <li><?php   echo $row['max_purchases'] ; ?></li>
                                        <li><?php   echo $row['discount'] ; ?></li>

                                    </ul>
                                </h1>
                            </div>
                            <div class="col-sm-4 col-sm-4">

                                <div class="thumbnail">
                                    <img class="img-responsive  " src="img_product/<?php echo $row['image']; ?>" width="350px"  height="250px">
                                </div>


                            </div>
                            <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>