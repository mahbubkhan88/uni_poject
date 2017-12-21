
<div class="row" style="margin-bottom:20px; margin-top: 75px;">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1 class="single-title span12 remove_margin" style="border-bottom: 2px solid #999999" align="center">Please Sign In (Customer)</h1>
    <?php
        if(isset($_POST['signin'])){
            $custommer_info = $obj->customer_login($_POST['emailid'],$_POST['Password']);
            if(mysqli_num_rows($custommer_info)>0){
                $row = mysqli_fetch_array($custommer_info);
                $_SESSION['user_id'] = $row['id'];
                echo"<script>window.location.href='?page=customer_report.php'</script>";
            }
        }

        ?>
        <form action="" method="post">
             <div class="form-group">
                <label for="EmailAddress">Email Address</label>
                <input type="text" class="form-control" id="EmailAddress" name="emailid"  placeholder="Enter Your Email Address" required>
            </div>
            <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" class="form-control" id="InputPassword" name="Password" placeholder="Enter Your Password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="signin">Log In</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div >
