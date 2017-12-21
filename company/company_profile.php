<?php
$com_id=$_SESSION['id'];
$company_info = $obj->company_profile_show($com_id);
$row = mysqli_fetch_array($company_info);
?>
    <div class="row" style="margin-top: 75px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">

                <div style="background:#3D7979;font-size:14px;color:white;min-height:40px;border-radius:5px 5px 0px 0px;" class="col-sm-12">
                    <div style="margin-top:8px;" class="panel-header col-sm-6">Basic Profile</div>
                    <div class="panel-header col-sm-6 text-right"><a style="margin-top:5px;margin-right:-14px;" class="btn btn-success btn-sm" href=""><i class="glyphicon glyphicon-edit "> <font style="font-family:tahoma">Edit</font></i></a></div>
                </div>

                <div class="row">
                    <div style="margin-top:30px;font-size:12px;" class="col-sm-9">
                        <div class="form-group">
                            <label class="control-label col-sm-4">Company ID:</label>
                            <div  class="col-sm-8"><?php echo $row['id']; ?></div>
                        </div>
                        <div style="border-bottom:1px solid #eee;margin:8px;" class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Category ID:</label>
                            <div  class="col-sm-8"><?php echo $row['cat_id']; ?></div>
                        </div>
                        <div style="border-bottom:1px solid #eee;margin:8px;" class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Company Name:</label>
                            <div  class="col-sm-8"><?php echo $row['company_name']; ?></div>
                        </div>
                        <div style="border-bottom:1px solid #eee;margin:8px;" class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Address:</label>
                            <div  class="col-sm-8"><?php echo $row['address']; ?></div>
                        </div>
                        <div style="border-bottom:1px solid #eee;margin:8px;" class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Email:</label>
                            <div  class="col-sm-8"><?php echo $row['email']; ?></div>
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
                            <img style="float:right;width:132px;height:139px;" class="img-square" src="img_comp/<?php echo $row['image']; ?>" width="100" height="100">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
        </div>
        <div class="col-md-1"></div>
    </div>









