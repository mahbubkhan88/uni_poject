

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h1 class="single-title span12" style="border-bottom: 2px solid #999999" align="center">Please Sign Up (Company)</h1><br>

        <?php
        include_once "wub_php_class.php";
        $obj = new wub_php_class();
        ?>

        <?php
        if(isset($_POST['signup'])){

       $obj->company_info_insert($_POST['CompanyName'],$_POST['cate_id'],$_POST['Address'],$_POST['EmailId'],$_POST['PhoneNo'],$_POST['Password'],$_FILES['Image'] );
              }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="CompanyName">Company Name</label>
                <input type="text" class="form-control" id="CompanyName" name="CompanyName" placeholder="Enter Your Company Name"required>
            </div>
            <div class="form-group">
                <label>Selects Catagory Name</label>
                <select class="form-control" name="cate_id">
                    <option>---Select Category---</option>
                    <?php
                    $cat = $obj->category_show();
                    while($category = mysqli_fetch_array($cat)){
                        ?>
                        <option value="<?php echo $category['id']; ?>"required><?php echo $category['name']; ?></option>
                        <?php } ?>

                </select>
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Your Address"required>
            </div>
            <div class="form-group">
                <label for="EmailId">Email Address</label>
                <input type="text" class="form-control" id="EmailId" name="EmailId" placeholder="Enter Your Email Address"required>
            </div>
            <div class="form-group">
                <label for="PhoneNo">Phone Number</label>
                <input type="text" class="form-control" id="PhoneNo" name="PhoneNo" placeholder="Enter Your Phone Number"required>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" name="Password" placeholder="Enter Your Password"required>
            </div>
            <div class="form-group">
                <label for="Image">Image</label>
                <p style="color: red;">Image Size Must Be 250X200 Pixels</p>
                <input type="file" id="Image" name="Image">
            </div>

            <input type="submit" class="btn btn-primary" id="signup" name="signup" value="Sign Up">
        </form>
    </div>
    <div class="col-md-3"></div>
</div>
    </br>