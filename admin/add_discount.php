<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h1>Add Discount Card</h1>
        <?php
        include_once "../wub_php_class.php";
        $obj = new wub_php_class();
        ?>
        <?php
        if(isset($_POST['Submit'])){

            $obj->dicountcard_insert($_POST['Title'],$_POST['Feature1'],$_POST['Feature2'],$_POST['Feature3'],$_POST['Feature4'],$_POST['Feature5'],$_POST['Price'],$_FILES['Image'] );
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" class="form-control" id="Title" name="Title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="Feature1">Feature</label>
                <input type="text" class="form-control" id="Feature1" name="Feature1" placeholder="Feature 1">
            </div>
            <div class="form-group">
                <label for="Feature2">Feature</label>
                <input type="text" class="form-control" id="Feature2" name="Feature2" placeholder="Feature 1">
            </div>
            <div class="form-group">
                <label for="Feature3">Feature</label>
                <input type="text" class="form-control" id="Feature3" name="Feature3" placeholder="Feature 1">
            </div>
            <div class="form-group">
                <label for="Feature4">Feature</label>
                <input type="text" class="form-control" id="Feature4" name="Feature4" placeholder="Feature 1">
            </div>
            <div class="form-group">
                <label for="Feature5">Feature</label>
                <input type="text" class="form-control" id="Feature5" name="Feature5" placeholder="Feature 1">
            </div>
            <div class="form-group">
                <label for="Price">Price (BDT)</label>
                <input type="text" class="form-control" id="Price" name="Price" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="Image">Image Input</label>
                <input type="file" id="Image" name="Image">
            </div>
            <input type="submit" class="btn btn-primary" id="" name="Submit" value="Submit">
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
    </br>