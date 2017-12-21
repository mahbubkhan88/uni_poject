<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <h1>Customer Product Purchases</h1>
            <?php
        $com_name=$_SESSION['company_name'];
        $com_id=$_SESSION['id'];
                ?>

        <?php
        if(isset($_POST['save'])){

            $obj->customer_product_buy($com_id,$_POST['CardNo'],$com_name,$_POST['ProductName']);
        }
        ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="CardNo">Discount Card No </label>
                <input type="text" class="form-control" id="CardNo" name="CardNo" placeholder="Discount Card Id">
            </div>
            <div class="form-group">
                <label>Selects Product Name</label>
                <select class="form-control" name="ProductName">
                    <option>---Select Product Name---</option>
                    <?php
                    $com_id=$_SESSION['id'];
                    $prod = $obj->data_show_allproduct($com_id);
                    while($product = mysqli_fetch_array($prod)){
                        ?>
                        <option value="<?php echo $product['prod_name']; ?>"><?php echo $product['prod_name']; ?></option>
                        <?php } ?>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" id="" name="save" value="Submit">
        </form>
    </div>
    <div class="col-md-2"></div>
</div>