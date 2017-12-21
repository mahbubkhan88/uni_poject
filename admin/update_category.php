<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <h1>Update Category</h1>

        <?php
        include_once "../wub_php_class.php";
        $obj = new wub_php_class();
        $row_id = $_GET['row_id'];
        $edit_data = $obj->category_show_edit($row_id);
        $row = mysqli_fetch_array($edit_data);
        ?>

        <?php
        if(isset($_POST['update'])){
            $obj->category_update($row_id,$_POST['CategoryName']);
        }

        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="CategoryName" style="color: red;">Category Name</label>
                <input type="text" class="form-control" id="CategoryName" name="CategoryName" value="<?php echo $row['name']; ?>">
            </div>

            <input type="submit" class="btn btn-primary" id="" name="update" value="Update">
        </form>
    </div>
    <div class="col-md-2"></div>
</div>