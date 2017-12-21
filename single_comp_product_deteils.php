<div class="row ">
    <?php
    $id= $_GET['row_id'];
    $p_name= $_GET['p_name'];
    //*echo $id;
    $p_details = $obj->sigle_product_show($id);
    ?>

    <div class="col-md-12">
        <div class="headline"><h1 class="text-success"> Product Name:<?php   echo $p_name ; ?></h1></div>
        <div class="row">
            <?php
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