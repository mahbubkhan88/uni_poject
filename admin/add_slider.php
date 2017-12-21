<?php
include_once"../wub_php_class.php";
$obj = new wub_php_class();
?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1>Add Slider</h1>
        <p>Image Size Must Be 1000X320 Pixels</p>
        <?php
        if(isset($_POST['submitBtn'])){
            $obj->slider_insert($_FILES['imageText']);
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="imageText">Image Input</label>
                <input type="file" id="imageText" name="imageText">
            </div>
            <button type="submit" class="btn btn-primary" name="submitBtn">Submit</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>