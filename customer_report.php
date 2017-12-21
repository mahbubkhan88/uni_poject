<div style="margin-top: 75px;">
<div class="well">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php
            $id =  $_SESSION['user_id'];
            $user_info = $obj->user_profile_show($id);
            $row = mysqli_fetch_array($user_info);
            ?>
            <div class="col-md-12">
                <div style="background:#3D7979;font-size:14px;color:white;min-height:40px;border-radius:5px 5px 0px 0px;" class="col-sm-12">
                    <div style="margin-top:8px;" class="panel-header col-sm-2">Basic Profile</div>
                    <div class="panel-header col-sm-2 text-left"><a style="margin-top:5px;margin-right:-14px;" class="btn btn-success btn-sm" href=""><i class="glyphicon glyphicon-edit "> <font style="font-family:tahoma">Edit</font></i></a></div>
                    <?php
                    if(isset($_POST['Search'])){
                        $card_info = $obj->card_search_id($_POST['cardid']);
                        if(mysqli_num_rows($card_info)>0){
                            $row = mysqli_fetch_array($card_info);
                            $_SESSION['card_id'] = $row['card_id'];
                            echo"<script>window.location.href='?page=customer_report.php&rp=show_discount_id_product.php'</script>";
                        }
                    }

                    ?>
                    <form action="" method="post">
                    <div class="form-group col-sm-4 text-right search_box">
                        <input type="text" class="form-control  " id="cardid" name="cardid" placeholder="Discount Card ID">
                    </div>
                        <div class="panel-header col-sm-1 text-left" style="margin-top:3px;"><input  type="submit" class="btn btn-success " id="" name="Search" value="Search"></div>
                    </form>
                    <div class="panel-header col-sm-3 text-right"><a style="margin-top:5px;margin-right:-14px;" class="btn btn-success btn-sm" href="logout.php"><i class="glyphicon glyphicon-log-out "> <font style="font-family:tahoma">Logout</font></i></a></div>
                </div>

                <div class="row">

                    <div style="margin-top:30px;font-size:12px;" class="col-sm-9">

                        <div class="form-group">
                            <label class="control-label col-sm-4">Discount Card ID:</label>
                            <div  class="col-sm-8">
                                <?php
                                  $dis_card_id = $obj->show_my_discard_id($id);
                                    while($card_id=mysqli_fetch_array($dis_card_id)){
                                ?>
                                <span class="card_show"><?php echo $card_id['card_id']; ?></span>
                                <?php } ?>
                            </div>
                        </div>

                        <div style="border-bottom:1px solid #eee;margin:8px;" class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Name:</label>
                            <div  class="col-sm-8"><?php echo $row['name']; ?></div>
                        </div>


                        <div style="border-bottom:1px solid #eee;margin:8px;" class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Email:</label>
                            <div  class="col-sm-8"><?php echo $row['email']; ?></div>
                        </div>
                        <div style="border-bottom:1px solid #eee;margin:8px;" class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Address:</label>
                            <div  class="col-sm-8"><?php echo $row['address']; ?></div>
                        </div>
                        <div style="border-bottom:1px solid #eee;margin:8px;" class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Contact Number:</label>
                            <div  class="col-sm-8"><?php echo $row['contact_no']; ?></div>
                        </div>
                        <div style="border-bottom:1px solid #eee;margin:8px;" class="clearfix"></div>
                    </div>
                    <div style="margin-top:20px;" class="col-sm-3">
                        <div class="col-sm-12 divbutton">
                            <img style="float:right;width:132px;height:139px;" class="img-square" src="img_custo/<?php echo $row['image']; ?>" width="100" height="100">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <?php
                if(!empty($_GET['rp'])){
                    include_once $_GET['rp'];
                }
                ?>
            </div>
        </div>
    </div>







