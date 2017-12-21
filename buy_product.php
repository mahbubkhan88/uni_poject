<div style="margin-top: 91px;" class="well">
    <div class="row">
        <div class="col-md-2"></div>

        <div style="border-right: 1px solid green" class="span12 col-md-5">
            <h1>I have an account</h1>
            <?php
            $card_title= $_GET['card_title'];
            $card_id= $_GET['row_id'];
            if(isset($_POST['signin'])){
                $custommer_info = $obj->customer_login($_POST['emailid'],$_POST['Password']);
                if(mysqli_num_rows($custommer_info)>0){
                    $row = mysqli_fetch_array($custommer_info);
                    $_SESSION['user_id'] = $row['id'];
                    echo"<script>window.location.href='?page=purcess_dis_card.php&row_id= $card_id&card_title= $card_title'</script>";
                }
            }

            ?>
            <form action="" method="post">
            <label>Email</label>
            <div class="form-group has-success">
                <input type="text" name="emailid" class="form-control">
            </div>
            <label>Password</label>
            <div class="form-group has-success">
                <input type="password" id="Password" name="Password" class="form-control">
            </div>
                <button type="submit" class="btn btn-primary" name="signin">Submit</button>
            </form>
        </div>

        <div class="col-md-3">
            <h1>I'm a new customer</h1>
            <p>Welcome! Sign up and continue to Checkout</p>
            <a href="?page=buy_product2.php"><input type="button" class="btn btn-success" value="Sign Up"></a>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>