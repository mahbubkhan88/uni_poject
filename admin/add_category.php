<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <h1>Add Category</h1>

        <?php
        include_once "../wub_php_class.php";
        $obj = new wub_php_class();
        ?>

        <?php
        if(isset($_POST['save'])){

            $obj->category_insert($_POST['CategoryName'] );
        }
        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="CategoryName" style="color: red;">Category Name</label>
                <input type="text" class="form-control" id="CategoryName" name="CategoryName" placeholder="Please Type Catgory Name">
            </div>

            <input type="submit" class="btn btn-primary" id="" name="save" value="Submit">
        </form>
    </div>
    <div class="col-md-2"></div>
</div>