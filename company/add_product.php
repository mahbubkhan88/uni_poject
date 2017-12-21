<div class="row">

    <div class="col-md-2"></div>
    <div class="col-md-4">
        <h1>Add Product</h1>
        <?php
        $com_id=$_SESSION['id'];
         ?>

        <?php
        if(isset($_POST['save'])){

            $obj->product_insert($com_id,$_POST['ProductName'],$_POST['deteils'],$_POST['ProductPrice'],$_POST['purchasestime'],$_POST['Discount'],$_FILES['Image'] );
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="ProductName">Product Name</label>
                <input type="feature1" class="form-control" id="ProductName" name="ProductName" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label for="deteils">Product Deteils</label>
                <input type="feature1" class="form-control" id="deteils" name="deteils" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label for="ProductPrice">Product Price</label>
                <input type="feature1" class="form-control" id="ProductPrice" name="ProductPrice" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label for="purchasestime">Maxmimum Purchases</label>
                <input type="feature2" class="form-control" id="purchasestime" name="purchasestime" placeholder="Deteails">
            </div>
            <div class="form-group">
                <label for="Discount">Discount</label>
                <input type="feature2" class="form-control" id="Discount" name="Discount" placeholder="Deteails">
            </div>
            <div class="form-group">
                <label for="Image">Image</label>
                <p style="color: red;">Image Size Must Be 250X200 Pixel</p>
                <input type="file" id="Image" name="Image">
            </div>

            <input type="submit" class="btn btn-primary" id="" name="save" value="Submit">
        </form>
    </div>
    <div class="col-md-2"></div>
</div>