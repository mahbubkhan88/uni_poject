<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h1 class="single-title span12" style="border-bottom: 2px solid #999999" align="">Payment Method </h1><br>

        <?php
         $custo_id =  $_SESSION['user_id'];
        $card_row= $_GET['row_id'];
/*        $card_title= $_GET['card_title'];*/
        ?>
        <?php
        $card_name= $_GET['card_title'];
        if ($card_name = "Diamond") {
            $card_title = "DM-00000";
        } elseif ($card_name = "Gold") {
            $card_title = "GD-00000";
        } elseif ($card_name = "Silver") {
            $card_title = "SL-00000";
        }
        ?>

        <?php
        if(isset($_POST['signup'])){

            $obj->discount_card_purches($custo_id,$card_row,$card_title,$_POST['Price'] );
        }
        ?>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="Price">Price</label>
                <input type="text" class="form-control" id="Price" name="Price" placeholder="Enter Your Price">
            </div>

            <input type="submit" class="btn btn-primary" id="signup" name="signup" value="Summit">
        </form>
    </div>
    <div class="col-md-3"></div>
</div>
</br>