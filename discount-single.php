<div class="row">
    <?php
    $id= $_GET['row_id'];
    //*echo $id;
    $card_details = $obj->discount_show_edit($id);
    $row = mysqli_fetch_array($card_details)
    ?>

    <div class="col-md-9">
        <h2 class="single-title" STYLE="color: #C73834;">Discount Card Name:- <?php   echo $row['title'] ; ?></h2>
        <img src="discountcard/<?php echo $row['card']; ?>" class="img-responsive img-thumbnail" width="500" height="300">
        <h2>This is some Information of Discount Card</h2>
        <ul>
            <li><h2><?php   echo $row['feature1'] ; ?></h2></li>
            <li><h2><?php   echo $row['feature2'] ; ?></h2></li>
<!--            <li><?php /*  echo $row['feature3'] ; */?></li>
            <li><?php /*  echo $row['feature4'] ; */?></li>
            <li><?php /*  echo $row['feature5'] ; */?></li>-->

        </ul>

    </div>
    <div class="col-md-3">
        <h2 class="single-title">Price</h2>
        <div class="row price-bar">
            <div class="col-md-12">
                <h3>BDT <?php   echo $row['price'] ; ?> /=</h3>
              <a href="?page=buy_product.php&row_id=<?php echo $row['id']; ?>&card_title=<?php echo $row['title']; ?>"><button type="button" class="btn btn-success">Buy discount Card</button></a>

            </div>
        </div>
    </div>
</div>