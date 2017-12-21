<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h1>Update Discount Card</h1>

        <?php
        include_once "../wub_php_class.php";
        $obj = new wub_php_class();
        $row_id = $_GET['row_id'];
        $edit_data = $obj->discount_show_edit($row_id);
        $row = mysqli_fetch_array($edit_data);
        ?>

        <?php
        if(isset($_POST['update'])){
            $obj->dicountcard_update($row_id,$_POST['Title'],$_POST['Feature1'],$_POST['Feature2'],$_POST['Feature3'],$_POST['Feature4'],$_POST['Feature5'],$_POST['Price'],$_FILES['Image']);
        }

        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Title" style="color: red;">Title</label>
                <input type="text" class="form-control" id="Title" name="Title" value="<?php echo $row['title']; ?>">
            </div>
            <div class="form-group">
                <label for="Feature1" style="color: red;">Feature-1</label>
                <input type="text" class="form-control" id="Feature1" name="Feature1" value="<?php echo $row['feature1']; ?>">
            </div>
            <div class="form-group">
                <label for="Feature2" style="color: red;">Feature-2</label>
                <input type="text" class="form-control" id="Feature2" name="Feature2" value="<?php echo $row['feature2']; ?>">
            </div>
            <div class="form-group">
                <label for="Feature3" style="color: red;">Feature-3</label>
                <input type="text" class="form-control" id="Feature3" name="Feature3" value="<?php echo $row['feature3']; ?>">
            </div>
            <div class="form-group">
                <label for="Feature4" style="color: red;">Feature-4</label>
                <input type="text" class="form-control" id="Feature4" name="Feature4" value="<?php echo $row['feature4']; ?>">
            </div>
            <div class="form-group">
                <label for="Feature5" style="color: red;">Feature-5</label>
                <input type="text" class="form-control" id="Feature5" name="Feature5" value="<?php echo $row['feature5']; ?>">
            </div>
            <div class="form-group">
                <label for="Price" style="color: red;">Price</label>
                <input type="text" class="form-control" id="Price" name="Price" value="<?php echo $row['price']; ?>">
            </div>
            <div class="form-group">
                <label for="Image" style="color: red;">Image</label>
                <input type="file" id="Image" name="Image" value="<?php echo $row['card']; ?>">
             </div>
            <input type="hidden" value="<?php echo $row['card']; ?>" name="curr_image">

            <input type="submit" class="btn btn-primary" id="" name="update" value="Update">
        </form>
    </div>
    <div class="col-md-4"></div>
</div>