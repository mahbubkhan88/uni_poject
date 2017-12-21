
<div class="row">
    <div class="col-md-4">   </div>
    <div class="col-md-3">
        <h1></h1>

        <?php
        if(isset($_POST['Search'])){
            $card_info = $obj->card_search_id($_POST['cardid']);
            if(mysqli_num_rows($card_info)>0){
                $row = mysqli_fetch_array($card_info);
                $_SESSION['card_id'] = $row['card_id'];
                echo"<script>window.location.href='?page=search_discount_id.php&md=show_discount_id_product.php'</script>";
            }
        }

        ?>

        <form action="" method="post">
            <div class="form-group">
                <!--<label for="cardid" style="color: red;">Discout Card ID</label>-->
                <input type="text" class="form-control" id="cardid" name="cardid" placeholder="Please Type Discount Card Id">
            </div>

            <input type="submit" class="btn btn-primary" id="" name="Search" value="Search">
        </form>
    </div>

</div>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <?php
                if(!empty($_GET['md'])){
                    include_once $_GET['md'];
                }
                ?>
            </div>
        </div>
    </div>
