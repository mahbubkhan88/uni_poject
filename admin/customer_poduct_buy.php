<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <h1>Customer Product Purchases</h1>


        <?php
        if(isset($_POST['save'])){

            $obj->customer_product_buy_dashboard($_POST['CardNo'],$_POST['comp_name'],$_POST['ProductName']);
        }
        ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="CardNo">Discount Card No </label>
                <input type="text" class="form-control" id="CardNo" name="CardNo" placeholder="Discount Card Id">
            </div>
            <div class="form-group">
                <label>Selects Company Nname</label>
                <select class="form-control" onchange="company_name()" name="comp_name" id="comp_name">
                    <option>---Select Company Name---</option>
                    <?php
                    $comp = $obj->data_show_allcompany();
                    while($company = mysqli_fetch_array($comp)){
                        ?>
                        <option value="<?php echo $company['id']; ?>"><?php echo $company['company_name']; ?></option>
                        <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Selects Product Name</label>
                <select class="form-control" name="ProductName" id="ProductName">

                </select>
            </div>
            <input type="submit" class="btn btn-primary" id="" name="save" value="Submit">
        </form>
    </div>
    <div class="col-md-2"></div>
</div>


